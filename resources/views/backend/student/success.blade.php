@extends('layouts.login')

@section('title')
    Success Registration | Creative Global Consultancy
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">

                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-4">
                                {{--                                <h5 class="text-primary">Welcome Back !</h5>--}}
                                {{--                                <p>Sign in to continue to <br> <b>Creative Global Consultancy.</b></p>--}}
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ asset('') }}assets/images/profile-img.png" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

                <div class="card-body pt-0">
                    <div>
                        <a href="http://www.cgcbd.net/">
                            <div class="avatar-md profile-user-wid mb-4">
                                <span class="avatar-title rounded-circle bg-light">
                                    <img src="{{ asset('') }}assets/images/logo.svg" alt="" class="rounded-circle"
                                         height="34">
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="p-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h2 style="color: green">Registration Successful !</h2>
                                    <p style="font-size:17px" class="pt-2">Our consultants will connect you as soon as
                                        possible.</p>
                                    <p style="font-size:17px">info@cgcbd.net</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

