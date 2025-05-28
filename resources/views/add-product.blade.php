@extends('layouts.master')
@section('maincontent')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h1 class="h3 fw-semibold mb-sm-0">Sales Party</h1>


                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sales Party</li>
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
                            <h4 class="card-title">Add Sale Party</h4>
                            <p class="mb-0 text-muted">Please fill or update the below form.</p>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{url('/manage-sale-party')}}" class="btn btn-secondary float-end"><i class="bx bx-file me-2"></i>Manage Sale Party</a>
                        </div>
                    </div>
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
                                <legend>Basic Detail</legend>
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Product Category or Type <span class="text-danger">*</span></label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Product Sub-Cat or Type <span class="text-danger">*</span></label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Product Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">Item/SKU Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                   
                                    <div class="col-lg-6">
                                        <label for="" class="form-label">HSN Code</label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="" class="form-label">Size</label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                     <div class="col-lg-3">
                                        <label for="" class="form-label">Unit</label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>Purchase Detail</legend>
                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">Purchase Price </label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">With or Without Tax</label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="">With Tax</option>
                                            <option value="">Without Oux</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">Tax</label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>Sale Detail</legend>
                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">Sale Price <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">MRP</label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">With or Without Tax</label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="">With Tax</option>
                                            <option value="">Without Oux</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">Tax Info</label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">Discount Type</label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="">Fixed Amount</option>
                                            <option value="">Percentage</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">Discount</label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>Wholesale Detail</legend>
                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">Wholesale Price </label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">With or Without Tax</label>
                                        <select name="" id="" class="form-select select2">
                                            <option value="">-- Choose --</option>
                                            <option value="">With Tax</option>
                                            <option value="">Without Oux</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">Tax</label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="form-label">Min Wholesale Qty</label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>Status Detail</legend>
                                <div class="row g-3">

                                    <div class="col-lg-4">
                                        <label for="" class="form-label">Status</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">-- Choose --</option>
                                            <option value="">Active</option>
                                            <option value="">In-Active</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                        </div>
                        <div class="col-lg-4">
                            <div class="card border">
                                <div class="card-header bg-light">
                                    <h4 class="card-title mb-0">Product Image</h4>
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