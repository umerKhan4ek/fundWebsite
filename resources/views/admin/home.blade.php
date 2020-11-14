<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Robo Adviser</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="{{url('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet"  href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <!-- Custom styles for this template -->
  <link href="{{url('/css/simple-sidebar.css')}}" rel="stylesheet">
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js">
    
    </script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" >
        $(document).ready(function() {
      $('#example').DataTable();
  } );
    </script>
  <style>
  .order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
  </style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right bg-dark" id="sidebar-wrapper">
      <div class="sidebar-heading text-light bg-info">Admin </div>
      <div class="list-group list-group-flush ">
        <a href="#" class="list-group-item list-group-item-action bg-dark  text-light"><i class="fa fa-home text-success"></i> Dashboard</a>
        <a href="{{url('/Funds')}}" class="list-group-item list-group-item-action bg-dark  text-light"><i class="fa fa-users text-success"></i> Funds</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark  text-light"> <i class="fa fa-home text-success"></i> Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark  text-light"><i class="fa fa-home text-success"></i> Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark  text-light"><i class="fa fa-home text-success"></i> Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark  text-light"><i class="fa fa-home text-success"></i> Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profile
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

         <div class="container-fluid">

     @yield('index')
     @yield('Funds')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
 

  
  <!-- Bootstrap core JavaScript -->
  <script src="{{url('/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  
  </script>

</body>

</html>
