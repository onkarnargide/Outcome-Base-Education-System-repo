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

    <!-- body style -->
    <style type="text/css">
      body{
        padding-top: 75px;
      }
    </style>

    <title>Add New Student</title>
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
              <a class="nav-link" href="#">Signed in as <?php echo $login_session; ?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Go To</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="welcome.php">Dashboard</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
             </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a href="logout.php" class="btn btn-outline-warning my-2 my-sm-0" role="button" aria-pressed="true"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
          </form>
        </div>
    </nav>

    <!-- Add Student Information -->
    <h2 class="display-5 pl-5"><i class="fas fa-user-graduate pr-2"></i> STUDENTS</h2>
    <hr style=" border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
      <div class="container">
       <h3>Add new student</h3>
       <form action="insert_student.php" action="post">
          <div class="form-group">
            <label for="rollnumber">Enter the Rollnumber of student</label>
            <input type="text" class="form-control " placeholder="Roll Number" name="s_rollno" required>
            <small id="rollnumberHelpBlock" class="form-text text-muted">Enter complete rollnumber</small>
          </div>
          <div class="form-group">
            <label for="name">Enter the name of student</label>
            <input type="text" class="form-control " placeholder="Name" name="s_name" required>
            <small id="nameHelpBlock" class="form-text text-muted">Enter complete name</small>
          </div>
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="gender">Gender</label>
              </div>
              <select class="custom-select" name="gender" required>
                <option selected value="">Select your gender...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
              </select>
          </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-calendar-alt"></i></span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter your Date of Birth in dd/mm/yyyy format" name="dob"> 
          </div>
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="class">Class</label>
              </div>
              <select class="custom-select" name="class" required>
                <option selected value="">Select your year...</option>
                <option value="FE">First Year</option>
                <option value="SE">Second Year</option>
                <option value="TE">Third Year</option>
                <option value="BE">Fourth Year</option>
              </select>
          </div>
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="dept_name">Department</label>
              </div>
              <select class="custom-select" name="dept_name" required>
                <option selected value="">Select your department...</option>
                <option value="CS">Computer Science</option>
                <option value="IT">Information & Technology</option>
                <option value="E&TC">Electronics & Telecommunication</option>
              </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="academic_year">Academic Year</label>
            </div>
            <select class="custom-select" id="academic_year" name="academic_year" required>
              <option selected>Choose Academic Year...</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="sem">Semester</label>
            </div>
            <select class="custom-select" id="sem" name="sem" required>
              <option selected>Choose Semester...</option>
              <option value="I">Semester 1</option>
              <option value="II">Semester 2</option>
            </select>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-outline-success btn-lg rounded-pill">Submit Student Information</button>
          </div>
        </form> 
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>