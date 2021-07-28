@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('global.category') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.category.update", [$category->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">{{ trans('global.product.fields.name') }}*</label>
                        <input type="text" id="category_name" name="category_name" class="form-control" value="{{ old('category_name', isset($category) ? $category->category_name : '') }}">
                        @if($errors->has('category_name'))
                            <em class="invalid-feedback">
                                {{ $errors->first('category_name') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ trans('global.category_name_helper') }}
                        </p>
                    </div>
                </div>

            </div>
            
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection