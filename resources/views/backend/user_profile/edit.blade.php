@extends('layouts.backend')

@section('title')
    Profile Edit | Creative Global Consultancy
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Profile Update
                    </h5>
                </div>
            </div>

            <form method="POST"
                  action="{{route('profile.update', $id = Auth::user()->id)}}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personal Informations</h4>
                    </div>

                    <div class="card-body">

                        {{--Personal Informations Start--}}

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label class="form-control-label" for="name"><b>Name</b><span class="text-warning"
                                                                                                  title="Must be Required">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Enter permission name"
                                           value="{{old('name', $id = Auth::user()->name)}}"
                                           maxlength="191"
                                           required/>

                                    @if ($errors->has('name'))
                                        <small class="text-danger">
                                            {{$errors->first('name')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="email"><b>Email</b><span class="text-warning"
                                                                                                    title="Must be Required">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Enter Email Address"
                                           value="{{old('email', $id = Auth::user()->email)}}"
                                           maxlength="191"
                                           required/>

                                    @if ($errors->has('email'))
                                        <small class="text-danger">
                                            {{$errors->first('email')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="phone"><b>Phone</b>
                                        <span class="text-warning" title="Must be Required">*</span>
                                    </label>

                                    <input type="number" class="form-control" id="phone" name="phone"
                                           placeholder="Enter Phone Number"
                                           value="{{old('phone', $id = Auth::user()->phone)}}"
                                           maxlength="191"
                                           required/>

                                    @if ($errors->has('phone'))
                                        <small class="text-danger">
                                            {{$errors->first('phone')}}
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nid"> <b>NID Number</b></label>
                                    <input type="number" class="form-control" id="nid" name="nid"
                                           placeholder="Enter NID Number"
                                           value="{{old('nid', $id = Auth::user()->nid)}}"
                                           maxlength="191"
                                           required/>

                                    @if ($errors->has('nid'))
                                        <small class="text-danger">
                                            {{$errors->first('nid')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="passport"><b>Passport</b></label>
                                    <input type="number" class="form-control" id="passport" name="passport"
                                           placeholder="Enter Passport Number"
                                           value="{{old('passport', $id = Auth::user()->passport)}}"
                                           maxlength="191"
                                           required/>

                                    @if ($errors->has('passport'))
                                        <small class="text-danger">
                                            {{$errors->first('passport')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="birth"><b>Date of Birth</b>
                                        <span class="text-warning" title="Must be Required">*</span>
                                    </label>
                                    <input type="date" class="form-control" id="birth" name="birth"
                                           value="{{old('birth', Auth::user()->birth)}}"
                                           maxlength="191"
                                           required/>

                                    @if ($errors->has('birth'))
                                        <small class="text-danger">
                                            {{$errors->first('birth')}}
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="gender"><b>Gender</b><span
                                            class="text-warning" title="Must be Required">*</span></label>
                                    <select name="gender" class="form-select form-control" required>
                                        <option>Select Gender</option>
                                        <option {{ (Auth::user()->gender == "1") ? 'selected' : ''}} value="1">Male
                                        </option>
                                        <option {{ (Auth::user()->gender == "2") ? 'selected' : ''}} value="2">Female
                                        </option>
                                    </select>

                                    @if ($errors->has('gender'))
                                        <small class="text-danger">
                                            {{$errors->first('gender')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="blood"><b>Bload Group</b></label>
{{--                                    <input type="text" class="form-control" id="blood" name="blood"--}}
{{--                                           placeholder="Enter Bload Group"--}}
{{--                                           value="{{old('blood', $id = Auth::user()->blood)}}"/>--}}

                                    <select name="blood" class="form-select form-control">
                                        <option value="0">Select Bload Group</option>
                                        <option {{ (Auth::user()->blood == "1") ? 'selected' : ''}} value="1">A+</option>
                                        <option {{ (Auth::user()->blood == "2") ? 'selected' : ''}} value="2">A-</option>
                                        <option {{ (Auth::user()->blood == "3") ? 'selected' : ''}} value="3">B+</option>
                                        <option {{ (Auth::user()->blood == "4") ? 'selected' : ''}} value="4">B-</option>
                                        <option {{ (Auth::user()->blood == "5") ? 'selected' : ''}} value="5">AB+</option>
                                        <option {{ (Auth::user()->blood == "6") ? 'selected' : ''}} value="6">AB-</option>
                                        <option {{ (Auth::user()->blood == "7") ? 'selected' : ''}} value="7">O+</option>
                                        <option {{ (Auth::user()->blood == "8") ? 'selected' : ''}} value="8">O-</option>
                                    </select>

                                    @if ($errors->has('blood'))
                                        <small class="text-danger">
                                            {{$errors->first('blood')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="religion"><b>Religion</b></label>
                                    <select name="religion" class="form-select form-control">
                                        <option value="0">Select Religion</option>
                                        <option {{ (Auth::user()->religion == "1") ? 'selected' : ''}} value="1">Islam</option>
                                        <option {{ (Auth::user()->religion == "2") ? 'selected' : ''}} value="2">Hinduism</option>
                                        <option {{ (Auth::user()->religion == "3") ? 'selected' : ''}} value="3">Buddhism</option>
                                        <option {{ (Auth::user()->religion == "4") ? 'selected' : ''}} value="4">Christianity</option>
                                        <option {{ (Auth::user()->religion == "5") ? 'selected' : ''}} value="5">Other</option>
                                    </select>

                                    @if ($errors->has('religion'))
                                        <small class="text-danger">
                                            {{$errors->first('religion')}}
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="father"><b>Father Name</b></label>
                                    <input type="text" class="form-control" id="father" name="father"
                                           placeholder="Enter Father Name"
                                           value="{{old('father', $id = Auth::user()->father)}}"/>

                                    @if ($errors->has('father'))
                                        <small class="text-danger">
                                            {{$errors->first('father')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="mother"><b>Mother Name</b></label>
                                    <input type="text" class="form-control" id="mother" name="mother"
                                           placeholder="Enter Mother Name"
                                           value="{{old('mother', $id = Auth::user()->mother)}}"/>

                                    @if ($errors->has('mother'))
                                        <small class="text-danger">
                                            {{$errors->first('mother')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="reference"><b>Reference</b></label>
                                    <input type="text" class="form-control" id="reference" name="reference"
                                           placeholder="Enter Reference Name"
                                           value="{{old('reference', $id = Auth::user()->reference)}}"/>

                                    @if ($errors->has('reference'))
                                        <small class="text-danger">
                                            {{$errors->first('reference')}}
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="facebook"><b>Facebook User Name</b></label>
                                    <input type="text" class="form-control" id="facebook" name="facebook"
                                           placeholder="Enter Facebook User Name"
                                           value="{{old('facebook', $id = Auth::user()->facebook)}}"/>

                                    @if ($errors->has('facebook'))
                                        <small class="text-danger">
                                            {{$errors->first('facebook')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="runiversity"><b>Running
                                            University</b></label>
                                    <input type="text" class="form-control" id="runiversity" name="runiversity"
                                           placeholder="Enter Running University"
                                           value="{{old('runiversity', $id = Auth::user()->runiversity)}}"/>

                                    @if ($errors->has('runiversity'))
                                        <small class="text-danger">
                                            {{$errors->first('runiversity')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="expsubject"><b>Expected Subject</b></label>
                                    <input type="text" class="form-control" id="expsubject" name="expsubject"
                                           placeholder="Enter Expected Subject"
                                           value="{{old('expsubject', $id = Auth::user()->expsubject)}}"/>

                                    @if ($errors->has('expsubject'))
                                        <small class="text-danger">
                                            {{$errors->first('expsubject')}}
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="gurdian_phone"><b>Guardian Cell
                                            No: </b></label>
                                    <input type="number" class="form-control" id="gurdian_phone" name="gurdian_phone"
                                           placeholder="Enter Guardian Cell No"
                                           value="{{old('gurdian_phone', $id = Auth::user()->gurdian_phone)}}"/>

                                    @if ($errors->has('gurdian_phone'))
                                        <small class="text-danger">
                                            {{$errors->first('gurdian_phone')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="paddress"><b>Present Address</b></label>
                                    {{--                                    <input type="text" class="form-control" id="paddress" name="paddress"--}}
                                    {{--                                           placeholder="Enter Present Address"--}}
                                    {{--                                           value="{{old('paddress', $id = Auth::user()->paddress)}}"/>--}}
                                    <textarea name="paddress"
                                              class="form-control"
                                              id="paddress"
                                              rows="3"
                                              cols="10">{{old('paddress', $id = Auth::user()->paddress)}}</textarea>

                                    @if ($errors->has('paddress'))
                                        <small class="text-danger">
                                            {{$errors->first('paddress')}}
                                        </small>
                                    @endif

                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="peraddress"><b>Permanrnt Address</b></label>
                                    <textarea name="peraddress"
                                              class="form-control"
                                              id="peraddress"
                                              rows="3"
                                              cols="10">{{old('peraddress', $id = Auth::user()->peraddress)}}</textarea>

                                    @if ($errors->has('peraddress'))
                                        <small class="text-danger">
                                            {{$errors->first('peraddress')}}
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- End Personal Informations--}}

                {{--Educations Details Start--}}

{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <div class="card-title">--}}
{{--                            <h4 class="card-title">Educations Details</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="table-responsive educations_table">--}}
{{--                                <table class="table">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th scope="col"><b>Name of exam</b> <span class="text-warning"--}}
{{--                                                                                  title="Must be Required">*</span></th>--}}
{{--                                        <th scope="col"><b>GPA/CGPA</b> <span class="text-warning"--}}
{{--                                                                              title="Must be Required">*</span></th>--}}
{{--                                        <th scope="col"><b>Group</b> <span class="text-warning"--}}
{{--                                                                           title="Must be Required">*</span></th>--}}
{{--                                        <th scope="col"><b>Institute</b> <span class="text-warning"--}}
{{--                                                                               title="Must be Required">*</span></th>--}}
{{--                                        <th scope="col"><b>Board</b></th>--}}
{{--                                        <th scope="col"><b>Passing Year</b> <span class="text-warning"--}}
{{--                                                                                  title="Must be Required">*</span></th>--}}
{{--                                        <th scope="col">--}}
{{--                                        </th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}

{{--                                    <tbody>--}}
{{--                                    @if(count($educations)>0)--}}
{{--                                        @foreach($educations as $education)--}}
{{--                                            <tr id="inputFormRow">--}}
{{--                                                --}}{{--Hidden Field--}}
{{--                                                <input type="hidden" id="removeEdu_di" name="education_id[]"--}}
{{--                                                       value="{{$education->id}}"/>--}}

{{--                                                <td>--}}
{{--                                                    <input type="text"--}}
{{--                                                           id="edu_name"--}}
{{--                                                           name="edu_name[]"--}}
{{--                                                           value="{{ $education->edu_name }}"--}}
{{--                                                           class="form-control width-100 quantity"--}}
{{--                                                           required>--}}
{{--                                                </td>--}}

{{--                                                <td>--}}
{{--                                                    <input type="text"--}}
{{--                                                           name="gpa[]"--}}
{{--                                                           value="{{ $education->gpa }}"--}}
{{--                                                           class="form-control width-100 unit_price"--}}
{{--                                                           required>--}}
{{--                                                </td>--}}

{{--                                                <td>--}}
{{--                                                    <input type="text"--}}
{{--                                                           name="group[]"--}}
{{--                                                           value="{{ $education->group }}"--}}
{{--                                                           class="form-control width-100"--}}
{{--                                                           required>--}}
{{--                                                </td>--}}

{{--                                                <td width="255px">--}}
{{--                                                    <input type="text"--}}
{{--                                                           name="institute[]"--}}
{{--                                                           value="{{ $education->institute }}"--}}
{{--                                                           class="form-control width-100 discount"--}}
{{--                                                           required>--}}
{{--                                                </td>--}}

{{--                                                <td>--}}
{{--                                                    <input type="text"--}}
{{--                                                           name="board[]"--}}
{{--                                                           value="{{ $education->board }}"--}}
{{--                                                           class="form-control width-100 sub_total"--}}
{{--                                                           required>--}}
{{--                                                </td>--}}

{{--                                                <td width="100">--}}
{{--                                                    <input type="number"--}}
{{--                                                           name="pass_year[]"--}}
{{--                                                           value="{{ $education->pass_year }}"--}}
{{--                                                           class="form-control width-100 sub_total"--}}
{{--                                                           required>--}}
{{--                                                </td>--}}

{{--                                                <td>--}}
{{--                                                    <p class="btn btn-sm btn-danger" id="removeRow"><i--}}
{{--                                                            class="fa fa-trash"></i></p>--}}
{{--                                                </td>--}}

{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                    @else--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <input type="text"--}}
{{--                                                       id="edu_name"--}}
{{--                                                       name="edu_name[]"--}}
{{--                                                       class="form-control width-100 quantity"--}}
{{--                                                       required>--}}
{{--                                            </td>--}}

{{--                                            <td>--}}
{{--                                                <input type="text"--}}
{{--                                                       name="gpa[]"--}}
{{--                                                       class="form-control width-100 unit_price"--}}
{{--                                                       required>--}}
{{--                                            </td>--}}

{{--                                            <td>--}}
{{--                                                <input type="text"--}}
{{--                                                       name="group[]"--}}
{{--                                                       class="form-control width-100"--}}
{{--                                                       required>--}}
{{--                                            </td>--}}

{{--                                            <td width="255px">--}}
{{--                                                <input type="text"--}}
{{--                                                       name="institute[]"--}}
{{--                                                       class="form-control width-100 discount"--}}
{{--                                                       required>--}}
{{--                                            </td>--}}

{{--                                            <td>--}}
{{--                                                <input type="text"--}}
{{--                                                       name="board[]"--}}
{{--                                                       class="form-control width-100 sub_total"--}}
{{--                                                       required>--}}
{{--                                            </td>--}}

{{--                                            <td width="100">--}}
{{--                                                <input type="number"--}}
{{--                                                       name="pass_year[]"--}}
{{--                                                       class="form-control width-100 sub_total"--}}
{{--                                                       required>--}}
{{--                                            </td>--}}

{{--                                            <td>--}}
{{--                                                <button class="btn btn-sm btn-danger" disabled><i--}}
{{--                                                        class="fa fa-trash"></i></button>--}}
{{--                                            </td>--}}

{{--                                        </tr>--}}
{{--                                    @endif--}}
{{--                                    </tbody>--}}

{{--                                </table>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            --}}{{--add_educations--}}
{{--                            <div class="col-md-12">--}}
{{--                                <button type="button"--}}
{{--                                        class="btn btn-primary btn-datatable-row-action add_educations"--}}
{{--                                        data-toggle="tooltip"--}}
{{--                                        data-placement="top"--}}
{{--                                        title="Add Educations" style="float: right">--}}
{{--                                    <i class="fa fa-plus"></i> Add More--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                {{--End Educations Details--}}

                {{--Language Proficiency Start--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <div class="card-title">--}}
{{--                            <h4 class="card-title">Language Proficiency</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table text-center">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th scope="col"><b>Language</b></th>--}}
{{--                                        <th scope="col"><b>Score</b></th>--}}
{{--                                        <th scope="col"><b>Publications/Research Paper</b></th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}

{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <label for="ielts">IELTS </label>--}}
{{--                                            @if(!empty(Auth::user()->ielts))--}}
{{--                                                <input type="checkbox" id="ielts_check" value="1" name="ielts" checked>--}}
{{--                                            @else--}}
{{--                                                <input type="checkbox" id="ielts_check" value="1" name="ielts">--}}
{{--                                            @endif--}}
{{--                                        </td>--}}

{{--                                        <td>--}}
{{--                                            @if(!empty(Auth::user()->ielts_score))--}}
{{--                                                <input type="text"--}}
{{--                                                       class="form-control ielts_field"--}}
{{--                                                       id="ielts_score"--}}
{{--                                                       name="ielts_score"--}}
{{--                                                       value="{{ Auth::user()->ielts_score }}"--}}
{{--                                                       placeholder="Enter IELTS Score"/>--}}
{{--                                            @else--}}
{{--                                                <input type="text"--}}
{{--                                                       class="form-control ielts_field"--}}
{{--                                                       id="ielts_score"--}}
{{--                                                       name="ielts_score"--}}
{{--                                                       value=""--}}
{{--                                                       style="display: none"--}}
{{--                                                       placeholder="Enter IELTS Score"/>--}}
{{--                                            @endif--}}
{{--                                        </td>--}}

{{--                                        <td>--}}
{{--                                            @if(!empty(Auth::user()->ielts_publication))--}}
{{--                                                <input type="file"--}}
{{--                                                       class="form-control ielts_field"--}}
{{--                                                       id="ielts_publication"--}}
{{--                                                       name="ielts_publication"--}}
{{--                                                       value=""/>--}}
{{--                                                <a class="nav-link" target="_blank"--}}
{{--                                                   href="{{ Auth::user()->ielts_publication }}">--}}
{{--                                                    <i class="fas fa-cloud-download-alt"></i>--}}
{{--                                                    Dawnload--}}
{{--                                                </a>--}}
{{--                                            @else--}}
{{--                                                <input type="file"--}}
{{--                                                       class="form-control ielts_field"--}}
{{--                                                       id="ielts_publication"--}}
{{--                                                       name="ielts_publication"--}}
{{--                                                       style="display: none"--}}
{{--                                                       value=""/>--}}
{{--                                            @endif--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    --}}{{--End Ielts--}}

{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <label for="toefl">TOEFL </label>--}}
{{--                                            @if(!empty(Auth::user()->toefl))--}}
{{--                                                <input type="checkbox" id="toefl_check" value="1" name="toefl" checked>--}}
{{--                                            @else--}}
{{--                                                <input type="checkbox" id="toefl_check" value="1" name="toefl">--}}
{{--                                            @endif--}}
{{--                                        </td>--}}

{{--                                        <td>--}}
{{--                                            @if(!empty(Auth::user()->toefl_score))--}}
{{--                                                <input type="text"--}}
{{--                                                       class="form-control toefl_field"--}}
{{--                                                       id="toefl_score"--}}
{{--                                                       name="toefl_score"--}}
{{--                                                       value="{{ Auth::user()->toefl_score }}"--}}
{{--                                                       placeholder="Enter TOEFL Score"/>--}}
{{--                                            @else--}}
{{--                                                <input type="text"--}}
{{--                                                       class="form-control toefl_field"--}}
{{--                                                       id="toefl_score"--}}
{{--                                                       name="toefl_score"--}}
{{--                                                       value=""--}}
{{--                                                       style="display: none"--}}
{{--                                                       placeholder="Enter TOEFL Score"/>--}}
{{--                                            @endif--}}
{{--                                        </td>--}}

{{--                                        <td>--}}
{{--                                            @if(!empty(Auth::user()->toefl_publication))--}}
{{--                                                <input type="file"--}}
{{--                                                       class="form-control toefl_field"--}}
{{--                                                       id="toefl_publication"--}}
{{--                                                       name="toefl_publication"--}}
{{--                                                       value=""/>--}}
{{--                                                <a class="nav-link" target="_blank"--}}
{{--                                                   href="{{ Auth::user()->toefl_publication }}">--}}
{{--                                                    <i class="fas fa-cloud-download-alt"></i>--}}
{{--                                                    Dawnload--}}
{{--                                                </a>--}}
{{--                                            @else--}}
{{--                                                <input type="file"--}}
{{--                                                       class="form-control toefl_field"--}}
{{--                                                       id="toefl_publication"--}}
{{--                                                       name="toefl_publication"--}}
{{--                                                       style="display: none"--}}
{{--                                                       value=""/>--}}
{{--                                            @endif--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    --}}{{--End Toefl--}}

{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <label for="ielts">Douling </label>--}}

{{--                                            @if(!empty(Auth::user()->douling))--}}
{{--                                                <input type="checkbox" id="douling_check" value="1" name="douling"--}}
{{--                                                       checked>--}}
{{--                                            @else--}}
{{--                                                <input type="checkbox" id="douling_check" value="1" name="douling">--}}
{{--                                            @endif--}}
{{--                                        </td>--}}

{{--                                        <td>--}}
{{--                                            @if(!empty(Auth::user()->douling_score))--}}
{{--                                                <input type="text"--}}
{{--                                                       class="form-control douling_field"--}}
{{--                                                       id="douling_score"--}}
{{--                                                       name="douling_score"--}}
{{--                                                       value="{{ Auth::user()->douling_score }}"--}}
{{--                                                       placeholder="Enter Douling Score"/>--}}
{{--                                            @else--}}
{{--                                                <input type="text"--}}
{{--                                                       class="form-control douling_field"--}}
{{--                                                       id="douling_score"--}}
{{--                                                       name="douling_score"--}}
{{--                                                       value=""--}}
{{--                                                       style="display: none"--}}
{{--                                                       placeholder="Enter Douling Score"/>--}}
{{--                                            @endif--}}
{{--                                        </td>--}}

{{--                                        <td>--}}
{{--                                            @if(!empty(Auth::user()->douling_publication))--}}
{{--                                                <input type="file"--}}
{{--                                                       class="form-control douling_field"--}}
{{--                                                       id="douling_publication"--}}
{{--                                                       name="douling_publication"--}}
{{--                                                       value=""/>--}}
{{--                                                <a class="nav-link" target="_blank"--}}
{{--                                                   href="{{ Auth::user()->douling_publication }}">--}}
{{--                                                    <i class="fas fa-cloud-download-alt"></i>--}}
{{--                                                    Dawnload--}}
{{--                                                </a>--}}
{{--                                            @else--}}
{{--                                                <input type="file"--}}
{{--                                                       class="form-control douling_field"--}}
{{--                                                       id="douling_publication"--}}
{{--                                                       name="douling_publication"--}}
{{--                                                       style="display: none"--}}
{{--                                                       value=""/>--}}
{{--                                            @endif--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    --}}{{--End Douling--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        --}}{{--End Language Proficiency--}}

{{--                    </div>--}}
{{--                </div>--}}



                <div class="card-footer bg-default">
                    <button type="submit" class="btn btn-primary">
                        Profile Update
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection



{{--@push('scripts')--}}
{{--    <script type="text/javascript">--}}
{{--        // add education--}}
{{--        $(".add_educations").click(function () {--}}


{{--            let html = '';--}}

{{--            html += '<tr id="inputFormRow">\--}}
{{--                <td>\--}}
{{--                <input type="text" id="edu_name" name="edu_name[]" class="form-control width-100 quantity" required>\--}}
{{--            </td>\--}}
{{--            <td>\--}}
{{--                <input type="text" name="gpa[]" class="form-control width-100 unit_price" step="2" required>\--}}
{{--            </td>\--}}
{{--            <td>\--}}
{{--                <input type="text" name="group[]" class="form-control width-100" required>\--}}
{{--            </td>\--}}
{{--            <td width="255px">\--}}
{{--                <input type="text" name="institute[]" class="form-control width-100 discount" required>\--}}
{{--            </td>\--}}
{{--            <td>\--}}
{{--                <input type="text" name="board[]" class="form-control width-100 sub_total" required >\--}}
{{--            </td>\--}}
{{--            <td width="100">\--}}
{{--                <input type="number" name="pass_year[]" class="form-control width-100 sub_total" required>\--}}
{{--            </td>\--}}
{{--            <td>\--}}
{{--                <button class="btn btn-sm btn-danger" id="removeRow"><i class="fa fa-trash"></i></button>\--}}
{{--            </td>\--}}
{{--        </tr>';--}}

{{--            $('.educations_table').find('tbody').append(html);--}}

{{--        });--}}

{{--        // remove education row--}}
{{--        $(document).on('click', '#removeRow', function () {--}}

{{--            /*--}}
{{--             * Remove this row--}}
{{--             */--}}

{{--            $(this).closest('#inputFormRow').remove();--}}
{{--        });--}}


{{--        // Language Custom js--}}

{{--        // start ielts--}}
{{--        $(document).ready(function () {--}}
{{--            $('#ielts_check').on('change', function () {--}}

{{--                if (this.checked) {--}}
{{--                    $(".ielts_field").show();--}}
{{--                } else {--}}
{{--                    $(".ielts_field").hide();--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--        // End ielts--}}

{{--        // start Toefl--}}
{{--        $(document).ready(function () {--}}
{{--            $('#toefl_check').on('change', function () {--}}

{{--                if (this.checked) {--}}
{{--                    $(".toefl_field").show();--}}
{{--                } else {--}}
{{--                    $(".toefl_field").hide();--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--        // end Toefl--}}

{{--        // start douling--}}
{{--        $(document).ready(function () {--}}
{{--            $('#douling_check').on('change', function () {--}}

{{--                if (this.checked) {--}}
{{--                    $(".douling_field").show();--}}
{{--                } else {--}}
{{--                    $(".douling_field").hide();--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--        // end douling--}}
{{--    </script>--}}
{{--@endpush--}}
