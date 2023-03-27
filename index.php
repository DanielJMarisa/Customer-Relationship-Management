<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Dashboard</title>
</head>
     <?php include('navbar.php');
        session_start();
        date_default_timezone_set("Africa/Harare");

        $sename = $_SESSION['firstname'];
        $sesurname = $_SESSION['lastname'];

     ?>
<body>

    <div class=" card-header container mt-4">
    <h1>Dashboard</h1>
    <h6><?php echo Date("Y/m/d H:i");?></h6>
    <h5>Welcome <?php echo "$sename"." $sesurname";?> </h5>

    </div>

    <div class="card">
            <div class="card-body lenght-viewport" >
            <?php include 'graph/graph.php';?>
            </div>
    </div>






    <?php include('footer.php')?>
</body>

</html>



