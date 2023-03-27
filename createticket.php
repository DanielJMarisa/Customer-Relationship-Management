<?php
session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create Ticket</title>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <h4>Create Ticket
                            <a href="dealers.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                                    <h4>Tickect Information</h4>
                                    
                                    <button type="submit" name="create_ticket" class="btn btn-primary float-end">Create Ticket</button>
                                    
                                    <div class="input-group input-group-sm mr-3">
                                        <label>Policy Holders Name: </label>
                                        <input type="text" name="dealername"  class="form-control m-3" placeholder="Please Enter Policy Holders Name">
                                        <label>Policy Holders Surname: </label>
                                        <input type="text" name="dealersurname"  class="form-control m-3" placeholder="Please Enter Policy Holders Surname">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>ID Number: </label>
                                        <input type="text" name="delaershipname"  class="form-control m-3" placeholder="Please Enter Policy Holders I.D no">
                                        <label>Renewals: </label>
                                        <input type="text" name="dealeridno"  class="form-control m-3" method="post">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Welcome Call Date: </label>
                                        <input type="date" name="landlinetel"  class="form-control m-3" >
                                        <label>Category: </label>
                                        <input type="text" name="dealeremail"  class="form-control m-3" method="post">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Policy No: </label>
                                        <input type="text" name="dealercellno"  class="form-control m-3" >
                                        <label>Product Name: </label>
                                        <input type="text" name="category"  class="form-control m-3" method="post">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Status: </label>
                                        <input type="text" name="assignedto"  class="form-control m-3" >
                                        <label>Assigned to: </label>
                                        <input type="Text" name="dealercreated"  class="form-control m-3" >
                                    </div>

                                    




                            <div class="mb-3">
                                <button type="submit" name="create_ticket" class="btn btn-primary">Create Ticket</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>