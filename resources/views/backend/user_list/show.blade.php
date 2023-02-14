@extends('layouts.backend')

@section('title')
    Profile Details | Creative Global Consultancy
@endsection

@section('content')

    {{--Personal Informations start--}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Personal Informations</h4>
                </div>
                <div class="card-body">
                    <div class="row mt-4">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>NID</th>
                                    <th>Passport</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>
                                        <span>{{ $users->name }}</span>
                                    </td>
                                    <td>
                                        <span>{{  $users->email }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $users->phone }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $users->nid }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $users->passport_num }}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th>Date of Birth</th>
                                    <th>Gender</th>
                                    <th>Language</th>
                                    <th>Score</th>
                                    {{-- <th>Blood Group</th>
                                    <th>Religion</th>
                                    <th>Father Name</th> --}}
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>
                                        <span>{{ $users->birth }}</span>
                                    </td>
                                    <td>
                                        @if($users->gender)
                                            <span>{{ ($users->gender == "1") ? 'Male' : 'Female'}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if( !empty($users->ielts or $users->toefl or $users->douling))
                                            @if($users->ielts == 1)
                                                <span>{{ config(('default.language.ielts')) }}</span> <br>
                                            @endif
        
                                            @if($users->toefl == 1)
                                                <span>{{ config(('default.language.toefl')) }}</span> <br>
                                            @endif
        
                                            @if($users->douling == 1)
                                                <span>{{ config(('default.language.douling')) }}</span> <br>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if( !empty($users->ielts_score or $users->toefl_score or $users->douling_score))
                                            @if(!empty($users->ielts_score))
                                                <span>{{ ($users->ielts_score) }}</span> <br>
                                            @endif
        
                                            @if(!empty($users->toefl_score))
                                                <span>{{ ($users->toefl_score) }}</span> <br>
                                            @endif
        
                                            @if(!empty($users->douling_score))
                                                <span>{{ ($users->douling_score) }}</span> <br>
                                            @endif
                                        @endif
                                    </td>
                                    {{-- <td>
                                        <span>{{ ($users->blood == "1") ? 'A+' : ''}}</span>
                                        <span>{{ ($users->blood == "2") ? 'A-' : ''}}</span>
                                        <span>{{ ($users->blood == "3") ? 'B+' : ''}}</span>
                                        <span>{{ ($users->blood == "4") ? 'B-' : ''}}</span>
                                        <span>{{ ($users->blood == "5") ? 'AB+' : ''}}</span>
                                        <span>{{ ($users->blood == "6") ? 'AB-' : ''}}</span>
                                        <span>{{ ($users->blood == "7") ? 'O+' : ''}}</span>
                                        <span>{{ ($users->blood == "8") ? 'O-' : ''}}</span>
                                    </td>
                                    <td>

                                        <span>{{ ($users->religion == "1") ? 'Islam' : ''}}</span>
                                        <span>{{ ($users->religion == "2") ? 'Hinduism' : ''}}</span>
                                        <span>{{ ($users->religion == "3") ? 'Buddhism' : ''}}</span>
                                        <span>{{ ($users->religion == "4") ? 'Christianity' : ''}}</span>
                                        <span>{{ ($users->religion == "5") ? 'Other' : ''}}</span>
                                    </td>
                                    <td>
                                        <span>{{  $users->father }}</span>
                                    </td> --}}
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- <div class="row mt-4">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th>Mother Name</th>
                                    <th>Reference</th>
                                    <th>facebook User Name</th>
                                    <th>Running University</th>
                                    <th>Expected Subject</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>
                                        <span>{{  $users->mother }}</span>
                                    </td>
                                    <td>
                                        <span>{{  $users->reference }}</span>
                                    </td>
                                    <td>
                                        <span>{{  $users->facebook }}</span>
                                    </td>
                                    <td>
                                        <span>{{  $users->runiversity }}</span>
                                    </td>
                                    <td>
                                        <span>{{  $users->expsubject }}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th>Gurdian Phone Number</th>
                                    <th>Present Address</th>
                                    <th>Permanent Address</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>
                                        <span>{{  $users->gurdian_phone }}</span>
                                    </td>
                                    <td>
                                        <span>{{  $users->paddress }}</span>
                                    </td>
                                    <td>
                                        <span>{{  $users->peraddress }}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{--End personal Informations --}}

    {{--Educations Details start--}}

    <div class="row">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Educations Details</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center table-nowrap mb-0">
                            <thead class="thead-light">
                            <tr>
                                <th>Graduation Level</th>
                                <th>Name of exam</th>
                                <th>GPA/CGPA</th>
                                <th>Group</th>
                                <th>Institute</th>
                                {{-- <th>Board</th> --}}
                                <th>Passing Year</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{-- @foreach($educations as $education) --}}
                            <tr>
                                <td>
                                    @if($users->graduation_level == '1')
                                    Undergraduate
                                    @elseif($users->graduation_level == '2')
                                    Postgraduate
                                    @else
                                    @endif
                                </td>
                                <td>
                                    @if($users->name_of_exam == '1')
                                    HSC
                                    @elseif($users->name_of_exam == '2')
                                    Honours
                                    @elseif($users->name_of_exam == '3')
                                    Masters
                                    @else
                                    @endif
                                </td>
                                <td>{{  $users->gpa }}  {{  $users->cgpa }}</td>
                                <td>{{  $users->group }}</td>
                                <td>{{  $users->institute }}</td>
                                {{-- <td>{{  $user->board }}</td> --}}
                                <td>{{  $users->pass_year }}</td>
                            </tr>
                            {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Language Proficiency start--}}

    {{-- <div class="row">
        <div class="table-responsive">
            <table class="table text-center">
                <thead class="thead-light">
                <tr>
                    <th>Language</th>
                    <th>Score</th>
                    <th>Publications/Research Paper</th>
                </tr>
                </thead>

                <tbody>

                        <tr>
                            <td>
                                @if( !empty(Auth::user()->ielts or Auth::user()->toefl or Auth::user()->douling))
                                    @if(Auth::user()->ielts == 1)
                                        <span>{{ config(('default.language.ielts')) }}</span> <br>
                                    @endif

                                    @if(Auth::user()->toefl == 1)
                                        <span>{{ config(('default.language.toefl')) }}</span> <br>
                                    @endif

                                    @if(Auth::user()->douling == 1)
                                        <span>{{ config(('default.language.douling')) }}</span> <br>
                                    @endif
                                @endif
                            </td>
                            <td>
                                @if( !empty(Auth::user()->ielts_score or Auth::user()->toefl_score or Auth::user()->douling_score))
                                    @if(!empty(Auth::user()->ielts_score))
                                        <span>{{ (Auth::user()->ielts_score) }}</span> <br>
                                    @endif

                                    @if(!empty(Auth::user()->toefl_score))
                                        <span>{{ (Auth::user()->toefl_score) }}</span> <br>
                                    @endif

                                    @if(!empty(Auth::user()->douling_score))
                                        <span>{{ (Auth::user()->douling_score) }}</span> <br>
                                    @endif
                                @endif
                            </td>
                            <td>
                                @if( !empty(Auth::user()->ielts_publication or Auth::user()->toefl_publication or Auth::user()->douling_publication))
                                    @if(!empty(Auth::user()->ielts_publication))
                                        <a class="nav-link" target="_blank" href="{{ Auth::user()->ielts_publication }}">
                                            <i class="fas fa-cloud-download-alt"></i>
                                            Dawnload
                                        </a>
                                    @endif

                                    @if(!empty(Auth::user()->toefl_publication))
                                        <a class="nav-link" target="_blank" href="{{ Auth::user()->toefl_publication }}">
                                            <i class="fas fa-cloud-download-alt"></i>
                                            Dawnload
                                        </a>
                                    @endif

                                    @if(!empty(Auth::user()->douling_publication))
                                        <a class="nav-link" target="_blank" href="{{ Auth::user()->douling_publication }}">
                                            <i class="fas fa-cloud-download-alt"></i>
                                            Dawnload
                                        </a>
                                    @endif
                                @endif
                            </td>
                        </tr>

                </tbody>
            </table>
        </div>
    </div> --}}

    {{--End Language Proficiency start--}}
@endsection
