<?php

namespace App\Http\Controllers;

use App\Models\MedicalCheckupDocument;
use Illuminate\Http\Request;
use App\Models\Member;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MemberController extends Controller
{
    public function index() 
    {
        return view('admin.member.index', [
            'data' => Member::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.member.create');
    }

    public function store(Request $request)
    {
        $members = new Member();
        if ($data = $members->isExists($request->medical_record_number)) {
            $members = $data;
        }

        $request->validate([
            'medical_record_number' => 'required',
            'name' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required|unique:members,phone_number,' . $members->id,
            'address' => 'required',
            'gender' => 'required'
        ]);

        try {
            DB::beginTransaction();
            $members->medical_record_number = $request->medical_record_number;
            $members->name = $request->name;
            $members->date_of_birth = $request->date_of_birth;
            $members->phone_number = $request->phone_number;
            $members->address = $request->address;
            $members->gender = $request->gender;
            $members->save();

            $documents = [];
            if ($request->hasfile('file')) {
                foreach ($request->file('file') as $data) {
                    $now = now();
                    $file = $data->store('medical_checkup/'.$members->medical_record_number, 'public');
                    $documents[] = [
                        'member_id' => $members->id,
                        'document' => $file,
                        'created_at' => $now,
                        'updated_at' => $now
                    ];
                }

                MedicalCheckupDocument::insert($documents);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return $e->getMessage();
            Log::debug('failed to save', [
                'error' => $e->getMessage() . ' in line ' . $e->getFile() . ' ' . $e->getLine()
            ]);
        }

        return redirect()->route('members.index')->with('status', 'Data successfully created');
    }

    public function edit($id)
    {
        return view('admin.member.edit', [
            'data' => Member::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $members = Member::find($id);
        $members->medical_record_number = $request->medical_record_number;
        $members->name = $request->name;
        $members->date_of_birth = $request->date_of_birth;
        $members->phone_number = $request->phone_number;
        $members->address = $request->address;
        $members->gender = $request->gender;
        $members->save();
        return redirect()->route('members.index')->with('status', 'Data successfully changed');
    }

    public function show($id)
    {
        $member = Member::find($id);
        $mcu = MedicalCheckupDocument::where('member_id', $member->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.member.show', [
            'member' => $member,
            'mcu' => $mcu
        ]);
    }

    public function destroy($id)
    {
        Member::find($id)->delete();

        return redirect()->route('members.index')->with('status', 'Data successfully removed');
    }

    public function detail($medicalRecordNumber)
    {
        return response()->json(
            Member::where('medical_record_number', $medicalRecordNumber)->first()
        );
    }

    public function addFile($id)
    {
        $doc = MedicalCheckupDocument::find($id);
        
        return view('admin.member.add-file', [
            'data' => $doc
        ]);
    }

    public function updateFile(Request $request, $id)
    {
        $doc = MedicalCheckupDocument::with('member')->find($id);

        if ($request->hasFile('file')) {
            if (file_exists(storage_path('app/public/' . $doc->document))) {
                unlink(storage_path('app/public/' . $doc->document));
            }

            $file = $request->file('file')->store('medical_checkup/'.$doc->member->medical_record_number, 'public');

            $doc->document = $file;
            $doc->save();
        }

        return redirect()->route('members.show', [$doc->member->id]);
    }

    public function destroyFile($id)
    {
        $data = MedicalCheckupDocument::with('member')->find($id);

        if ($data) {
            if (file_exists(storage_path('app/public/' . $data->document))) {
                unlink(storage_path('app/public/' . $data->document));
            }
            $data->delete();
        }
            
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $members = Member::where('name', 'like', '%' . $query . '%')
                         ->orWhere('medical_record_number', 'like', '%' . $query . '%')
                         ->orWhere('phone_number', 'like', '%' . $query . '%')
                         ->paginate(10);
    
        return view('admin.member.index', [
            'data' => $members,
            'searchQuery' => $query
        ]);
    }

    public function medicalCheckup(Request $request)
    {
        $data = null;
        $keyword = $request->keyword;

        if ($request->keyword) {
            $data = Member::with(['documents' => function($query) {
                    return $query->orderBy('created_at', 'desc');    
                }])
                ->where('date_of_birth', $request->date_of_birth)
                ->where(function ($query) use ($keyword) {
                    return $query->orWhere('medical_record_number', $keyword)
                        ->orWhere('phone_number', $keyword);
                })
                
                ->first();

            if (! $data) {
                return redirect()->route('medical-checkup.index')
                ->withErrors([ 
                    'data_not_found' => "Data dengan Nomor MCU/No Telp: {$keyword}
                        Tgl lahir: {$request->date_of_birth} tidak ditemukan"
                ])->withInput($request->all());
            }
        }

        return view('users.medical-checkup.index', [
            'data' => $data,
            'keyword' => $keyword
        ]);
    }

    public function uploadFile($id)
    {
        $member = Member::find($id);
        
        return view('admin.member.upload-files', [
            'data' => $member
        ]);
    }

    public function insertFile(Request $request, $id)
    {
        $member = Member::find($id);

        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $data){
                $file = $data->store('medical_checkup/'.$member->medical_record_number, 'public');
                $doc = new MedicalCheckupDocument();
                $doc->document = $file;
                $doc->member_id = $member->id;
                $doc->save();
            }
        }

        return redirect()->route('members.show', [$id]);
    }
}
