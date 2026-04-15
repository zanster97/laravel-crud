@extends('layout.app')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <h3>Customers</h3>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-2">
                        <a href="{{ route('customers.index') }}" class="btn" style="background-color: #4643d3; color: white;"><i class="fas fa-chevron-left"></i> Back</a>
                    </div>

                </div>

            </div>
            <div class="card-body">
                <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="image">
                                @error('file')
                                    <label for="file" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                                @error('first_name')
                                    <label for="first_name" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                @error('last_name')
                                    <label for="last_name" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <label for="email" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <label for="phone" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="">Bank Account Number</label>
                                <input type="text" class="form-control" name="bank_account_number" value="{{ old('bank_account_number') }}">
                                @error('bank_account_number')
                                    <label for="bank_account_number" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="">About</label>
                                <textarea name="about" class="form-control">{{ old('about') }}</textarea>
                                @error('about')
                                    <label for="about" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Create</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
