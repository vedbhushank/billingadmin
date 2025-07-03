<!-- LOGO -->
<div class="navbar-brand-box">
    <!-- Dark Logo-->
    <a href="{{url('/')}}" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{asset('assets')}}/images/logo-sm.png" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="{{asset('assets')}}/images/logo-dark.png" alt="" height="17">
        </span>
    </a>
    <!-- Light Logo-->
    <a href="{{url('/')}}" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{asset('assets')}}/images/logo-sm.png" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="{{asset('assets')}}/images/logo-light.png" alt="" height="22">
        </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
        <i class="ri-record-circle-line"></i>
    </button>
</div>
<div id="scrollbar">
    <div class="container-fluid">
        <div id="two-column-menu"></div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span data-key="t-menu">Menu</span></li>

            <li class="nav-item">
                <a class="nav-link menu-link active" href="{{url('/dashboard')}}">
                    <i class="las la-home"></i> <span>Dashboard</span>
                </a>
            </li> <!-- end Dashboard Menu -->
            <li class="menu-title"><span data-key="t-menu">Masters</span></li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#saleParty" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="saleParty">
                    <i class="las la-user"></i> <span>Sale Party</span>
                </a>
                <div class="collapse menu-dropdown" id="saleParty">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{url('/add-sale-party')}}" class="nav-link">Add Sale Party</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/manage-sale-party')}}" class="nav-link"> Manage Sale Party </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#purchaseParty" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="purchaseParty">
                    <i class="las la-user"></i> <span>Purchase Party</span>
                </a>
                <div class="collapse menu-dropdown" id="purchaseParty">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{url('/add-purchase-party')}}" class="nav-link">Add Purchase Party</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/manage-purchase-party')}}" class="nav-link"> Manage Purchase Party </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#product" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="product">
                    <i class="las la-box"></i> <span>Product Master</span>
                </a>
                <div class="collapse menu-dropdown" id="product">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{url('/add-product')}}" class="nav-link">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/manage-product')}}" class="nav-link"> Manage Product </a>
                        </li>
                    </ul>
                </div>
            </li>



            <li class="menu-title"><span data-key="t-menu">Application</span></li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#client" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="client">
                    <i class="las la-user"></i> <span>Client Profile</span>
                </a>
                <div class="collapse menu-dropdown" id="client">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{url('/add-client-profile')}}" class="nav-link">Add Client</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/manage-client-profile')}}" class="nav-link"> Manage Clients </a>
                        </li>
                    </ul>
                </div>
            </li>

             <li class="nav-item">
                <a class="nav-link menu-link" href="#invoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="invoice">
                    <i class="las la-user"></i> <span>Invoice</span>
                </a>
                <div class="collapse menu-dropdown" id="invoice">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{url('/generate-invoice')}}" class="nav-link">Generate Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/manage-invoice')}}" class="nav-link"> Manage Invoice </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="{{url('/editor')}}">
                    <i class="las la-cog"></i> <span>Editor</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#Forms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Forms">
                    <i class="las la-cog"></i> <span>Forms</span>
                </a>
                <div class="collapse menu-dropdown" id="Forms">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{url('/add-form')}}" class="nav-link">Add Form</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/manage-form')}}" class="nav-link"> Manage Form </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/add-manage-form')}}" class="nav-link"> Add/Manage Form </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
</div>

<div class="sidebar-background"></div>