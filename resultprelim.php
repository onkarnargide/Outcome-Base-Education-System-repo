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

    <title>Result Attained</title>
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

     <!-- View Student Marks -->
    <h2 class="display-5 pl-5"><i class="fas fa-users pr-2"></i> Result Attained in Prelim</h2>
    <hr style=" border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
      <div class="container-fluid">
        <div class="d-flex flex-row justify-content-center">
          <h3>Students above Threshold</h3>
        </div>
            <div class="row">
              <table>
                <tr>
                  <th>Students above Threshold in Q1a</th>
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

                  $sql1a = "select count(s_rollno)  as stud_above_threshQ1a from prelim where Q1a > 2.5;";
                  $result = $connection -> query($sql1a);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ1a"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>


               <table>
                <tr>
                  <th>Students above Threshold in Q1b</th>
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

                  $sql1b = "select count(s_rollno)  as stud_above_threshQ1b from prelim where Q1b > 2.5;";
                  $result = $connection -> query($sql1b);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ1b"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>


               <table>
                <tr>
                  <th>Students above Threshold in Q2a</th>
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

                  $sql2a = "select count(s_rollno)  as stud_above_threshQ2a from prelim where Q2a > 2.5;";
                  $result = $connection -> query($sql2a);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ2a"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students above Threshold in Q2b</th>
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

                  $sql2b = "select count(s_rollno)  as stud_above_threshQ2b from prelim where Q2b > 2.5;";
                  $result = $connection -> query($sql2b);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ2b"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students above Threshold in Q3a</th>
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

                  $sql3a = "select count(s_rollno)  as stud_above_threshQ3a from prelim where Q3a > 2.5;";
                  $result = $connection -> query($sql3a);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ3a"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students above Threshold in Q3b</th>
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

                  $sql3b = "select count(s_rollno)  as stud_above_threshQ3b from prelim where Q3b > 2.5;";
                  $result = $connection -> query($sql3b);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ3b"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students above Threshold in Q4a</th>
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

                  $sql4a = "select count(s_rollno)  as stud_above_threshQ4a from prelim where Q4a > 2.5;";
                  $result = $connection -> query($sql4a);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ4a"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students above Threshold in Q4b</th>
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

                  $sql4b = "select count(s_rollno)  as stud_above_threshQ4b from prelim where Q4b > 2.5;";
                  $result = $connection -> query($sql4b);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ4b"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students above Threshold in Q5a</th>
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

                  $sql5a = "select count(s_rollno)  as stud_above_threshQ5a from prelim where Q5a > 2.5;";
                  $result = $connection -> query($sql5a);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ5a"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students above Threshold in Q5b</th>
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

                  $sql5b = "select count(s_rollno)  as stud_above_threshQ5b from prelim where Q5b > 2.5;";
                  $result = $connection -> query($sql5b);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ5b"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students above Threshold in Q6a</th>
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

                  $sql6a = "select count(s_rollno)  as stud_above_threshQ6a from prelim where Q6a > 2.5;";
                  $result = $connection -> query($sql6a);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ6a"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students above Threshold in Q6b</th>
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

                  $sql6b = "select count(s_rollno)  as stud_above_threshQ6b from prelim where Q6b > 2.5;";
                  $result = $connection -> query($sql6b);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["stud_above_threshQ6b"] ."</td></tr>";
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

      <div class="container-fluid">
       <hr style=" border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
       <div class="d-flex flex-row justify-content-center">
         <h3>Percent of Students above Threshold</h3>
       </div>
       <div class="row">

        <table>
                <tr>
                  <th>Students % above Threshold in Q1a</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q1a > 2.5) / (select count(s_rollno) from prelim where Q1a >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students % above Threshold in Q1b</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q1b > 2.5) / (select count(s_rollno) from prelim where Q1b >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students % above Threshold in Q2a</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q2a > 2.5) / (select count(s_rollno) from prelim where Q2a >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students % above Threshold in Q2b</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q2b > 2.5) / (select count(s_rollno) from prelim where Q2b >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students % above Threshold in Q3a</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q3a > 2.5) / (select count(s_rollno) from prelim where Q3a >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students % above Threshold in Q3b</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q3b > 2.5) / (select count(s_rollno) from prelim where Q3b >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students % above Threshold in Q4a</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q4a > 2.5) / (select count(s_rollno) from prelim where Q4a >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students % above Threshold in Q4b</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q4b > 2.5) / (select count(s_rollno) from prelim where Q4b >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students % above Threshold in Q5a</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q5a > 2.5) / (select count(s_rollno) from prelim where Q5a >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students % above Threshold in Q5b</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q5b > 2.5) / (select count(s_rollno) from prelim where Q5b >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students % above Threshold in Q6a</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q6a > 2.5) / (select count(s_rollno) from prelim where Q6a >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
                    }
                    echo"</table>";

                  }
                  else{
                    echo "0 result";
                  }
                  $connection-> close();

                 ?>
               </table>

               <table>
                <tr>
                  <th>Students % above Threshold in Q6b</th>
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

                  $sql = "select (select count(s_rollno)  from prelim where Q6b > 2.5) / (select count(s_rollno) from prelim where Q6b >=0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                      echo "<tr><td>". $row["studpercent"] ."</td></tr>";
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

      <hr style=" border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
<div class="container d-flex justify-content-center ">

  <h4 class="pb-5">Attainment Level:<?php
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

                  $sql = "select (select count(s_rollno)  from prelim where total > 15) / (select count(s_rollno) from prelim where total >0) * 100 as studpercent";
                  $result = $connection -> query($sql);

                  $row = mysqli_fetch_array($result,MYSQLI_NUM);

                  if ($row > 70) {
                    echo "HIGH";
                    }
                  elseif($row > 60){
                    echo "MEDIUM";
                  }
                  else{
                    echo "LOW";
                  }
                  $connection-> close();

                 ?></h4>
  
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>