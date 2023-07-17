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
                    Update Manager Message</h5>
                <!--end::Page Title-->
                <a href="{{route('add-member.index')}}" class="btn btn-light-warning font-weight-bolder btn-sm">
                         <i class="fa fa-undo" aria-hidden="true"></i>Back
                    </a>

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
                <form action="{{route('add-member.update',$data->id)}}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label>Name </label>
                                <input class="form-control" name="name" type="text" value="{{$data->name}}" placeholder="Enter Name.." required />
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Position </label>
                                <input class="form-control" name="position" type="text" value="{{$data->position}}" placeholder="Enter Position.." required />
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Contact No. </label>
                                <input class="form-control" name="contact" type="text" value="{{$data->contact}}" placeholder="Contact Number..." required />
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Contact No. </label>
                                <select class="form-control" name="status">
                                    <option value="active">Active</option>
                                    <option value="inactive">In-active</option>
                                </select>
                            </div>

                        </div>

                        <div class="card-footer pb-0 px-0">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
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

@endsection