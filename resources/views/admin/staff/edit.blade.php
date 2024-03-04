@extends('layouts.admin')
@section('title')
    Create
@endsection
@section('breadcumbs')
    Staffs /
@endsection
@section('content')
    <div class="card card-body">
        <h4>Create</h4>
        <form action="{{ route('staffs.update', [$data->id]) }}" method="post" enctype="multipart/form-data"
            onsubmit="return confirm('Are you sure want to add this data?')">
            @csrf
            @method('PUT')
            <div class="form-group pt-2">
                <label for="">Fullname</label>
                <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Input fullname" value="{{ $data->name }}">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Job</label>
                <input type="text" name="job" id="" class="form-control @error('job') is-invalid @enderror"
                    placeholder="Input job" value="{{ $data->job }}">
                @error('job')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Facebook Account Url</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon14">https://facebook.com/</span>
                    <input type="text" name="facebook_account" id=""
                        class="form-control @error('facebook_account') is-invalid @enderror"
                        placeholder="Input facebook_account" value="{{ $data->facebook_account }}">
                </div>
                @error('facebook_account')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Twitter Account Url</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon14">https://twitter.com/</span>
                    <input type="text" name="twitter_account" id=""
                        class="form-control @error('twitter_account') is-invalid @enderror"
                        placeholder="Input twitter account url" value="{{ $data->twitter_account }}">
                </div>
                @error('twitter_account')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Instagram Account Url</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon14">https://instagram.com/</span>
                    <input type="text" name="instagram_account" id=""
                        class="form-control @error('instagram_account') is-invalid @enderror"
                        placeholder="Input instagram account url" value="{{ $data->instagram_account }}">
                </div>
                @error('instagram_account')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Photo</label><br>
                <img src="{{ asset('storage/' . $data->photo) }}" alt="photo" srcset="" class="img-fluid">
                <input type="file" name="photo" id="" class="form-control @error('photo') is-invalid @enderror"
                    value="{{ old('photo') }}">
                @error('photo')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex justify-content-end pt-2">
                <button type="submit" class="btn btn-primary btn-sm text-right">Submit</button>
            </div>
        </form>
    </div>
@endsection
