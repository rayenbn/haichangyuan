@extends('layouts.admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3 class="box-title">About-us Page</h3>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                    @if($aboutus)
                    <form action="{{ route("admin.aboutus.update", [$aboutus->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @else
                        <form action="{{ route("admin.aboutus.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @endif
                            @if(isset($aboutus->banner_image))
                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <img src="/storage/images/banners/{{ $aboutus->banner_image ?? '' }}" width="100%" style="max-height: 300px;" />
                                </div>
                            </div>
                            @endif
                            <!-- page banner -->
                            <div class="form-group row">
                                <label for="banner_image" class="col-md-2 col-form-label ">{{ trans('global.aboutus.fields.banner') }}</label>
                                <div class="col-md-10">
                                    <div class="input-group">

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="banner_image" name="banner_image">
                                            <label class="custom-file-label" for="banner_image">{{ trans('global.choose_file') }}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="banner_image">{{ trans('global.upload') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                        @if(isset($aboutus->image1))
                                        <div class="form-group row ">
                                            <div class="col-md-12">
                                                <img src="/storage/images/banners/{{ $aboutus->image1 ?? '' }}" width="150px" />
                                            </div>
                                        </div>
                                        @endif
                                        <div class="form-group row pr-2">
                                            <label for="image1">{{ trans('global.aboutus.fields.image') }} 1</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image1" name="image1">
                                                    <label class="custom-file-label" for="image1">{{ trans('global.choose_file') }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="image1">{{ trans('global.upload') }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        @if(isset($aboutus->image2))
                                        <div class="form-group row ">
                                            <div class="col-md-12">
                                                <img src="/storage/images/banners/{{ $aboutus->image2 ?? '' }}" width="150px" />
                                            </div>
                                        </div>
                                        @endif
                                        <div class="form-group row pr-2">
                                            <label for="image2">{{ trans('global.aboutus.fields.image') }} 2</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image2" name="image2">
                                                    <label class="custom-file-label" for="image2">{{ trans('global.choose_file') }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="image2">{{ trans('global.upload') }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        @if(isset($aboutus->image3))
                                        <div class="form-group row ">
                                            <div class="col-md-12">
                                                <img src="/storage/images/banners/{{ $aboutus->image3 ?? '' }}" width="150px" />
                                            </div>
                                        </div>
                                        @endif
                                        <div class="form-group row pr-2">
                                            <label for="image3">{{ trans('global.aboutus.fields.image') }} 3</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image3" name="image3">
                                                    <label class="custom-file-label" for="image3">{{ trans('global.choose_file') }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="image3">{{ trans('global.upload') }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        @if(isset($aboutus->image4))
                                        <div class="form-group row ">
                                            <div class="col-md-12">
                                                <img src="/storage/images/banners/{{ $aboutus->image4 ?? '' }}" width="150px" />
                                            </div>
                                        </div>
                                        @endif
                                        <div class="form-group row pr-2">
                                            <label for="image4">{{ trans('global.aboutus.fields.image') }} 4</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image4" name="image4">
                                                    <label class="custom-file-label" for="image4">{{ trans('global.choose_file') }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="image4">{{ trans('global.upload') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                </div>

                                <div class="col-md-6">
                                    <!-- title  -->
                                    <div class="form-group  {{ $errors->has('title') ? 'has-error' : '' }}">
                                        <label for="title">Banner {{ trans('global.aboutus.fields.title') }}</label>

                                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($aboutus) ? $aboutus->title : '') }}" placeholder="Banner title" required>
                                        @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- desc -->
                                    <div class="form-group {{ $errors->has('desc') ? 'has-error' : '' }}">
                                        <label for="desc">Short {{ trans('global.aboutus.fields.description') }}</label>
                                        <textarea id="desc" name="desc" class="form-control ">{{ old('desc', isset($aboutus) ? $aboutus->desc : '') }}</textarea>
                                        @if($errors->has('desc'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('desc') }}
                                        </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.aboutus.fields.description_helper') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <!-- desc -->
                                <div class="form-group col-12 {{ $errors->has('desc1') ? 'has-error' : '' }}">
                                        <label for="desc1">Long {{ trans('global.aboutus.fields.description') }}</label>
                                        <textarea id="desc1" name="desc1" class="form-control ">{{ old('desc1', isset($aboutus) ? $aboutus->desc1 : '') }}</textarea>
                                        @if($errors->has('desc1'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('desc1') }}
                                        </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.aboutus.fields.description_helper') }}
                                        </p>
                                    </div>

                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-2 offset-md-10">
                                    <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</section>
@endsection