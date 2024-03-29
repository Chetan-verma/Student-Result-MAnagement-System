<?php  

// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "my";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../Styles/insertall.css">

    <title>Female Students</title>

</head>

<body>

    <header>
        <a href="below35.php" class="srms"><span>Failed Students</span></a>
        <nav class="navbar">
            <ul>
                <li><a href="faculty_db.php">Home</a></li>
                <li><a href="sview.php">Student_Details</a>
                    <ul>
                        <a href="above85.php">Top Students</a>
                        <a href="below35.php">Failed Students</a>
                        <a href="malestu.php">Male Students</a>
                    </ul>
                </li>
                <li><a href="addresult.php">Result</a>
                    <ul>
                        <a href="1semresult.php">1st Semester</a>
                        <a href="2semresult.php">2nd Semester</a>
                        <a href="3semresult.php">3rd Semester</a>
                        <a href="4semresult.php">4th Semester</a>
                        <a href="5semresult.php">5th Semester</a>
                        <a href="6semresult.php">6th Semester</a>
                        <a href="7semresult.php">7th Semester</a>
                        <a href="8semresult.php">8th Semester</a>
                    </ul>
                </li>
                <li class="nav-item1">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>

    </header>

    <div class="container my-4">


        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Usn</th>
                    <th scope="col">Sem</th>
                    <th scope="col">Sec</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * from sdetails where gender='female'";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['fname'] . "</td>
            <td>". $row['usn'] . "</td>
            <td>". $row['sem'] . "</td>
            <td>". $row['sec'] . "</td>
          </tr>";
        } 
          ?>
            </tbody>
        </table>
    </div>
    <hr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();

        });
    </script>
</body>

</html>