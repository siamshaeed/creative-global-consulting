@extends('layouts.backend')

@section('title')
User List | Creative Global Consultancy
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header p-0">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>
                                <b>User List</b>
                            </h4>
                        </div>
                        {{-- <div class="col-md-6 text-right">
                            <a href="{{route('university.create')}}" class="btn btn-primary text-right">
                                <i class="fa fa-plus"></i> Create New
                            </a>
                        </div> --}}
                    </div>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped text-center" width="100%"
                                       id="user_datatable">
                                    <thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script type="text/javascript">
   
            $('#user_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route("userlist.index")}}',
                search: {
                    return: true
                },
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false, title: 'ID'},
                    {data: 'name', title: 'Name'},
                    {data: 'email', title: 'Email'},
                    {data: 'phone', title: 'Phone No'},
                    {data: 'graduation_level', title: 'Graduation Level'},
                    {data: 'ielts_data', title: 'IELTS Score'},
                    {data: 'action', title: 'Action', orderable: false, searchable: false},
                ]
            });

    </script>

@endpush
