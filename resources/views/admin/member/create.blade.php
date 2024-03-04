@extends('layouts.admin')
@section('title')
  Create
@endsection
@section('breadcumbs')
  Members /
@endsection
@section('content')
  <div class="card card-body">
    <h4>Create</h4>
    <form action="{{ route('members.store') }}" onsubmit="Are you sure want to store this data?" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group pt-2">
        <label for="medical_record_number">Medical Record Number</label>
        <input type="text" name="medical_record_number" id="medical_record_number" class="form-control @error('medical_record_number') is-invalid @enderror"
          value="{{ old('medical_record_number') }}">
        @error('medical_record_number')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group pt-2">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
          value="{{ old('name') }}">
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
            value="{{ old('date_of_birth') }}">
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
          value="{{ old('phone_number') }}">
        @error('phone_number')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group pt-2">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror"
          value="{{ old('address') }}">
        @error('address')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group pt-2">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-select @error('address') is-invalid @enderror">
          <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
          <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
        </select>
        @error('gender')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group pt-3">
        <label for="">File</label>
        <input type="file" name="file[]" id="" class="form-control" multiple>
        <small class="form-text text-muted">*Select all files that you want to upload</small>
      </div>

      <div class="d-flex justify-content-end pt-2">
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      </div>
    </form>
  </div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
      $('#medical_record_number').on('keyup', function() {
        let e = $(this);
        $.ajax({
          url: '/members/' + e.val() + '/detail',
          type: 'GET',
          dataType: 'json',
          beforeSend: function() {
            $('#name').attr('disabled', true);
            $('#date_of_birth').attr('disabled', true);
            $('#phone_number').attr('disabled', true);
            $('#address').attr('disabled', true);
            $('#gender').attr('disabled', true);
          },
          success: function (data) {

            $('#name').removeAttr('disabled');
            $('#date_of_birth').removeAttr('disabled');
            $('#phone_number').removeAttr('disabled');
            $('#address').removeAttr('disabled');
            $('#gender').removeAttr('disabled');

            $('#name').val(data.name);
            $('#date_of_birth').val(data.date_of_birth);
            $('#phone_number').val(data.phone_number);
            $('#address').val(data.address);
            $('#gender').val(data.gender);
          }
        })
      })
    })
</script>
@endsection
