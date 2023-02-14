@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body p-4">
                    <h4 class="card-title mt-2 mb-4">Create Category</h4>
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label" ><b>Category Name</b><span class="text-warning" title="Must be Required">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" >
                                <span class="text-warning">{{ $errors->first('name') }}</span>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-8">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
@endsection
