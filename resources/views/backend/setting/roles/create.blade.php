@extends('layouts.backend')

@section('title')
    Role Create | Creative Global Consultancy
@endsection

@section('content')

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Role Management
                            <span style="font-size: 14px"> (Create Role) </span>
                        </h5>

                    </div>


                    <form method="POST" action="{{route('roles.store')}}">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row mb-3">
                                        <label class="col-md-2 form-control-label"
                                               for="name"><b>Name</b><span class="text-warning" title="Must be Required">*</span></label>

                                        <input type="text" class="col-md-10 form-control" id="name" name="name"
                                               placeholder="{{__('Enter Role Name')}}" maxlength="191" required/>
                                    </div>

                                    <div class="form-group row mb-2">
                                        <label class="col-md-2 form-control-label"><b>Grant permission</b></label>
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
                                                                           {{ old('permissions') && in_array($permission->name, old('permissions'))?'checked':''}} value="{{$permission->name}}">
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
                                Create Role
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
