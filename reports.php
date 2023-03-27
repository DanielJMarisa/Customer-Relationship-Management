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

    <title>Reports</title>
</head>
<body>
<?php require 'navbar.php';?>

    <div class="container mt-4">

        <?php


         include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Reports

                        </h4>
                    <div class="card-body">
                        <form class="d-flex" role="search">
                        <label class="form-control text-align=center">Start Date</label>
                        <input class="form-control m-1 group-sm" type="date" placeholder="Search" aria-label="Search">

                        <label class="form-control">End Date</label>
                        <input class="form-control m-1 group-sm" type="date" placeholder="Search" aria-label="Search">

                        <label class="form-control label">Policy Name Or Policy Number</label>
                        <input class="form-control m-1 group-sm" type="text" placeholder="Search" aria-label="Search">

                        <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    </div class="card-body">
                    


                    <div class="card-body">
                        <form action="csv.php" method="post" class="d-flex">
                        
                        <button class="btn btn-outline-success m-2" type="submit" name="exportlead">Export Lead Report</button>
                        <button class="btn btn-outline-success m-2" type="submit" name="dealers">Export Dealer Report</button>
                        </form>
                    </div>

                    <div class="card-body">

                    <form action="csv.php" method="post" class="d-flex">
                        <table class="table table-bordered table-striped">


                            <thead>
                                <tr>

                                    <th>Report</th>
                                    <th class="float-end">Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                    <td>Detailed Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exportlead">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>Lead Daily Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exportdailylead">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>Lead Weekly Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exportweeklylead">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>Lead Monthly Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exportmonthlylead">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>Sales Daily Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exportsalesdaily">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>Sales Weekly Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exportsalesweekly">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>Sales Monthly Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exportsalesmonthly">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>Tracker Daily Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exporttrackerdaily">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>Tracker Weekly Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exporttrackerweekly">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>Tracker Monthly Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exporttrackermonthly">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>VAPs Daily Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exportvapdaily">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>VAPs Weekly Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exportvapweekly">Export Report</button></td>
                            </tbody>

                            <tbody>
                                    <td>VAPs Monthly Report</td>
                                    <td><button class="btn btn-outline-success float-end" type="submit" name="exportvapmonthly">Export Report</button></td>
                            </tbody>

                        </table>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>