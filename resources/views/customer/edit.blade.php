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
                <form action="{{ route('customers.update',$customer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="col-md-4 d-flex flex-column justify-content-left align-items-left text-white px-3 py-3"
                                    style="background: linear-gradient(135deg, #6a11cb, #2575fc); min-height: 150px; width:auto">
                                <img src="{{ asset($customer->image) }}"
                                        alt="{{ asset('deafult-images/avatar.png') }}"
                                        class="rounded-circle border border-3 border-white mb-3"
                                        width="100"
                                        height="100">
                                <label for="avatar" class="form-label d-block px-4">Image</label>
                            </div>
                            @error('file')
                                <label for="file" class="alert alert-danger mt-1" >{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" name="first_name" value="{{ $customer->first_name }}">
                                @error('first_name')
                                    <label for="first_name" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="{{ $customer->last_name }}">
                                @error('last_name')
                                    <label for="last_name" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $customer->email }}">
                                @error('email')
                                    <label for="email" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="tel" class="form-control" name="phone" value="{{ $customer->phone }}">
                                @error('phone')
                                    <label for="phone" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="">Bank Account Number</label>
                                <input type="text" class="form-control" name="bank_account_number" value="{{ $customer->bank_account_number }}">
                                @error('bank_account_number')
                                    <label for="bank_account_number" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="">About</label>
                                <textarea name="about" class="form-control">{{ $customer->about }}</textarea>
                                @error('about')
                                    <label for="about" class="alert alert-danger mt-1" >{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i>Update</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
