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

    <title>Edit Lead</title>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Lead
                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM leaddetails WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $leaddata = mysqli_fetch_array($query_run);
                                }
                            }
                                ?>


                            <a href="leadview.php?id=<?= $leaddata['id']; ?>" class="btn btn-danger float-end m-2">BACK</a>

                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM leaddetails WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $leaddata = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">

                                <div class="mb-3">
                                        <button type="submit" name="update_lead" class="btn btn-primary float-end">
                                            Update Lead
                                        </button>
                                    </div>

                                    <input type="hidden" name="id" value="<?= $leaddata['id']; ?>">

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Name: </label>
                                        <input type="text" name="leadname" value="<?=$leaddata['firstname'];?>" class="form-control m-3">
                                        <label>Surname: </label>
                                        <input type="text" name="leadsurname" value="<?=$leaddata['surname'];?>" class="form-control m-3" method="post">
                                    </div>
                                    <div class="input-group input-group-sm mr-3">
                                        <label>Primary Contact: </label>
                                        <input type="text" name="leadcontact" value="<?=$leaddata['primarycontact'];?>"  class="form-control m-3" >
                                        <label>Primary Email: </label>
                                        <input type="text" name="leademail" value="<?=$leaddata['primaryemail'];?>"  class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Secondary Contact: </label>
                                        <input type="text" name="seccontact" value="<?=$leaddata['secondarycontact'];?>"  class="form-control m-3" >
                                        <label>Secondary Email: </label>
                                        <input type="text" name="secemail" value="<?=$leaddata['secondaryemail'];?>"  class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>I.D Number: </label>
                                        <input type="text" name="idnumber" value="<?=$leaddata['idnumber'];?>"  class="form-control m-3" >
                                        <label>Assigned to: </label>
                                        <input type="text" name="assignedto" value="<?=$leaddata['assignedto'];?>"  class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Created Date: </label>
                                        <input type="date Y-m-d" name="datecreated" value="<?=$leaddata['datecreated'];?>"  class="form-control m-3" >
                                        <label>Policy Holder Marital Status: </label>
                                        <input type="text" name="maritalstatus" value="<?=$leaddata['maritalstatus'];?>"  class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Policy Holder Occupation: </label>
                                        <input type="text" name="occupation" value="<?=$leaddata['occupation'];?>"  class="form-control m-3" >
                                        <label>Passport No: </label>
                                        <input type="text" name="passportno" value="<?=$leaddata['passportno'];?>"  class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Lead Status: </label><select type="taxt" name="leadstatus" method="post" class="form-control m-3">
                                        <option value="Please select a value">Please select a value</option>
                                        <option value="Quoted">Quoted</option>
                                        <option value="Quote in Progress">Quote in progress</option>
                                        <option value="Quoted-Call Back">Quoted- Call Back</option>
                                        <option value="Quoted-No Answer">Quoted- No Answer</option>
                                        <option value="Quoted-Declined">Quoted- Declined</option>
                                        <option value="Call Back Requested">Call Back Requested</option>
                                        <option value="Closed-Won">Closed-Won</option>
                                        <option value="Closed-Lost">Closed-Lost</option>
                                         </select>
                                        <label>Insurer: </label>
                                        <input type="text" name="insurer"  class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Dealer: </label>
                                        <input type="text" name="dealer" value="<?=$leaddata['dealer'];?>"  class="form-control m-3" >
                                        <label>Policy Holder ITC Consent: </label>
                                        <input type="text" name="itcconsent" value="<?=$leaddata['itcconsent'];?>"  class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Insurance Required: </label>
                                        <input type="text" name="insurancerequired" value="<?=$leaddata['insurancerequired'];?>" class="form-control m-3" >
                                        <label>Policy Type: </label>
                                        <input type="text" name="policytype" value="<?=$leaddata['policytype'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Interested in Life Cover: </label>
                                        <input type="text" name="lifecover" value="<?=$leaddata['lifecover'];?>"  class="form-control m-3" >
                                        <label>Created by: </label>
                                        <input type="text" name="createdby" value="<?=$leaddata['createdby'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Lead Source: </label>
                                        <input type="text" name="leadsource" value="<?=$leaddata['leadsource'];?>"  class="form-control m-3" >
                                        <label>Lead Notes: </label>
                                        <input type="text" name="leadnotes" value="<?=$leaddata['leadnotes'];?>"  class="form-control m-3">
                                    </div>
                                    <div>
                                        <h4>Product: Motor Vehicle</h4>
                                    </div>
                                    <div class="input-group input-group-sm mr-3">
                                        <label>No of Vehicles: </label>
                                        <input type="text" name="number_vehicles" value="<?=$leaddata['numberofcars'];?>"  class="form-control m-3" >
                                        <label>Vehicle Make: </label>
                                        <input type="text" name="vehiclemake" value="<?=$leaddata['vehiclemake'];?>"  class="form-control m-3">
                                    </div>
                                    <div class="input-group input-group-sm mr-3">
                                        <label>Year Model: </label>
                                        <input type="text" name="yearmodel" value="<?=$leaddata['yearmodel'];?>"  class="form-control m-3" >
                                        <label>MM Code: </label>
                                        <input type="text" name="mmcode" value="<?=$leaddata['mmcode'];?>"  class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Model: </label>
                                        <input type="text" name="model" value="<?=$leaddata['model'];?>" class="form-control m-3" >
                                        <label>Vehicle Usage: </label>
                                        <input type="text" name="vehicle_usage" value="<?=$leaddata['vehicleusage'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Overnight Parking Address: </label>
                                        <input type="text" name="nightparking" value="<?=$leaddata['nightparkingaddress'];?>" class="form-control m-3" >
                                        <label>Overnight Parking Type: </label>
                                        <input type="text" name="nightparktype" value="<?=$leaddata['nightparkingtype'];?>"  class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Daytime Parking Address: </label>
                                        <input type="text" name="dayparking" value="<?=$leaddata['daytimeparkingaddress'];?>"  class="form-control m-3" >
                                        <label>Vehicle Tracking: </label>
                                        <input type="text" name="tracking" value="<?=$leaddata['trackingrequired'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Province: </label>
                                        <input type="text" name="province" value="<?=$leaddata['province'];?>" class="form-control m-3" >
                                        <label>Tracker Product Required: </label>
                                        <input type="text" name="producttracker" value="<?=$leaddata['trackingproduct'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Fitment Installation Date: </label>
                                        <input type="Date" name="installationdate" value="<?=$leaddata['installationdate'];?>"  class="form-control m-3" >
                                        <label>Motor Vehicle Finance: </label>
                                        <input type="text" name="motorfinance" value="<?=$leaddata['vehiclefinance'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Vehicle Registration: </label>
                                        <input type="text" name="vehiclereg" value="<?=$leaddata['vehicleregistration'];?>"  class="form-control m-3" >
                                        <label>Vin No: </label>
                                        <input type="text" name="vinno" value="<?=$leaddata['vinno'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Engine No: </label>
                                        <input type="text" name="engineno" value="<?=$leaddata['engineno'];?>"  class="form-control m-3" >
                                        <label>Drivers License Issue Date: </label>
                                        <input type="date" name="licenseissue" value="<?=$leaddata['policyholderlicenseissuedate'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Care Hire: </label>
                                        <input type="text" name="carhire" value="<?=$leaddata['carhire'];?>" class="form-control m-3" >
                                        <label>Regular Driver: </label>
                                        <input type="text" name="regulardriver" value="<?=$leaddata['regulardriver'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>License Code: </label>
                                        <input type="text" name="licensecode" value="<?=$leaddata['licensecode'];?>" class="form-control m-3" >
                                        <label>Last Vehicle Claim: </label>
                                        <input type="text" name="vehicleclaim" value="<?=$leaddata['lastvehicleclaim'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>How Long Have you had Comprehensive cover Uninterrupted: </label>
                                        <input type="text" name="insurancehistory" value="<?=$leaddata['uninterruptedcompcover'];?>" class="form-control m-3" >
                                        <label>How many Claims in the last 7 years: </label>
                                        <input type="text" name="numberofclaims" value="<?=$leaddata['claimsinlast7years'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Type of Claim: </label>
                                        <input type="text" name="typeofclaim" value="<?=$leaddata['typeofclaim'];?>" class="form-control m-3" >
                                        <label>Vehicle 2 Details: </label>
                                        <input type="text" name="vehicletwodetails" value="<?=$leaddata['vehicle2details'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Vehicle 3 Details: </label>
                                        <input type="text" name="vehiclethree" value="<?=$leaddata['vehicle3details'];?>" class="form-control m-3">
                                    </div>

                                    <div>
                                        <h4>More Products</h4>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Tyres and Rim: </label>
                                        <input type="text" name="tyreandrim" value="<?=$leaddata['tyreandrim'];?>" class="form-control m-3" >
                                        <label>Excess Waiver: </label>
                                        <input type="text" name="excesswaiver" value="<?=$leaddata['excesswaiver'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Scratch and Dent: </label>
                                        <input type="text" name="scratchanddent" value="<?=$leaddata['scratchanddent'];?>" class="form-control m-3" >
                                        <label>Bereavement Funeral: </label>
                                        <input type="text" name="funeralcover" value="<?=$leaddata['bereavementandfuneral'];?>" class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>GAP Cover: </label>
                                        <input type="text" name="GAPcover" value="<?=$leaddata['gapcover'];?>" class="form-control m-3" >
                                        <label>Medical Aid Name and Plan: </label>
                                        <input type="text" name="medicalaid" value="<?=$leaddata['medicalaidplan'];?>" class="form-control m-3 ">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Motor Warranty: </label>
                                        <input type="text" name="motorwarranty" value="<?=$leaddata['motorwarranty'];?>"  class="form-control m-3">
                                    </div>

                                    <div>
                                        <h4>Regular Driver Details</h4>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Driver Name: </label>
                                        <input type="text" name="drivername" value="<?=$leaddata['driverfirstname'];?>" class="form-control m-3" >
                                        <label>Driver Surname: </label>
                                        <input type="text" name="driversurname" value="<?=$leaddata['driverlastname'];?>" class="form-control m-3 ">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Driver Marital Status: </label>
                                        <input type="text" name="drivermaritalstat" value="<?=$leaddata['drivermaritalstatus'];?>" class="form-control m-3" >
                                        <label>Driver's ITC Consent: </label>
                                        <input type="text" name="driverITC" value="<?=$leaddata['driveritcconsent'];?>" class="form-control m-3 ">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Drivers Occupation: </label>
                                        <input type="text" name="driveroccupation" value="<?=$leaddata['driveroccupation'];?>" class="form-control m-3" >
                                        <label>Drivers License Issue Date: </label>
                                        <input type="date" name="regdriverlicenseissuedate" value="<?=$leaddata['driverlicenseissuedate'];?>" class="form-control m-3 ">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Drivers License Code: </label>
                                        <input type="text" name="regdriverlicensecode" value="<?=$leaddata['driverslicensecode'];?>" class="form-control m-3">
                                    </div>

                                    <div>
                                        <h4>Create Policy</h4>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Insurer: </label>
                                        <input type="text" name="insurerupdate" value="<?=$leaddata['insurer'];?>"  class="form-control m-3">
                                        <label>Total Monthly Premium: </label>
                                        <input type="text" name="monthlypremium" value="<?=$leaddata['totalpremium'];?>" class="form-control m-3" >

                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Vehicle Excess: </label>
                                        <input type="text" name="motorexcess" value="<?=$leaddata['vehicleexcess'];?>" class="form-control m-3 ">
                                        <label>Policy Number From Insurer: </label>
                                        <input type="text" name="policynumber" value="<?=$leaddata['insurerpolicynumber'];?>" class="form-control m-3" >

                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Policy Start Date: </label>
                                        <input type="date" name="polstartdate" value="<?=$leaddata['policystartdate'];?>" class="form-control m-3 ">
                                        <label>Policy Status: </label>
                                        <input type="text" name="polstatus" value="<?=$leaddata['policystatus'];?>" class="form-control m-3" >

                                    </div>

                                    <div>
                                        <h4>Debit Order Details</h4>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Admin Debit Order: </label>
                                        <input type="text" name="admndebitorder" value="<?=$leaddata['admindebitorder'];?>"  class="form-control m-3">
                                        <label>Debit Date: </label>
                                        <input type="text" name="dbtdate" value="<?=$leaddata['debitdate'];?>" class="form-control m-3" >

                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Month: </label>
                                        <input type="text" name="debitmonth" value="<?=$leaddata['Month'];?>" class="form-control m-3 ">
                                        <label>Bank: </label>
                                        <input type="text" name="bankname" value="<?=$leaddata['bank'];?>" class="form-control m-3" >

                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Branch Code: </label>
                                        <input type="text" name="brnchcode" value="<?=$leaddata['branchcode'];?>" class="form-control m-3 ">
                                        <label>Account Type: </label>
                                        <input type="text" name="acctype" value="<?=$leaddata['accounttype'];?>" class="form-control m-3" >

                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Account Number: </label>
                                        <input type="text" name="accnumber" value="<?=$leaddata['accountnumber'];?>" class="form-control m-3 ">
                                        <label>Debit Order Amount: </label>
                                        <input type="text" name="dbtorderamount" value="<?=$leaddata['debitorderamount'];?>" class="form-control m-3" >

                                    </div>

                                    <div>
                                        <h4>Debit Order Status</h4>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Debit Order Loaded: </label>
                                        <input type="text" name="debitloaded" value="<?=$leaddata['debitorderloaded'];?>"  class="form-control m-3">
                                        <label>Debit Order Received: </label>
                                        <input type="text" name="debitreceived" value="<?=$leaddata['debitorderreceived'];?>" class="form-control m-3" >

                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Reason for Non-receipt: </label>
                                        <input type="text" name="debitnoreceive" value="<?=$leaddata['reasonnonreceipt'];?>" class="form-control m-3 ">
                                        <label>Debit Attempt: </label>
                                        <input type="text" name="dbtattempt" value="<?=$leaddata['debitattempt'];?>" class="form-control m-3 ">
                                    </div>

                                    <div>
                                        <label>Debit Order Loaded Date: </label>
                                        <input type="text" name="debitloaddate" value="<?=$leaddata['debitorderloaddate'];?>" class="form-control m-3 ">
                                    </div>

                                    <div>
                                        <h4>Dealer Payments</h4>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Dealer Paid: </label>
                                        <input type="text" name="dealpaid" value="<?=$leaddata['dealerpaid'];?>"  class="form-control m-3">
                                        <label>Date of Dealer Payment: </label>
                                        <input type="text" name="datedealerpaid" value="<?=$leaddata['dateofdealerpayment'];?>" class="form-control m-3" >

                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Dealer: </label>
                                        <input type="text" name="dealer"  class="form-control m-3 ">
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