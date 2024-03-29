<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Dashboard') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
      <!-- Tell the browser to be responsive to screen width -->

  <!-- Bootstrap 3.3.7 -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">     -->
  <!-- Theme style -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
  <style>
  
  </style>
  @include('header.index')
  </head>
  <!-- oncontextmenu="return false" -->
<body class="hold-transition skin-blue sidebar-mini" >

<!-- <div id='loader'></div> -->
<!-- <div style="color: #f68f6f; background:#000" class="la-cog la-3x">
    <div></div>
</div> -->
<div class="centered">

<div style="color: #6e1205;" class="la-cog la-2x">
	<div></div>
</div>

</div>

<div class="wrapper">


<header class="main-header">

<!-- Logo -->
<a href="/admin" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><img height="50" width="50" src="{{$company->company_log == null ? asset('dist/img/shareCardLogo.png') : $company->company_log}}" alt="ShareCard"></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><img  height="60" width="60" src="{{$company->company_log == null ? asset('dist/img/shareCardLogo.png') : $company->company_log}}" alt="ShareCard"></span>
  <!-- <span class="logo-lg"><b>Admin</b>LTE</span> -->
</a> 

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  
   <div class="col-md-4">
    <h3 style="margin-top: 10px !important;margin-bottom: 5px;">Activity Summary </h3>
    <p>Get summary of your most recent activities</p>
   </div>
  
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <li class="dropdown messages-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-envelope-o"></i>
          <span class="label label-success">4</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">You have 4 messages</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li><!-- start message -->
                <a href="#">
                  <div class="pull-left">
                  {{asset('dist/img/avator_profile.png')}}
                  
                    <img src="https://res.cloudinary.com/padshare/image/upload/v1659459017/Profile/user_1659459015.png" class="img-circle" alt="User Image">
                  </div>
                  <h4>
                    Support Team
                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                  </h4>
                  <p>Isaac is still adding Functions</p>
                </a>
              </li>
              <!-- end message -->
              <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="https://res.cloudinary.com/padshare/image/upload/v1659459017/Profile/user_1659459015.png" class="img-circle" alt="User Image">
                  </div>
                  <h4>
                    Design Team
                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                  </h4>
                  <p>Isaac is still adding Functions</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="https://res.cloudinary.com/padshare/image/upload/v1659459017/Profile/user_1659459015.png" class="img-circle" alt="User Image">
                  </div>
                  <h4>
                    Developers
                    <small><i class="fa fa-clock-o"></i> Today</small>
                  </h4>
                  <p>Isaac is still adding Functions</p>
                </a>
              </li>
           
            </ul>
          </li>
          <li class="footer"><a href="#">See All Messages</a></li>
        </ul>
      </li>
      <!-- Notifications: style can be found in dropdown.less -->
      <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">10</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">You have 10 notifications</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li>
                <a href="#">
                  <i class="fa fa-users text-aqua"></i> 5 new members joined today
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                  page and may cause design problems
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-users text-red"></i> 5 new members joined
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-user text-red"></i> You changed your username
                </a>
              </li>
            </ul>
          </li>
          <li class="footer"><a href="#">View all</a></li>
        </ul>
      </li>
      <!-- Tasks: style can be found in dropdown.less -->
      <li class="dropdown tasks-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-flag-o"></i>
          <span class="label label-danger">9</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">You have 9 tasks</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Design some buttons
                    <small class="pull-right">20%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">20% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Create a nice theme
                    <small class="pull-right">40%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">40% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Some task I need to do
                    <small class="pull-right">60%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">60% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Make beautiful transitions
                    <small class="pull-right">80%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
            </ul>
          </li>
          <li class="footer">
            <a href="#">View all tasks</a>
          </li>
        </ul>
      </li>
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        
          <img src="{{$profile->photoUrl ==null ? 'https://res.cloudinary.com/padshare/image/upload/v1659459017/Profile/user_1659459015.png' : $profile->photoUrl}}" class="user-image" alt="User Image" >
          <span class="hidden-xs">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="{{$profile->photoUrl ==null ? 'https://res.cloudinary.com/padshare/image/upload/v1659459017/Profile/user_1659459015.png' : $profile->photoUrl}}" class="img-circle" alt="User Image">

            <p>
            {{ Auth::user()->name }} - Web Developer
              <small>Member since June. 2022</small>
            </p>
          </li>
          <!-- Menu Body -->
        
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="{{route('profile')}}" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <!-- <a href="#" class="btn btn-default btn-flat">Sign out</a> -->
              <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </div>
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
    
    </ul>
  </div>

</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <!-- <li class="header">MAIN NAVIGATION</li> -->
  
    <li class="header"></li>
  
    <li class="{{ (request()->is('/')) ? 'active' : '' }}">
      <a href="/admin"><i class="fa fa-line-chart"></i> <span>Overview</span></a>
    </li>
    
    <!-- <li class="{{ (request()->is('beneficiary')) ? 'active' : '' }}">
      <a href="{{route('agentLogin')}}">
        <i class="fa fa-users"></i>
        <span>Agent LOGIN</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li> -->
    
    <li class="{{ (request()->is('beneficiary')) ? 'active' : '' }}">
      <a href="{{route('beneficiary')}}">
        <i class="fa fa-users"></i>
        <span>Beneficiaries</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
    <li class="{{ (request()->is('impact')) ? 'active' : '' }}">
      <a href="{{route('impact')}}">
        <i class="fa fa-th"></i> <span>Impact Map</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-green">new</small>
        </span>
      </a>
    </li>
    <li   class="treeview ">
      <a href="{{route('packages')}}">
        <i class="fa fa-id-card"></i> <span>Training</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
    <ul class="treeview-menu">
    <li class="{{ (request()->is('training')) ? 'active' : '' }}"><a href="{{route('training')}}"><i class="fa fa-circle-o"></i>Training Managment</a></li>
    <li class="{{ (request()->is('attached')) ? 'active' : '' }}"><a href="{{route('attached')}}"><i class="fa fa-circle-o"></i>Attandance Management</a></li>
    </ul>
    </li>
    <li class="{{ (request()->is('community')) ? 'active' : '' }}">
      <a href="{{route('community')}}">
        <i class="fa fa-pie-chart"></i>
        <span>Community Agents</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
    </li>
   
    <li class="{{ (request()->is('attendance')) ? 'active' : '' }}">
      <a href="{{route('attendance')}}">
        <i class="fa fa-clock-o"></i>
        <span>Attendance</span>      
      </a>
  
    </li>
    
     <li   class="treeview ">
      <a href="{{route('packages')}}">
        <i class="fa fa-id-card"></i> <span>Packages</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
    <ul class="treeview-menu">
    <li class=""><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i>Categories</a></li>
    <li class=""><a href="{{route('package.index')}}"><i class="fa fa-circle-o"></i>Package Managment</a></li>
    
    </ul>
    </li>
    <li  class="{{ (request()->is('packages')) ? 'active' : '' }}">
      <a href="{{route('packages')}}">
        <i class="fa fa-industry"></i> <span>Packages Distributed</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
    </li>
    <!-- {{ (request()->is('packages')) ? 'active' : '' }} -->
    <li   class="treeview ">
      <a href="{{route('packages')}}">
        <i class="fa fa-id-card"></i> <span>Cards</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
    <ul class="treeview-menu">
    <li class="{{ (request()->is('cards')) ?     'active' : '' }}"><a href="{{route('cards')}}"><i class="fa fa-circle-o"></i>Card Managment</a></li>
    <li class="{{ (request()->is('attached')) ?     'active' : '' }}"><a href="{{route('attached')}}"><i class="fa fa-circle-o"></i>Attached Cards</a></li>
    <li class="{{ (request()->is('distribution')) ? 'active' : '' }}"><a href="{{route('distribution')}}"><i class="fa fa-circle-o"></i>Packages Distributed</a></li>
    </ul>
    </li>

    <li   class="treeview ">
      <a href="{{route('assessmentforms')}}">
        <i class="fa fa-id-card"></i> <span>Assessments</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
    <ul class="treeview-menu">
    <li class="{{ (request()->is('assessmentforms')) ?     'active' : '' }}"><a href="{{route('assessmentforms')}}"><i class="fa fa-circle-o"></i>Assessment Form 1</a></li>
    <li class="{{ (request()->is('assessmentfarmers')) ?     'active' : '' }}"><a href="{{route('assessmentfarmers')}}"><i class="fa fa-circle-o"></i>Assessment Form 2</a></li>
    </ul>
    </li>
  
    <li class="{{ (request()->is('assessment')) ? 'active' : '' }}">
      <a href="{{route('assessment.index')}}">
        <i class="fa fa-tasks"></i> <span>Activities</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-red">3</small>
          <!-- <small class="label pull-right bg-blue">17</small> -->
        </span>
      </a>
    </li>
 
    <li class="{{ (request()->is('settings')) ? 'active' : '' }}">
      <a href="{{route('settings')}}">
        <i class="fa fa-cog"></i> <span>Account Settings</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
    </li>

  </ul>
</section>
<!-- /.sidebar -->
</aside>
     
         

        <main class="py-4">
        @if(session()->has('success'))
     <div class="container-alert">
     <div class="alert alert-success" role="alert">
       {{session()->get('success')}}
     </div>
     </div>
     @endif
     @if(session()->has('error'))
     <div class="container-alert">
     <div class="alert alert-danger" role="alert">
       {{session()->get('error')}}
     </div>
     </div>
     @endif
     
            @yield('content')
        </main>

 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020-2023 <a href="#">Padshare</a>.</strong> All rights
    reserved.



  </footer>

  <!-- Control Sidebar -->
 

</div>


    <!-- jQuery 3 -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
   

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('dist/js/demo.js')}}"></script> -->
@include('footer.index')
@yield('scripts')

<script>

  window.addEventListener('load', ()=>{
    document.querySelector(".centered").classList.add("loader--hidden")
  });

var message = "function disabled";

function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){  return false; }

if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) {  return false; } }

document.onmousedown = rtclickcheck;

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
</body>

</html>
