<header class="main-header" 
    style="
        background: #0284c7; 
        color: #f1f5f9;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        box-shadow: 0 2px 12px rgba(0,0,0,0.25);
        border-bottom: 1px solid rgba(255,255,255,0.15);
    ">

    <!-- Logo -->
    <a href="{{route('web.dashboard.index')}}" class="logo" 
        style="display:flex;align-items:center;justify-content:center;
               gap:8px;height:50px;text-decoration:none;
               background:transparent;">

        <!-- Logo image -->
        <img src="{{ asset('img/SIK.png') }}" alt="Logo" 
            style="height:32px;width:32px;object-fit:contain;">

        <!-- Logo text -->
        <span class="logo-lg" 
            style="font-size:13px;font-weight:700;
                   color:#0001ee;white-space:nowrap;">
            PT. SUMI INDO KABEL Tbk.
        </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" 
        style="background:transparent;box-shadow:none;">
        
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"
            style="color:#ffffff;">
            <span class="sr-only">Toggle navigation</span>
        </a>
        
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                        style="color:#ffffff;">
                        <img src="{{ Auth::user()->photo != null ? url(Auth::user()->photo) : asset('/img/account.png') }}" 
                             class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu" 
                        style="
                            background: #0284c7;  
                            color:rgba(255,255,255,0.9);
                            backdrop-filter: blur(10px);
                            -webkit-backdrop-filter: blur(10px);
                            box-shadow: 0 4px 16px rgba(0,0,0,0.35);
                            border-radius: 6px;
                            overflow:hidden;
                        ">
                        <!-- User image -->
                        <li class="user-header text-center" 
                            style="background:rgba(0,0,0,0.25);color:#fff;">
                            <img src="{{ Auth::user()->photo != null ? url(Auth::user()->photo) : asset('img/account.png') }}" 
                                class="img-circle" alt="User Image">
                            <p class="mt-2">{{ Auth::user()->name }}</p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer" 
                            style="background:rgba(0,0,0,0.2);">
                            <div class="pull-right">
                                <a href="{{route('web.auth.signout')}}" 
                                   class="btn btn-default btn-flat"
                                   style="background:#0284c7;border:none;color:#fff;">
                                   Sign out
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </nav>
</header>
