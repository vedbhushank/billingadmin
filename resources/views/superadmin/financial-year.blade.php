@extends('superadmin.layout.master')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h1 class="h3 fw-semibold mb-sm-0">Financial Year</h1>


                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Financial Year</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Financial Year</h4>
                    <p class="mb-0 text-muted">Please fill or update the below form.</p>
                </div>
                <div class="card-body py-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Success Alert -->
                            <div class="alert alert-success alert-border-left alert-dismissible fade show material-shadow" role="alert">
                                <i class="ri-notification-off-line me-3 align-middle"></i> <strong>Hurray!</strong> Your content has successfully updated!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <!-- Danger Alert -->
                            <div class="alert alert-danger alert-border-left alert-dismissible fade show material-shadow" role="alert">
                                <i class="ri-error-warning-line me-3 align-middle"></i> <strong>Oops!</strong> Something went wrong. Please check again.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-lg-2">
                            <label for="" class="form-label">Financial Year <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                        <div class="col-lg-2">
                            <label for="" class="form-label">Start Date <span class="text-danger">*</span></label>
                            <input type="text" class="form-control datepicker" id="" name="">
                        </div>
                        <div class="col-lg-2">
                            <label for="" class="form-label">End Date <span class="text-danger">*</span></label>
                            <input type="text" class="form-control datepicker" id="" name="">
                        </div>
                        <div class="col-lg-2">
                            <label for="" class="form-label">Sort Order</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                        <div class="col-lg-2">
                            <label for="" class="form-label">Status</label>
                            <select name="" id="" class="form-select">
                                <option value="">-- Choose --</option>
                                <option value="">Active</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>

                        <div class="col-lg-2">
                            <label for="" class="form-label">&nbsp;</label> <br>
                            <button type="button" class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Manage Financial Year</h4>
                    <p class="mb-0 text-muted">Please choose action buttons to manage accordingly.</p>
                </div>
                <div class="card-body py-4">
                    <table id="example" class="table table-bordered dt-responsive nowrap align-middle" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>Sr No</th>
                                <th>Financial Year</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Sorting</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2025-26</td>
                                <td>01-04-2025</td>
                                <td>31-03-2026</td>
                                <td>1</td>
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
                                <td>2026-27</td>
                                <td>01-04-2026</td>
                                <td>31-03-2027</td>
                                <td>2</td>
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