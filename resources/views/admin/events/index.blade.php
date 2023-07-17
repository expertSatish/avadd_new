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
                    Events List</h5>
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>

                <a href="{{route('manage-event.create')}}" class="btn btn-light-warning font-weight-bolder btn-sm">
                    Add New
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

                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            @foreach($availData as $data)
                            <tr>
                                <td>{{$data->title}}</td>
                                <?php
                                $imageArray = explode('|', $data->images);
                                ?>
                                <td>
                                    <?php
                                    foreach ($imageArray as $images) {
                                    ?>
                                        <img src="{{asset($images)}}" style="height: 20px; width:20px;">
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>{{$data->description}}</td>
                                <td><a  href="" class="text text-primary mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                <en class="la la-edit icon-lg"></en></a>
                            <a  href="" class="text text-danger mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
    <en class="la la-trash icon-lg"></en></a></td>
                            </tr>
                            @endforeach
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->
@endsection