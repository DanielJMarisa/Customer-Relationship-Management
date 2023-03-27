<?php
    session_start();

    //set session variable

//echo $_SESSION['firstname'];

    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Leads</title>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Leads
                            <a href="createlead.php" class="btn btn-primary float-end">Add Lead</a>
                        </h4>
                    </div>

                    <div class="card-body">


                        <form class="d-flex" role="search" method="POST">
                        <input class="form-control me-2" name="tableSearch" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit" name="dataSearch" disabled>Search</button>
                        </form>
                    </div>

                    <div class="card-body" >

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>First Name</th>
                                    <th>Surname</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Assigned To</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $usersname = $_SESSION['firstname'];

                                    //echo $_SESSION['firstname'];

                                    $query = "SELECT * FROM leaddetails WHERE assignedto = '{$usersname}'  LIMIT 12";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $leaddata)
                                        {
                                            ?>
                                            <tr>
                                                <input type="hidden" name="id" value="<?= $leaddata['id']; ?>">

                                                <td><?= $leaddata['firstname']; ?></td>
                                                <td><?= $leaddata['surname']; ?></td>
                                                <td><?= $leaddata['primaryemail']; ?></td>
                                                <td><?= $leaddata['primarycontact']; ?></td>
                                                <td><?= $leaddata['assignedto']; ?></td>
                                                <td>
                                                    <a href="viewleadinfo.php?id=<?= $leaddata['id']; ?>" class="btn btn-info btn-btn">View</a>
                                                    <a href="editlead.php?id=<?= $leaddata['id']; ?>" class="btn btn-success btn-btn">Edit</a>
                                                    <!--form action="code.php" method="POST" class="d-inline">
                                                        <!--button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button-->
                                                    <!--/form-->
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php')?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>