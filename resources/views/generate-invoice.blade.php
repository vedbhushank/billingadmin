@extends('layouts.master')
@section('maincontent')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h1 class="h3 fw-semibold mb-sm-0">Create Invoice</h1>


                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Create Invoice</li>
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
                            <h4 class="card-title">Create Invoice</h4>
                            <p class="mb-0 text-muted">Please fill or update the below form.</p>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{url('/manage-invoice')}}" class="btn btn-secondary float-end"><i class="bx bx-file me-2"></i>Manage Invoice</a>
                        </div>
                    </div>
                </div>
                <div class="card-body py-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3 row">
                                <label for="" class="col-sm-3 col-form-label">Invoice # <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" value="INV/06/2025/123" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ms-auto">
                            <div class="mb-3 row">
                                <label for="" class="col-sm-4 col-form-label">Invoice Date <span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control datepicker" id="" name="" placeholder="{{ date('Y-m-d') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="" class="form-label">Bill From <span class="text-danger">*</span></label>
                            <select name="" id="" class="form-select select2">
                                <option value="">-- Choose --</option>
                                <option value="">Company Name 1</option>
                                <option value="">Company Name 2</option>
                            </select>
                            <div class="border bg-light mt-3 p-3">
                                <address>
                                    <strong>H.R. ENTERPRISE</strong> <br>
                                    12, Vrundavan Nagar, Odhav Rind Road, <br>
                                    B/h Gauri Cinema,<br>
                                    Odhav, Ahmedabad-382415, India.
                                </address>
                            </div>
                        </div>
                        <div class="col-lg-4 ms-auto">
                            <label for="" class="form-label">Bill To <span class="text-danger">*</span></label>
                            <select name="" id="" class="form-select select2">
                                <option value="">-- Choose --</option>
                                <option value="">Company Name 1</option>
                                <option value="">Company Name 2</option>
                            </select>
                            <div class="border bg-light mt-3 p-3">
                                <address>
                                    <strong>Smith Rhodes</strong><br />
                                    15 Hodges Mews,<br />
                                    High Wycombe<br />
                                    HP12 3JL Thailand
                                </address>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-secondary">
                                        <tr>
                                            <td class="col-1 text-center"><strong>SrNo</strong></td>
                                            <td class="col-4"><strong>Product Name</strong></td>
                                            <td class="col-2"><strong>Item/SKU Code</strong></td>
                                            <td class="col-1"><strong>Qty</strong></td>
                                            <td class="col-2 text-end"><strong>Rate</strong></td>
                                            <td class="col-2 text-end"><strong>Amount</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-1 text-center">1.</td>
                                            <td class="col-4"><input type="text" class="form-control" name="" id=""></td>
                                            <td class="col-2"><input type="text" class="form-control" name="" id=""></td>
                                            <td class="col-1"><input type="text" class="form-control" name="" id=""></td>
                                            <td class="col-2"><input type="text" class="form-control text-end" name="" id=""></td>
                                            <td class="col-2"><input type="text" class="form-control text-end" name="" id=""></td>
                                        </tr>
                                        <tr>
                                            <td class="col-1 text-center">2.</td>
                                            <td class="col-4"><input type="text" class="form-control" name="" id=""></td>
                                            <td class="col-2"><input type="text" class="form-control" name="" id=""></td>
                                            <td class="col-1"><input type="text" class="form-control" name="" id=""></td>
                                            <td class="col-2"><input type="text" class="form-control text-end" name="" id=""></td>
                                            <td class="col-2"><input type="text" class="form-control text-end" name="" id=""></td>
                                        </tr>
                                        <tr>
                                            <td class="col-1 text-center">3.</td>
                                            <td class="col-4"><input type="text" class="form-control" name="" id=""></td>
                                            <td class="col-2"><input type="text" class="form-control" name="" id=""></td>
                                            <td class="col-1"><input type="text" class="form-control" name="" id=""></td>
                                            <td class="col-2"><input type="text" class="form-control text-end" name="" id=""></td>
                                            <td class="col-2"><input type="text" class="form-control text-end" name="" id=""></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-end"><strong>CGST @ 0%</strong></td>
                                            <td class="text-end"><strong>&#8377;0.00</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-end"><strong>SGST @ 9%</strong></td>
                                            <td class="text-end"><strong>&#8377;230.00</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-end"><strong>IGST @ 9%</strong></td>
                                            <td class="text-end"><strong>&#8377;230.00</strong></td>
                                        </tr>
                                        
                                    </tbody>
                                    <tfoot class="bg-light">
                                        <tr>
                                            <td colspan="5" class="text-end"><strong>Net Total</strong></td>
                                            <td class="text-end"><strong>&#8377;23000.00</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="alert alert-success">
                                <strong>Amount in Words:</strong> Twenty three thousand only
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 mx-auto">
                            <label for="" class="form-label">&nbsp;</label> <br>
                            <button type="button" class="btn btn-primary waves-effect waves-light">Submit</button>
                            <button type="button" class="btn btn-success waves-effect waves-light">Print or Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- container-fluid -->
@endsection