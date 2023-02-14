@extends('layouts.backend')

@section('title')
    Create Permission | Creative Global Consultancy
@endsection
@section('content')

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title">
                        {{__("Permission Management")}}
                        <span style="font-size: 14px"> ({{__("Create Permission")}}) </span>
                    </h5>
                </div>

                <form method="POST" action="{{route('permissions.store')}}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label class="form-control-label" for="name"> <b>Name</b> <span class="text-warning" title="Must be Required">*</span></label>

                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Enter permission name" value="{{old('name')}}"
                                           maxlength="191" required/>

                                    @if ($errors->has('name'))
                                        <small class="text-danger">
                                            {{$errors->first('name')}}
                                        </small>
                                    @endif
                                </div>

                                <div class="form-group mb-2">
                                    <label class="form-control-label" for="guard_name"> <b>Guard Name</b>
                                        <small class="form-hint">({{__("Default Guard Name is web")}})</small>
                                    </label>

                                    <input type="text" class="form-control" id="guard_name"
                                           value="{{old('guard_name')}}" name="guard_name"
                                           placeholder="Leave Empty to Use Default Guard" maxlength="191"/>

                                    @if ($errors->has('guard_name'))
                                        <small class="text-danger invalid-feedback">
                                            {{$errors->first('guard_name')}}
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-default">
                        <button type="submit" class="btn btn-primary">
                            Create Permission
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
