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

    <title>Add Dealer</title>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <h4>Add Dealer
                            <a href="dealers.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">


                                <button type="submit" name="save_dealer" class="btn btn-primary float-end">Save Dealer</button>


                                    <h4>Dealer Information</h4>
                                    <div class="input-group input-group-sm mr-3">
                                        <label>Dealer Name: </label>
                                        <input type="text" name="dealername"  class="form-control m-3" >
                                        <label> Dealer Surname: </label>
                                        <input type="text" name="dealersurname"  class="form-control m-3" method="post">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Dealership Name: </label>
                                        <input type="text" name="delaershipname"  class="form-control m-3" >
                                        <label>Dealer I.D No: </label>
                                        <input type="text" name="dealeridno"  class="form-control m-3" method="post">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Landline Tel: </label>
                                        <input type="text" name="landlinetel"  class="form-control m-3" >
                                        <label>Primary Email: </label>
                                        <input type="text" name="dealeremail"  class="form-control m-3" method="post">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Cell No: </label>
                                        <input type="text" name="dealercellno"  class="form-control m-3" >
                                        <label>Category: </label>
                                        <select type="text" name="category"  class="form-control m-3">
                                            <option selected>Select Category</option>
                                            <option >Private Dealer</option>
                                            <option >Commercial Dealer</option>

                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Assigned to: </label>
                                        <select type="text" name="assignedto"  class="form-control m-3">
                                            <option>Please Select Value</option>
                                            <option selected class=" input-group-sm mr-3"><?php echo $_SESSION['firstname'];?></option>

                                        </select>
                                        <label>Date Created: </label>
                                        <input type="date Y-m-d" name="dealercreated"  class="form-control m-3" value="<?php echo Date('Y-m-d');?>" >
                                    </div>

                                    <h4>Address Information</h4>
                                    <div class="input-group input-group-sm mr-3">
                                        <label>Street: </label>
                                        <input type="text" name="dealershipstreet"  class="form-control m-3" >
                                        <label> City: </label>
                                        <input type="text" name="dealershipcity"  class="form-control m-3" method="post">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Postal Code: </label>
                                        <input type="text" name="delaershippostalcode"  class="form-control m-3" >
                                        <label>Country: </label>
                                        <input type="text" name="dealershipcountry"  class="form-control m-3" method="post">
                                    </div>

                                    <div>
                                    <label>Province: </label>
                                        <input type="text" name="dealerprovince"  class="form-control m-3" method="post">
                                    </div>

                                    <h4>Description Deatails</h4>
                                    <div>
                                    <label>Description: </label>
                                        <input type="text" name="dealernotes"  class="form-control m-3" method="post">
                                    </div>




                            <div class="mb-3">
                                <button type="submit" name="save_dealer" class="btn btn-primary">Save Dealer</button>
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