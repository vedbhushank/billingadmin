@extends('superadmin.layout.master')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h1 class="h3 fw-semibold mb-sm-0">Client Profile</h1>


                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Client Profile</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Profile</h4>
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
                    <div class="row">
                        <div class="col-lg-8">
                            <fieldset>
                                <legend>Business Detail</legend>
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Busines Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Busines Owner <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Business Category <span class="text-danger">*</span></label>
                                        <select name="" id="" class="form-control selectpicker MySelect" multiple data-live-search="true" multiple data-selected-text-format="count" data-width="100%" multiple data-actions-box="true">
                                            <option value="">Retail</option>
                                            <option value="">Wholesale</option>
                                            <option value="">Distributor</option>
                                            <option value="">Manufacturing</option>
                                            <option value="">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Sub Category <span class="text-danger">*</span></label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="">Kirana or General Merchant</option>
                                            <option value="">Fashion & Accessories</option>
                                            <option value="">Hardware Store</option>
                                            <option value="">Mobile & Accessories</option>
                                            <option value="">Automobiles / Auto Parts</option>
                                            <option value="">Footwear</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">GST Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>Address Detail</legend>
                                <div class="row g-3">
                                    <div class="col-lg-12">
                                        <label for="" class="form-label">Street Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Country <span class="text-danger">*</span></label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="" selected>India</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">State <span class="text-danger">*</span></label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="" selected>Chandigarh</option>
                                            <option value="">Punjab</option>
                                            <option value="">Haryana</option>
                                            <option value="">Himachal Pradesh</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">City <span class="text-danger">*</span></label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="" selected>Chandigarh</option>
                                            <option value="">Amritsar</option>
                                            <option value="">Ambala</option>
                                            <option value="">Shimla</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Pin Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>Contact Detail</legend>
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Landline Number </label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Email ID </label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Website </label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                </div>
                            </fieldset>

                        </div>
                        <div class="col-lg-4">
                            <div class="card border">
                                <div class="card-header bg-light">
                                    <h4 class="card-title mb-0">Upload Logo</h4>
                                </div>
                                <div class="card-body text-center p-4">
                                    <img src="{{asset('assets')}}/images/no-img.jpg" class="img-thumbnail" alt="business logo">
                                    <div class="mt-4">
                                        <input type="file" class="form-control" name="" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="card border">
                                <div class="card-header bg-light">
                                    <h4 class="card-title mb-0">Upload Signature</h4>
                                </div>
                                <div class="card-body text-center p-4">
                                    <img src="{{asset('assets')}}/images/no-img.jpg" class="img-thumbnail" alt="business logo">
                                    <div class="mt-4">
                                        <input type="file" class="form-control" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="button" class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- container-fluid -->
@endsection