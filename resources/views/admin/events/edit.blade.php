@extends('layouts.app')
@section('content')
@include('admin.aside')
<div class="content py-0 d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">

                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Update Events</h5>
                <!--end::Page Title-->

            </div>
            <!--end::Info-->
        </div>
    </div>
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
                <!--begin::Form-->
                <form action="{{route('manage-event.update',$data->id)}}" method="post"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label>Title </label>
                                <input class="form-control" name="title" value="@if(old('title')){{ old('title') }}@elseif($data){{$data->title}}@endif" type="text" />
                                @if($errors->has('title'))
                                <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Image </label>
                                <input class="form-control" name="images" type="file" />
                                @if($errors->has('images'))
                                <div class="invalid-feedback">{{ $errors->first('images') }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <textarea class="ckeditor form-control " name="description" type="text"
                                    placeholder="Product Description">
                                    @if(old('description')){{ old('description') }}@elseif($data){{$data->description}}@endif</textarea>
                                @if($errors->has('description'))
                                <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer px-0 pb-0">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    <button type="reset" class="btn btn-danger">Cancel</button>
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

@endsection