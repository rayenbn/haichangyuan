@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                {{ trans('global.create') }} {{ trans('global.product.title_singular') }}
            </div>

            <div class="card-body">
                <form action="{{ route("admin.products.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="form-group col-sm-6 {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('global.product.fields.name') }}*</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($product) ? $product->name : '') }}">
                            @if($errors->has('name'))
                            <em class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.product.fields.name_helper') }}
                            </p>
                        </div>
                        <div class="form-group col-sm-6 {{ $errors->has('chinese_name') ? 'has-error' : '' }}">
                            <label for="chinese_name">{{ trans('global.product.fields.chinese_name') }}*</label>
                            <input type="text" id="chinese_name" name="chinese_name" class="form-control" value="{{ old('chinese_name', isset($product) ? $product->chinese_name : '') }}">
                            @if($errors->has('chinese_name'))
                            <em class="invalid-feedback">
                                {{ $errors->first('chinese_name') }}
                            </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.product.fields.chinese_name_helper') }}
                            </p>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-sm-6 {{ $errors->has('category') ? 'has-error' : '' }}">
                            <label>Category</label>
                            <select class="col-form-label select2" name="categories[]" multiple="multiple" data-placeholder="Select Category" style="width: 100%;">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                            <em class="invalid-feedback">
                                {{ $errors->first('category') }}
                            </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.product.fields.categories_helper') }}
                            </p>
                        </div>
                    </div>

<!-- here was color -->
                   <!-- price field  -->
                    <!-- <div class="row">
                        <div class="form-group col-sm-6{{ $errors->has('price') ? 'has-error' : '' }}">
                            <label for="price">{{ trans('global.product.fields.price') }}</label>
                            <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($product) ? $product->price : '') }}" step="0.01">
                            @if($errors->has('price'))
                            <em class="invalid-feedback">
                                {{ $errors->first('price') }}
                            </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.product.fields.price_helper') }}
                            </p>
                        </div>
                        <div class="form-group col-sm-6{{ $errors->has('price_range') ? 'has-error' : '' }}">
                            <label for="price_range">{{ trans('global.product.fields.price_range') }}</label>
                            <input type="number" id="price_range" name="price_range" class="form-control" value="{{ old('price_range', isset($product) ? $product->price_range : '') }}" step="0.01">
                            @if($errors->has('price_range'))
                            <em class="invalid-feedback">
                                {{ $errors->first('price_range') }}
                            </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.product.fields.price_range_helper') }}
                            </p>
                        </div>
                    </div> -->
                    <!-- end price field  -->
                    <div class="form-group row {{ $errors->has('img') ? 'has-error' : '' }}">
                        <label for="img" class="col-md-3 col-form-label ">{{ trans('global.product.fields.image') }}*</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img" name="img">
                                    <label class="custom-file-label" for="img">{{ trans('global.choose_file') }}</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="img">{{ trans('global.upload') }}</span>
                                </div>
                            </div>
                        </div>
                        @if($errors->has('img'))
                        <em class="invalid-feedback">
                            {{ $errors->first('img') }}
                        </em>
                        @endif
                        <p class="helper-block">
                            {{ trans('global.product.fields.image_helper') }}
                        </p>
                    </div>

                    <div class="form-group row {{ $errors->has('productImages') ? 'has-error' : '' }}">
                        <label for="productImages" class="col-md-3 col-form-label ">Upload Images</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="productImages[]" id="productImages" accept="image/*" multiple>
                                    <label class="custom-file-label" for="productImages">{{ trans('global.choose_file') }}</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="productImages">{{ trans('global.upload') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                        <label for="description">{{ trans('global.product.fields.description') }}</label>
                        <textarea id="description" name="description" class="form-control ">{{ old('description', isset($product) ? $product->description : '') }}</textarea>
                        @if($errors->has('description'))
                        <em class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </em>
                        @endif
                        <p class="helper-block">
                            {{ trans('global.product.fields.description_helper') }}
                        </p>
                    </div>

                    <div>
                        <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection