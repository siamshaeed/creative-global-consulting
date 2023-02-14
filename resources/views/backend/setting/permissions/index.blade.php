@extends('layouts.backend')
@section('title')
    Permissions | Creative Global Consultancy
@endsection
    @section('content')
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>
                                    <b>Permission Management</b>
                                </h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('permissions.create')}}" class="btn btn-primary text-right">
                                    <i class="fa fa-plus"></i> Create New
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped text-center">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Guard</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(!is_null($permissions))
                                            @foreach ($permissions as $permission)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
{{--                                                    <td>--}}
{{--                                                        {{ str_replace('_', ' ', $permission->name) }}--}}
{{--                                                    </td>--}}
                                                    <td class="text-capitalize">
                                                        <strong>
                                                            {{ str_replace('_', ' ', $permission->name) }}
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <strong>
                                                            {{ $permission->guard_name }}
                                                        </strong>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('permissions.destroy',$permission->id) }}" method="POST">
                                                            <a type="button" class="btn btn-primary btn-icon btn-sm"
                                                               data-placement="top" title="" data-original-title="Edit"
                                                               href="{{route('permissions.edit', $permission->id)}}"
                                                               data-title="{{__("Permission Edit")}}">
                                                                <i class="fa fa-pencil-alt"></i>
                                                            </a>

                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" title="Category Delete"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
