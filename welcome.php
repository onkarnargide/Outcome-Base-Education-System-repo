<?php
   include('session.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Sidebar Style -->
    <style type="text/css">
      .sidebar-container {
  position: fixed;
  width: 200px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #1a1a1a;
  color: #fff;
}

.content-container {
  padding-top: 20px;
}

.sidebar-logo {
  padding: 10px 15px 10px 30px;
  font-size: 20px;
  background-color: #2574A9;
}

.sidebar-navigation {
  padding: 0;
  margin: 0;
  list-style-type: none;
  position: relative;
}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 20px;
}

.sidebar-navigation li a {
  padding: 10px 15px 10px 30px;
  display: block;
  color: #fff;
}

.sidebar-navigation li .fa {
  margin-right: 10px;
}

.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: none;
  outline: none;
}

.sidebar-navigation li::before {
  background-color: #2574A9;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}

.sidebar-navigation li:hover::before {
  width: 100%;
}

.sidebar-navigation .header {
  font-size: 12px;
  text-transform: uppercase;
  background-color: #151515;
  padding: 10px 15px 10px 30px;
}

.sidebar-navigation .header::before {
  background-color: transparent;
}

.content-container {
  padding-left: 200px;
}
    </style>
<!-- body style -->
    <style type="text/css">
      body{
        padding-top: 55px;
        padding-left: 210px;
      }
    </style>

    <title>Dashboard</title>
  </head>
  <body>
        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"><i class="fas fa-user-graduate mr-3"></i>Outcome Based Education</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Welcome <?php echo $login_session; ?><span class="sr-only">(current)</span></a>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a href="logout.php" class="btn btn-outline-warning my-2 my-sm-0" role="button" aria-pressed="true"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
          </form>
        </div>
    </nav>

    <!-- Sidebar Navigation -->

    <div class="sidebar-container">
  <div class="sidebar-logo">
    OBE
  </div>
  <ul class="sidebar-navigation">
    <li class="header">Navigation</li>
    <li>
      <a href="welcome.php">
        <i class="fas fa-tachometer-alt pr-2"></i> Dashboard
      </a>
    </li>
    <li>
      <a href="view_students.php">
        <i class="fas fa-book-reader pr-2"></i> Student
      </a>
    </li>
    <li>
      <a href="view_teachers.php">
        <i class="fas fa-chalkboard-teacher pr-2"></i> Teachers
      </a>
    </li>
    <li>
      <a href="select_exam_attainment.php">
        <i class="fas fa-bullseye pr-2"></i> Attainment
      </a>
    </li>
    <li>
      <a href="select_exam.php">
        <i class="fas fa-poll pr-2"></i> Exam Result
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fas fa-chart-line pr-2"></i> POs/COs
      </a>
    </li>
  </ul>
</div>
<hr>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <i class="fas fa-check"></i><strong> Welcome!</strong> to your Dashboard.    Successfully logged in as <?php echo $login_session; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<!-- Cards -->
<div class="card-group">
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Students</h5>
        <p class="card-text">View current student information or add new student to database.</p>
        <a href="view_students.php" class="btn btn-primary"><i class="fas fa-book-reader pr-2"></i>View</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Teachers</h5>
        <p class="card-text">View current teacher information or add new teacher to database.</p>
        <a href="view_teachers.php" class="btn btn-primary"><i class="fas fa-chalkboard-teacher pr-2"></i>View</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Result Attained</h5>
        <p class="card-text">View Outcomes that have been accomplished and the progress of the class.</p>
        <a href="select_exam_attainment.php" class="btn btn-primary"><i class="fas fa-chart-line pr-2"></i>View</a>
      </div>
    </div>
  </div>  
</div>
<div class="card-group">
  <div class="col-md-4 pt-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Exam Result</h5>
        <p class="card-text">View student marks and add or update marks to the database.</p>
        <a href="select_exam.php" class="btn btn-primary"><i class="fas fa-poll pr-2"></i>View</a>
      </div>
    </div>
  </div>
  <!-- <div class="col-md-4 pt-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">POs/COs</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="add_co.php" class="btn btn-primary"><i class="fas fa-chart-line pr-2"></i>View</a>
      </div>
    </div>
  </div> -->
</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>