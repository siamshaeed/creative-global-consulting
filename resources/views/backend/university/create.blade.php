@extends('layouts.backend')

@section('title')
    Create University | Creative Global Consultancy
@endsection
@section('content')

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>
                                <b>Create University</b>
                            </h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ url()->previous() }}" class="btn btn-primary text-right">
                                &#8617; Back
                            </a>
                        </div>
                    </div>
                </div>

                <form method="POST" action="{{route('university.store')}}">
                    @csrf
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <strong>Basic Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="name"> <b>University Name</b> <span class="text-danger" title="Must be">*</span></label>

                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter University Name" value="{{old('name')}}"
                                                maxlength="191" required/>

                                            @if ($errors->has('name'))
                                                <small class="text-danger">
                                                    {{$errors->first('name')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="pathway_provider"> <b>Pathway Provider (If any)</b></label>

                                            <select name="pathway_provider" id="pathway_provider" class="form-control">
                                                <option value="">Select One</option>
                                                <option value="Study Group">Study Group</option>
                                                <option value="Direct">Direct</option>
                                            </select>

                                            @if ($errors->has('pathway_provider'))
                                                <small class="text-danger">
                                                    {{$errors->first('pathway_provider')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong>For Undergraduate</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="ug_ac_req_education"> <b>Education</b></label>

                                            <select name="ug_ac_req_education" id="ug_ac_req_education" class="form-control">
                                                <option value="">Select One</option>
                                                <option value="HSC">HSC</option>
                                                <option value="Foundation">Foundation</option>
                                            </select>

                                            @if ($errors->has('ug_ac_req_education'))
                                                <small class="text-danger">
                                                    {{$errors->first('ug_ac_req_education')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="ug_ac_req_gpa"> <b>GPA</b></label>

                                            <input type="number" class="form-control" id="ug_ac_req_gpa" name="ug_ac_req_gpa"
                                                placeholder="Enter GPA" step="0.01" value="{{old('ug_ac_req_gpa')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('ug_ac_req_gpa'))
                                                <small class="text-danger">
                                                    {{$errors->first('ug_ac_req_gpa')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="ug_ac_req_group"> <b>Group</b></label>

                                            <select name="ug_ac_req_group" id="ug_ac_req_group" class="form-control">
                                                <option value="">Select One</option>
                                                <option value="Science">Science</option>
                                                <option value="Commerce">Commerce</option>
                                                <option value="Arts">Arts</option>
                                            </select>

                                            @if ($errors->has('ug_ac_req_group'))
                                                <small class="text-danger">
                                                    {{$errors->first('ug_ac_req_group')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="ug_is_active"> <b>Has IELTS?</b></label>
                                            <p>
                                                <label><input type="radio" name="ug_is_active" class="ug_is_active" value="active" checked > Yes </label>
                                                <label><input type="radio" name="ug_is_active" class="ug_is_active" value="inactive" style="margin-left:30px;"> No </label>
                                            </p>
                                            @if ($errors->has('ug_is_active'))
                                                <small class="text-danger">
                                                    {{$errors->first('ug_is_active')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group mb-2" id="ug_ielts_start">
                                            <label class="form-control-label" for="ug_ielts_start"> <b>IELTS Score Start</b></label>

                                            <input type="number" class="form-control" id="ug_ielts_start_id" name="ug_ielts_start"
                                                placeholder="Enter IELTS Start" step="0.01" value="{{old('ug_ielts_start')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('ug_ielts_start'))
                                                <small class="text-danger">
                                                    {{$errors->first('ug_ielts_start')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group mb-2" id="ug_ielts_end">
                                            <label class="form-control-label" for="ug_ielts_end"> <b>IELTS Score End</b></label>

                                            <input type="number" class="form-control" id="ug_ielts_end_id" name="ug_ielts_end"
                                                placeholder="Enter IELTS End" step="0.01" value="{{old('ug_ielts_end')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('ug_ielts_end'))
                                                <small class="text-danger">
                                                    {{$errors->first('ug_ielts_end')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong>For Postgraduate</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="pg_ac_req_education"> <b>Education</b></label>

                                            <select name="pg_ac_req_education" id="pg_ac_req_education" class="form-control">
                                                <option value="">Select One</option>
                                                <option value="HSC">HSC</option>
                                                <option value="Foundation">Foundation</option>
                                            </select>

                                            @if ($errors->has('pg_ac_req_education'))
                                                <small class="text-danger">
                                                    {{$errors->first('pg_ac_req_education')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="pg_ac_req_cgpa"> <b>CGPA</b></label>

                                            <input type="number" class="form-control" id="pg_ac_req_cgpa" name="pg_ac_req_cgpa"
                                                placeholder="Enter CGPA" step="0.01" value="{{old('pg_ac_req_cgpa')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('pg_ac_req_cgpa'))
                                                <small class="text-danger">
                                                    {{$errors->first('pg_ac_req_cgpa')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="pg_ac_req_group"> <b>Group</b></label>

                                            <select name="pg_ac_req_group" id="pg_ac_req_group" class="form-control">
                                                <option value="">Select One</option>
                                                <option value="Science">Science</option>
                                                <option value="Commerce">Commerce</option>
                                                <option value="Arts">Arts</option>
                                            </select>

                                            @if ($errors->has('pg_ac_req_group'))
                                                <small class="text-danger">
                                                    {{$errors->first('pg_ac_req_group')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="pg_is_active"> <b>Has IELTS?</b></label>
                                            <p>
                                                <label><input type="radio" name="pg_is_active" class="pg_is_active" value="active" checked> Yes </label>
                                                <label><input type="radio" name="pg_is_active" class="pg_is_active" value="inactive" style="margin-left:30px;"> No </label>
                                            </p>
                                            @if ($errors->has('pg_is_active'))
                                                <small class="text-danger">
                                                    {{$errors->first('pg_is_active')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group mb-2" id="pg_ielts_start">
                                            <label class="form-control-label" for="pg_ielts_start"> <b>IELTS Score Start</b></label>

                                            <input type="number" class="form-control" id="pg_ielts_start_id" name="pg_ielts_start"
                                                placeholder="Enter IELTS Score Start" step="0.01" value="{{old('pg_ielts_start')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('pg_ielts_start'))
                                                <small class="text-danger">
                                                    {{$errors->first('pg_ielts_start')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group mb-2" id="pg_ielts_end">
                                            <label class="form-control-label" for="pg_ielts_end"> <b>IELTS Score End</b></label>

                                            <input type="number" class="form-control" id="pg_ielts_end_id" name="pg_ielts_end"
                                                placeholder="Enter IELTS Score End" step="0.01" value="{{old('pg_ielts_end')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('pg_ielts_end'))
                                                <small class="text-danger">
                                                    {{$errors->first('pg_ielts_end')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong>Alternate English Test</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="oietc"> <b>OIETC</b></label>
                                            
                                            <select name="oietc" id="oietc" class="form-control">
                                                <option value="">Select One</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>

                                            @if ($errors->has('oietc'))
                                                <small class="text-danger">
                                                    {{$errors->first('oietc')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="internal_test"> <b>Internal Test</b></label>

                                            <input type="text" class="form-control" id="internal_test" name="internal_test"
                                                placeholder="Enter Internal Test" value="{{old('internal_test')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('internal_test'))
                                                <small class="text-danger">
                                                    {{$errors->first('internal_test')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="moi"> <b>MOI</b></label>

                                            <input type="text" class="form-control" id="moi" name="moi"
                                                placeholder="Enter MOI" value="{{old('moi')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('moi'))
                                                <small class="text-danger">
                                                    {{$errors->first('moi')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="duolingo_is_active"> <b>Has Duolingo?</b></label>
                                            <p>
                                                <label><input type="radio" name="duolingo_is_active" class="duolingo_is_active" value="active" checked> Yes </label>
                                                <label><input type="radio" name="duolingo_is_active" class="duolingo_is_active" value="inactive" style="margin-left:30px;"> No </label>
                                            </p>
                                            @if ($errors->has('duolingo_is_active'))
                                                <small class="text-danger">
                                                    {{$errors->first('duolingo_is_active')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5" id="duolingo_start">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="duolingo_start"> <b>Duolingo Score Start</b></label>

                                            <input type="number" class="form-control" id="duolingo_start_id" name="duolingo_start"
                                                placeholder="Enter Duolingo Start" step="0.01" value="{{old('duolingo_start')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('duolingo_start'))
                                                <small class="text-danger">
                                                    {{$errors->first('duolingo_start')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5" id="duolingo_end">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="duolingo_end"> <b>Duolingo Score End</b></label>

                                            <input type="number" class="form-control" id="duolingo_end_id" name="duolingo_end"
                                                placeholder="Enter Duolingo Score End" step="0.01" value="{{old('duolingo_end')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('duolingo_end'))
                                                <small class="text-danger">
                                                    {{$errors->first('duolingo_end')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong>Others Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="pg_study_gap"> <b>Study Gap</b></label>

                                            <input type="text" class="form-control" id="pg_study_gap" name="pg_study_gap"
                                                placeholder="Enter Study Gap" value="{{old('pg_study_gap')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('pg_study_gap'))
                                                <small class="text-danger">
                                                    {{$errors->first('pg_study_gap')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="tution_fees"> <b>Tution Fees</b></label>

                                            <input type="text" class="form-control" id="tution_fees" name="tution_fees"
                                                placeholder="Enter Tution Fees" step="0.01" value="{{old('tution_fees')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('tution_fees'))
                                                <small class="text-danger">
                                                    {{$errors->first('tution_fees')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="scholarships"> <b>Scholarships</b></label>

                                            <input type="text" class="form-control" id="scholarships" name="scholarships"
                                                placeholder="Enter Scholarships" step="0.01" value="{{old('scholarships')}}"
                                                maxlength="191"/>

                                            @if ($errors->has('scholarships'))
                                                <small class="text-danger">
                                                    {{$errors->first('scholarships')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="remarks"> <b>Remarks</b></label>

                                            <textarea class="form-control" name="remarks" id="remarks" cols="30" rows="1" placeholder="Enter Remarks">{{old('remarks')}}</textarea>

                                            @if ($errors->has('remarks'))
                                                <small class="text-danger">
                                                    {{$errors->first('remarks')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right mb-3">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.ug_is_active').on('change',function(){
                var val = $(this).val();
                
                if(val == 'active') {
                    $("#ug_ielts_start").show();
                    $("#ug_ielts_end").show();
                }else if(val == 'inactive'){
                    $("#ug_ielts_start_id").val('');
                    $("#ug_ielts_end_id").val('');

                    $("#ug_ielts_start").hide();
                    $("#ug_ielts_end").hide();
                }
            })
            
            $('.pg_is_active').on('change',function(){
                var val = $(this).val();
                
                if(val == 'active') {
                    $("#pg_ielts_start").show();
                    $("#pg_ielts_end").show();
                }else if(val == 'inactive'){
                    $("#pg_ielts_start_id").val('');
                    $("#pg_ielts_end_id").val('');

                    $("#pg_ielts_start").hide();
                    $("#pg_ielts_end").hide();
                }
            })

            $('.duolingo_is_active').on('change',function(){
                var val = $(this).val();
                
                if(val == 'active') {
                    $("#duolingo_start").show();
                    $("#duolingo_end").show();
                }else if(val == 'inactive'){
                    $("#duolingo_start_id").val('');
                    $("#duolingo_end_id").val('');
                    
                    $("#duolingo_start").hide();
                    $("#duolingo_end").hide();
                }
            })
        });
    </script>
@endpush
