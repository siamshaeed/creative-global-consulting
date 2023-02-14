@extends('layouts.backend')

@section('title')
    Roles | Creative Global Consultancy
@endsection

@section('content')

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">

                        <div class="col-md-6">
                            <h4 class="text-bold">
                                Roles
                            </h4>
                        </div>

                        <div class="col-md-6 text-right">
                            <a href="{{route('roles.create')}}" class="btn btn-primary text-right">
                                <i class="fa fa-plus"></i> Role Create
                            </a>
                        </div>

                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="application_table"
                                       class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4 dataTable">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Permissions</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @if(count($roles) > 0)

                                        @foreach ($roles as $role)

                                            <tr>
                                                <td>
                                                    {{$loop->iteration}}
                                                </td>
                                                <td>
                                                    <strong>
                                                        {{ $role->name }}
                                                    </strong>
                                                </td>
                                                <td>
                                                    @foreach ($role->permissions as $permission)
                                                        <li class="text-capitalize">
                                                            {{ str_replace('_', ' ', $permission->name) }}
                                                        </li>
                                                    @endforeach
                                                </td>
                                                <td class="text-center">

{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-danger btn-icon btn-sm btn-datatable-row-action"--}}
{{--                                                            data-toggle="tooltip"--}}
{{--                                                            data-placement="top"--}}
{{--                                                            title=""--}}
{{--                                                            data-original-title="Delete"--}}
{{--                                                            data-id="{{$role->id}}"--}}
{{--                                                            data-url="{{route('roles.destroy', $role->id )}}"--}}
{{--                                                            data-type="delete" data-title="Role Delete"--}}
{{--                                                            data-message="Role Will be Deleted Permanently ">--}}

{{--                                                        <i class="fa fa-trash-alt"></i>--}}
{{--                                                    </button>--}}

                                                    <form action="{{ route('roles.destroy',$role->id) }}" method="POST">

                                                        <a type="button" class="btn btn-primary btn-sm" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Role Edit"
                                                           href="{{route('roles.edit', $role->id )}}"
                                                           data-title="{{__("Role Edit")}}">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>

                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" title="Role Delete"><i class="fas fa-trash-alt"></i></button>
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

                <div class="card-footer">
                    <div class="row">
                        <div class="col-7">
                            <div class="float-left">
                                {!! $roles->total() !!} {{ __('labels.backend.total') }}
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="float-right">
                                {{ $roles->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{--@push('styles')--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{asset('assets/modules/datatables/1.11.3/css/dataTables.bootstrap5.min.css')}}">--}}
{{--@endpush--}}


{{--@push('scripts')--}}

{{--    <script src="{{asset('assets/modules/datatables/1.11.3/js/jquery.dataTables.min.js')}}"></script>--}}
{{--    <script src="{{asset('assets/modules/datatables/1.11.3/js/dataTables.bootstrap5.min.js')}}"></script>--}}

{{--@endpush--}}
