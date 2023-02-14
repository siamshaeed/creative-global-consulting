@extends('layouts.backend')
@section('title')
    Files List | Creative Global Consultancy
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>
                                <b>Students Files</b>
                            </h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('file.create') }}" class="btn btn-primary text-right">
                                <i class="fa fa-plus"></i> Create New
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="course_table" class="table table-bordered table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Partner</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!is_null($files))
                                        @foreach ($files as $file)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $file->name }}</td>
                                                <td>{{ $file->email }}</td>
                                                <td>{{ $file->phone }}</td>

                                                <td>
                                                    @if($file->partner == 1)
                                                        <span>Partner One</span>
                                                    @elseif($file->partner == 2)
                                                      <span>Partner Two</span>
                                                    @elseif($file->partner == 3)
                                                      <span>Partner Three</span>
                                                    @else
                                                    @endif
                                                </td>

                                                <td>
                                                    <form action="{{ route('file.destroy',$file->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        {{--Edit start--}}
                                                        <a type="button" class="btn btn-primary btn-icon btn-sm"
                                                           data-placement="top" title="" data-original-title="Edit"
                                                           href="{{ route('file.edit', $file->id) }}"
                                                           data-title="{{__("File Edit")}}">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>
                                                        {{--Edit end--}}

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

@push('scripts')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(function () {
            $('#course_table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
@endpush
