@extends('superadmin.layout.master')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h1 class="h3 fw-semibold mb-sm-0">Add Form</h1>


                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Form</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Form</h4>
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
                            <label for="" class="form-label">Field Name 1</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                        <div class="col-lg-3">
                            <label for="" class="form-label">Field Name 2</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                        <div class="col-lg-3">
                            <label for="" class="form-label">Field Name 3</label>
                            <input type="file" class="form-control" id="" name="">
                        </div>
                        <div class="col-lg-3">
                            <label for="" class="form-label">Dropdown</label>
                            <select name="" id="" class="form-select">
                                <option value="">Choose</option>
                                <option value="">Active</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="" class="form-label">Single Select with Search</label>
                            <select name="" id="" class="form-select select2">
                                <option value="">Choose</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="" class="form-label">Multi Select wit Search</label>
                            <select name="" id="" class="form-control selectpicker MySelect" multiple data-live-search="true" multiple data-selected-text-format="count" data-width="100%" multiple data-actions-box="true">
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                                <option value="">Option 4</option>
                                <option value="">Option 5</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="" class="form-label">Datepicker</label>
                            <input type="text" class="form-control datepicker" id="" name="" placeholder="">
                        </div>
                        <div class="col-lg-3">
                            <label for="" class="form-label">Checkbox</label>
                            <div class="form-check mb-2 mt-2">
                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                <label class="form-check-label" for="formCheck1">
                                    Default checkbox
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label for="" class="form-label">Inline Checkbox</label> <br>
                            <!-- Inline Checkbox -->
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">2</label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label for="" class="form-label">Inline Radio Buttons</label> <br>
                            <!-- Inline Radios -->
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <label for="" class="form-label">&nbsp;</label> <br>
                            <button type="button" class="btn btn-secondary waves-effect waves-light">Primary Button</button>
                        </div>
                        <div class="col-lg-2">
                            <label for="" class="form-label">&nbsp;</label> <br>
                            <button type="button" class="btn btn-danger waves-effect waves-light">Danger Button</button>
                        </div>
                        <div class="col-lg-2">
                            <label for="" class="form-label">&nbsp;</label> <br>
                            <button type="button" class="btn btn-warning waves-effect waves-light">Warning Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- container-fluid -->
@endsection