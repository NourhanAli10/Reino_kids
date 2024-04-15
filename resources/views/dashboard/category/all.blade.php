@extends('dashboard.master')

@section('title')

@push('css')

<style>


    .category-btn {
        background-color: #ee6394;
        color: #ffffff;
        padding: 20px 20px !important;

    }

</style>
@endpush

@section('content')

<div class="col-lg-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
            <div class="col-9">
                <h4 class="card-title">Categories</h4>
                <a href="#" class="d-block mb-4">dashboard/categories</a>
            </div>
            <div class="col-3 text-end">
                <a href="{{ route('admin.add-category') }}" class="btn btn-lg category-btn">Add new category</a>
            </div>
        </div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th> ID </th>
              <th> Name </th>
              <th> Status </th>
              <th> Created at </th>
              <th> Updated at </th>
              <th> Operations </th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td> {{ $category->id }} </td>
              <td> {{ $category->name }} </td>
              <td> {{ $category->status  }} </td>
              <td> {{ $category->created_at }} </td>
              <td> {{ $category->updated_at }} </td>
              <td>
                <a href="{{ route('admin.update-category', $category->id  ) }}" class="btn btn-lg ">Edit</a>
                <a href="#" class="btn btn-lg">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
