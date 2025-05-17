@extends('layouts.master')
@section('maincontent')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h1 class="h3 fw-semibold mb-sm-0">Manage Purchase Party</h1>


                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage Purchase Party</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h4 class="card-title">Manage Purchase Party</h4>
                            <p class="mb-0 text-muted">Please choose action buttons to manage accordingly.</p>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{url('/add-purchase-party')}}" class="btn btn-success float-end"><i class="bx bx-plus-circle me-2"></i>Add Purchase Party</a>
                        </div>
                    </div>

                </div>
                <div class="card-body py-4">
                    <table id="example" class="table table-bordered dt-responsive nowrap align-middle" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>Sr No</th>
                                <th>Business Name</th>
                                <th>Contact Person</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="#partyDetail" data-bs-toggle="modal" data-bs-target="#partyDetail">Pawan and Sons</a></td>
                                <td>Pawan Kalyan</td>
                                <td>9876543210</td>
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
                                <td><a href="#partyDetail" data-bs-toggle="modal" data-bs-target="#partyDetail">Royal Crockery</a></td>
                                <td>Rohit Sharma</td>
                                <td>7896754897</td>
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

                    <div id="partyDetail" class="modal fade" tabindex="-1" aria-labelledby="partyDetailLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="partyDetailLabel">Party Detail</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <legend>Business Detail</legend>
                                                <div class="row g-3">
                                                    <div class="col-lg-4">
                                                        <label for="" class="form-label">Busines Name</label>
                                                        <p>sds</p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="" class="form-label">Contact Person</label>
                                                        <p>sds</p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="" class="form-label">Phone Number</label>
                                                        <p>sds</p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="" class="form-label">Email ID</label>
                                                        <p>sds</p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="" class="form-label">GST/TIN Number</label>
                                                        <p>sds</p>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <fieldset>
                                                <legend>Address Detail</legend>
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <label for="" class="form-label">Address</label>
                                                        <p>sds</p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="" class="form-label">Country</label>
                                                        <p>sds</p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="" class="form-label">State</label>
                                                        <p>sds</p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="" class="form-label">City</label>
                                                        <p>sds</p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="" class="form-label">Pin Code</label>
                                                        <p>sds</p>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <fieldset>
                                                <legend>Status Detail</legend>
                                                <div class="row g-3">
                                                    <div class="col-lg-6">
                                                        <label for="" class="form-label">Status</label> <br>
                                                        <span class="badge bg-danger-subtle text-danger">Inactive</span>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
            </div>
        </div>
    </div>

</div>
<!-- container-fluid -->
@endsection