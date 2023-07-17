@extends('layouts.app')
@section('content')
@include('admin.aside')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class=" container card-fixed-align">
        <!--begin::Card-->
        @if(session('success'))
        <div class="alert alert-custom alert-success fade show m-4 p-3" role="alert">
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
        <div class="alert alert-custom alert-danger fade show m-4 p-3" role="alert">
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
            <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Subheader-->
                <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
                    <div
                        class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap mr-2">

                            <!--begin::Page Title-->
                            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                                Add Mail Info
                            </h5>
                            <!--end::Page Title-->
                        </div>
                        <!--end::Info-->
                    </div>
                </div>

                <!--begin::Form-->
                <form action="{{route($action)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="col-form-label">Mail Mailer</label>
                                <input class="form-control " name="mailer" type="text" placeholder="Mail Mailer"
                                    value="@if(old('mailer')){{ old('mailer') }}@elseif($data){{$data->mailer}}@endif">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="col-form-label">Mail Host</label>
                                <input class="form-control " name="mail_host" type="text" placeholder="Mail Host"
                                    value="@if(old('mail_host')){{ old('mail_host') }}@elseif($data){{$data->mail_host}}@endif">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="col-form-label">Mail Port</label>
                                <input class="form-control " name="mail_port" type="text" placeholder="Mail Port"
                                    value="@if(old('mail_port')){{ old('mail_port') }}@elseif($data){{$data->mail_port}}@endif">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="col-form-label">Mail UserName</label>
                                <input class="form-control " name="mail_user" type="text" placeholder="Mail Mailer"
                                    value="@if(old('mail_user')){{ old('mail_user') }}@elseif($data){{$data->mail_user}}@endif">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="col-form-label">Mail Password</label>
                                <input class="form-control " name="mail_password" type="text" placeholder="Mail Password"
                                    value="@if(old('mail_password')){{ old('mail_password') }}@elseif($data){{$data->mail_password}}@endif">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="col-form-label">Mail From</label>
                                <input class="form-control " name="mail_from" type="text" placeholder="Mail From"
                                    value="@if(old('mail_from')){{ old('mail_from') }}@elseif($data){{$data->mail_from}}@endif">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="col-form-label">Mail Encryption</label>
                                <input class="form-control " name="mail_encryption" type="text" placeholder="Mail Encryption"
                                    value="@if(old('mail_encryption')){{ old('mail_encryption') }}@elseif($data){{$data->mail_encryption}}@endif">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="col-form-label">Mail From Name</label>
                                <input class="form-control " name="mail_from_name" type="text" placeholder="Mail From Name"
                                    value="@if(old('mail_from_name')){{ old('mail_from_name') }}@elseif($data){{$data->mail_from_name}}@endif">
                            </div>
                        </div>
                        <div class="card-footer px-0 pb-0">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    <a href="{{route('aboutUs.index')}}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.ckeditor').ckeditor();
});
</script>
<!--end::Content-->
@endsection