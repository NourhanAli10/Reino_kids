@extends('dashboard.master')

@section('title')

@section('content')

    <div class="col-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Category</h4>
                @if (session()->has('success'))
                    <div class="alert alert-success text-center ">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="{{ route('admin.update-category', $category->id  ) }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>
                        <input type="text" name="name"class="form-control" id="exampleInputName1" placeholder="Name"
                            value="{{ $category->name}}">
                        @error('name')
                            <div class="text-danger font-weight-bold my-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectStatus">Status</label>
                        <select class="form-control p-3" name="status"id="exampleSelectStatus">
                            <option @selected($category->status === 'Available') value="Available">Available</option>
                            <option @selected($category->status === 'Not available') value="Not available">Not available</option>
                        </select>
                    </div>
                    <div class="text-end mt-5">
                        <button type="submit" class="btn btn-lg btn-primary me-2">Submit</button>
                        <button class="btn btn-lg btn-light">Cancel</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection
