@extends('layouts.admin')
@section('title')
{{ $data->ttle }}
@endsection
@section('breadcumbs')
<a href="{{ route('explores.index') }}">Explore / </a>
Create
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card card-body">
            <h4>Create {{ $data->ttle }}</h4>
            <form action="{{ route('explore.store-detail-explore', [$data->id]) }}" method="post" enctype="multipart/form-data" onsubmit="return confirm('Are you sure want to add this data?')">
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" id="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" name="location" id="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Google Maps URL</label>
                    <input type="text" name="map_url" id="" class="form-control" required>
                </div>
                <div class="form-group pt-2">
                    <label for="">Description ID (Optional)</label>
                    <textarea name="description_id" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group pt-2">
                    <label for="">Description EN (Optional)</label>
                    <textarea name="description_en" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group pt-2">
                    <label for="">Gambar</label>
                    <div class="col-lg-12">
                        <div id="inputFormRow">
                            <div class="input-group mb-1">
                                <input type="file" name="images[]" class="form-control m-input" placeholder="Enter title" autocomplete="off" required>
                                <div class="input-group-append">
                                    <button id="removeRow" type="button" class="btn btn-danger"><i class="bx bx-trash"></i></button>
                                </div>
                            </div>
                        </div>

                        <div id="newRow"></div>
                        <button id="addRow" type="button" class="btn btn-info"><i class="bx bx-plus"></i></button>
                    </div>
                </div>
                <div class="d-flex justify-content-end pt-2">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $("#addRow").click(function() {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-1">';
        html +=
            '<input type="file" name="images[]" class="form-control m-input" placeholder="Enter title" autocomplete="off" required>';
        html += '<div class="input-group-append">';
        html +=
            '<button id="removeRow" type="button" class="btn btn-danger"><i class="bx bx-trash"></i></button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function() {
        $(this).closest('#inputFormRow').remove();
    });
</script>
@endsection