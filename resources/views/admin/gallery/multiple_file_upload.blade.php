@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <strong>Gallery</strong>
        <small>images uplod</small>
    </div>
    <div class="card-body">
        <br />
        <form method="post" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group row">
                <label class="col-md-4 col-form-label" for="title">Descripton</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="title" id="title" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label" for="type">Category<sup></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="type" id="type" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label" for="link">Link<sup></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="link" id="link"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label" for="position">Position<sup></label>
                <div class="col-md-8">
                    <input type="number" class="form-control" name="position" id="position"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label" for="file">Upload Image</label>
                <div class="col-md-6">
                    <input type="file" name="file" id="file" accept="image/*" />
                </div>
                <div>
                    <input class="btn btn-success" name="upload" type="submit" value="{{ trans('global.save') }}">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection