@extends('layouts.admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3 class="box-title">Home Page</h3>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                    @if($homepage)
                    <form action='{{ route("admin.home-page.update", [$homepage->id]) }}' method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @else
                        <form action="{{ route("admin.home-page.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @endif
                            <!-- section 1 products -->
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label  class="col-md-2 col-form-label ">First section</label>
                                        <div class="col-md-10 row">
                                            <label for="sec2_image" class="col-form-label ">Icon image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="sec1_img1" name="sec1_img1">
                                                    <label class="custom-file-label" for="sec1_img1">{{ trans('global.choose_file') }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="sec1_img1">{{ trans('global.upload') }}</span>
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec1_title1') ? 'has-error' : '' }}">
                                                <label for="sec1_title1">{{ trans('global.homepage.fields.title') }}</label>
                                                <input type="text" id="sec1_title1" name="sec1_title1" class="form-control" value="{{ old('sec1_title1', isset($homepage) ? $homepage->sec1_title1 : '') }}">
                                                @if($errors->has('sec1_title1'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec1_title1') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.title_helper') }}
                                                </p>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec1_desc1') ? 'has-error' : '' }}">
                                                <label for="sec1_desc1">{{ trans('global.homepage.fields.subtitle') }}</label>
                                                <input type="text" id="sec1_desc1" name="sec1_desc1" class="form-control" value="{{ old('sec1_desc1', isset($homepage) ? $homepage->sec1_desc1 : '') }}">
                                                @if($errors->has('sec1_desc1'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec1_desc1') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.subtitle_helper') }}
                                                </p>
                                            </div>
                                            
                                            </hr>

                                            <label for="sec1_img2" class="col-form-label ">Icon image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="sec1_img2" name="sec1_img2">
                                                    <label class="custom-file-label" for="sec1_img2">{{ trans('global.choose_file') }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="sec1_img2">{{ trans('global.upload') }}</span>
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec1_title2') ? 'has-error' : '' }}">
                                                <label for="sec1_title2">{{ trans('global.homepage.fields.title') }}</label>
                                                <input type="text" id="sec1_title2" name="sec1_title2" class="form-control" value="{{ old('sec1_title2', isset($homepage) ? $homepage->sec1_title2 : '') }}">
                                                @if($errors->has('sec1_title2'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec1_title2') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.title_helper') }}
                                                </p>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec1_desc2') ? 'has-error' : '' }}">
                                                <label for="sec1_desc2">{{ trans('global.homepage.fields.subtitle') }}</label>
                                                <input type="text" id="sec1_desc2" name="sec1_desc2" class="form-control" value="{{ old('sec1_desc2', isset($homepage) ? $homepage->sec1_desc2 : '') }}">
                                                @if($errors->has('sec1_desc2'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec1_desc2') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.subtitle_helper') }}
                                                </p>
                                            </div>

                                            </hr>

                                            <label for="sec1_img3" class="col-form-label ">Icon image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="sec1_img3" name="sec1_img3">
                                                    <label class="custom-file-label" for="sec1_img3">{{ trans('global.choose_file') }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="sec1_img3">{{ trans('global.upload') }}</span>
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec1_title3') ? 'has-error' : '' }}">
                                                <label for="sec1_title3">{{ trans('global.homepage.fields.title') }}</label>
                                                <input type="text" id="sec1_title3" name="sec1_title3" class="form-control" value="{{ old('sec1_title3', isset($homepage) ? $homepage->sec1_title3 : '') }}">
                                                @if($errors->has('sec1_title3'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec1_title3') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.title_helper') }}
                                                </p>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec1_desc3') ? 'has-error' : '' }}">
                                                <label for="sec1_desc3">{{ trans('global.homepage.fields.subtitle') }}</label>
                                                <input type="text" id="sec1_desc3" name="sec1_desc3" class="form-control" value="{{ old('sec1_desc3', isset($homepage) ? $homepage->sec1_desc3 : '') }}">
                                                @if($errors->has('sec1_desc3'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec1_desc3') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.subtitle_helper') }}
                                                </p>
                                            </div>
                                            </hr>
                                            <label for="sec1_img4" class="col-form-label ">Icon image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="sec1_img4" name="sec1_img4">
                                                    <label class="custom-file-label" for="sec1_img4">{{ trans('global.choose_file') }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="sec1_img4">{{ trans('global.upload') }}</span>
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec1_title4') ? 'has-error' : '' }}">
                                                <label for="sec1_title4">{{ trans('global.homepage.fields.title') }}</label>
                                                <input type="text" id="sec1_title4" name="sec1_title4" class="form-control" value="{{ old('sec1_title4', isset($homepage) ? $homepage->sec1_title4 : '') }}">
                                                @if($errors->has('sec1_title4'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec1_title4') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.title_helper') }}
                                                </p>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec1_desc4') ? 'has-error' : '' }}">
                                                <label for="sec1_desc4">{{ trans('global.homepage.fields.subtitle') }}</label>
                                                <input type="text" id="sec1_desc4" name="sec1_desc4" class="form-control" value="{{ old('sec1_desc4', isset($homepage) ? $homepage->sec1_desc4 : '') }}">
                                                @if($errors->has('sec1_desc4'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec1_desc4') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.subtitle_helper') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    @if(isset($homepage->sec1_img1))
                                    <div class="form-group row ">
                                        <div class="col-md-12">
                                                <img src="/storage/products/{{ $homepage->sec1_img1 ?? ''}}" width="100px" alt="">
                                        </div>
                                    </div>
                                    @endif
                                    @if(isset($homepage->sec1_img2))
                                    <div class="form-group row ">
                                        <div class="col-md-12">
                                                <img src="/storage/products/{{ $homepage->sec1_img2 ?? ''}}" width="100px" alt="">
                                        </div>
                                    </div>
                                    @endif
                                    @if(isset($homepage->sec1_img3))
                                    <div class="form-group row ">
                                        <div class="col-md-12">
                                                <img src="/storage/products/{{ $homepage->sec1_img3 ?? ''}}" width="100px" alt="">
                                        </div>
                                    </div>
                                    @endif
                                    @if(isset($homepage->sec1_img4))
                                    <div class="form-group row ">
                                        <div class="col-md-12">
                                                <img src="/storage/products/{{ $homepage->sec1_img4 ?? ''}}" width="100px" alt="">
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- section 1 end produnts -->
                            <hr>
                            <!-- section 2  produnts discount-->
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label  class="col-md-2 col-form-label ">Second section</label>
                                            <div class="col-md-10 row">
                                                <label for="sec2_image1" class="col-form-label ">Image 1 (300px * 340px)</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="sec2_image1" name="sec2_image1">
                                                        <label class="custom-file-label" for="sec2_image1">{{ trans('global.choose_file') }}</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="sec2_image1">{{ trans('global.upload') }}</span>
                                                    </div>
                                                </div>

                                                <label for="sec2_image2" class="col-form-label ">Image 2 (330px * 438px)</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="sec2_image2" name="sec2_image2">
                                                        <label class="custom-file-label" for="sec2_image2">{{ trans('global.choose_file') }}</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="sec2_image2">{{ trans('global.upload') }}</span>
                                                    </div>
                                                </div>

                                                <label for="sec2_image3" class="col-form-label ">Image 3 (300px * 237px)</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="sec2_image3" name="sec2_image3">
                                                        <label class="custom-file-label" for="sec2_image3">{{ trans('global.choose_file') }}</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="sec2_image3">{{ trans('global.upload') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group col-sm-6 {{ $errors->has('sec2_title') ? 'has-error' : '' }}">
                                                    <label for="sec2_title">{{ trans('global.homepage.fields.title') }}</label>
                                                    <input type="text" id="sec2_title" name="sec2_title" class="form-control" value="{{ old('sec2_title', isset($homepage) ? $homepage->sec2_title : '') }}">
                                                    @if($errors->has('sec2_title'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec2_title') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.title_helper') }}
                                                    </p>
                                                </div>

                                                <div class="form-group col-sm-6 {{ $errors->has('sec2_subtitle') ? 'has-error' : '' }}">
                                                    <label for="sec2_subtitle">{{ trans('global.homepage.fields.subtitle') }}</label>
                                                    <input type="text" id="sec2_subtitle" name="sec2_subtitle" class="form-control" value="{{ old('sec2_subtitle', isset($homepage) ? $homepage->sec2_subtitle : '') }}">
                                                    @if($errors->has('sec2_subtitle'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec2_subtitle') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.subtitle_helper') }}
                                                    </p>
                                                </div>

                                                <div class="form-group  col-sm-6 {{ $errors->has('sec2_link') ? 'has-error' : '' }}">
                                                    <label for="sec2_link" class="col-form-label ">{{ trans('global.homepage.fields.link') }}</label>
                                                    
                                                        <input type="text" id="sec2_link" name="sec2_link" class="form-control" value="{{ old('sec2_link', isset($homepage) ? $homepage->sec2_link : '') }}" placeholder="http://">
                                                        @if ($errors->has('sec2_link'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('sec2_link') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>

                                                <div class="form-group  col-sm-12 {{ $errors->has('sec2_desc') ? 'has-error' : '' }}">
                                                    <label for="sec2_desc">{{ trans('global.homepage.fields.description') }}</label>
                                                    <textarea id="sec2_desc" name="sec2_desc" class="form-control ">{{ old('sec2_desc', isset($homepage) ? $homepage->sec2_desc : '') }}</textarea>
                                                    @if($errors->has('sec2_desc'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec2_desc') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.description_helper') }}
                                                    </p>
                                                </div>
                                              
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    @if(isset($homepage->sec2_image1))
                                    <div class="form-group row ">
                                        <div class="col-md-12">
                                                <img src="/storage/products/{{ $homepage->sec2_image1 ?? ''}}" width="200px" alt="">
                                        </div>
                                    </div>
                                    @endif
                                    @if(isset($homepage->sec2_image2))
                                    <div class="form-group row ">
                                        <div class="col-md-12">
                                                <img src="/storage/products/{{ $homepage->sec2_image2 ?? ''}}" width="200px" alt="">
                                        </div>
                                    </div>
                                    @endif
                                    @if(isset($homepage->sec2_image3))
                                    <div class="form-group row ">
                                        <div class="col-md-12">
                                                <img src="/storage/products/{{ $homepage->sec2_image3 ?? ''}}" width="200px" alt="">
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- section 2 end produnts discount-->
                            <hr>
                            <!-- section 3 products -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="banner" class="col-md-2 col-form-label ">Third section</label>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <label  class="col-md-12 col-form-label ">Card 1</label>
                                                <div class="form-group col-sm-4 {{ $errors->has('sec3_title1') ? 'has-error' : '' }}">
                                                    <label for="sec3_title1">{{ trans('global.homepage.fields.title') }}</label>
                                                    <input type="text" id="sec3_title1" name="sec3_title1" class="form-control" value="{{ old('sec3_title1', isset($homepage) ? $homepage->sec3_title1 : '') }}">
                                                    @if($errors->has('sec3_title1'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec3_title1') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.title_helper') }}
                                                    </p>
                                                </div>
                                                <div class="form-group col-sm-4 {{ $errors->has('sec3_subtitle1') ? 'has-error' : '' }}">
                                                    <label for="sec3_subtitle1">{{ trans('global.homepage.fields.subtitle') }}</label>
                                                    <input type="text" id="sec3_subtitle1" name="sec3_subtitle1" class="form-control" value="{{ old('sec3_subtitle1', isset($homepage) ? $homepage->sec3_subtitle1 : '') }}">
                                                    @if($errors->has('sec3_subtitle1'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec3_subtitle1') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.title_helper') }}
                                                    </p>
                                                </div>
                                                <div class="form-group col-sm-4 {{ $errors->has('sec3_desc1') ? 'has-error' : '' }}">
                                                    <label for="sec3_desc1">{{ trans('global.homepage.fields.description') }}</label>
                                                    <input type="text" id="sec3_desc1" name="sec3_desc1" class="form-control" value="{{ old('sec3_desc1', isset($homepage) ? $homepage->sec3_desc1 : '') }}">
                                                    @if($errors->has('sec3_desc1'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec3_desc1') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.title_helper') }}
                                                    </p>
                                                </div>

                                                <label  class="col-md-12 col-form-label ">Card 2</label>
                                                <div class="form-group col-sm-4 {{ $errors->has('sec3_title2') ? 'has-error' : '' }}">
                                                    <label for="sec3_title2">{{ trans('global.homepage.fields.title') }}</label>
                                                    <input type="text" id="sec3_title2" name="sec3_title2" class="form-control" value="{{ old('sec3_title2', isset($homepage) ? $homepage->sec3_title2 : '') }}">
                                                    @if($errors->has('sec3_title2'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec3_title2') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.title_helper') }}
                                                    </p>
                                                </div>
                                                <div class="form-group col-sm-4 {{ $errors->has('sec3_subtitle2') ? 'has-error' : '' }}">
                                                    <label for="sec3_subtitle2">{{ trans('global.homepage.fields.subtitle') }}</label>
                                                    <input type="text" id="sec3_subtitle2" name="sec3_subtitle2" class="form-control" value="{{ old('sec3_subtitle2', isset($homepage) ? $homepage->sec3_subtitle2 : '') }}">
                                                    @if($errors->has('sec3_subtitle2'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec3_subtitle2') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.title_helper') }}
                                                    </p>
                                                </div>
                                                <div class="form-group col-sm-4 {{ $errors->has('sec3_desc2') ? 'has-error' : '' }}">
                                                    <label for="sec3_desc2">{{ trans('global.homepage.fields.description') }}</label>
                                                    <input type="text" id="sec3_desc2" name="sec3_desc2" class="form-control" value="{{ old('sec3_desc2', isset($homepage) ? $homepage->sec3_desc2 : '') }}">
                                                    @if($errors->has('sec3_desc2'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec3_desc2') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.title_helper') }}
                                                    </p>
                                                </div>
                                                <label  class="col-md-12 col-form-label ">Card 3</label>
                                                <div class="form-group col-sm-4 {{ $errors->has('sec3_title3') ? 'has-error' : '' }}">
                                                    <label for="sec3_title3">{{ trans('global.homepage.fields.title') }}</label>
                                                    <input type="text" id="sec3_title3" name="sec3_title3" class="form-control" value="{{ old('sec3_title3', isset($homepage) ? $homepage->sec3_title3 : '') }}">
                                                    @if($errors->has('sec3_title3'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec3_title3') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.title_helper') }}
                                                    </p>
                                                </div>
                                                <div class="form-group col-sm-4 {{ $errors->has('sec3_subtitle3') ? 'has-error' : '' }}">
                                                    <label for="sec3_subtitle3">{{ trans('global.homepage.fields.subtitle') }}</label>
                                                    <input type="text" id="sec3_subtitle3" name="sec3_subtitle3" class="form-control" value="{{ old('sec3_subtitle3', isset($homepage) ? $homepage->sec3_subtitle3 : '') }}">
                                                    @if($errors->has('sec3_subtitle3'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec3_subtitle3') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.title_helper') }}
                                                    </p>
                                                </div>
                                                <div class="form-group col-sm-4 {{ $errors->has('sec3_desc3') ? 'has-error' : '' }}">
                                                    <label for="sec3_desc3">{{ trans('global.homepage.fields.description') }}</label>
                                                    <input type="text" id="sec3_desc3" name="sec3_desc3" class="form-control" value="{{ old('sec3_desc3', isset($homepage) ? $homepage->sec3_desc3 : '') }}">
                                                    @if($errors->has('sec3_desc3'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec3_desc3') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.title_helper') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- section 3 end produnts -->
                            <hr>
                            <!-- section 4 products -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="banner" class="col-md-2 col-form-label ">Product List section</label>
                                        <div class="col-md-10">
                                            <div class="row">

                                                <div class="form-group col-sm-6 {{ $errors->has('sec4_title') ? 'has-error' : '' }}">
                                                    <label for="sec4_title">{{ trans('global.homepage.fields.title') }}</label>
                                                    <input type="text" id="sec4_title" name="sec4_title" class="form-control" value="{{ old('sec4_title', isset($homepage) ? $homepage->sec4_title : '') }}">
                                                    @if($errors->has('sec4_title'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('sec4_title') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ trans('global.homepage.fields.title_helper') }}
                                                    </p>
                                                </div>
                                                <div class="form-group col-sm-6 {{ $errors->has('sec4_products') ? 'has-error' : '' }}">
                                                    <label>Product list to show (Choose 4 products)</label>
                                                    <select class="col-form-label select2" name="sec4_products[]" multiple="multiple" data-placeholder="Select Products" style="width: 200px;">
                                                        @foreach ($products as $product)
                                                        <option value="{{$product->id}}" 
                                                            @if ( isset($homepage->sec4_products) && $homepage->sec4_products == $product->id)
                                                            selected
                                                            @endif
                                                            >{{$product->name ?? ''}} {{$product->chinese_name ?? ''}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('product'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('product') }}
                                                    </em>
                                                    @endif
                                                    <p class="helper-block">
                                                        {{ '' }}
                                                    </p>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- section 4 end produnts -->
                            <hr>
                          <!-- section 5  produnts discount-->
                          <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label  class="col-md-2 col-form-label ">Section 5</label>
                                        <div class="col-md-10 row">
                                            <label for="sec5_image1" class="col-form-label ">Image (360px * 490px)</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="sec5_image1" name="sec5_image1">
                                                    <label class="custom-file-label" for="sec5_image1">{{ trans('global.choose_file') }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="sec5_image1">{{ trans('global.upload') }}</span>
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec5_title1') ? 'has-error' : '' }}">
                                                <label for="sec5_title1">{{ trans('global.homepage.fields.title') }}</label>
                                                <input type="text" id="sec5_title1" name="sec5_title1" class="form-control" value="{{ old('sec5_title1', isset($homepage) ? $homepage->sec5_title1 : '') }}">
                                                @if($errors->has('sec5_title1'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec5_title1') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.title_helper') }}
                                                </p>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec5_text_one1') ? 'has-error' : '' }}">
                                                <label for="sec5_text_one1">Ingredians 1</label>
                                                <input type="text" id="sec5_text_one1" name="sec5_text_one1" class="form-control" value="{{ old('sec5_text_one1', isset($homepage) ? $homepage->sec5_text_one1 : '') }}">
                                                @if($errors->has('sec5_text_one1'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec5_text_one1') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.subtitle_helper') }}
                                                </p>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec5_text_two1') ? 'has-error' : '' }}">
                                                <label for="sec5_text_two1">Ingredians 2</label>
                                                <input type="text" id="sec5_text_two1" name="sec5_text_two1" class="form-control" value="{{ old('sec5_text_two1', isset($homepage) ? $homepage->sec5_text_two1 : '') }}">
                                                @if($errors->has('sec5_text_two1'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec5_text_two1') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.subtitle_helper') }}
                                                </p>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec5_text_three1') ? 'has-error' : '' }}">
                                                <label for="sec5_text_three1">Ingredians 3</label>
                                                <input type="text" id="sec5_text_three1" name="sec5_text_three1" class="form-control" value="{{ old('sec5_text_three1', isset($homepage) ? $homepage->sec5_text_three1 : '') }}">
                                                @if($errors->has('sec5_text_three1'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec5_text_three1') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.subtitle_helper') }}
                                                </p>
                                            </div>

                                            <!-- <div class="form-group  col-sm-6 {{ $errors->has('sec5_link1') ? 'has-error' : '' }}">
                                                <label for="sec5_link1" class="col-form-label ">{{ trans('global.homepage.fields.link') }}</label>
                                                
                                                    <input type="text" id="sec5_link1" name="sec5_link1" class="form-control" value="{{ old('sec5_link1', isset($homepage) ? $homepage->sec5_link1 : '') }}" placeholder="http://">
                                                    @if ($errors->has('sec5_link1'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('sec5_link1') }}</strong>
                                                    </span>
                                                    @endif
                                            </div> -->

                                            <div class="form-group  col-sm-12 {{ $errors->has('sec5_desc1') ? 'has-error' : '' }}">
                                                <label for="sec5_desc1">{{ trans('global.homepage.fields.description') }}</label>
                                                <textarea id="sec5_desc1" name="sec5_desc1" class="form-control ">{{ old('sec5_desc1', isset($homepage) ? $homepage->sec5_desc1 : '') }}</textarea>
                                                @if($errors->has('sec5_desc1'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec5_desc1') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.description_helper') }}
                                                </p>
                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                @if(isset($homepage->sec5_image1))
                                <div class="form-group row ">
                                    <div class="col-md-12">
                                            <img src="/storage/products/{{ $homepage->sec5_image1 ?? ''}}" width="200px" alt="">
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- section 5 end produnts discount-->

                        <!-- section 6  produnts discount-->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label  class="col-md-2 col-form-label ">Section 6</label>
                                        <div class="col-md-10 row">
                                            <label for="sec5_image2" class="col-form-label ">Image (360px * 490px)</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="sec5_image2" name="sec5_image2">
                                                    <label class="custom-file-label" for="sec5_image2">{{ trans('global.choose_file') }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="sec5_image2">{{ trans('global.upload') }}</span>
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec5_title2') ? 'has-error' : '' }}">
                                                <label for="sec5_title2">{{ trans('global.homepage.fields.title') }}</label>
                                                <input type="text" id="sec5_title2" name="sec5_title2" class="form-control" value="{{ old('sec5_title2', isset($homepage) ? $homepage->sec5_title2 : '') }}">
                                                @if($errors->has('sec5_title2'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec5_title2') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.title_helper') }}
                                                </p>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec5_text_one2') ? 'has-error' : '' }}">
                                                <label for="sec5_text_one2">Ingredians 1</label>
                                                <input type="text" id="sec5_text_one2" name="sec5_text_one2" class="form-control" value="{{ old('sec5_text_one2', isset($homepage) ? $homepage->sec5_text_one2 : '') }}">
                                                @if($errors->has('sec5_text_one2'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec5_text_one2') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.subtitle_helper') }}
                                                </p>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec5_text_two2') ? 'has-error' : '' }}">
                                                <label for="sec5_text_two2">Ingredians 2</label>
                                                <input type="text" id="sec5_text_two2" name="sec5_text_two2" class="form-control" value="{{ old('sec5_text_two2', isset($homepage) ? $homepage->sec5_text_two2 : '') }}">
                                                @if($errors->has('sec5_text_two2'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec5_text_two2') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.subtitle_helper') }}
                                                </p>
                                            </div>

                                            <div class="form-group col-sm-6 {{ $errors->has('sec5_text_three2') ? 'has-error' : '' }}">
                                                <label for="sec5_text_three2">Ingredians 3</label>
                                                <input type="text" id="sec5_text_three2" name="sec5_text_three2" class="form-control" value="{{ old('sec5_text_three2', isset($homepage) ? $homepage->sec5_text_three2 : '') }}">
                                                @if($errors->has('sec5_text_three2'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec5_text_three2') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.subtitle_helper') }}
                                                </p>
                                            </div>

                                            <div class="form-group  col-sm-6 {{ $errors->has('sec5_link2') ? 'has-error' : '' }}">
                                                <label for="sec5_link2" class="col-form-label ">{{ trans('global.homepage.fields.link') }}</label>
                                                
                                                    <input type="text" id="sec5_link2" name="sec5_link2" class="form-control" value="{{ old('sec5_link2', isset($homepage) ? $homepage->sec5_link2 : '') }}" placeholder="http://">
                                                    @if ($errors->has('sec5_link2'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('sec5_link2') }}</strong>
                                                    </span>
                                                    @endif
                                            </div>

                                            <div class="form-group  col-sm-12 {{ $errors->has('sec5_desc2') ? 'has-error' : '' }}">
                                                <label for="sec5_desc2">{{ trans('global.homepage.fields.description') }}</label>
                                                <textarea id="sec5_desc2" name="sec5_desc2" class="form-control ">{{ old('sec5_desc2', isset($homepage) ? $homepage->sec5_desc2 : '') }}</textarea>
                                                @if($errors->has('sec5_desc2'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('sec5_desc2') }}
                                                </em>
                                                @endif
                                                <p class="helper-block">
                                                    {{ trans('global.homepage.fields.description_helper') }}
                                                </p>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                @if(isset($homepage->sec5_image2))
                                <div class="form-group row ">
                                    <div class="col-md-12">
                                            <img src="/storage/products/{{ $homepage->sec5_image2 ?? ''}}" width="100%" alt="">
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- section 6 end produnts discount-->

                            <div class="form-group row ">
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