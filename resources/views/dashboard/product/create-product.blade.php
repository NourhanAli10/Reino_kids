@extends('dashboard.master')

@section('title', 'add product')
@section('content')
    <div class="col-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Product</h4>
                <p class="card-description"> products/create </p>
                <form class="forms-sample" method="POST" action="{{ route('dashboard.create_product') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1"
                            value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrice">Price</label>
                        <input type="number" name="price" class="form-control" id="exampleInputPrice">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputQuantity">quantity</label>
                        <input type="number" name="quantity" class="form-control" id="exampleInputQuantity">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">status</label>
                        <select class="form-control" id="exampleSelectGender">
                            <option>Available</option>
                            <option>Not Available</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" id="exampleSelectGender">
                            <option>Available</option>
                            <option>Not Available</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Brand</label>
                        <select class="form-control" id="exampleSelectGender">
                            <option>Available</option>
                            <option>Not Available</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>

                    <div class="form-group position-relative">
                        <label for="image">Image</label>
                        <div class="input-group col-12">
                            <input type="file" name="image" id="image" class="form-control file-upload-info"
                                placeholder="Upload Image">

                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

@endsection
