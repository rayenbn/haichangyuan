@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                {{ trans('global.edit') }} {{ trans('global.product.title_singular') }}
            </div>

            <div class="card-body">
                <form action="{{ route("admin.products.update", [$product->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                                <option value="{{$category->id}}" @foreach ($product->categories as $categori)
                                    @if ($categori->id == $category->id)
                                    selected
                                    @endif
                                    @endforeach
                                    >{{$category->category_name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                            <em class="invalid-feedback">
                                {{ $errors->first('category') }}
                            </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.product.fields.image_helper') }}
                            </p>
                        </div>
                    </div>


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
                        <div class="row">
                            @foreach ( $productImages as $image)
                            <div class="imagecontainer">
                                <img src="/storage/products/thumbnail/{{ $image->productImages }}" class="image" />
                                <div class="middle">
                                    <button type="button" name="deleteimage" data-image-id="{{$image->id}}" id="deleteimage" class="btn btn-danger"><i class="fa fa-trash" style="color: white"></i></button>
                                    <!-- <a href="#" id="deleteimage" data-image-id="{{$image->id}}" onclick="return confirm('{{ trans('global.areYouSure') }}');"> <i class="fa fa-trash" style="color: red"></i> </a> -->
                                </div>
                            </div>
                            @endforeach
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
@section('scripts')
@parent
<script>
    $(document).on('click', '#deleteimage', function() {
        var imageid = $(this).data('image-id');
        if (confirm("{{ trans('global.areYouSure') }}")) {
            $.ajax({
                headers: {
                    'x-csrf-token': _token
                },
                method: 'DELETE',
                url: "/admin/products/image/" + imageid,
            }).done(function() {
                location.reload()
            })
        }
    });
</script>
@endsection
@endsection