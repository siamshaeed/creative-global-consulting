@extends('layouts.backend')

@section('title')
    Edit File | Creative Global Consultancy
@endsection
@section('content')

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title">
                        {{__("Student File")}}
                        <span style="font-size: 14px"> ({{__("Edit File")}}) </span>
                    </h5>
                </div>

                <form method="POST" action="{{route('file.update', $file->id)}}">
                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group mb-2">
                                    <label class="form-control-label" for="name"> <b>Name</b> <span class="text-warning" title="Must be Required">*</span></label>

                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Enter Student Name" value="{{old('name', $file->name)}}"
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
                                           placeholder="Enter Email" value="{{old('email', $file->email)}}"
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
                                           placeholder="Enter Phone" value="{{old('phone', $file->phone)}}"
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
                                        <option>Select Gender</option>
                                        <option {{ ($file->partner == "1") ? 'selected' : '' }} value="1">ABC</option>
                                        <option {{ ($file->partner == "2") ? 'selected' :  ''}} value="2">XYZ</option>
                                    </select>

                                    @if ($errors->has('partner'))
                                        <small class="text-danger">
                                            {{$errors->first('partner')}}
                                        </small>
                                    @endif
                                </div>

                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary">
                                Update File
                            </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
