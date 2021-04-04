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

    <title>Add Marks</title>
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
       <h3>Add Prelim Insem marks</h3>
       <form action="insertinsem_marks.php" action="post">
        <div class="d-flex justify-content-start">
          <div class="form-group">
            <label for="rollnumber">Enter the Rollnumber of student</label>
            <input type="text" class="form-control " placeholder="Roll Number" name="s_rollno" required>
            <small id="rollnumberHelpBlock" class="form-text text-muted">Enter rollnumber of student whose marks you want to Enter</small>
          </div>
        </div>
          <div class="row">
              <div class="input-group mb-3 px-3">
              <button type="button" class="btn btn-secondary">Question No 1</button>
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">a)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q1a">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">b)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q1b">
            </div>
          </div>

          <div class="row">
              <div class="input-group mb-3 px-3">
              <button type="button" class="btn btn-secondary">Question No 2</button>
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">a)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q2a">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">b)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q2b">
            </div>
          </div>

          <div class="row">
              <div class="input-group mb-3 px-3">
              <button type="button" class="btn btn-secondary">Question No 3</button>
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">a)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q3a">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">b)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q3b">
            </div>
          </div>

          <div class="row">
              <div class="input-group mb-3 px-3">
              <button type="button" class="btn btn-secondary">Question No 4</button>
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">a)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q4a">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">b)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q4b">
            </div>
          </div>

          <div class="row">
              <div class="input-group mb-3 px-3">
              <button type="button" class="btn btn-secondary">Question No 5</button>
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">a)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q5a">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">b)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q5b">
            </div>
          </div>

          <div class="row">
              <div class="input-group mb-3 px-3">
              <button type="button" class="btn btn-secondary">Question No 6</button>
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">a)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q6a">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">b)</span>
              </div>
              <input type="text" class="form-control col-4" aria-describedby="inputGroup-sizing-default" name="Q6b">
            </div>
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