<?php
session_start();
include('dbcon.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create Lead</title>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="container mt-5">

        <?php include('message.php'); ?>
        <?php Date("Y-m-d H:i");?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <h4>Create Lead
                            <a href="leadview.php" class="btn btn-danger float-end m-2">BACK</a>

                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                        <button type="submit" name="save_lead" class="btn btn-primary float-end m-2">Save Lead</button>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Name: </label>
                                        <input type="text" name="leadname"  class="form-control m-3" placeholder="Please Enter Client Name" required>
                                        <label>Surname: </label>
                                        <input type="text" name="leadsurname"  class="form-control m-3" method="post" placeholder="Please Enter Client Surname" required>
                                    </div>
                                    <div class="input-group input-group-sm mr-3">
                                        <label>Primary Contact: </label>
                                        <input type="text" name="leadcontact"  class="form-control m-3" placeholder="Please Enter Primary Contact" required>
                                        <label>Primary Email: </label>
                                        <input type="text" name="leademail"  class="form-control m-3" placeholder="Please Enter Primary Email" required>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Secondary Contact: </label>
                                        <input type="text" name="seccontact"  class="form-control m-3" placeholder="Please Enter Secondary Contact">
                                        <label>Secondary Email: </label>
                                        <input type="text" name="secemail"  class="form-control m-3" placeholder="Please Enter Secondary Email">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>I.D Number: </label>
                                        <input type="text" name="idnumber"  class="form-control m-3" placeholder="Please Enter Client I.D number">
                                        <label>Assigned to: </label>
                                        <select type="text" name="assignedto"  class="form-control m-3">
                                            <option selected><?php echo $_SESSION['firstname'];?></option>
                                            <?php
                                            $usernames = mysqli_query($con,"SELECT username FROM users");
                                            while($data = mysqli_fetch_array($usernames)){
                                            echo "<option value='".$data['username']."'>".$data['username']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Created Date: </label>
                                        <input type="date time" name="datecreated"  class="form-control m-3" value="<?php echo Date('Y-m-d');?>">
                                        <label>Policy Holder Marital Status: </label>
                                        <select type="text" name="maritalstatus"  class="form-control m-3">
                                            <option selected>Please Select Option</option>
                                            <option>Single</option>
                                            <option>Engaged</option>
                                            <option>Married</option>
                                            <option>Divorced</option>
                                            <option>Co-habiting</option>
                                            <option>Widow</option>
                                            <option>Widower</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Policy Holder Occupation: </label>
                                        <select type="text" name="occupation"  class="form-control m-3" >
                                            <option selected>Please Select Occupation</option>
                                            <option>Government</option>
                                            <option>Private Sector</option>
                                            <option>Self-Employed</option>
                                        </select>
                                        <label>Passport No: </label>
                                        <input type="text" name="passportno"  class="form-control m-3" placeholder="Please enter client passport number">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Lead Status: </label>
                                        <select type="text" name="leadstatus"  class="form-control m-3" >
                                            <option selected>Please Select Option</option>
                                            <option>Quoted</option>
                                            <option>Quote in Progress</option>

                                        </select>
                                        <label>Insurer: </label>
                                        <select type="text" name="insurer"  class="form-control m-3">
                                            <option selected>Please select Insurer</option>
                                            <option>ABSA Insurance</option>
                                            <option>Affinity Underwriters</option>
                                            <option>Auto & General</option>
                                            <option>Discovery Insure</option>
                                            <option>First For Women</option>
                                            <option>King Price</option>
                                            <option>MiWay Insurance</option>
                                            <option>SAU</option>
                                            <option>Standard Bank Insurance</option>
                                        </select>

                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Dealer: </label>
                                        <select type="text" name="dealer"  class="form-control m-3" >
                                            <option selected>Please Select Dealer<?php
                                            $dealernames = mysqli_query($con,"SELECT dealerfirstname, dealersurname FROM dealers");
                                            while($data = mysqli_fetch_array($dealernames)){
                                            echo "<option value='".$data['dealerfirstname']."'>".$data['dealerfirstname']."</option>";
                                            }
                                            ?>
                                        </select>
                                        <label>Policy Holder ITC Consent: </label>
                                        <select type="text" name="itcconsent"  class="form-control m-3">
                                            <option selected>Please Select Response</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Insurance Required: </label>
                                        <select type="text" name="insurancerequired"  class="form-control m-3" >
                                            <option selected>Please Select Response</option>
                                            <option>Vehicle Insurance</option>
                                            <option>Home Insurance</option>
                                            <option>Business Cover</option>
                                            <option>Life Insurance</option>
                                        </select>
                                        <label>Policy Type: </label>
                                        <select type="text" name="policytype"  class="form-control m-3">
                                            <option selected>Please Select Type of Policy</option>
                                            <option>Long Term Insurance Policy</option>
                                            <option>Short Term Insurance Policy</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Interested in Life Cover: </label>
                                        <Select type="text" name="lifecover"  class="form-control m-3" >
                                            <option selected>Please Select Option</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                        <label>Created by: </label>
                                        <select type="text" name="createdby"  class="form-control m-3">

                                            <option selected><?php echo $_SESSION['firstname'];?></option>
                                            <?php
                                            $usernames = mysqli_query($con,"SELECT username FROM users");
                                            while($data = mysqli_fetch_array($usernames)){
                                            echo "<option value='".$data['username']."'>".$data['username']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Lead Source: </label>
                                        <select type="text" name="leadsource"  class="form-control m-3" >
                                            <option selected>Please Select Your Lead Source</option>
                                            <option>Dealer</option>
                                            <option>Web Application</option>
                                            <option>Spotter</option>
                                        </select>
                                        <label>Lead Notes: </label>
                                        <input type="text" name="leadnotes"  class="form-control m-3">
                                    </div>
                                    <div>
                                        <h4>Product: Motor Vehicle</h4>
                                    </div>
                                    <div class="input-group input-group-sm mr-3">
                                        <label>No of Vehicles: </label>
                                        <select type="text" name="number_vehicles"  class="form-control m-3" >
                                            <option selected>Select Number Of Vehicles</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                        <label>Vehicle Make: </label>
                                        <select type="text" name="vehiclemake"  class="form-control m-3">
                                            <option selected>Please Select Vehicle Make<?php
                                            $carmake = mysqli_query($con,"SELECT vehiclemake FROM vehicles");
                                            while($data = mysqli_fetch_array($carmake)){
                                            echo "<option value='".$data['vehiclemake']."'>".$data['vehiclemake']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="input-group input-group-sm mr-3">
                                        <label>Year Model: </label>
                                        <select type="text" name="yearmodel"  class="form-control m-3" >
                                            <option selected>2023
                                            <?php
	                                        for($year = 1950;
	                                        $year < date("Y") + 1; $year++){
	                                         echo '<option value="'.$year.'">'.$year.'</option>';
	                                        }
	                                        ?>
                                        </select>
                                        <label>MM Code: </label>
                                        <input type="text" name="mmcode"  class="form-control m-3" placeholder="Please enter vehicle MM Code">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Model: </label>
                                        <input type="text" name="model"  class="form-control m-3" placeholder="Please enter vehicle model">
                                        <label>Vehicle Usage: </label>
                                        <select type="text" name="vehicle_usage"  class="form-control m-3">
                                            <option selected>Please select vehicle usage</option>
                                            <option>Private-Social</option>
                                            <option>Business-Commercial</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Overnight Parking Address: </label>
                                        <input type="text" name="nightparking"  class="form-control m-3" placeholder="Please enter address vehicle parks at night">
                                        <label>Overnight Parking Type: </label>
                                        <select type="text" name="nightparktype"  class="form-control m-3">
                                            <option selected>Please Select Parking Type</option>
                                            <option>Locked Gates-Automated</option>
                                            <option>Locked Gates-Manual</option>
                                            <option>Locked Garage-Automated</option>
                                            <option>Locked Garage- Manual</option>
                                            <option>Covered Parking</option>
                                            <option>Open Parking Space</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Daytime Parking Address: </label>
                                        <input type="text" name="dayparking"  class="form-control m-3" placeholder="Please enter address vehicle parks during the day">
                                        <label>Vehicle Tracking: </label>
                                        <select type="text" name="tracking"  class="form-control m-3">
                                            <option selected>Please select whether a Tracker is required</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Province: </label>
                                        <select type="text" name="province"  class="form-control m-3" >
                                            <option selected>Please Select Province</option>
                                            <option>Eastern Cape</option>
                                            <option>Free State</option>
                                            <option>Gauteng</option>
                                            <option>KwaZulu-Natal</option>
                                            <option>Limpopo</option>
                                            <option>Mpumalanga</option>
                                            <option>North West</option>
                                            <option>Northern Cape</option>
                                            <option>Western Cape</option>
                                        </select>
                                        <label>Tracker Product Required: </label>
                                        <select type="text" name="producttracker"  class="form-control m-3">
                                            <option selected>Please select tracking product required</option>
                                            <option>No Tracker Required</option>
                                            <option>Tracker Retrieve-R139</option>
                                            <option>Tracker Retrieve Plus-R79</option>
                                            <option>Tracker Recover-R159</option>
                                            <option>Tracker Protect-R209</option>
                                            <option>Tracker Care-R239</option>
                                            <option>Tracker Connect Lite-R239</option>
                                            <option>Cartrack Fleet Management Plus-R169</option>
                                            <option>Affinity-Tracker Recover-R159</option>
                                            <option>Affinity-Tracker Protect-R209</option>
                                            <option>Affinity-Tracker Care-R239</option>
                                            <option>Matrix Beamie-R99</option>
                                            <option>Matrix MX3-R199</option>
                                            <option>Matrix MXV Bronze-R159</option>
                                            <option>Matrix MXV Silver-R199</option>
                                            <option>Matrix MXV Gold-R219</option>
                                            <potion>Netstar Nano-R139</option>
                                            <option>Netstar Eary Warning-R229</option>
                                            <option>Netstar Plus-R199</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Fitment Installation Date: </label>
                                        <input type="Date" name="installationdate"  class="form-control m-3" >
                                        <label>Motor Vehicle Finance: </label>
                                        <select type="text" name="motorfinance"  class="form-control m-3">
                                            <option selected>Please Select Response</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Vehicle Registration: </label>
                                        <input type="text" name="vehiclereg"  class="form-control m-3" placeholder="Please Enter Vehicle Registration">
                                        <label>Vin No: </label>
                                        <input type="text" name="vinno"  class="form-control m-3" placeholder="Pllease Enter Vehice vin number">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Engine No: </label>
                                        <input type="text" name="engineno"  class="form-control m-3" placeholder="Please Enter Vehiclle Engine Number">
                                        <label>Drivers License Issue Date: </label>
                                        <input type="date" name="licenseissue"  class="form-control m-3">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Care Hire: </label>
                                        <select type="text" name="carhire"  class="form-control m-3" >
                                            <option selected>Please Select if Car Hire is Required</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                        <label>Regular Driver: </label>
                                        <input type="text" name="regulardriver"  class="form-control m-3" placeholder="Please Enter Regular Driver's Name">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>License Code: </label>
                                        <select type="text" name="licensecode"  class="form-control m-3" >
                                            <option>Please Select Drivers License Code</option>
                                            <option>B-Code 8</option>
                                            <option>C-Code 10</option>
                                            <option>EC-Code 14</option>
                                            <option>A1-License not exceeding 125cc</option>
                                            <option>A-Can Exceed 125cc</option>
                                            <option>Learner License</option>
                                            <option>International Driving Permit</option>
                                            <option>International Motorcycle Driving Permit</option>
                                        </select>
                                        <label>Last Vehicle Claim: </label>
                                        <input type="text" name="vehicleclaim"  class="form-control m-3" placeholder="Please Enter Last Vehicle Claim">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>How Long Have you had Comprehensive cover Uninterrupted: </label>
                                        <select type="text" name="insurancehistory"  class="form-control m-3" >
                                            <option disabled selected>Please Select Response</option>
                                            <option>Less than 12 months</option>
                                            <option>1 - 2 years</option>
                                            <option>2 - 3 years</option>
                                            <option>3 - 4 years</option>
                                            <option>4 - 5 years</option>
                                            <option>5 - 6 years</option>
                                            <option>6 - 7 years</option>
                                            <option>7 - 8 years</option>
                                        </select>
                                        <label>How many Claims in the last 7 years: </label>
                                        <select type="text" name="numberofclaims"  class="form-control m-3">
                                            <option disabled selected>Please Select Response</option>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Type of Claim: </label>
                                        <input type="text" name="typeofclaim"  class="form-control m-3" placeholder="Please Enter The Type of Claim">

                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Vehicle 2 Details: </label>
                                        <input type="text" name="vehicletwodetails"  class="form-control m-3" placeholder="Please Enter Vehicle 2 Details">
                                        <label>Vehicle 3 Details: </label>
                                        <input type="text" name="vehiclethree"  class="form-control m-3" placeholder="Please Enter Vehicle 3 Details">
                                    </div>

                                    <div>
                                        <h4>More Products</h4>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Tyres and Rim: </label>
                                        <select type="text" name="tyreandrim"  class="form-control m-3" >
                                            <option disabled selected>Please Select Option</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>Silver Package - R89</option>
                                            <option>Titanium Package - R149</option>
                                            <option>Platinum Package - R225</option>
                                        <select>
                                        <label>Excess Waiver: </label>
                                        <select type="text" name="excesswaiver"  class="form-control m-3">
                                            <option disabled selected>Please Select Option</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>R4 000 Waiver - R197</option>
                                            <option>R10 000 Waiver - R385</option>
                                            <option>R20 000 Waiver - R225</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Scratch and Dent: </label>
                                        <select type="text" name="scratchanddent"  class="form-control m-3" >
                                            <option disabled selected>Please Select Option</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>Restore 3 - R169</option>
                                            <option>Restore 5 - R220</option>
                                            <option>Restore 10 - R389</option>
                                        </select>
                                        <label>Bereavement Funeral: </label>
                                        <select type="text" name="funeralcover"  class="form-control m-3">
                                            <option disabled selected>Please select response</option>
                                            <option>No</option>
                                            <option>Individual Cover (R20 000) - R99</option>
                                            <option>Individual Cover (R40 000) - R145</option>
                                            <option>Family Cover (R20 000) - R139</option>
                                            <option>Individual Cover (R40 000) - R190</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>GAP Cover: </label>
                                        <select type="text" name="GAPcover"  class="form-control m-3" >
                                            <option disabled selected>Please select resonse</option>
                                            <option>No</option>
                                            <option>Yes</option>
                                        </select>
                                        <label>Medical Aid Name and Plan: </label>
                                        <input type="text" name="medicalaid"  class="form-control m-3 ">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Motor Warranty: </label>
                                        <select type="text" name="motorwarranty"  class="form-control m-3">
                                            <option disabled selected>Please select response</option>
                                            <option>Yes</option>
                                            <option>No<option>
                                        </select>
                                    </div>

                                    <div>
                                        <h4>Regular Driver Details</h4>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Driver Name: </label>
                                        <input type="text" name="drivername"  class="form-control m-3" placeholder="Please Enter Regular Driver Name">
                                        <label>Driver Surname: </label>
                                        <input type="text" name="driversurname"  class="form-control m-3 " placeholder="Please Enter Regular Drivers Name" >
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Driver Marital Status: </label>
                                        <select type="text" name="drivermaritalstat"  class="form-control m-3" >
                                            <option disabled selected>Please Select Option</option>
                                            <option>Single</option>
                                            <option>Engaged</option>
                                            <option>Married</option>
                                            <option>Divorced</option>
                                            <option>Co-habiting</option>
                                            <option>Widow</option>
                                            <option>Widower</option>
                                        </select>
                                        <label>Driver's ITC Consent: </label>
                                        <select type="text" name="driverITC"  class="form-control m-3 ">
                                            <option>Please select Response</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Drivers Occupation: </label>
                                        <select type="text" name="driveroccupation"  class="form-control m-3" >
                                            <option disabled selected>Please select Response</option>
                                            <option>Government</option>
                                            <option>Private Sector</option>
                                            <option>Self Employed</option>
                                        </select>
                                        <label>Drivers License Issue Date: </label>
                                        <input type="date" name="regdriverlicenseissuedate"  class="form-control m-3 ">
                                    </div>

                                    <div class="input-group input-group-sm mr-3">
                                        <label>Drivers License Code: </label>
                                        <select type="text" name="regdriverlicensecode"  class="form-control m-3">
                                            <option>Please Select Drivers License Code</option>
                                            <option>B-Code 8</option>
                                            <option>C-Code 10</option>
                                            <option>EC-Code 14</option>
                                            <option>A1-License not exceeding 125cc</option>
                                            <option>A-Can Exceed 125cc</option>
                                            <option>Learner License</option>
                                            <option>International Driving Permit</option>
                                            <option>International Motorcycle Driving Permit</option>
                                        </select>
                                    </div>







                            <div class="mb-3">
                                <button type="submit" name="save_lead" class="btn btn-primary">Save Lead</button>
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