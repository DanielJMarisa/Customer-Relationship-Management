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

    <title>Edit Dealer</title>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Dealer
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM dealers WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $leaddata = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $leaddetails['id']; ?>">

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Name: </label>
                                        <input type="text" name="leadname" value="<?=$leaddetails['firstname'];?>" class="form-control m-3" >
                                        <label>Surname: </label>
                                        <input type="text" name="leadsurname" value="<?=$leaddetails['surname'];?>" class="form-control m-3" method="post">
                                    </div>
                                    <div class="input-group input-group-sm mr-3">
                                        <label>Primary Contact: </label>
                                        <input type="text" name="leadcontact" value="<?=$leaddetails['primarycontact'];?>"  class="form-control m-3" >
                                        <label>Primary Email: </label>
                                        <input type="text" name="leademail" value="<?=$leaddetails['primaryemail'];?>"  class="form-control m-3">
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