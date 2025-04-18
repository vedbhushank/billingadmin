@extends('superadmin.layout.master')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h1 class="h3 fw-semibold mb-sm-0">User Role</h1>


                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">User Role</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Assign User Role</h4>
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
                            <label for="" class="form-label">Select User</label>
                            <select name="" id="" class="form-select">
                                <option value="">Choose</option>
                                <option value="">Admin</option>
                                <option value="">Operator</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mt-4">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th colspan="3" class="text-start h5 bg-warning-subtle">Assign User Rights</th>
                                            <th colspan="3" class="text-end h5 bg-warning-subtle">User Role: Admin</th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th>Add</th>
                                            <th>Modify</th>
                                            <th>Delete</th>
                                            <th>View</th>
                                            <th>Print</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-start fw-semibold">Module 1</td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                        </tr>
                                        <tr>
                                            <td class="text-start fw-semibold">Module 2</td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                        </tr>
                                        <tr>
                                            <td class="text-start fw-semibold">Module 3</td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                        </tr>
                                        <tr>
                                            <td class="text-start fw-semibold">Module 4</td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                        </tr>
                                        <tr>
                                            <td class="text-start fw-semibold">Modle 5</td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                            <td><input type="checkbox" id="" name=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
@endsection