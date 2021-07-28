@extends('layouts.admin')
@section('content')
<!-- Main content -->
<section class="content">

    @if($footer)
    <form action="{{ route("admin.footer.update", [$footer->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @else
        <form action="{{ route("admin.footer.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @endif

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3 class="box-title">Footer</h3>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                    <div class="table-responsive" style="overflow-x: inherit;">
                        <div class="row">
                           
                            <div class="col-md-6 border-right">
                                <!-- <strong style="color: #1863AB;">Social media info</strong> -->
                                <div class="form-group  row {{ $errors->has('addresss') ? 'has-error' : '' }}">
                                    <label class="col-md-2 col-form-label" for="addresss">Address</label>
                                    <div class="col-md-10">
                                        <input type="text" id="addresss" name="addresss" class="form-control" value="{{ old('addresss', isset($footer) ? $footer->addresss : '') }}" placeholder="Address">
                                        @if ($errors->has('addresss'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('addresss') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group  row {{ $errors->has('phone') ? 'has-error' : '' }}">
                                    <label class="col-md-2 col-form-label" for="phone">Phone</i></label>
                                    <div class="col-md-10">
                                        <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($footer) ? $footer->phone : '') }}" placeholder="Phone">
                                        @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group  row {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label class="col-md-2 col-form-label" for="email">Email</i>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" id="email" name="email" class="form-control" value="{{ old('email', isset($footer) ? $footer->email : '') }}" placeholder="Email">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group  row {{ $errors->has('opening_time') ? 'has-error' : '' }}">
                                    <label class="col-md-2 col-form-label" for="opening_time">Opening Time</i></label>
                                    <div class="col-md-10">
                                        <input type="text" id="opening_time" name="opening_time" class="form-control" value="{{ old('opening_time', isset($footer) ? $footer->opening_time : '') }}" placeholder="Monday – Friday: 9:00 – 18:00">
                                        @if ($errors->has('opening_time'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('opening_time') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-2 offset-md-10">
                            <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
                        </div>
                    </div>

                </div>
            </div>
        </form>
</section>
@endsection