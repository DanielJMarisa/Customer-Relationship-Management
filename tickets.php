<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Tickets</title>
</head>
     <?php include('navbar.php');
        session_start();
        //echo $_SESSION['id'];

        //echo $_SESSION['username'];

        //echo $_SESSION['password'];

        //echo $_SESSION['firstname'];

        //echo $_SESSION['lastname'];

        //echo $_SESSION['user_role'];

        $sename = $_SESSION['firstname'];
        $sesurname = $_SESSION['lastname'];

     ?>
<body>
    <?php include('dbcon.php');?>
    <div class="container mt-4">


    <div class="card">

             <div class="card-header">
                        <h1>Tickets
                            <a href="createticket.php" class="btn btn-primary float-end">Create Ticket</a>

                        </h4>
             </div>

             <div class="card-body">
                        <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search Tickets" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
             </div>

             <div class="card-body">
             <table class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>Policy Name</th>
                                    <th>ID Number</th>
                                    <th>Renewals</th>
                                    <th>Category</th>
                                    <th>ID Number</th>
                                    <th>Assigned To</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $usersname = $_SESSION['firstname'];

                                    //echo $_SESSION['firstname'];

                                    $query = "SELECT * FROM tickets WHERE assignedto = '{$usersname}'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $leaddata)
                                        {
                                            ?>
                                            <tr>
                                                <input type="hidden" name="id" value="<?= $leaddata['id']; ?>">

                                                <td><?= $leaddata['Policyname']; ?></td>
                                                <td><?= $leaddata['IDnumber']; ?></td>
                                                <td><?= $leaddata['Renewals']; ?></td>
                                                <td><?= $leaddata['Category']; ?></td>
                                                <td><?= $leaddata['Policynumber']; ?></td>
                                                <td><?= $leaddata['assignedto']; ?></td>
                                                <td>
                                                    <a href="viewticket.php?id=<?= $leaddata['id']; ?>" class="btn btn-info btn-btn">View</a>
                                                    <a href="updateticket.php?id=<?= $leaddata['id']; ?>" class="btn btn-success btn-btn">Edit</a>
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
</body>
</html>



