@extends('layouts.app')
@section('content')
@include('admin.aside')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class=" container ">
        <!--begin::Card-->
        @if(session('success'))
        <div class="alert alert-custom alert-success fade show" role="alert">
            <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
            <div class="alert-text">{{ session('success')}}</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
        @endif
        @if(session('failed'))
        <div class="alert alert-custom alert-danger fade show" role="alert">
            <div class="alert-icon"><i class="flaticon-warning"></i></div>
            <div class="alert-text">{{ session('failed')}}</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
        @endif

        <div class="card card-custom">
            <div class="card-header">
                <h3 class="card-title">
                    User Profile
                </h3>
            </div>
            <div class="container" style="background-color: white;">
                <div class="row">
                    <div class="col-sm-6">
                        <form class="form" method="post" action="{{route('updatePass')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-control-label">Old password</label>
                                    <input type="text" class="form-control" name="password"  />
                                    @if($errors->has('password'))
                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">New Password</label>
                                    <input type="text" name="new_password" class="form-control" />
                                    @if($errors->has('new_password'))
                                <div class="invalid-feedback">{{ $errors->first('new_password') }}</div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" name="confirm_password">Confirm Password </label>
                                    <input type="password" name="confirm_password" class="form-control" />
                                    @if($errors->has('confirm_password'))
                                <div class="invalid-feedback">{{ $errors->first('confirm_password') }}</div>
                                @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">update</button>

                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <form class="form" method="post" action="{{route('setting.profile')}}">
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-control-label">Your Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="@if(old('name')){{ old('name') }}@elseif($user){{$user->name}}@endif" />

                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="text" name="email" class="form-control"
                                        value="@if(old('email')){{ old('email') }}@elseif($user){{$user->email}}@endif" />
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Phone </label>
                                    <input type="text" name="mobile"
                                        value="@if(old('mobile')){{ old('mobile') }}@elseif($user){{$user->mobile}}@endif"
                                        class="form-control" />
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content-->
    @endsection