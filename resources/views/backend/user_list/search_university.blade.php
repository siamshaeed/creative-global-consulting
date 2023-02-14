@extends('layouts.backend')
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endpush

@section('title')
    Recommended University | Creative Global Consultancy
@endsection

@section('content')

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            @if ($user->graduation_level == 1)
                            Undergraduate University List
                            @elseif ($user->graduation_level == 2)
                            Postgraduate University List
                            @else
                            @endif
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="box-body table-responsive">

                            <table id="undergraduate" class="table table-bordered">

                                <thead class="thead-light">
                                    <tr class="">
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Pathway Provider</th>
                                        <th>Educational Requirement</th>
                                        <th>Tution Fee</th>
                                        <th>Scholarship</th>
                                        <th>Duolingo</th>
                                        <th>Study Gap</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @if (count($data) > 0)
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td>{{ $item->name }}</td>

                                                <td>{{ $item->pathway_provider }}</td>

                                                <td>

                                                    @if ($user->graduation_level == 1)
                                                        {{ $item->ug_ac_req_education }}<br>
                                                        <b>GPA:</b> {{ $item->ug_ac_req_gpa }} <br>
                                                        <b>Group:</b> {{ $item->ug_ac_req_group }} <br>
                                                        <b>IELTS:</b> {{ $item->ug_ielts_start }}
                                                    @elseif($user->graduation_level == 2)
                                                        {{ $item->pg_ac_req_education }} <br>
                                                        <b>CGPA:</b> {{ $item->pg_ac_req_cgpa }} <br>
                                                        <b>Subject:</b> {{ $item->pg_ac_req_group }} <br>
                                                        <b>IELTS:</b> {{ $item->pg_ielts_start }}
                                                    @else
                                                    @endif

                                                </td>

                                                <td>{{ $item->tution_fees }}</td>

                                                <td>{{ $item->scholarships }}</td>

                                                <td>{{ $item->duolingo_start? $item->duolingo_start : 'N/A' }}</td>

                                                <td>{{ $item->pg_study_gap }}</td>
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
   

@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $('#undergraduate').DataTable({
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
