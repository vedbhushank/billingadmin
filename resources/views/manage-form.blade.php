@extends('layouts.master')
@section('maincontent')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Manage Form</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage Form</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Manage Form</h4>
                    <p class="mb-0 text-muted">Please choose action buttons to manage accordingly.</p>
                </div>
                <div class="card-body py-4">
                    <table id="example" class="table table-bordered dt-responsive nowrap align-middle" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>Sr No</th>
                                <th>Header 1</th>
                                <th>SHeader 2</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>lorem ipsum</td>
                                <td>set doler met</td>
                                <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                <td>
                                    <a href="#" title="Edit" class="text-success me-2">
                                        <i class="bx bx-edit fs-5"></i>
                                    </a>
                                    <a href="#" title="Delete" class="text-danger me-2">
                                        <i class="bx bx-trash fs-5"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>lorem ipsum</td>
                                <td>set doler met</td>
                                <td><span class="badge bg-danger-subtle text-danger">Inactive</span></td>
                                <td>
                                    <a href="#" title="Edit" class="text-success me-2">
                                        <i class="bx bx-edit fs-5"></i>
                                    </a>
                                    <a href="#" title="Delete" class="text-danger me-2">
                                        <i class="bx bx-trash fs-5"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- container-fluid -->
@endsection