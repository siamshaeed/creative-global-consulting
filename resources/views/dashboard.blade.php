@extends('layouts.backend')
@section('content')
    <!-- === Start Row === -->
{{--    <div class="row">--}}
{{--        <div class="col-lg-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- === End Row === -->

    <!-- === Start Row === -->
    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs mr-3" style="height: 65px; width: 65px">
                                   <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                      <i class="dripicons-document-edit" style="font-size: 40px"></i>
                                   </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total Registration</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4 class="text-center">
                                    @if($users)
                                      <a href="{{route('userlist.index')}}" style="font-size: 32px">{{count($users)}}</a>
                                    @endif
                                    <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs mr-3" style="height: 65px; width: 65px">
                                   <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                      <i class="fas fa-graduation-cap" style="font-size: 40px"></i>
                                   </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total University</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4 class="text-center">
                                    @if($universitys)
                                        <a href="{{route('university.index')}}" style="font-size: 32px">{{count($universitys)}}</a>
                                    @endif
                                    <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs mr-3" style="height: 65px; width: 65px">
                                   <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                      <i class="dripicons-folder" style="font-size: 40px" ></i>
                                   </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total File</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4 class="text-center">
                                    @if($files)
                                        <a href="{{route('file.index')}}" style="font-size: 32px">{{count($files)}}</a>
                                    @endif
                                    <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- === End Row === -->
@endsection
