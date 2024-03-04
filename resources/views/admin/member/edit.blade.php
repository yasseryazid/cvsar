@extends('layouts.admin')
@section('title')
  Edit
@endsection
@section('breadcumbs')
  Members /
@endsection
@section('content')
  <div class="card card-body">
    <h4>Edit</h4>
    <form action="{{ route('members.update', [$data->id]) }}" onsubmit="Are you sure want to update this data?"
      method="post">
      @csrf
      @method('PUT')
      <div class="form-group pt-2">
        <label for="medical_record_number">Medical Record Number</label>
        <input type="text" name="medical_record_number" id="medical_record_number" class="form-control @error('medical_record_number') is-invalid @enderror"
          value="{{ $data->medical_record_number }}">
        @error('medical_record_number')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group pt-2">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
          value="{{ $data->name }}">
        @error('name')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group pt-2">
        <label for="date_of_birth">Date of Birth</label>
        <div class="input-group">
          <input type="date" name="date_of_birth" id="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror"
            value="{{ $data->date_of_birth }}">
        </div>
        @error('date_of_birth')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group pt-2">
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror"
          value="{{ $data->phone_number }}">
        @error('phone_number')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group pt-2">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror"
          value="{{ $data->address }}">
        @error('address')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group pt-2">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-select @error('gender') is-invalid @enderror">
          <option value="male" @if(old('gender', $data->gender) === 'male') 'selected' @endif>Male</option>
          <option value="female" @if(old('gender', $data->gender) === 'female') 'selected' @endif>Female</option>
        </select>
        @error('gender')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="d-flex justify-content-end pt-2">
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      </div>
    </form>
  </div>
@endsection
