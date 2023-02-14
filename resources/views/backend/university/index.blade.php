@extends('layouts.backend')

@section('title')
    University List | Creative Global Consultancy
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header p-0">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>
                                <b>University List</b>
                            </h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('university.create')}}" class="btn btn-primary text-right">
                                <i class="fa fa-plus"></i> Create New
                            </a>
                        </div>
                    </div>

                    {{--Search Start--}}
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">

                                    <div class="row">

                                        <div class="col-md-2 pr-0 pl-0">
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <select name="pathway_provider"
                                                            id="pathway_provider"
                                                            class="form-select form-control pathway">

                                                        <option value="">Select Pathway</option>

                                                        <option value="Study Group">Study Group</option>
                                                        <option value="Direct">Direct</option>
                                                        <option value="CEG">CEG</option>
                                                        <option value="OIEG">OIEG</option>
                                                        <option value="Kaplan">Kaplan</option>
                                                        <option value="Navitas">Navitas</option>
                                                        <option value="INTO">INTO</option>
                                                        <option value="QA">QA</option>
                                                    </select>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-2 pr-0 pl-0">
                                            <div class="col-sm-12">
                                                <div class="input-group date" id="">
                                                    <select name="graduation_level"
                                                            id="graduation_level"
                                                            class="form-select form-control graduation_level">
                                                        <option>Graduation Level</option>
                                                        <option value="1">Undergraduate</option>
                                                        <option value="2">Postgraduate</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-1 pr-0 pl-0">
                                            <div class="col-sm-12">
                                                <div class="input-group" id="cgpa_placeholder">
                                                    <input type="number"
                                                           name="cgpa"
                                                           id="cgpa"
                                                           value=""
                                                           class="form-control cgpa"
                                                           placeholder="gpa">
                                                    <span class="input-group-append"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 pr-0 pl-0">
                                            <div class="col-sm-12">
                                                <div class="input-group" id="">
                                                    <input type="number"
                                                           name="ielts"
                                                           id="ielts"
                                                           value=""
                                                           class="form-control ielts"
                                                           placeholder="IELTS Score"
                                                           step="0.01">
                                                    <span class="input-group-append"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 pr-0 pl-0">
                                            <div class="col-sm-12">
                                                <div class="input-group" id="">
                                                    <input type="number"
                                                           name="duolingo"
                                                           id="duolingo"
                                                           value=""
                                                           class="form-control duolingo"
                                                           placeholder="Doulingo Score"
                                                           step="0.01">
                                                    <span class="input-group-append"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 pr-0 pl-0">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-success btn-submit w-100 filter">
                                                    Filter
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                    </form>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--Search End--}}


                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped text-center" width="100%"
                                       id="datatable">
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

        $(document).ready(function () {

            load_datatable();

            function load_datatable(pathway = '',
                                    graduation_level = '',
                                    cgpa = '',
                                    ielts = '',
                                    duolingo = '') {

                $('#datatable').DataTable({

                    processing: true,
                    serverSide: true,

                    ajax: {
                        url: '{{ route("university.ajax") }}',
                        data: {
                            _token: "{{ csrf_token() }}",
                            pathway: pathway,
                            graduation_level: graduation_level,
                            cgpa: cgpa,
                            ielts: ielts,
                            duolingo: duolingo,
                        },
                        type: 'POST',
                        dataType: 'JSON',
                    },

                    columns: [
                        {data: 'DT_RowIndex', title: 'SL'},
                        {data: 'name', title: 'Name'},
                        {data: 'pathway_provider', title: 'Pathway Provider'},
                        {data: 'ug_ac_req_education', title: 'UG Education'},
                        {data: 'pg_ac_req_education', title: 'PG Education'},
                        {data: 'tution_fees', title: 'Tuition Fees'},
                        {data: 'scholarships', title: 'Scholarship'},
                        {data: 'duolingo_start', title: 'Duolingo'},
                        {data: 'pg_study_gap', title: 'Study Gap'},
                        {data: 'is_active', title: 'Status'},
                        {data: 'action', title: 'Action', orderable: false, searchable: false},
                    ]
                });
            }

            $('.filter').on('click', function () {

                let pathway = $('.pathway').val(),
                    graduation_level = $('.graduation_level').val(),
                    cgpa = $('.cgpa').val(),
                    ielts = $('.ielts').val(),
                    duolingo = $('.duolingo').val();

                $('#datatable').DataTable().destroy();

                load_datatable(pathway, graduation_level, cgpa, ielts, duolingo);

            });
        });

    </script>

@endpush
