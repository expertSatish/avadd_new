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
                    Add Student Service</h5>
                    <a href="{{route('StudentServices.index')}}" class="btn btn-light-warning font-weight-bolder btn-sm">
                         <i class="fa fa-undo" aria-hidden="true"></i>Back
                    </a>
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
                <form action="{{route('StudentServices.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Title </label><span style="color: red;">*</span>
                                <input class="form-control" name="title" type="text" placeholder="Enter Title..." />
                                @if($errors->has('title'))
                                <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                @enderror
                            </div>
                            <div  class="col-md-6 form-group">
                                <label>Image</label><span style="color: red;">*</span>
                                <input class="form-control" name="image" placeholder="service Image"
                                    type="file" />
                                @if($errors->has('image'))
                                <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                                @enderror
                            </div>
                            <div  class="col-md-6 form-group">
                                <label>Short Description</label>
                                <textarea class="form-control" name="short_desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <textarea class="ckeditor form-control " name="description" type="text"
                                    placeholder="Description"></textarea>
                                @if($errors->has('description'))
                                <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer pb-0 px-0">
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
            <!--end::Card-->
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>


<!--end::Content-->
@endsection