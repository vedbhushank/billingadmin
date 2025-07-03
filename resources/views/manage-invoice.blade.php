@extends('layouts.master')
@section('maincontent')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h1 class="h3 fw-semibold mb-sm-0">Manage Invoice</h1>


                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage Invocie</li>
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
                            <h4 class="card-title">Manage Invoice</h4>
                            <p class="mb-0 text-muted">Please choose action buttons to manage accordingly.</p>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{url('/generate-invoice')}}" class="btn btn-success float-end"><i class="bx bx-plus-circle me-2"></i>Create Invoice</a>
                        </div>
                    </div>

                </div>
                <div class="card-body py-4">
                    <table id="example" class="table table-bordered nowrap align-middle" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>Sr No</th>
                                <th>Invoice No.</th>
                                <th>Invoice Date</th>
                                <th>Bill To</th>
                                <th class="text-end">Invoice Amount (in Rs.)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="#InvoiceDetail" data-bs-toggle="modal" data-bs-target="#InvoiceDetail">INV/06/2025/123</a></td>
                                <td>03-07-2025</td>
                                <td>Smith Rhodes</td>
                                <td class="text-end">23000.00</td>
                                <td>
                                    <a href="#" title="Edit" class="text-success me-2">
                                        <i class="bx bx-edit fs-5"></i>
                                    </a>
                                    <a href="#" title="Print" class="text-secondary me-2">
                                        <i class="bx bx-printer fs-5"></i>
                                    </a>
                                    <a href="#" title="Delete" class="text-danger me-2">
                                        <i class="bx bx-trash fs-5"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div id="InvoiceDetail" class="modal fade" tabindex="-1" aria-labelledby="InvoiceDetailLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="InvoiceDetailLabel">Invoice Detail - INV/06/2025/123</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered border mb-0">
                                        <tbody>
                                            <tr>
                                                <td colspan="2" class="bg-light text-center">
                                                    <h3 class="mb-0">H.R. ENTERPRISE</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-center text-uppercase">12, Vrundavan Nagar, Odhav Rind Road, B/h Gauri Cinema,<br> Odhav, Ahmedabad-382415, India.</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="py-1">
                                                    <div class="row">
                                                        <div class="col text-center fw-600 text-3 text-uppercase h5">Tax Invoice</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-7">
                                                    <div class="row gx-2 gy-2">
                                                        <div class="col-auto"><strong>M/s. :</strong></div>
                                                        <div class="col">
                                                            <address>
                                                                <strong>Smith Rhodes</strong><br />
                                                                15 Hodges Mews,<br />
                                                                High Wycombe<br />
                                                                HP12 3JL<br />
                                                                Thailand
                                                            </address>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-5">
                                                    <div class="row gx-2 gy-1 fw-600">
                                                        <div class="col-5">Invoice No <span class="float-end">:</span></div>
                                                        <div class="col-7">INV/06/2025/123</div>

                                                        <div class="col-5">Invoice Date <span class="float-end">:</span></div>
                                                        <div class="col-7">03-07-2025</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="p-0">
                                                    <table class="table table-bordered mb-0">
                                                        <thead>
                                                            <tr class="bg-light">
                                                                <td class="col-1 text-center"><strong>Sr No</strong></td>
                                                                <td class="col-4"><strong>Product Name</strong></td>
                                                                <td class="col-2"><strong>Item/SKU Code</strong></td>
                                                                <td class="col-1"><strong>Qty</strong></td>
                                                                <td class="col-2 text-end"><strong>Rate</strong></td>
                                                                <td class="col-2 text-end"><strong>Amount</strong></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="col-1 text-center">1</td>
                                                                <td class="col-4">STYLE KERATIN SH. 250ML</td>
                                                                <td class="col-4">234567</td>
                                                                <td class="col-1 text-center">3</td>
                                                                <td class="col-2 text-end">25.75</td>
                                                                <td class="col-2 text-end">77.25</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-1 text-center">2</td>
                                                                <td class="col-4">SEASOUL GOLD MOROCCAN ANTI AGEING KIT</td>
                                                                <td class="col-2">123456</td>
                                                                <td class="col-1 text-center">1</td>
                                                                <td class="col-2 text-end">40.12</td>
                                                                <td class="col-2 text-end">40.12</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-1 text-center">3</td>
                                                                <td class="col-4">KERASOUL ONION SH-200ML</td>
                                                                <td class="col-2">768904</td>
                                                                <td class="col-1 text-center">6</td>
                                                                <td class="col-2 text-end">12.00</td>
                                                                <td class="col-2 text-end">72.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr class="bg-light fw-600">
                                                <td class="col-7 py-1"></td>
                                                <td class="col-5 py-1 pe-1 fw-bold">Sub Total: <span class="float-end fw-bold">&#8377;243.37</span></td>
                                            </tr>
                                            <tr>
                                                <td class="col-7 text-1"><span class="fw-bold">Bill Amount:</span><br> <i>Thirty Thousand Forty Four Only</i></td>
                                                <td class="col-5 pe-1">
                                                    IGST @ <small>(9.00%)</small> <span class="float-end">&#8377;21.09</span><br>
                                                    SGST @ <small>(9.00%)</small> <span class="float-end">&#8377;21.09</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-7 text-1"></td>
                                                <td class="col-5 pe-1 bg-light fw-bold">
                                                    Grand Total:<span class="float-end">&#8377;285.55</span>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
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