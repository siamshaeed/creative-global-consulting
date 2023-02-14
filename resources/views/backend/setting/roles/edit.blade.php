@extends('layouts.backend')

@section('title')
    Role Edit
@endsection

@section('content')

    <div class="page-wrapper">

        <div class="container-fluid">

            <div class="card">

                <div class="card-header">

                    <h5 class="card-title">
                        Role Management
                        <span style="font-size: 14px"> (Update Role) </span>
                    </h5>

                </div>

                <form method="POST" action="{{route('roles.update',$role)}}">

                    @csrf

                    @method('PUT')

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group row mb-3">

                                    <label class="col-md-2 form-control-label"
                                           for="name">{{__('Name')}}</label>
                                    <input type="text" class="col-md-10 form-control" id="name" name="name"
                                           value="{{old('name',$role->name)}}"
                                           placeholder="{{__('Enter Name')}}" maxlength="191" required/>

                                </div>


                                <div class="form-group row mb-2">

                                    <label class="col-md-2 form-control-label">{{__("Check permissions")}}</label>

                                    <div class="col-12 col-sm-10">

                                        <div class="row">

                                            @if ($permissions->count())

                                                @foreach($permissions as $permission)

                                                    <div class="col-md-3 mb-2">

                                                        <div class="checkbox text-capitalize">

                                                            <label
                                                                for="{{'permission-'.$permission->id}}">
                                                                <input type="checkbox"
                                                                       name="permissions[]"
                                                                       id="{{'permission-'.$permission->id}}"
                                                                       {{ $permissionNames && in_array($permission->name, $permissionNames)?'checked':''}} value="{{$permission->name}}">
                                                                {{ str_replace('_', ' ', $permission->name) }}
                                                            </label>

                                                        </div>

                                                    </div>


                                                @endforeach

                                            @endif

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="card-footer bg-default">

                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection
