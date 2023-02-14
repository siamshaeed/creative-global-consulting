@extends('layouts.backend')

@section('title')
    Create File | Creative Global Consultancy
@endsection
@section('content')

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title">
                        {{__("Student File")}}
                        <span style="font-size: 14px"> ({{__("Create File")}}) </span>
                    </h5>
                </div>

                <form method="POST" action="{{route('file.store')}}">
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group mb-2">
                                    <label class="form-control-label" for="name"> <b>Name</b> <span class="text-warning" title="Must be Required">*</span></label>

                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Enter Student Name" value="{{old('name')}}"
                                           maxlength="50" required/>

                                    @if ($errors->has('name'))
                                        <small class="text-danger">
                                            {{$errors->first('name')}}
                                        </small>
                                    @endif
                                </div>

                                <div class="form-group mb-2">
                                    <label class="form-control-label" for="email"> <b>Email</b> <span class="text-warning" title="Must be Required">*</span></label>

                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Enter Email" value="{{old('email')}}"
                                           maxlength="50" required/>

                                    @if ($errors->has('email'))
                                        <small class="text-danger">
                                            {{$errors->first('email')}}
                                        </small>
                                    @endif
                                </div>

                                <div class="form-group mb-2">
                                    <label class="form-control-label" for="phone"> <b>Phone</b> <span class="text-warning" title="Must be Required">*</span></label>

                                    <input type="number" class="form-control" id="phone" name="phone"
                                           placeholder="Enter Phone" value="{{old('phone')}}"
                                           maxlength="11" required/>

                                    @if ($errors->has('phone'))
                                        <small class="text-danger">
                                            {{$errors->first('phone')}}
                                        </small>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="partner"><b>Partner</b><span
                                            class="text-warning" title="Must be Required">*</span></label>

                                    <select name="partner" class="form-select form-control" required>
                                        <option>Select Partner</option>
                                        <option value="1">Partner One</option>
                                        <option value="2">Partner Two</option>
                                        <option value="3">Partner Three</option>
                                    </select>

                                    @if ($errors->has('partner'))
                                        <small class="text-danger">
                                            {{$errors->first('partner')}}
                                        </small>
                                    @endif
                                </div>

                            </div>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-primary">
                                Save File
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
