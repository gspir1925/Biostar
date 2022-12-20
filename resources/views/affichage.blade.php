<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="colorib/css/style.css">


    <title>BIOSTAR MANAGEMENT</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!--<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
        jQuery(document).ready(function(){
           jQuery('#ajaxSubmit').click(function(e){
              e.preventDefault();
              $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                 }
             });
              jQuery.ajax({
                 url: "{{ url('/display/post') }}",
                 method: 'post',
                 data: {
                    user_name: jQuery('#user_selected').val(),
                    date_choice: jQuery('#date_choice').val()
                 },
                 success: function(result){
                    console.log(result);
                 }});
              });
        });
    </script>-->

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BIOSTAR <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Biostar Management</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Etat</h6>
                        <a class="collapse-item" href="{{url('/report')}}">Generate Report</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- Nav Item - Pages Collapse Menu -->
            <!--<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>-->

            <!-- Nav Item - Charts -->
            <!--<li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>-->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/display')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Display Time</span></a>
            </li>

            <!-- Divider -->
            <!--<hr class="sidebar-divider d-none d-md-block">-->

            <!-- Sidebar Toggler (Sidebar) -->
            <!--<div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>-->

            <!-- Sidebar Message -->
            <!--<div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>-->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        
                        <!-- Nav Item - Messages -->
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Reporting of all user access in system</h6><br>
                        </div>
                        <div>
                                <form id="myForm" method="POST" action='{{url('/display-post')}}'>
                                    @csrf
                                    <div class="form-group">

                                        <select class="form-select" id="multiple-checkboxes" multiple="multiple" name="user_selected[]">
                                            @if (!empty($users))
                                                @foreach ($users as $user)
                                                    <option value="{{$user->name}}">{{$user->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>

                                        <!--<select class="form-select" aria-label="Default select example" id="user_selected" name="user_selected">
                                           
                                        </select>-->
                                        <select class="form-select" id="multiple-checkboxes" multiple="multiple" name="device_selected[]">
                                            <option value="test_device">TestDevice</option>
                                            @if (!empty($device_trouve))
                                                @foreach ($device_trouve as $device_display)
                                                    <option value="{{$device_display->NM}}">{{$device_display->NM}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_begin">Date de début</label>
                                        <input type="date" name="date_begin" id="date_choice_begin">
                                        <label for="date_end">Date de fin</label>
                                        <input type="date" name="date_end" id="date_choice_end">
                                    </div>
                                    <button class="btn btn-primary" id="ajaxSubmit">Afficher</button>
                                </form>
                            </p>
                            <p>
                                @if (!empty($table_existe))
                                    {{$table_existe}}<br/>
                                @endif
                            </p>
                        </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Noms</th>
                                            <th>Lundi</th>
                                            <th>Mardi</th>
                                            <th>Mercredi</th>
                                            <th>Jeudi</th>
                                            <th>Vendredi</th>
                                            <th>Samedi</th>
                                            <th>Dimanche</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if (!empty($user_requested))
                                        @php
                                            for($i=0;$i<$countname_user;$i++){
                                                echo'<tr>';
                                                    echo'<td>';
                                                        echo $user_requested[$i];
                                                    echo'</td>';
                                                    echo'<td>';
                                                        if (!empty($tabentree_monday)) {
                                                            if ($countname_user=1) {
                                                                if ($countname_device=1) {
                                                                    foreach ($tabentree_monday[0][0] as $key => $value) {
                                                                        echo $tabentree_monday[0][0][$key].'<br />';
                                                                    }
                                                                }
                                                                else {
                                                                    for($j=0;$j<$countname_device; $j++){
                                                                        foreach ($tabentree_monday[0][$j] as $key => $value) {
                                                                            echo $tabentree_monday[0][$j][$key].'<br />';
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            else{
                                                                if ($countname_device=1) {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        foreach ($tabentree_monday[$i][0] as $key => $value) {
                                                                            echo $tabentree_monday[$i][0][$key].'<br />';
                                                                        } 
                                                                    }
                                                                } else {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        for($j=0;$j<$countname_device; $j++){
                                                                            foreach ($tabentree_monday[$i][$j] as $key => $value) {
                                                                                echo $tabentree_monday[$i][$j][$key].'<br />';
                                                                            }
                                                                        }  
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    echo'</td>';
                                                    echo'<td>';
                                                        if (!empty($tabentree_tuesday)) {
                                                            if ($countname_user=1) {
                                                                if ($countname_device=1) {
                                                                    foreach ($tabentree_tuesday[0][0] as $key => $value) {
                                                                        echo $tabentree_tuesday[0][0][$key].'<br />';
                                                                    }
                                                                }
                                                                else {
                                                                    for($j=0;$j<$countname_device; $j++){
                                                                        foreach ($tabentree_tuesday[0][$j] as $key => $value) {
                                                                            echo $tabentree_tuesday[0][$j][$key].'<br />';
                                                                        }
                                                                    }
                                                                }
                                                            } 
                                                            else {
                                                                if ($countname_device=1) {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        foreach ($tabentree_tuesday[$i][0] as $key => $value) {
                                                                            echo $tabentree_tuesday[$i][0][$key].'<br />';
                                                                        } 
                                                                    }
                                                                } else {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        for($j=0;$j<$countname_device; $j++){
                                                                            foreach ($tabentree_tuesday[$i][$j] as $key => $value) {
                                                                                echo $tabentree_tuesday[$i][$j][$key].'<br />';
                                                                            }
                                                                        }  
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    echo'</td>';
                                                    echo'<td>';
                                                        if (!empty($tabentree_wednesday)) {
                                                            if ($countname_user=1) {
                                                                if ($countname_device=1) {
                                                                    foreach ($tabentree_wednesday[0][0] as $key => $value) {
                                                                        echo $tabentree_wednesday[0][0][$key].'<br />';
                                                                    }
                                                                }
                                                                else {
                                                                    for($j=0;$j<$countname_device; $j++){
                                                                        foreach ($tabentree_wednesday[0][$j] as $key => $value) {
                                                                            echo $tabentree_wednesday[0][$j][$key].'<br />';
                                                                        }
                                                                    }
                                                                }
                                                            } 
                                                            else {
                                                                if ($countname_device=1) {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        foreach ($tabentree_wednesday[$i][0] as $key => $value) {
                                                                            echo $tabentree_wednesday[$i][0][$key].'<br />';
                                                                        } 
                                                                    }
                                                                } else {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        for($j=0;$j<$countname_device; $j++){
                                                                            foreach ($tabentree_wednesday[$i][$j] as $key => $value) {
                                                                                echo $tabentree_wednesday[$i][$j][$key].'<br />';
                                                                            }
                                                                        }  
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    echo'</td>';
                                                    echo'<td>';
                                                        if (!empty($tabentree_thursday)) {
                                                            if ($countname_user=1) {
                                                                if ($countname_device=1) {
                                                                    foreach ($tabentree_thursday[0][0] as $key => $value) {
                                                                        echo $tabentree_thursday[0][0][$key].'<br />';
                                                                    }
                                                                }
                                                                else {
                                                                    for($j=0;$j<$countname_device; $j++){
                                                                        foreach ($tabentree_thursday[0][$j] as $key => $value) {
                                                                            echo $tabentree_thursday[0][$j][$key].'<br />';
                                                                        }
                                                                    }
                                                                }
                                                            } 
                                                            else {
                                                                if ($countname_device=1) {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        foreach ($tabentree_thursday[$i][0] as $key => $value) {
                                                                            echo $tabentree_thursday[$i][0][$key].'<br />';
                                                                        } 
                                                                    }
                                                                } else {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        for($j=0;$j<$countname_device; $j++){
                                                                            foreach ($tabentree_thursday[$i][$j] as $key => $value) {
                                                                                echo $tabentree_thursday[$i][$j][$key].'<br />';
                                                                            }
                                                                        }  
                                                                    }
                                                                }  
                                                            }
                                                        }
                                                    echo'</td>';
                                                    echo'<td>';
                                                        if (!empty($tabentree_friday)) {
                                                            if ($countname_user=1) {
                                                                if ($countname_device=1) {
                                                                    foreach ($tabentree_friday[0][0] as $key => $value) {
                                                                        echo $tabentree_friday[0][0][$key].'<br />';
                                                                    }
                                                                }
                                                                else {
                                                                    for($j=0;$j<$countname_device; $j++){
                                                                        foreach ($tabentree_friday[0][$j] as $key => $value) {
                                                                            echo $tabentree_friday[0][$j][$key].'<br />';
                                                                        }
                                                                    }
                                                                }
                                                            } 
                                                            else {
                                                                if ($countname_device=1) {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        foreach ($tabentree_friday[$i][0] as $key => $value) {
                                                                            echo $tabentree_friday[$i][0][$key].'<br />';
                                                                        } 
                                                                    }
                                                                } else {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        for($j=0;$j<$countname_device; $j++){
                                                                            foreach ($tabentree_friday[$i][$j] as $key => $value) {
                                                                                echo $tabentree_friday[$i][$j][$key].'<br />';
                                                                            }
                                                                        }  
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    echo'</td>';
                                                    echo'<td>';
                                                        if (!empty($tabentree_saturday)) {
                                                            if ($countname_user=1) {
                                                                if ($countname_device=1) {
                                                                    foreach ($tabentree_saturday[0][0] as $key => $value) {
                                                                        echo $tabentree_saturday[0][0][$key].'<br />';
                                                                    }
                                                                }
                                                                else {
                                                                    for($j=0;$j<$countname_device; $j++){
                                                                        foreach ($tabentree_saturday[0][$j] as $key => $value) {
                                                                            echo $tabentree_saturday[0][$j][$key].'<br />';
                                                                        }
                                                                    }
                                                                }
                                                            } 
                                                            else {
                                                                if ($countname_device=1) {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        foreach ($tabentree_saturday[$i][0] as $key => $value) {
                                                                            echo $tabentree_saturday[$i][0][$key].'<br />';
                                                                        } 
                                                                    }
                                                                } else {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        for($j=0;$j<$countname_device; $j++){
                                                                            foreach ($tabentree_saturday[$i][$j] as $key => $value) {
                                                                                echo $tabentree_saturday[$i][$j][$key].'<br />';
                                                                            }
                                                                        }  
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    echo'</td>';
                                                    echo'<td>';
                                                        if (!empty($tabentree_sunday)) {
                                                            if ($countname_user=1) {
                                                                if ($countname_device=1) {
                                                                    foreach ($tabentree_sunday[0][0] as $key => $value) {
                                                                        echo $tabentree_sunday[0][0][$key].'<br />';
                                                                    }
                                                                }
                                                                else {
                                                                    for($j=0;$j<$countname_device; $j++){
                                                                        foreach ($tabentree_sunday[0][$j] as $key => $value) {
                                                                            echo $tabentree_sunday[0][$j][$key].'<br />';
                                                                        }
                                                                    }
                                                                }
                                                            } 
                                                            else {
                                                                if ($countname_device=1) {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        foreach ($tabentree_sunday[$i][0] as $key => $value) {
                                                                            echo $tabentree_sunday[$i][0][$key].'<br />';
                                                                        } 
                                                                    }
                                                                } else {
                                                                    for($i=0;$i<$countname_user;$i++){
                                                                        for($j=0;$j<$countname_device; $j++){
                                                                            foreach ($tabentree_sunday[$i][$j] as $key => $value) {
                                                                                echo $tabentree_sunday[$i][$j][$key].'<br />';
                                                                            }
                                                                        }  
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    echo'</td>';
                                                echo'</tr>';
                                            }
                                        @endphp
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <script src="colorib/js/jquery.min.js"></script>
    <script src="colorib/js/popper.js"></script>
    <script src="colorib/js/bootstrap.min.js"></script>
    <script src="colorib/js/bootstrap-multiselect.js"></script>
    <script src="colorib/js/main.js"></script>
    <!-- Bootstrap core JavaScript-->
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>