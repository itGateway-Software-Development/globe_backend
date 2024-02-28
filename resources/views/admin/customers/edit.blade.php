@extends('layouts.app')
@section('title', 'Edit Customer')

@section('content')
    <div class="card-head-icon">
        <i class='bx bxs-user' style="color: rgb(11, 172, 194);"></i>
        <div>Customer Edition</div>
    </div>
    <div class="card mt-3 p-4">
        <span class="mb-4">Customer Edition</span>

        <form action="{{ route('admin.customers.update', $customer->id) }}" method="post" id="customer_edit">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="form-group mb-4">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $customer->name ?? '') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="form-group mb-4">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $customer->email ?? '') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="form-group mb-4">
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone', $customer->phone ?? '') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Address</label>
                        <textarea name="address" id="" cols="30" rows="5" class="form-control" placeholder="Your address">{{ old('address', $customer->address ?? '') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-secondary back-btn">Cancel</button>
                    <button class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\UpdateCustomerRequest', '#customer_edit') !!}

@endsection
