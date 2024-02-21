<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Nixcel - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            {{-- <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li> --}}
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          {{-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li> --}}
          {{-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li> --}}
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Admin</div>
              {{-- <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a> --}}
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name"></span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            
            {{-- <li class="dropdown">
              <a href="#" ><i data-feather="command"></i><span>Add New Employee</span></a>
            </li>
            <li class="dropdown">
              <a href="#" ><i data-feather="command"></i><span>Add New Department</span></a>
            </li>
            <li class="dropdown">
              <a href="#" ><i data-feather="command"></i><span>Add New Designation</span></a>
            </li>
            <li class="dropdown">
              <a href="#" ><i data-feather="command"></i><span>Add New Role</span></a>
            </li> --}}
            {{-- <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Email</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="email-inbox.html">Inbox</a></li>
                <li><a class="nav-link" href="email-compose.html">Compose</a></li>
                <li><a class="nav-link" href="email-read.html">read</a></li>
              </ul>
            </li>  --}}
            {{-- <li class="menu-header">UI Elements</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Basic
                  Components</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="alert.html">Alert</a></li>
                <li><a class="nav-link" href="badge.html">Badge</a></li>
                <li><a class="nav-link" href="breadcrumb.html">Breadcrumb</a></li>
                <li><a class="nav-link" href="buttons.html">Buttons</a></li>
                <li><a class="nav-link" href="collapse.html">Collapse</a></li>
                <li><a class="nav-link" href="dropdown.html">Dropdown</a></li>
                <li><a class="nav-link" href="checkbox-and-radio.html">Checkbox &amp; Radios</a></li>
                <li><a class="nav-link" href="list-group.html">List Group</a></li>
                <li><a class="nav-link" href="media-object.html">Media Object</a></li>
                <li><a class="nav-link" href="navbar.html">Navbar</a></li>
                <li><a class="nav-link" href="pagination.html">Pagination</a></li>
                <li><a class="nav-link" href="popover.html">Popover</a></li>
                <li><a class="nav-link" href="progress.html">Progress</a></li>
                <li><a class="nav-link" href="tooltip.html">Tooltip</a></li>
                <li><a class="nav-link" href="flags.html">Flag</a></li>
                <li><a class="nav-link" href="typography.html">Typography</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="shopping-bag"></i><span>Advanced</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="avatar.html">Avatar</a></li>
                <li><a class="nav-link" href="card.html">Card</a></li>
                <li><a class="nav-link" href="modal.html">Modal</a></li>
                <li><a class="nav-link" href="sweet-alert.html">Sweet Alert</a></li>
                <li><a class="nav-link" href="toastr.html">Toastr</a></li>
                <li><a class="nav-link" href="empty-state.html">Empty State</a></li>
                <li><a class="nav-link" href="multiple-upload.html">Multiple Upload</a></li>
                <li><a class="nav-link" href="pricing.html">Pricing</a></li>
                <li><a class="nav-link" href="tabs.html">Tab</a></li>
              </ul>
            </li> --}}
            {{-- <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Blank Page</span></a></li>
            <li class="menu-header">Otika</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Forms</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="basic-form.html">Basic Form</a></li>
                <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                <li><a class="nav-link" href="form-wizard.html">Form Wizard</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Tables</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="basic-table.html">Basic Tables</a></li>
                <li><a class="nav-link" href="advance-table.html">Advanced Table</a></li>
                <li><a class="nav-link" href="datatables.html">Datatable</a></li>
                <li><a class="nav-link" href="export-table.html">Export Table</a></li>
                <li><a class="nav-link" href="editable-table.html">Editable Table</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="pie-chart"></i><span>Charts</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chart-amchart.html">amChart</a></li>
                <li><a class="nav-link" href="chart-apexchart.html">apexchart</a></li>
                <li><a class="nav-link" href="chart-echart.html">eChart</a></li>
                <li><a class="nav-link" href="chart-chartjs.html">Chartjs</a></li>
                <li><a class="nav-link" href="chart-sparkline.html">Sparkline</a></li>
                <li><a class="nav-link" href="chart-morris.html">Morris</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="feather"></i><span>Icons</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="icon-font-awesome.html">Font Awesome</a></li>
                <li><a class="nav-link" href="icon-material.html">Material Design</a></li>
                <li><a class="nav-link" href="icon-ionicons.html">Ion Icons</a></li>
                <li><a class="nav-link" href="icon-feather.html">Feather Icons</a></li>
                <li><a class="nav-link" href="icon-weather-icon.html">Weather Icon</a></li>
              </ul>
            </li> --}}
            {{-- <li class="menu-header">Media</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="image"></i><span>Gallery</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="light-gallery.html">Light Gallery</a></li>
                <li><a href="gallery1.html">Gallery 2</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="flag"></i><span>Sliders</span></a>
              <ul class="dropdown-menu">
                <li><a href="carousel.html">Bootstrap Carousel.html</a></li>
                <li><a class="nav-link" href="owl-carousel.html">Owl Carousel</a></li>
              </ul>
            </li> --}}
            {{-- <li><a class="nav-link" href="timeline.html"><i data-feather="sliders"></i><span>Timeline</span></a></li>
            <li class="menu-header">Maps</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="map"></i><span>Google
                  Maps</span></a>
              <ul class="dropdown-menu">
                <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                <li><a href="gmaps-marker.html">Marker</a></li>
                <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                <li><a href="gmaps-route.html">Route</a></li>
                <li><a href="gmaps-simple.html">Simple</a></li>
              </ul>
            </li> --}}
            {{-- <li><a class="nav-link" href="vector-map.html"><i data-feather="map-pin"></i><span>Vector
                  Map</span></a></li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>Auth</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-login.html">Login</a></li>
                <li><a href="auth-register.html">Register</a></li>
                <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                <li><a href="auth-reset-password.html">Reset Password</a></li>
                <li><a href="subscribe.html">Subscribe</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="alert-triangle"></i><span>Errors</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="errors-503.html">503</a></li>
                <li><a class="nav-link" href="errors-403.html">403</a></li>
                <li><a class="nav-link" href="errors-404.html">404</a></li>
                <li><a class="nav-link" href="errors-500.html">500</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="anchor"></i><span>Other
                  Pages</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="create-post.html">Create Post</a></li>
                <li><a class="nav-link" href="posts.html">Posts</a></li>
                <li><a class="nav-link" href="profile.html">Profile</a></li>
                <li><a class="nav-link" href="contact.html">Contact</a></li>
                <li><a class="nav-link" href="invoice.html">Invoice</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="chevrons-down"></i><span>Multilevel</span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Menu 1</a></li>
                <li class="dropdown">
                  <a href="#" class="has-dropdown">Menu 2</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Child Menu 1</a></li>
                    <li class="dropdown">
                      <a href="#" class="has-dropdown">Child Menu 2</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Child Menu 1</a></li>
                        <li><a href="#">Child Menu 2</a></li>
                      </ul>
                    </li>
                    <li><a href="#"> Child Menu 3</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul> --}}
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">New Booking</h5>
                          <h2 class="mb-3 font-18">258</h2>
                          <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Customers</h5>
                          <h2 class="mb-3 font-18">1,287</h2>
                          <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/2.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">New Project</h5>
                          <h2 class="mb-3 font-18">128</h2>
                          <p class="mb-0"><span class="col-green">18%</span>
                            Increase</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Revenue</h5>
                          <h2 class="mb-3 font-18">$48,697</h2>
                          <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/4.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

{{-- datatables code

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Nixcel Software Employees</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Task Name</th>
                        <th>Progress</th>
                        <th>Members</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success width-per-40">
                            </div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-5.png" width="35">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success badge-shadow">Completed</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          2
                        </td>
                        <td>Redesign homepage</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar width-per-60"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-1.png" width="35">
                          <img alt="image" src="assets/img/users/user-3.png" width="35">
                          <img alt="image" src="assets/img/users/user-4.png" width="35">
                        </td>
                        <td>2018-04-10</td>
                        <td>
                          <div class="badge badge-info badge-shadow">Todo</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          3
                        </td>
                        <td>Backup database</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-warning width-per-70"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-1.png" width="35">
                          <img alt="image" src="assets/img/users/user-2.png" width="35">
                        </td>
                        <td>2018-01-29</td>
                        <td>
                          <div class="badge badge-warning badge-shadow">In Progress</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          4
                        </td>
                        <td>Input data</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success width-per-90"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-2.png" width="35">
                          <img alt="image" src="assets/img/users/user-5.png" width="35">
                          <img alt="image" src="assets/img/users/user-4.png" width="35">
                          <img alt="image" src="assets/img/users/user-1.png" width="35">
                        </td>
                        <td>2018-01-16</td>
                        <td>
                          <div class="badge badge-success badge-shadow">Completed</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          5
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success width-per-40">
                            </div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-5.png" width="35">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success badge-shadow">Completed</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          6
                        </td>
                        <td>Redesign homepage</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar width-per-60"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-1.png" width="35">
                          <img alt="image" src="assets/img/users/user-3.png" width="35">
                          <img alt="image" src="assets/img/users/user-4.png" width="35">
                        </td>
                        <td>2018-04-10</td>
                        <td>
                          <div class="badge badge-info badge-shadow">Todo</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          7
                        </td>
                        <td>Backup database</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-warning width-per-70"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-1.png" width="35">
                          <img alt="image" src="assets/img/users/user-2.png" width="35">
                        </td>
                        <td>2018-01-29</td>
                        <td>
                          <div class="badge badge-warning badge-shadow">In Progress</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          8
                        </td>
                        <td>Input data</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success width-per-90"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-2.png" width="35">
                          <img alt="image" src="assets/img/users/user-5.png" width="35">
                          <img alt="image" src="assets/img/users/user-4.png" width="35">
                          <img alt="image" src="assets/img/users/user-1.png" width="35">
                        </td>
                        <td>2018-01-16</td>
                        <td>
                          <div class="badge badge-success badge-shadow">Completed</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          9
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success width-per-40">
                            </div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-5.png" width="35">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success badge-shadow">Completed</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          10
                        </td>
                        <td>Redesign homepage</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar width-per-60"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-1.png" width="35">
                          <img alt="image" src="assets/img/users/user-3.png" width="35">
                          <img alt="image" src="assets/img/users/user-4.png" width="35">
                        </td>
                        <td>2018-04-10</td>
                        <td>
                          <div class="badge badge-info badge-shadow">Todo</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          11
                        </td>
                        <td>Backup database</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-warning width-per-70"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-1.png" width="35">
                          <img alt="image" src="assets/img/users/user-2.png" width="35">
                        </td>
                        <td>2018-01-29</td>
                        <td>
                          <div class="badge badge-warning badge-shadow">In Progress</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          12
                        </td>
                        <td>Input data</td>
                        <td class="align-middle">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success width-per-90"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="assets/img/users/user-2.png" width="35">
                          <img alt="image" src="assets/img/users/user-5.png" width="35">
                          <img alt="image" src="assets/img/users/user-4.png" width="35">
                          <img alt="image" src="assets/img/users/user-1.png" width="35">
                        </td>
                        <td>2018-01-16</td>
                        <td>
                          <div class="badge badge-success badge-shadow">Completed</div>
                        </td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
 --}}




          {{-- login Page --}}
          {{-- <body>
            <div class="loader"></div>
            <div id="app">
              <section class="section">
                <div class="container mt-5">
                  <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                      <div class="card card-primary">
                        <div class="card-header" style="display: flex; justify-content: center;">
                          <a href="index.html">
                              <img alt="image" src="assets/img/logo.png" class="header-logo" style="max-width: 150px; height: auto;">
                              <span class="logo-name"></span>
                          </a>
                      </div>
                      
                        <div class="card-body">
                          <h4 style="text-align: center; color: black;">Login</h4>
                          <form method="POST" action="#" class="needs-validation" novalidate="">
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                              <div class="invalid-feedback">
                                Please fill in your email
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="d-block">
                                <label for="password" class="control-label">Password</label>
      
                              </div>
                              <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                              <div class="invalid-feedback">
                                please fill in your password
                              </div>
                            </div>
                            <div class="form-group">
                              
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Login
                              </button>
                            </div>
                          </form>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <!-- General JS Scripts -->
            <script src="assets/js/app.min.js"></script>
            <!-- JS Libraies -->
            <!-- Page Specific JS File -->
            <!-- Template JS File -->
            <script src="assets/js/scripts.js"></script>
            <!-- Custom JS File -->
            <script src="assets/js/custom.js"></script>
          </body> --}}

          
          
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>