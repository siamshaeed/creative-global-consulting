@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <!-- === Table title start === -->
                    <div class="row pb-4">
                        <div class="col-md-10">
                            <h4 class="card-title">Default Datatable</h4>
                        </div>
                        <div class="col-md-2">
                            <div class="creat_btn">
                                <a href="{{ route('category.create') }}" class="btn btn-primary" >Create Category</a>
                            </div>
                        </div>
                    </div>
                    <!-- === End Table title === -->

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead style="text-align: center">
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>limit of use</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody style="text-align: center">
                        @foreach($categorys as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>00</td>
                                <td><a href="#" title="Status" class="btn btn-sm btn-primary"><i class="far fa-credit-card"></i></a></td>
                                <td>
                                    <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                                        <a href="{{ route('category.edit', $category->id) }}" title="Category Edit" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Category Delete"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                        <tfoot style="text-align: center">
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>limit of use</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
