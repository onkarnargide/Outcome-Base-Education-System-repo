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
    <link rel="stylesheet" type="text/css" href="table.css">

    <title>View Students</title>
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
              <a class="nav-link" href="#l">Student <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Signed in as <?php echo $login_session; ?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Go To</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="welcome.php">Dashboard</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="select_exam.php">Exam Result</a>
                <a class="dropdown-item" href="#">Attainment</a>
              </div>
             </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a href="logout.php" class="btn btn-outline-warning my-2 my-sm-0" role="button" aria-pressed="true"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
          </form>
        </div>
    </nav>

     <!-- View Student Information -->
    <h2 class="display-5 pl-5"><i class="fas fa-user-graduate pr-2"></i> STUDENTS</h2>
    <hr style=" border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
      <div class="container">
        <div class="d-flex bd-highlight mb-3">
          <div class="mr-auto p-2 bd-highlight"><h3>View Teachers</h3></div>
          <!-- <div class="p-2 bd-highlight">
            <a class="btn btn-outline-danger" href="">Remove existing student</a>
          </div>
          <div class="p-2 bd-highlight">
            <a class="btn btn-outline-success" href="add_student.php">Add new student</a></div> -->       
        </div>
            <div>
              <table>
                <tr>
                  <th>Username</th>
                  <th>email</th>
                </tr>
                <?php
                  $host    = "localhost";
                  $user    = "root";
                  $pass    = "";
                  $db_name = "outcome_base";

                  //create connection
                  $connection = mysqli_connect($host, $user, $pass, $db_name);

                  //test if connection failed
                  if(mysqli_connect_errno()){
                      die("connection failed: "
                          . mysqli_connect_error()
                          . " (" . mysqli_connect_errno()
                          . ")");
                  }

                  $sql = "SELECT username,email from user";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["username"] ."</td><td>" . $row["email"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>
              
            </div>
      </div>       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>