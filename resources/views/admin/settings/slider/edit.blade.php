@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} Slider
    </div>
    <div class="card-body">
        <form action="{{ route("admin.slider.update", [$slider->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group col-sm-6">
                <label for="picture">Image</label>
                <input id="picture" type="file" name="picture">
            </div>

            <div class="form-group col-sm-6 {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($slider) ? $slider->title : '') }}">
                @if($errors->has('title'))
                <em class="invalid-feedback">
                    {{ $errors->first('title') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group col-sm-6 {{ $errors->has('subtitle') ? 'has-error' : '' }}">
                <label for="subtitle">Title</label>
                <input type="text" id="subtitle" name="subtitle" class="form-control" value="{{ old('subtitle', isset($slider) ? $slider->subtitle : '') }}">
                @if($errors->has('subtitle'))
                <em class="invalid-feedback">
                    {{ $errors->first('subtitle') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group col-sm-6 {{ $errors->has('link') ? 'has-error' : '' }}">
                <label for="link">Button Link</label>
                <input type="text" id="link" name="link" class="form-control" value="{{ old('link', isset($slider) ? $slider->link : '') }}" placeholder="http://">
                @if($errors->has('link'))
                <em class="invalid-feedback">
                    {{ $errors->first('link') }}
                </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.name_helper') }}
                </p>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection