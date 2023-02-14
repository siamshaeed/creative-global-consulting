@extends('layouts.backend')

@section('title')
    Create Authority | Creative Global Consultancy
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>
                                <b>Create Authority</b>
                            </h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('authority.index') }}" class="btn btn-primary text-right">
                                &#8617; Back
                            </a>
                        </div>
                    </div>
                </div>

                <form method="POST" action="{{ route('authority.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <strong>Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-control-label" for="name"> <b>Name</b> <span
                                                    class="text-danger" title="Must be">*</span></label>

                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter University Name" value="{{ old('name') }}"
                                                maxlength="191" required />

                                            @if ($errors->has('name'))
                                                <small class="text-danger">
                                                    {{ $errors->first('name') }}
                                                </small>
                                            @endif
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
                                            <label for="nid"><b>NID</b><span class="text-warning">
                                                    (optional)</span></label>

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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="gender_section">
                                            <div class="form-group">
                                                <label class="form-control-label" for="gender"><b>Gender</b><span
                                                        class="text-warning" title="Must be Required">*</span></label>

                                                <select name="gender" class="form-select form-control" required>
                                                    <option>Select Gender</option>
                                                    <option value="1"
                                                        @if (old('gender') == 1) selected @endif>Male</option>
                                                    <option value="2"
                                                        @if (old('gender') == 2) selected @endif>Female</option>
                                                </select>

                                                @if ($errors->has('gender'))
                                                    <small class="text-danger">
                                                        {{ $errors->first('gender') }}
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
                                                    value="{{ old('birth') }}" required />

                                                @if ($errors->has('birth'))
                                                    <small class="text-danger">
                                                        {{ $errors->first('birth') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="role_id_section">
                                            <div class="form-group">
                                                <label class="form-control-label" for="role_id"><b>Role</b><span
                                                        class="text-warning" title="Must be Required">*</span></label>

                                                <select name="role_id" class="form-select form-control" required>
                                                    <option>Select Role</option>
                                                    @foreach ($roles as $roleclass)
                                                        <option value="{{ $roleclass->id }}"> {{ $roleclass->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('role_id'))
                                                    <small class="text-danger">
                                                        {{ $errors->first('role_id') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="password_section">
                                            <div class="form-group">
                                                <label class="form-control-label" for="password"><b>Password</b>
                                                    <span class="text-warning" title="Must be Required">*</span>
                                                </label>

                                                <input type="password" class="form-control" id="password"
                                                    name="password" value="{{ old('password') }}" required />

                                                @if ($errors->has('password'))
                                                    <small class="text-danger">
                                                        {{ $errors->first('password') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary float-right mb-3">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
