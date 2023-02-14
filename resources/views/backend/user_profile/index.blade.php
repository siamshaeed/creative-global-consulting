@extends('layouts.backend')

@section('title')
    User Profile | Creative Global Consultancy
@endsection

@section('content')
    {{--Button--}}
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-5"></div>
        <div class="col-md-2">
            <div class="text-center">
                <a href="{{ route('profile.edit', $id = Auth::user()->id) }}"
                   class="btn btn-primary waves-effect waves-light ">Profile Edit
                    <i class="fas fa-edit ml-1"></i>
                </a>
            </div>
        </div>
    </div>
    {{--  End Button--}}

    {{--Personal Informations start--}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Profile Informations</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table text-center">
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
                                        <span>{{ auth()->user()->name }}</span>
                                    </td>
                                    <td>
                                        <span>{{ auth()->user()->email }}</span>
                                    </td>
                                    <td>
                                        <span>{{ auth()->user()->phone }}</span>
                                    </td>
                                    <td>
                                        <span>{{ auth()->user()->nid }}</span>
                                    </td>
                                    <td>
                                        <span>{{ auth()->user()->passport }}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="thead-light">
                                <tr>
                                    <th>Date of Birth</th>
                                    <th>Gender</th>
                                    <th>Blood Group</th>
                                    <th>Religion</th>
                                    <th>Father Name</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>

                                    <td>
                                        <span>{{ auth()->user()->birth }}</span>
                                    </td>

                                    <td>
                                        @if(auth()->user()->gender)
                                            <span>{{ (auth()->user()->gender == "1") ? 'Male' : 'Female'}}</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if(auth()->user()->blood == 0)
                                            <span></span>
                                        @elseif(auth()->user()->blood == 1)
                                            <span>A+</span>
                                        @elseif(auth()->user()->blood == 2)
                                            <span>A-</span>
                                        @elseif(auth()->user()->blood == 3)
                                            <span>B+</span>
                                        @elseif(auth()->user()->blood == 4)
                                            <span>B-</span>
                                        @elseif(auth()->user()->blood == 5)
                                            <span>AB+</span>
                                        @elseif(auth()->user()->blood == 6)
                                            <span>AB-</span>
                                        @elseif(auth()->user()->blood == 7)
                                            <span>O+</span>
                                        @elseif(auth()->user()->blood == 8)
                                            <span>O-</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if(auth()->user()->religion == 0)
                                            <span></span>
                                        @elseif(auth()->user()->religion == 1)
                                            <span>Islam</span>
                                        @elseif(auth()->user()->religion == 2)
                                            <span>Hinduism</span>
                                        @elseif(auth()->user()->religion == 3)
                                            <span>Buddhism</span>
                                        @elseif(auth()->user()->religion == 4)
                                            <span>Christianity</span>
                                        @elseif(auth()->user()->religion == 5)
                                            <span>Other</span>
                                        @endif
                                    </td>

                                    <td>
                                        <span>{{ auth()->user()->father }}</span>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="table-responsive">
                            <table class="table text-center">
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
                                        <span>{{ auth()->user()->mother }}</span>
                                    </td>
                                    <td>
                                        <span>{{ auth()->user()->reference }}</span>
                                    </td>
                                    <td>
                                        <span>{{ auth()->user()->facebook }}</span>
                                    </td>
                                    <td>
                                        <span>{{ auth()->user()->runiversity }}</span>
                                    </td>
                                    <td>
                                        <span>{{ auth()->user()->expsubject }}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="table-responsive">
                            <table class="table text-center">
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
                                        <span>{{ auth()->user()->gurdian_phone }}</span>
                                    </td>
                                    <td>
                                        <span>{{ auth()->user()->paddress }}</span>
                                    </td>
                                    <td>
                                        <span>{{ auth()->user()->peraddress }}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--End personal Informations --}}

    {{--Educations Details start--}}
    {{-- <div class="row">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Educations Details</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center table-nowrap">
                            <thead class="thead-light">
                            <tr>
                                <th>Name of exam</th>
                                <th>GPA/CGPA</th>
                                <th>Group</th>
                                <th>Institute</th>
                                <th>Board</th>
                                <th>Passing Year</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($educations as $education)
                                @if($education)
                                    <tr>
                                        <td>{{ $education->edu_name }}</td>
                                        <td>{{ $education->gpa }}</td>
                                        <td>{{ $education->group }}</td>
                                        <td>{{ $education->institute }}</td>
                                        <td>{{ $education->board }}</td>
                                        <td>{{ $education->pass_year }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{--Language Proficiency start--}}
    {{-- <div class="row ">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Language Proficiency</h4>
                </div>
                <div class="card-body">
                    <div class="row">
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
                                @foreach($languages as $language)
                                    @if($language)
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
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{--End Language Proficiency start--}}
@endsection
