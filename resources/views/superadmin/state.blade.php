@extends('superadmin.layout.master')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h1 class="h3 fw-semibold mb-sm-0">State</h1>


                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">State</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add State</h4>
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
                        <div class="col-lg-3">
                            <label for="" class="form-label">State Name</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                        <div class="col-lg-2">
                            <label for="" class="form-label">State Code</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                        <div class="col-lg-2">
                            <label for="" class="form-label">Short Name</label>
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
                    <h4 class="card-title">Manage State</h4>
                    <p class="mb-0 text-muted">Please choose action buttons to manage accordingly.</p>
                </div>
                <div class="card-body py-4">
                    <table id="example" class="table table-bordered dt-responsive nowrap align-middle" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>Sr No</th>
                                <th>State Name</th>
                                <th>State Code</th>
                                <th>Short Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Punjab</td>
                                <td>03</td>
                                <td>PB</td>
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
                                <td>Haryana</td>
                                <td>06</td>
                                <td>HR</td>
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
                                <td>3</td>
                                <td>Himachal Pradesh</td>
                                <td>02</td>
                                <td>HP</td>
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
                                <td>4</td>
                                <td>Chandigarh</td>
                                <td>04</td>
                                <td>CH</td>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- container-fluid -->
@endsection