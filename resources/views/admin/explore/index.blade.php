@extends('layouts.admin')
@section('title')
Explore
@endsection
@section('breadcumbs')
Explore /
@endsection
@section('content')
<div class="card card-body">
    <h4>Explore</h4>
    <div class="d-flex justify-content-end">
        <a href="{{ route('explores.create') }}" class="btn btn-primary btn-sm">Create</a>
    </div>
    <hr>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="table-responsive">
        <table id="example" class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Desc</th>
                    <th>Aksi</th>
                    <th>Detail</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($data as $explore)
                <tr>
                    <td rowspan="{{ count($explore->detail) + 1 }}" style="width: 7%;">{{ $no++ }}</td>
                    <td rowspan="{{ count($explore->detail) + 1 }}" style="width: 20%;">{{ $explore->ttle }}</td>
                    <td rowspan="{{ count($explore->detail) + 1 }}" style="width: 35%;">{!! nl2br($explore->description) !!}</td>
                    <td rowspan="{{ count($explore->detail) + 1 }}" style="width: 15%;"><a href="{{ route('explore.create-detail-explore', [$explore->id]) }}" title="Add detail" class="btn btn-success btn-sm"><i class="bx bx-plus"></i></a>
                        <a href="{{ route('explores.edit', [$explore->id]) }}" title="Edit" class="btn btn-primary btn-sm"><i class="bx bx-pen"></i></a>
                        <form class="d-inline" action="{{ route('explores.destroy', [$explore->id]) }}" method="post" onsubmit="return confirm('Are you sure want to remove this data?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></button>
                        </form>
                    </td>
                    @foreach ($explore->detail as $exploreDetail)
                <tr>
                    <td style="width: 20%;">
                        <b>{{ $exploreDetail->title }} </b><br>
                        <hr>
                        {{ $exploreDetail->description_id }} <br>
                        <hr>
                        {{ $exploreDetail->description_en }} <br>

                        <div class="card accordion-item">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo{{ $exploreDetail->id }}" aria-expanded="false" aria-controls="accordionTwo{{ $exploreDetail->id }}">
                                    Show images
                                </button>
                            <div id="accordionTwo{{ $exploreDetail->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @foreach ($exploreDetail->images as $img)
                                    <img src="{{ asset('storage/' . $img->image) }}" alt="" class="img-fluid mb-1" width="300"> <br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </td>
                    <td style="width: 3%;">
                        <form class="d-inline" action="{{ route('explore.destroy-detail-explore', [$exploreDetail->id]) }}" onsubmit="return confirm('Yakin ingin menhapus data {{ $exploreDetail->title }}?')" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link"><i class="bx bx-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection