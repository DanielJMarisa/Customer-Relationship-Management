<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Dealer View</title>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Dealer Details
                            <?php
                        if(isset($_GET['id']))
                        {
                            $dealer_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM dealers WHERE id='$dealer_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $leaddata = mysqli_fetch_array($query_run);
                                ?>
                            <a href="dealers.php" class="btn btn-danger float-end">BACK</a>

                            <a href="editdealer.php?id=<?= $leaddata['id']; ?>" class="btn btn-success float-end">Edit</a>
                            <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                        </h4>
                    </div>

                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $dealers_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM dealers WHERE id='$dealers_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $lead = mysqli_fetch_array($query_run);
                                ?>

                                    <div class="mb-3">
                                        <label>Dealer Name</label>
                                        <p class="form-control">
                                            <?=$lead['dealerfirstname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Dealer Surname</label>
                                        <p class="form-control">
                                            <?=$lead['dealersurname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Dealership Name</label>
                                        <p class="form-control">
                                            <?=$lead['dealershipname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Dealer Tel</label>
                                        <p class="form-control">
                                            <?=$lead['landlinetel'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>