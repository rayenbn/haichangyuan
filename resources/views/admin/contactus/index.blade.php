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
                            <h3 class="box-title">Contact-us Page</h3>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                    @if($contactus)
                        <form action="{{ route("admin.contactus.update", [$contactus->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route("admin.contactus.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @endif

                            <!-- page banner -->
                            @if(isset($contactus->banner_image))
                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <img src="/storage/images/banners/{{ $contactus->banner_image ?? '' }}" width="100%" style="max-height: 300px;" />
                                </div>
                            </div>
                            @endif
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

                            <div class="form-group  row{{ $errors->has('title') ? 'has-error' : '' }}">
                                <label for="title" class="col-md-2 col-form-label ">{{ trans('global.contactus.fields.title') }}</label>
                                <div class="col-md-10">
                                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($contactus) ? $contactus->title : '') }}" placeholder="Page Title" required>
                                    @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group  row{{ $errors->has('address') ? 'has-error' : '' }}">
                                <label for="address" class="col-md-2 col-form-label ">{{ trans('global.contactus.fields.address') }}</label>
                                <div class="col-md-10">
                                    <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($contactus) ? $contactus->address : '') }}" placeholder="example, exmaple 8768" required>
                                    @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group  row{{ $errors->has('phone') ? 'has-error' : '' }}">
                                <label for="phone" class="col-md-2 col-form-label ">{{ trans('global.contactus.fields.phone') }}</label>
                                <div class="col-md-10">
                                    <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($contactus) ? $contactus->phone : '') }}" placeholder="Ex: 123456789" required>
                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group  row{{ $errors->has('email1') ? 'has-error' : '' }}">
                                <label for="email1" class="col-md-2 col-form-label ">{{ trans('global.contactus.fields.email') }}</label>
                                <div class="col-md-10">
                                    <input type="email1" id="email1" name="email1" class="form-control" value="{{ old('email1', isset($contactus) ? $contactus->email1 : '') }}" placeholder="example@example.com" required>
                                    @if ($errors->has('email1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group  row{{ $errors->has('opening_time') ? 'has-error' : '' }}">
                                <label for="opening_time" class="col-md-2 col-form-label ">Opening time</label>
                                <div class="col-md-10">
                                    <input type="text" id="opening_time" name="opening_time" class="form-control" value="{{ old('opening_time', isset($contactus) ? $contactus->opening_time : '') }}" placeholder="9.00 AM - 6.00 AM" >
                                    @if ($errors->has('opening_time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('opening_time') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                           <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="image1" class="col-md-2 col-form-label ">{{ trans('global.aboutus.fields.image') }} 1</label>
                                        <div class="col-md-10">
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
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    @if(isset($contactus->image1))
                                    <div class="form-group row ">
                                        <div class="col-md-12">
                                            <img src="/storage/images/banners/{{ $contactus->image1 ?? '' }}" width="100%" style="max-height: 300px;" />
                                        </div>
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="image2" class="col-md-2 col-form-label ">{{ trans('global.aboutus.fields.image') }} 2</label>
                                        <div class="col-md-10">
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
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    @if(isset($contactus->image2))
                                    <div class="form-group row ">
                                        <div class="col-md-12">
                                            <img src="/storage/images/banners/{{ $contactus->image2 ?? '' }}" width="100%" style="max-height: 300px;" />
                                        </div>
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="image3" class="col-md-2 col-form-label ">{{ trans('global.aboutus.fields.image') }} 3</label>
                                        <div class="col-md-10">
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
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    @if(isset($contactus->image3))
                                    <div class="form-group row ">
                                        <div class="col-md-12">
                                            <img src="/storage/images/banners/{{ $contactus->image3 ?? '' }}" width="100%" style="max-height: 300px;" />
                                        </div>
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="image4" class="col-md-2 col-form-label ">{{ trans('global.aboutus.fields.image') }} 4</label>
                                        <div class="col-md-10">
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
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    @if(isset($contactus->image4))
                                    <div class="form-group row ">
                                        <div class="col-md-12">
                                            <img src="/storage/images/banners/{{ $contactus->image4 ?? '' }}" width="100%" style="max-height: 300px;" />
                                        </div>
                                    </div>
                                    @endif
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