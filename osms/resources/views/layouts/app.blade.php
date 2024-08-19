<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title', 'Admin Area')
    </title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
     <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
     <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
     <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
     <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
     <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
     <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        #cross{
            display: none;
        }
     @media screen and (max-width: 992px) {
       #cross{
        display: flex;
       }
    }
    body{
        overflow-x: hidden;
    }
    .table-scroll{
    overflow-x: scroll;
    }
    </style>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">



      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('images/aclogo.avif')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info" style="display: flex; justify-content:space-between;">
            <a  href="#" >OSMS <a id="cross" style="color: rgb(255, 0, 0); margin-left:4%; font-size:18px;" href="">X</a></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="{{route('admin')}}" class="nav-link ">
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link">
                  <p>
                    Users
                  </p>
                </a>
              </li>

            <li class="nav-item">
              <a href="{{route('enginner.index')}}" class="nav-link">
                <p>
                  Technicians
                </p>
              </a>
            </li>

            <li class="nav-item">
                <a href="{{route('allrequests.index')}}" class="nav-link">
                  <p>
                    All Requests
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('assignwork.index')}}" class="nav-link">
                  <p>
                     Assign Work
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('services.index')}}" class="nav-link">
                  <p>
                    Services
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('maps.index')}}" class="nav-link">
                  <p>
                    Map Address
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('changepassword.index')}}" class="nav-link">
                 <p>
                    Change Password
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link">
                 <p>
                 Logout
                  </p>
                </a>
              </li>

          </ul>
        </nav>
    </div>
    </aside>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">@yield('pagename')</h1>
            </div>
            <div class="col-sm-6">
            </div>
          </div>
        </div>
      </div>
      <section class="content">
        @yield('admincontent')
      </section>
    </div>
    <footer class="main-footer">
      <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('dist/js/adminlte.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body></html>
