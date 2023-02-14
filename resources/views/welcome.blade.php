@extends('layouts.login')

@section('title')
    Registration | Creative Global Consultancy
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">

                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-4">
                                <h5 class="text-primary">Welcome !</h5>
                                <p>Sign in to continue to <br> <b>Creative Global Consultancy.</b></p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ asset('') }}assets/images/profile-img.png" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

                <div class="card-body pt-0">
                    <div>
                        <a href="http://www.cgcbd.net/">
                            <div class="avatar-md profile-user-wid mb-4">
                                <span class="avatar-title rounded-circle bg-light">
                                    <img src="{{ asset('') }}assets/images/logo.svg" alt="" class="rounded-circle"
                                         height="34">
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="p-2">
                        <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"><b>Name</b><span class="text-warning"
                                                                           title="Must be Required">*</span></label>

                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               name="name" id="name" value="{{ old('name') }}"
                                               placeholder="Enter Your Name" required>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"><b>Email</b> <span class="text-warning"
                                                                              title="Must be Required">*</span></label>

                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                               name="email" id="email" value="{{ old('email') }}"
                                               placeholder="Enter Email Address" required>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{--row end--}}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone"> <b>Phone</b> <span class="text-warning"
                                                                               title="Must be Required">*</span></label>

                                        <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                               name="phone" id="phone" value="{{ old('phone') }}"
                                               placeholder="Enter Phone Number" required>

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nid"><b>NID</b><span class="text-warning"> (optional)</span></label>

                                        <input type="number" class="form-control @error('nid') is-invalid @enderror"
                                               name="nid" id="nid" value="{{ old('nid') }}"
                                               placeholder="Enter NID NUmber">

                                        @error('nid')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{--row end--}}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="gender_section">
                                        <div class="form-group">
                                            <label class="form-control-label" for="gender"><b>Gender</b><span
                                                    class="text-warning" title="Must be Required">*</span></label>

                                            <select name="gender" class="form-select form-control" required>
                                                <option>Select Gender</option>
                                                <option value="1" @if(old('gender') ==1) selected @endif>Male</option>
                                                <option value="2" @if(old('gender') ==2) selected @endif>Female</option>
                                            </select>

                                            @if ($errors->has('gender'))
                                                <small class="text-danger">
                                                    {{$errors->first('gender')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="gender_section">
                                        <div class="form-group">
                                            <label class="form-control-label" for="birth"><b>Date of Birth</b>
                                                <span class="text-warning" title="Must be Required">*</span>
                                            </label>

                                            <input type="date" class="form-control" id="birth" name="birth"
                                                   value="{{ old('birth') }}" required/>

                                            @if ($errors->has('birth'))
                                                <small class="text-danger">
                                                    {{$errors->first('birth')}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--row end--}}

                            <div class="row">
                                <div class="col-md-12">
                                    {{--graduation level start--}}
                                    <div class="graduation_level">
                                        <div class="form-group">
                                            <label class="form-control-label" for="graduation_level"><b>Graduation
                                                    Level</b><span
                                                    class="text-warning" title="Must be Required">*</span></label>

                                            <select name="graduation_level" id="edu_select" class="form-select form-control" required>
                                                <option>Select Graduation level</option>
                                                <option value="1" @if(old('graduation_level') ==1) selected @endif>Undergraduate</option>
                                                <option value="2" @if(old('graduation_level') ==2) selected @endif>Postgraduate</option>
                                            </select>

                                            @if ($errors->has('graduation_level'))
                                                <small class="text-danger">
                                                    {{$errors->first('graduation_level')}}
                                                </small>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <select name="name_of_exam" id="select_item" class="form-select form-control edu_field"
                                                                        @if((old('graduation_level') ==1) || (old('graduation_level') ==2)) style="display: show" @else style="display: none" @endif required>
                                                                    <option value=""></option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-7">
                                                                <input type="text" id="institute"
                                                                       name="institute"
                                                                       class="form-control edu_field"
                                                                       value="{{ old('institute') }}"
                                                                       placeholder="Enter institute"
                                                                       @if((old('graduation_level') ==1) || (old('graduation_level') ==2)) style="display: show" @else
                                                                       style="display: none" @endif
                                                                       required>
                                                            </div>
                                                        </div>
                                                        {{--row end--}}
                                                    </div>

                                                    <div class="col-md-12 mt-2">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <input type="text"
                                                                       name="gpa"
                                                                       id="gpa"
                                                                       value="{{ old('gpa') }}"
                                                                       class="form-control "
                                                                       placeholder="Enter GPA"
                                                                       @if(old('graduation_level') ==1) style="display: show" @else
                                                                       style="display: none" @endif>

                                                                <input type="text"
                                                                       name="cgpa"
                                                                       id="cgpa"
                                                                       value="{{ old('cgpa') }}"
                                                                       class="form-control "
                                                                       placeholder="Enter CGPA"
                                                                       @if(old('graduation_level') ==2) style="display: show" @else
                                                                       style="display: none" @endif>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <input type="text"
                                                                       name="group"
                                                                       value="{{ old('group') }}"
                                                                       id="group_plc"
                                                                       class="form-control edu_field"
                                                                       placeholder="Enter Group"
                                                                       @if((old('graduation_level') ==1) || (old('graduation_level') ==2)) style="display: show" @else
                                                                       style="display: none" @endif
                                                                       required>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <input type="number"
                                                                       name="pass_year"
                                                                       value="{{ old('pass_year') }}"
                                                                       class="form-control edu_field mb-3"
                                                                       placeholder="Passing Year"
                                                                       @if((old('graduation_level') ==1) || (old('graduation_level') ==2)) style="display: show" @else
                                                                       style="display: none" @endif
                                                                       required>
                                                            </div>
                                                        </div>
                                                        {{--row end--}}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{--graduation level End--}}
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="passport_section">
                                        <div class="row">
                                            <div class="col-md-4 pr-0">
                                                <label for="passport" class="pr-1 mt-1"><b>Passport</b></label>
                                                <input type="checkbox" id="passport_yes" value="1" name="passport" @if(old('passport') ==1) checked @endif>
                                            </div>

                                            <div class="col-md-8">
                                                <input type="number"
                                                       class="form-control passport_field pb-2"
                                                       id="passport_num"
                                                       name="passport_num"
                                                       value="{{ old('passport_num') }}"
                                                       placeholder="Passport Number" disabled/>

                                                @if ($errors->has('passport_num'))
                                                    <small class="text-danger">
                                                        {{$errors->first('passport_num')}}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="ielts_section">
                                        <div class="row">
                                            <div class="col-md-3 pr-0">
                                                <label for="ielts" class="pr-1 mt-1"><b>IELTS</b></label>
                                                <input type="checkbox" id="ielts_yes" value="1" name="ielts" @if(old('ielts') ==1) checked @endif>
                                            </div>

                                            <div class="col-md-9">
                                                <input type="text"
                                                       class="form-control ielts_field pb-2"
                                                       id="ielts_score"
                                                       name="ielts_score"
                                                       value="{{ old('ielts_score') }}"
                                                       placeholder="IELTS Score" disabled/>

                                                @if ($errors->has('ielts_score'))
                                                    <small class="text-danger">
                                                        {{$errors->first('ielts_score')}}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="doulingo_section">
                                        <div class="row">
                                            <div class="col-md-4 pr-0">
                                                <label for="douling" class="pr-1 mt-1"><b>Doulingo</b></label>
                                                <input type="checkbox" id="doulingo_yes" value="1" name="douling" @if(old('douling') ==1) checked @endif>
                                            </div>

                                            <div class="col-md-8">
                                                <input type="number"
                                                       class="form-control doulingo_field pb-2"
                                                       id="douling_score"
                                                       name="douling_score"
                                                       value="{{ old('douling_score') }}"
                                                       placeholder="Doulingo Score" disabled/>

                                                @if ($errors->has('douling_score'))
                                                    <small class="text-danger">
                                                        {{$errors->first('douling_score')}}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--Password--}}
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="password" id="password" value="password" >
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                                    <span style="font-size: 16px"><b>Register</b></span>
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        // Passport checkbok
        $(document).ready(function () {
            $('#passport_yes').on('change', function () {
                if (this.checked) {
                    $(".passport_field").prop( "disabled", false );
                } else {
                    // $(".passport_field").hide();
                    $(".passport_field").prop( "disabled", true );
                }

            });
        });

        // IELTS checkbok
        $(document).ready(function () {
            $('#ielts_yes').on('change', function () {

                if (this.checked) {
                    $(".ielts_field").prop( "disabled", false );
                    // $(".ielts_field").show();
                } else {
                    // $(".ielts_field").hide();
                    $(".ielts_field").prop( "disabled", true );
                }
            });
        });

        // Doulingo checkbok
        $(document).ready(function () {
            $('#doulingo_yes').on('change', function () {

                if (this.checked) {
                    $(".doulingo_field").prop( "disabled", false );
                    // $(".doulingo_field").show();
                } else {
                    // $(".doulingo_field").hide();
                    $(".doulingo_field").prop( "disabled", true );
                }
            });
        });

        // Graduation_Level
        $(document).on('change', '#edu_select', function () {
            let edu_id = $(this).val();

            if (edu_id == "1") {
                // console.log('graduate')
                $("#gpa").show();
                $("#cgpa").hide();
                $('.edu_field').show();
                $('#group_plc').attr('placeholder','Enter group');
            }
            else {
                // console.log('post graduate')
                $("#cgpa").show();
                $("#gpa").hide();
                $('.edu_field').show();
                $('#group_plc').attr('placeholder','Enter Subject');
            }
        })


        // options
        $(document).on('change', '#edu_select', function () {
            let edu_id = $(this).val();

            if (edu_id == "1") {

                $('.edu_field').empty().append("<option value='1'>HSC</option>");

            } else {
                $('.edu_field').empty().append("<option value='2'>Honours</option>" +
                    "<option value='3'>Masters</option>");
            }
        })
    </script>

@endpush
