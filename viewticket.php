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

    <title>View Ticket</title>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Ticket
                        <a href="tickets.php" class="btn btn-danger float-end">BACK</a>
                    </div>

                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $ticket_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM tickets WHERE id='$ticket_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $ticketdata = mysqli_fetch_array($query_run);
                                ?>

                                <div class="input-group input-group-sm mr-3">
                                        <label>Policy Name: </label>
                                        <input type="text" name="policyname" value="<?=$ticketdata['Policyname'];?>" class="form-control m-3" disabled>
                                        <label>Policy ID: </label>
                                        <input type="text" name="policyID" value="<?=$ticketdata['IDnumber'];?>" class="form-control m-3" method="post" disabled>
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