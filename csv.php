<?php include 'dbcon.php';?>
<?php
date_default_timezone_set("Africa/Harare");

// Detailed Lead Report Code
if(isset($_POST["exportlead"]))
{
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Detailed Leads Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'Title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

$query = "SELECT * FROM leaddetails";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
else{
  
if(isset($_POST["dealers"]))
{
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Dealer Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'Dealername', 'Dealersurname', 'Dealershipname', 'DealerIDno', 'LandlineTel', 'Primaryemail', 'CellNumber', 'Category', 'AssignedTo', 'DealerCreateDate', 'Street', 'City', 'Postalcode', 'Country', 'Province', 'Description/Comments'));

$query = "SELECT * FROM dealers";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
}
// End Detailed Lead Report Code


//Daily Leads Report Code Below.

if(isset($_POST["exportdailylead"]))
{
$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Daily Leads Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'Title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

$query = "SELECT * FROM leaddetails WHERE datecreated = '{$Date}'";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
//End Daily Leads Report Code.

//Weekly leads Report

if(isset($_POST["exportweeklylead"]))
{

session_start();
$usersname = $_SESSION['firstname'];

//Adds 7 days in current date
$date1 = date('Y-m-d', strtotime('+7 days') );
//echo $date1;
//Subtracts 7 days from current date
$date2 = date('Y-m-d', strtotime('-7 days') );
//echo $date2;

$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Weekly Leads Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

//Example of concutinating WHERE sql query
//$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND leadstatus='Closed-Won')";

$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname')";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
//End Weekly leads Report


//Monthly leads Report

if(isset($_POST["exportmonthlylead"]))
{

session_start();
$usersname = $_SESSION['firstname'];

//Adds 7 days in current date
$date1 = date('Y-m-d', strtotime('+7 days') );
//echo $date1;
//Subtracts 30 days from current date
$date2 = date('Y-m-d', strtotime('-30 days') );
//echo $date2;

$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Monthly Leads Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

//Example of concutinating WHERE sql query
//$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND leadstatus='Closed-Won')";

$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname')";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
// End Monthly leads Report

//Daily Sales Report Code Below.

if(isset($_POST["exportsalesdaily"]))
{
$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Daily Sales Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'Title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

$query = "SELECT * FROM leaddetails WHERE datecreated = '{$Date}' AND leadstatus='Closed-Won'";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
//End Daily Sales Report Code.

//Weekly Sales Report

if(isset($_POST["exportsalesweekly"]))
{

session_start();
$usersname = $_SESSION['firstname'];

//Adds 7 days in current date
$date1 = date('Y-m-d', strtotime('+7 days') );
//echo $date1;
//Subtracts 7 days from current date
$date2 = date('Y-m-d', strtotime('-7 days') );
//echo $date2;

$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Weekly Sales Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

//Example of concutinating WHERE sql query
//$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND leadstatus='Closed-Won')";

$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND leadstatus='Closed-Won')";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
//End Weekly Sales Report

//Monthly Sales Report

if(isset($_POST["exportsalesmonthly"]))
{

session_start();
$usersname = $_SESSION['firstname'];

//Adds 7 days in current date
$date1 = date('Y-m-d', strtotime('+7 days') );
//echo $date1;
//Subtracts 30 days from current date
$date2 = date('Y-m-d', strtotime('-30 days') );
//echo $date2;

$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Monthly Sales Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

//Example of concutinating WHERE sql query
//$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND leadstatus='Closed-Won')";

$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND leadstatus='Closed-Won')";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
// End Monthly Sales Report


//Daily Tracker Report Code Below.

if(isset($_POST["exporttrackerdaily"]))
{
$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Daily Tracker Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'Title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

$query = "SELECT * FROM leaddetails WHERE datecreated = '{$Date}' AND trackingrequired='Yes'";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
//End Daily Tracker Report Code.

//Weekly Tracker Report

if(isset($_POST["exporttrackerweekly"]))
{

session_start();
$usersname = $_SESSION['firstname'];

//Adds 7 days in current date
$date1 = date('Y-m-d', strtotime('+7 days') );
//echo $date1;
//Subtracts 7 days from current date
$date2 = date('Y-m-d', strtotime('-7 days') );
//echo $date2;

$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Weekly Tracker Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

//Example of concutinating WHERE sql query
//$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND leadstatus='Closed-Won')";

$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND trackingrequired='Yes')";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
//End Weekly Tracker Report

//Monthly Tracker Report

if(isset($_POST["exporttrackermonthly"]))
{

session_start();
$usersname = $_SESSION['firstname'];

//Adds 7 days in current date
$date1 = date('Y-m-d', strtotime('+7 days') );
//echo $date1;
//Subtracts 30 days from current date
$date2 = date('Y-m-d', strtotime('-30 days') );
//echo $date2;

$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Monthly Tracker Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

//Example of concutinating WHERE sql query
//$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND leadstatus='Closed-Won')";

$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND trackingrequired='Yes')";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
// End Monthly Tracker Report

//Daily VAP Report Code Below.

if(isset($_POST["exportvapdaily"]))
{
$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Daily VAPs Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'Title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

$query = "SELECT * FROM leaddetails WHERE datecreated = '{$Date}' AND trackingrequired='Yes'";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
//End Daily VAP Report Code.

//Weekly VAP Report

if(isset($_POST["exportvapweekly"]))
{

session_start();
$usersname = $_SESSION['firstname'];

//Adds 7 days in current date
$date1 = date('Y-m-d', strtotime('+7 days') );
//echo $date1;
//Subtracts 7 days from current date
$date2 = date('Y-m-d', strtotime('-7 days') );
//echo $date2;

$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Weekly VAPs Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

//Example of concutinating WHERE sql query
//$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND leadstatus='Closed-Won')";

$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND trackingrequired='Yes')";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
//End Weekly VAP Report

//Monthly VAP Report

if(isset($_POST["exportvapmonthly"]))
{

session_start();
$usersname = $_SESSION['firstname'];

//Adds 7 days in current date
$date1 = date('Y-m-d', strtotime('+7 days') );
//echo $date1;
//Subtracts 30 days from current date
$date2 = date('Y-m-d', strtotime('-30 days') );
//echo $date2;

$Date = Date("Y-m-d");
//echo $Date;
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=CRM Monthly VAPs Report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'title', 'firstname', 'surname', 'primarycontact', 'primaryemail', 'secondarycontact', 'Secondaryemail', 'idnumber', 'assignedto', 'datecreated', 'maritalstatus', 'occupation', 'passportno', 'leadstatus', 'insurer', 'dealer', 'itcconsent', 'insurancerequired', 'policytype', 'lifecover', 'createdby', 'leadsource', 'leadnotes', 'sendtoinsurer', 'numberofcars', 'vehiclemake', 'yearmodel', 'mmcode', 'model', 'vehicleusage', 'nightparkingaddress', 'nightparkingtype', 'daytimeparkingaddress', 'trackingrequired', 'province', 'trackingproduct', 'installationdate', 'vehiclefinance', 'vehicle registration', 'vinno', 'engineno', 'policyholderlicenseissuedate', 'carhire', 'regulardriver', 'licensecode', 'lastvehicleclaim', 'uninterruptedcompcover', 'hashadcompcover', 'numberofclaims', 'claimsinlast7years', 'typeofclaim', 'vehicle2details', 'vehicle3details', 'tyreandrim', 'excesswaiver', 'scratchanddent', 'bereavementandfuneral', 'gapcover', 'medicalaidplan', 'motorwarranty', 'drivertitle', 'driverfirstname', 'driverlastname', 'drivermaritalstatus', 'driveritcconsent', 'driveroccupation', 'driverlicenseissuedate', 'driverslicensecode', 'totalpremium', 'vehicleexcess', 'insurerpolicynumber', 'policystatus', 'admindebitorder', 'debitdate', 'Month', 'bank', 'branchcode','accounttype', 'accountnumber', 'debitorderamount', 'debitorderloaded', 'debitorderreceived', 'reasonnonreceipt', 'debitattempt', 'debitorderloaddate', 'dealerpaid','dateofdealerpayment'));

//Example of concutinating WHERE sql query
//$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND leadstatus='Closed-Won')";

$query = "SELECT * FROM leaddetails WHERE (datecreated BETWEEN '{$date2}' AND '{$Date}') AND (assignedto ='$usersname' AND trackingrequired='Yes')";
$result = mysqli_query($con, $query);

$output = fopen('php://output', 'w');

while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}
// End Monthly VAP Report
?>

