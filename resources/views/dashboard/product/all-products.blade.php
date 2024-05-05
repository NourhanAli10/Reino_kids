@extends('dashboard.master')

@section('content')

<div class="col-lg-9 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-9">
                    <h4 class="card-title">Brands</h4>
                    <a href="#" class="d-block mb-4">dashboard/brands</a>
                </div>
                <div class="col-3 text-end">
                    <a href="" class="btn btn-lg category-btn">Add new brand</a>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th> ID </th>
                        <th> Name </th>
                        <th> Status </th>
                        <th> Created at </th>
                        <th> Updated at </th>
                        <th> Created by</th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>

                            <tr>
                                <td>  </td>
                                <td> </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td> </td>
                                <td>
                                    <a href="" class="btn btn-md px-5 fs-6 py-3 btn-rounded">Edit</a>

                                        <button type="submit" class="btn btn-md mt-2 px-5 py-3 fs-6 btn-rounded delete-btn">Delete</button>

                                </td>
                            </tr>


                    <tr>
                        <td colspan="7" class="text-center">No Brands are currently here</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
