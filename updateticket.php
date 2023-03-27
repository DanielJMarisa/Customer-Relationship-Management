<?php
session_start();
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

    <title>Update Ticket</title>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Ticket
                            <a href="tickets.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">


                                <form action="code.php" method="POST">
                                <?php

                                if(isset($_GET['id']))
                                {
                                $ticket_id = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM tickets WHERE id='$ticket_id' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                $ticketdetails = mysqli_fetch_array($query_run);
                                ?>



                                    <input type="hidden" name="id" value="<?= $ticketdetails['id']; ?>">

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Name: </label>
                                        <input type="text" name="ticketpolname" value="<?=$ticketdetails['Policyname'];?>" class="form-control m-3" >
                                        <label>Surname: </label>
                                        <input type="text" name="leadsurname" value="<?=$ticketdetails['IDnumber'];?>" class="form-control m-3" method="post">
                                    </div>
                                    <div class="input-group input-group-sm mr-3">
                                        <label>Primary Contact: </label>
                                        <input type="text" name="leadcontact" value="<?=$ticketdetails['Renewals'];?>"  class="form-control m-3" >
                                        <label>Primary Email: </label>
                                        <input type="text" name="leademail" value="<?=$ticketdetails['Category'];?>"  class="form-control m-3">
                                    </div>

                                    

                                    

                                    
                                    


                                    <div class="mb-3">
                                        <button type="submit" name="update_lead" class="btn btn-primary">
                                            Update Lead
                                        </button>
                                    </div>

                                </form>
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

    <script src="javascript.js"></script>
</body>
</html>