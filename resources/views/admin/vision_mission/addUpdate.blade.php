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
                                Add Mission Vission
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
                            <div class="col-md-12 form-group">
                                <label class="col-form-label">Vision</label>
                                <textarea class="ckeditor form-control " name="vision" type="text"
                                    placeholder="Vision">@if(old('vision')){{ old('vision') }}@elseif($data){{$data->vision}}@endif</textarea>
                                @if($errors->has('vision'))
                                <div class="invalid-feedback">{{ $errors->first('vision') }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-form-label">Mission</label>
                                <textarea class="ckeditor form-control " name="mission" type="text"
                                    placeholder="Mission">@if(old('mission')){{ old('mission') }}@elseif($data){{$data->mission}}@endif</textarea>
                                @if($errors->has('mission'))
                                <div class="invalid-feedback">{{ $errors->first('mission') }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-form-label">Objectives</label>
                                <textarea class="ckeditor form-control " name="objective" type="text"
                                    placeholder="Objectives">@if(old('objective')){{ old('objective') }}@elseif($data){{$data->objective}}@endif</textarea>
                                @if($errors->has('objective'))
                                <div class="invalid-feedback">{{ $errors->first('objective') }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer px-0 pb-0">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    <a href="{{route('mission_vission.index')}}" class="btn btn-danger">Cancel</a>
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