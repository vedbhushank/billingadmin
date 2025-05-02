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
                <a class="nav-link menu-link active" href="{{url('/superadmin/dashboard')}}">
                    <i class="las la-home"></i> <span>Dashboard</span>
                </a>
            </li> <!-- end Dashboard Menu -->
            <li class="menu-title"><span data-key="t-menu">Masters</span></li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="{{url('/superadmin/financial-year')}}">
                    <i class="las la-calendar"></i> <span>Financial Year</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#location" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="location">
                    <i class="las la-map"></i> <span>Location</span>
                </a>
                <div class="collapse menu-dropdown" id="location">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{url('/superadmin/state')}}" class="nav-link">State</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/superadmin/city')}}" class="nav-link">City</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#catg" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="catg">
                    <i class="las la-briefcase"></i> <span>Business Category</span>
                </a>
                <div class="collapse menu-dropdown" id="catg">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{url('/superadmin/create-business-category')}}" class="nav-link">Main Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/superadmin/create-sub-category')}}" class="nav-link">Sub Category</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#item" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="item">
                    <i class="las la-briefcase"></i> <span>Item Master</span>
                </a>
                <div class="collapse menu-dropdown" id="item">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{url('/superadmin/unit')}}" class="nav-link">Unit Master</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/superadmin/size')}}" class="nav-link">Size Master</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/superadmin/hsn-code')}}" class="nav-link">HSN Code Master</a>
                        </li>
                    </ul>
                </div>
            </li>
           

            <li class="menu-title"><span data-key="t-menu">Application</span></li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#acc" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="acc">
                    <i class="las la-cog"></i> <span>Accounts</span>
                </a>
                <div class="collapse menu-dropdown" id="acc">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{url('/superadmin/create-user')}}" class="nav-link">Create User</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/superadmin/user-role')}}" class="nav-link">User Role</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#client" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="client">
                    <i class="las la-user"></i> <span>Client Profile</span>
                </a>
                <div class="collapse menu-dropdown" id="client">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{url('/superadmin/add-client-profile')}}" class="nav-link">Add Client</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/superadmin/manage-client-profile')}}" class="nav-link"> Manage Clients </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>

<div class="sidebar-background"></div>