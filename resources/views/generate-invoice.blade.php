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
                    
                </div>
            </div>
        </div>
    </div>

</div>
<!-- container-fluid -->
@endsection