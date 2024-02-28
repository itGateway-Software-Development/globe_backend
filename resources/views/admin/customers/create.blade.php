@extends('layouts.app')
@section('title', 'Create Customer')

@section('content')
    <div class="card-head-icon">
        <i class='bx bxs-user' style="color: rgb(11, 172, 194);"></i>
        <div>Customer Creation</div>
    </div>
    <div class="card mt-3 p-4">
        <span class="mb-4">Customer Creation</span>

        <form action="{{ route('admin.customers.store') }}" method="post" id="customer_create">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="form-group mb-4">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="form-group mb-4">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="form-group mb-4">
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Address</label>
                        <textarea name="address" id="" cols="30" rows="5" class="form-control" placeholder="Your address">{{ old('address') }}</textarea>
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
    {!! JsValidator::formRequest('App\Http\Requests\Admin\StoreCustomerRequest', '#customer_create') !!}
    <script src="{{asset('js/customer/customer.js')}}"></script>
@endsection
