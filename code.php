<?php
session_start();
require 'dbcon.php';


//delete command
if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

//update lead command
if(isset($_POST['update_lead']))
{
    $lead_id = mysqli_real_escape_string($con, $_POST['id']);

    $leadname = mysqli_real_escape_string($con, $_POST['leadname']);
    $leadsurname = mysqli_real_escape_string($con, $_POST['leadsurname']);
    $leadphone = mysqli_real_escape_string($con, $_POST['leadcontact']);
    $leademail = mysqli_real_escape_string($con, $_POST['leademail']);
    $seccontact = mysqli_real_escape_string($con, $_POST['seccontact']);
    $secemail = mysqli_real_escape_string($con, $_POST['secemail']);
    $idnumber = mysqli_real_escape_string($con, $_POST['idnumber']);
    $assignedto = mysqli_real_escape_string($con, $_POST['assignedto']);
    $datecreated = mysqli_real_escape_string($con, $_POST['datecreated']);
    $maritalstatus = mysqli_real_escape_string($con, $_POST['maritalstatus']);
    $occupation = mysqli_real_escape_string($con, $_POST['occupation']);
    $passportno = mysqli_real_escape_string($con, $_POST['passportno']);
    $leadstatus = mysqli_real_escape_string($con, $_POST['leadstatus']);
    $insurer = mysqli_real_escape_string($con, $_POST['insurer']);
    $dealer = mysqli_real_escape_string($con, $_POST['dealer']);
    $itcconsent = mysqli_real_escape_string($con, $_POST['itcconsent']);
    $insurancerequired = mysqli_real_escape_string($con, $_POST['insurancerequired']);
    $policytype = mysqli_real_escape_string($con, $_POST['policytype']);
    $lifecover = mysqli_real_escape_string($con, $_POST['lifecover']);
    $createdby = mysqli_real_escape_string($con, $_POST['createdby']);
    $leadsource = mysqli_real_escape_string($con, $_POST['leadsource']);
    $leadnotes = mysqli_real_escape_string($con, $_POST['leadnotes']);
    $number_vehicles = mysqli_real_escape_string($con, $_POST['number_vehicles']);
    $vehiclemake = mysqli_real_escape_string($con, $_POST['vehiclemake']);
    $yearmodel = mysqli_real_escape_string($con, $_POST['yearmodel']);
    $mmcode = mysqli_real_escape_string($con, $_POST['mmcode']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $vehicle_usage = mysqli_real_escape_string($con, $_POST['vehicle_usage']);
    $nightparking = mysqli_real_escape_string($con, $_POST['nightparking']);
    $nightparktype = mysqli_real_escape_string($con, $_POST['nightparktype']);
    $dayparking = mysqli_real_escape_string($con, $_POST['dayparking']);
    $tracking = mysqli_real_escape_string($con, $_POST['tracking']);
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $producttracker = mysqli_real_escape_string($con, $_POST['producttracker']);
    $installationdate = mysqli_real_escape_string($con, $_POST['installationdate']);
    $motorfinance = mysqli_real_escape_string($con, $_POST['motorfinance']);
    $vehiclereg = mysqli_real_escape_string($con, $_POST['vehiclereg']);
    $vinno = mysqli_real_escape_string($con, $_POST['vinno']);
    $engineno = mysqli_real_escape_string($con, $_POST['engineno']);
    $licenseissue = mysqli_real_escape_string($con, $_POST['licenseissue']);
    $carhire = mysqli_real_escape_string($con, $_POST['carhire']);
    $regulardriver = mysqli_real_escape_string($con, $_POST['regulardriver']);
    $licensecode = mysqli_real_escape_string($con, $_POST['licensecode']);
    $vehicleclaim = mysqli_real_escape_string($con, $_POST['vehicleclaim']);
    $insurancehistory = mysqli_real_escape_string($con, $_POST['insurancehistory']);
    $numberofclaims = mysqli_real_escape_string($con, $_POST['numberofclaims']);
    $typeofclaim = mysqli_real_escape_string($con, $_POST['typeofclaim']);
    $vehicletwodetails = mysqli_real_escape_string($con, $_POST['vehicletwodetails']);
    $vehicle3details = mysqli_real_escape_string($con, $_POST['vehiclethree']);
    $tyreandrim = mysqli_real_escape_string($con, $_POST['tyreandrim']);
    $scratchanddent = mysqli_real_escape_string($con, $_POST['scratchanddent']);
    $excesswaiver = mysqli_real_escape_string($con, $_POST['excesswaiver']);
    $scratchanddent = mysqli_real_escape_string($con, $_POST['scratchanddent']);
    $funeralcover = mysqli_real_escape_string($con, $_POST['funeralcover']);
    $GAPcover = mysqli_real_escape_string($con, $_POST['GAPcover']);
    $medicalaid = mysqli_real_escape_string($con, $_POST['medicalaid']);
    $motorwarranty = mysqli_real_escape_string($con, $_POST['motorwarranty']);
    $drivername = mysqli_real_escape_string($con, $_POST['drivername']);
    $driversurname = mysqli_real_escape_string($con, $_POST['driversurname']);
    $drivermaritalstat = mysqli_real_escape_string($con, $_POST['drivermaritalstat']);
    $driverITC = mysqli_real_escape_string($con, $_POST['driverITC']);
    $driveroccupation = mysqli_real_escape_string($con, $_POST['driveroccupation']);
    $regdriverlicenseissuedate = mysqli_real_escape_string($con, $_POST['regdriverlicenseissuedate']);
    $regdriverlicensecode = mysqli_real_escape_string($con, $_POST['regdriverlicensecode']);

    $insurerupdate = mysqli_real_escape_string($con, $_POST['insurerupdate']);
    $premium = mysqli_real_escape_string($con, $_POST['monthlypremium']);
    $motorvehicleexcess = mysqli_real_escape_string($con, $_POST['motorexcess']);
    $INSpolicynumber = mysqli_real_escape_string($con, $_POST['policynumber']);
    $policystartdate = mysqli_real_escape_string($con, $_POST['polstartdate']);
    $policystatus = mysqli_real_escape_string($con, $_POST['polstatus']);
    $admindebitorder = mysqli_real_escape_string($con, $_POST['admndebitorder']);
    $DebitDate = mysqli_real_escape_string($con, $_POST['dbtdate']);
    $monthtodebit = mysqli_real_escape_string($con, $_POST['debitmonth']);
    $Bank = mysqli_real_escape_string($con, $_POST['bankname']);
    $Branchcode = mysqli_real_escape_string($con, $_POST['brnchcode']);
    $Accounttype = mysqli_real_escape_string($con, $_POST['acctype']);
    $Accnumber = mysqli_real_escape_string($con, $_POST['accnumber']);
    $Debitorderamount = mysqli_real_escape_string($con, $_POST['dbtorderamount']);
    $debiLoaded = mysqli_real_escape_string($con, $_POST['debitloaded']);
    $debiReceived = mysqli_real_escape_string($con, $_POST['debitreceived']);
    $rsnDebiNoReceive = mysqli_real_escape_string($con, $_POST['debitnoreceive']);
    $debiattempt = mysqli_real_escape_string($con, $_POST['dbtattempt']);
    $debiLoadDate = mysqli_real_escape_string($con, $_POST['debitloaddate']);
    $dealerPaid = mysqli_real_escape_string($con, $_POST['debitloaded']);
    $dateDealerPaid = mysqli_real_escape_string($con, $_POST['debitreceived']);
    $dealerupdate = mysqli_real_escape_string($con, $_POST['debitnoreceive']);

    $query = "UPDATE leaddetails SET firstname='$leadname', surname='$leadsurname', primarycontact='$leadphone', primaryemail='$leademail',secondarycontact='$seccontact',secondaryemail='$secemail',idnumber='$idnumber',assignedto='$assignedto',datecreated='$datecreated',maritalstatus='$maritalstatus',occupation='$occupation',passportno='$passportno',leadstatus='$leadstatus',insurer='$insurer',dealer='$dealer',itcconsent='$itcconsent',insurancerequired='$insurancerequired',policytype='$policytype',lifecover='$lifecover',createdby='$createdby',leadsource='$leadsource',leadnotes='$leadnotes',numberofcars='$number_vehicles',vehiclemake='$vehiclemake',yearmodel='$yearmodel',mmcode='$mmcode',model='$model',vehicleusage='$vehicle_usage',nightparkingaddress='$nightparking',nightparkingtype='$nightparktype',daytimeparkingaddress='$dayparking',trackingrequired='$tracking',province='$province',trackingproduct='$producttracker',installationdate='$installationdate',vehiclefinance='$motorfinance',vehicleregistration='$vehiclereg',vinno='$vinno',engineno='$engineno',policyholderlicenseissuedate='$licenseissue',carhire='$carhire',regulardriver='$regulardriver',licensecode='$licensecode',lastvehicleclaim='$vehicleclaim',hashadcompcover='$insurancehistory',numberofclaims='$numberofclaims',typeofclaim='$typeofclaim',vehicle2details='$vehicletwodetails',vehicle3details='$vehicle3details',tyreandrim='$tyreandrim',excesswaiver='$excesswaiver',scratchanddent='$scratchanddent',bereavementandfuneral='$funeralcover',gapcover='$GAPcover',medicalaidplan='$medicalaid',motorwarranty='$motorwarranty',driverfirstname='$drivername',driverlastname='$driversurname',drivermaritalstatus='$drivermaritalstat',driveritcconsent='$driverITC',driveroccupation='$driveroccupation',driverlicenseissuedate='$regdriverlicenseissuedate',driverslicensecode='$regdriverlicensecode',policystatus='$policystatus',policystartdate='$policystartdate',totalpremium='$premium',vehicleexcess='$motorvehicleexcess',insurerpolicynumber='$INSpolicynumber',admindebitorder='$admindebitorder',debitdate='$DebitDate',Month='$monthtodebit',bank='$Bank',branchcode='$Branchcode',accounttype='$Accounttype',accountnumber='$Accnumber',debitorderamount='$Debitorderamount',debitorderloaded='$debiLoaded',debitorderreceived='$debiReceived',reasonnonreceipt='$rsnDebiNoReceive',debitattempt='$debiattempt',debitorderloaddate='$debiLoadDate',dealerpaid='$dealerPaid',dateofdealerpayment='$dateDealerPaid' WHERE id='$lead_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Lead Updated Successfully";
        header("Location: leadview.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Lead Not Updated";
        header("Location: code.php");
        exit(0);
    }

}

//test enquire code

if(isset($_POST['update_lead1']))
{
    $lead_id = mysqli_real_escape_string($con, $_POST['id']);

    $leadname = mysqli_real_escape_string($con, $_POST['leadname']);
    $leadsurname = mysqli_real_escape_string($con, $_POST['leadsurname']);
    $leadphone = mysqli_real_escape_string($con, $_POST['leadcontact']);
    $leademail = mysqli_real_escape_string($con, $_POST['leademail']);
    $seccontact = mysqli_real_escape_string($con, $_POST['seccontact']);
    $secemail = mysqli_real_escape_string($con, $_POST['secemail']);
    $idnumber = mysqli_real_escape_string($con, $_POST['idnumber']);
    $assignedto = mysqli_real_escape_string($con, $_POST['assignedto']);
    $datecreated = mysqli_real_escape_string($con, $_POST['datecreated']);
    $maritalstatus = mysqli_real_escape_string($con, $_POST['maritalstatus']);
    $occupation = mysqli_real_escape_string($con, $_POST['occupation']);
    $passportno = mysqli_real_escape_string($con, $_POST['passportno']);
    $leadstatus = mysqli_real_escape_string($con, $_POST['leadstatus']);
    $insurer = mysqli_real_escape_string($con, $_POST['insurer']);
    $dealer = mysqli_real_escape_string($con, $_POST['dealer']);
    $itcconsent = mysqli_real_escape_string($con, $_POST['itcconsent']);
    $insurancerequired = mysqli_real_escape_string($con, $_POST['insurancerequired']);
    $policytype = mysqli_real_escape_string($con, $_POST['policytype']);
    $lifecover = mysqli_real_escape_string($con, $_POST['lifecover']);
    $createdby = mysqli_real_escape_string($con, $_POST['createdby']);
    $leadsource = mysqli_real_escape_string($con, $_POST['leadsource']);
    $leadnotes = mysqli_real_escape_string($con, $_POST['leadnotes']);
    $number_vehicles = mysqli_real_escape_string($con, $_POST['number_vehicles']);
    $vehiclemake = mysqli_real_escape_string($con, $_POST['vehiclemake']);
    $yearmodel = mysqli_real_escape_string($con, $_POST['yearmodel']);
    $mmcode = mysqli_real_escape_string($con, $_POST['mmcode']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $vehicle_usage = mysqli_real_escape_string($con, $_POST['vehicle_usage']);
    $nightparking = mysqli_real_escape_string($con, $_POST['nightparking']);
    $nightparktype = mysqli_real_escape_string($con, $_POST['nightparktype']);
    $dayparking = mysqli_real_escape_string($con, $_POST['dayparking']);
    $tracking = mysqli_real_escape_string($con, $_POST['tracking']);
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $producttracker = mysqli_real_escape_string($con, $_POST['producttracker']);
    $installationdate = mysqli_real_escape_string($con, $_POST['installationdate']);
    $motorfinance = mysqli_real_escape_string($con, $_POST['motorfinance']);
    $vehiclereg = mysqli_real_escape_string($con, $_POST['vehiclereg']);
    $vinno = mysqli_real_escape_string($con, $_POST['vinno']);
    $engineno = mysqli_real_escape_string($con, $_POST['engineno']);
    $licenseissue = mysqli_real_escape_string($con, $_POST['licenseissue']);
    $carhire = mysqli_real_escape_string($con, $_POST['carhire']);
    $regulardriver = mysqli_real_escape_string($con, $_POST['regulardriver']);
    $licensecode = mysqli_real_escape_string($con, $_POST['licensecode']);
    $vehicleclaim = mysqli_real_escape_string($con, $_POST['vehicleclaim']);
    $insurancehistory = mysqli_real_escape_string($con, $_POST['insurancehistory']);
    $numberofclaims = mysqli_real_escape_string($con, $_POST['numberofclaims']);
    $typeofclaim = mysqli_real_escape_string($con, $_POST['typeofclaim']);
    $vehicletwodetails = mysqli_real_escape_string($con, $_POST['vehicletwodetails']);
    $vehicle3details = mysqli_real_escape_string($con, $_POST['vehiclethree']);
    $tyreandrim = mysqli_real_escape_string($con, $_POST['tyreandrim']);
    $scratchanddent = mysqli_real_escape_string($con, $_POST['scratchanddent']);
    $excesswaiver = mysqli_real_escape_string($con, $_POST['excesswaiver']);
    $scratchanddent = mysqli_real_escape_string($con, $_POST['scratchanddent']);
    $funeralcover = mysqli_real_escape_string($con, $_POST['funeralcover']);
    $GAPcover = mysqli_real_escape_string($con, $_POST['GAPcover']);
    $medicalaid = mysqli_real_escape_string($con, $_POST['medicalaid']);
    $motorwarranty = mysqli_real_escape_string($con, $_POST['motorwarranty']);
    $drivername = mysqli_real_escape_string($con, $_POST['drivername']);
    $driversurname = mysqli_real_escape_string($con, $_POST['driversurname']);
    $drivermaritalstat = mysqli_real_escape_string($con, $_POST['drivermaritalstat']);
    $driverITC = mysqli_real_escape_string($con, $_POST['driverITC']);
    $driveroccupation = mysqli_real_escape_string($con, $_POST['driveroccupation']);
    $regdriverlicenseissuedate = mysqli_real_escape_string($con, $_POST['regdriverlicenseissuedate']);
    $regdriverlicensecode = mysqli_real_escape_string($con, $_POST['regdriverlicensecode']);

    $insurerupdate = mysqli_real_escape_string($con, $_POST['insurerupdate']);
    $premium = mysqli_real_escape_string($con, $_POST['monthlypremium']);
    $motorvehicleexcess = mysqli_real_escape_string($con, $_POST['motorexcess']);
    $INSpolicynumber = mysqli_real_escape_string($con, $_POST['policynumber']);
    $policystartdate = mysqli_real_escape_string($con, $_POST['polstartdate']);
    $policystatus = mysqli_real_escape_string($con, $_POST['polstatus']);
    $admindebitorder = mysqli_real_escape_string($con, $_POST['admndebitorder']);
    $DebitDate = mysqli_real_escape_string($con, $_POST['dbtdate']);
    $monthtodebit = mysqli_real_escape_string($con, $_POST['debitmonth']);
    $Bank = mysqli_real_escape_string($con, $_POST['bankname']);
    $Branchcode = mysqli_real_escape_string($con, $_POST['brnchcode']);
    $Accounttype = mysqli_real_escape_string($con, $_POST['acctype']);
    $Accnumber = mysqli_real_escape_string($con, $_POST['accnumber']);
    $Debitorderamount = mysqli_real_escape_string($con, $_POST['dbtorderamount']);
    $debiLoaded = mysqli_real_escape_string($con, $_POST['debitloaded']);
    $debiReceived = mysqli_real_escape_string($con, $_POST['debitreceived']);
    $rsnDebiNoReceive = mysqli_real_escape_string($con, $_POST['debitnoreceive']);
    $debiattempt = mysqli_real_escape_string($con, $_POST['dbtattempt']);
    $debiLoadDate = mysqli_real_escape_string($con, $_POST['debitloaddate']);
    $dealerPaid = mysqli_real_escape_string($con, $_POST['debitloaded']);
    $dateDealerPaid = mysqli_real_escape_string($con, $_POST['debitreceived']);
    $dealerupdate = mysqli_real_escape_string($con, $_POST['debitnoreceive']);

    $query = "UPDATE leaddetails SET firstname='$leadname', surname='$leadsurname', primarycontact='$leadphone', primaryemail='$leademail',secondarycontact='$seccontact',secondaryemail='$secemail',idnumber='$idnumber',assignedto='$assignedto',datecreated='$datecreated',maritalstatus='$maritalstatus',occupation='$occupation',passportno='$passportno',leadstatus='$leadstatus',insurer='$insurer',dealer='$dealer',itcconsent='$itcconsent',insurancerequired='$insurancerequired',policytype='$policytype',lifecover='$lifecover',createdby='$createdby',leadsource='$leadsource',leadnotes='$leadnotes',numberofcars='$number_vehicles',vehiclemake='$vehiclemake',yearmodel='$yearmodel',mmcode='$mmcode',model='$model',vehicleusage='$vehicle_usage',nightparkingaddress='$nightparking',nightparkingtype='$nightparktype',daytimeparkingaddress='$dayparking',trackingrequired='$tracking',province='$province',trackingproduct='$producttracker',installationdate='$installationdate',vehiclefinance='$motorfinance',vehicleregistration='$vehiclereg',vinno='$vinno',engineno='$engineno',policyholderlicenseissuedate='$licenseissue',carhire='$carhire',regulardriver='$regulardriver',licensecode='$licensecode',lastvehicleclaim='$vehicleclaim',hashadcompcover='$insurancehistory',numberofclaims='$numberofclaims',typeofclaim='$typeofclaim',vehicle2details='$vehicletwodetails',vehicle3details='$vehicle3details',tyreandrim='$tyreandrim',excesswaiver='$excesswaiver',scratchanddent='$scratchanddent',bereavementandfuneral='$funeralcover',gapcover='$GAPcover',medicalaidplan='$medicalaid',motorwarranty='$motorwarranty',driverfirstname='$drivername',driverlastname='$driversurname',drivermaritalstatus='$drivermaritalstat',driveritcconsent='$driverITC',driveroccupation='$driveroccupation',driverlicenseissuedate='$regdriverlicenseissuedate',driverslicensecode='$regdriverlicensecode',policystatus='$policystatus',policystartdate='$policystartdate',totalpremium='$premium',vehicleexcess='$motorvehicleexcess',insurerpolicynumber='$INSpolicynumber',admindebitorder='$admindebitorder',debitdate='$DebitDate',Month='$monthtodebit',bank='$Bank',branchcode='$Branchcode',accounttype='$Accounttype',accountnumber='$Accnumber',debitorderamount='$Debitorderamount',debitorderloaded='$debiLoaded',debitorderreceived='$debiReceived',reasonnonreceipt='$rsnDebiNoReceive',debitattempt='$debiattempt',debitorderloaddate='$debiLoadDate',dealerpaid='$dealerPaid',dateofdealerpayment='$dateDealerPaid' WHERE id='$lead_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Lead Updated Successfully";
        header("Location: leadview.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Lead Not Updated";
        header("Location: code.php");
        exit(0);
    }

}


if(isset($_POST['save_lead']))
{
    $leadname = mysqli_real_escape_string($con, $_POST['leadname']);
    $leadsurname = mysqli_real_escape_string($con, $_POST['leadsurname']);
    $leadphone = mysqli_real_escape_string($con, $_POST['leadcontact']);
    $leademail = mysqli_real_escape_string($con, $_POST['leademail']);
    $seccontact = mysqli_real_escape_string($con, $_POST['seccontact']);
    $secemail = mysqli_real_escape_string($con, $_POST['secemail']);
    $idnumber = mysqli_real_escape_string($con, $_POST['idnumber']);
    $assignedto = mysqli_real_escape_string($con, $_POST['assignedto']);
    $datecreated = mysqli_real_escape_string($con, $_POST['datecreated']);
    $maritalstatus = mysqli_real_escape_string($con, $_POST['maritalstatus']);
    $occupation = mysqli_real_escape_string($con, $_POST['occupation']);
    $passportno = mysqli_real_escape_string($con, $_POST['passportno']);
    $leadstatus = mysqli_real_escape_string($con, $_POST['leadstatus']);
    $insurer = mysqli_real_escape_string($con, $_POST['insurer']);
    $dealer = mysqli_real_escape_string($con, $_POST['dealer']);
    $itcconsent = mysqli_real_escape_string($con, $_POST['itcconsent']);
    $insurancerequired = mysqli_real_escape_string($con, $_POST['insurancerequired']);
    $policytype = mysqli_real_escape_string($con, $_POST['policytype']);
    $lifecover = mysqli_real_escape_string($con, $_POST['lifecover']);
    $createdby = mysqli_real_escape_string($con, $_POST['createdby']);
    $leadsource = mysqli_real_escape_string($con, $_POST['leadsource']);
    $leadnotes = mysqli_real_escape_string($con, $_POST['leadnotes']);
    $number_vehicles = mysqli_real_escape_string($con, $_POST['number_vehicles']);
    $vehiclemake = mysqli_real_escape_string($con, $_POST['vehiclemake']);
    $yearmodel = mysqli_real_escape_string($con, $_POST['yearmodel']);
    $mmcode = mysqli_real_escape_string($con, $_POST['mmcode']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $vehicle_usage = mysqli_real_escape_string($con, $_POST['vehicle_usage']);
    $nightparking = mysqli_real_escape_string($con, $_POST['nightparking']);
    $nightparktype = mysqli_real_escape_string($con, $_POST['nightparktype']);
    $dayparking = mysqli_real_escape_string($con, $_POST['dayparking']);
    $tracking = mysqli_real_escape_string($con, $_POST['tracking']);
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $producttracker = mysqli_real_escape_string($con, $_POST['producttracker']);
    $installationdate = mysqli_real_escape_string($con, $_POST['installationdate']);
    $motorfinance = mysqli_real_escape_string($con, $_POST['motorfinance']);
    $vehiclereg = mysqli_real_escape_string($con, $_POST['vehiclereg']);
    $vinno = mysqli_real_escape_string($con, $_POST['vinno']);
    $engineno = mysqli_real_escape_string($con, $_POST['engineno']);
    $licenseissue = mysqli_real_escape_string($con, $_POST['licenseissue']);
    $carhire = mysqli_real_escape_string($con, $_POST['carhire']);
    $regulardriver = mysqli_real_escape_string($con, $_POST['regulardriver']);
    $licensecode = mysqli_real_escape_string($con, $_POST['licensecode']);
    $vehicleclaim = mysqli_real_escape_string($con, $_POST['vehicleclaim']);
    $insurancehistory = mysqli_real_escape_string($con, $_POST['insurancehistory']);
    $numberofclaims = mysqli_real_escape_string($con, $_POST['numberofclaims']);
    $typeofclaim = mysqli_real_escape_string($con, $_POST['typeofclaim']);
    $vehicletwodetails = mysqli_real_escape_string($con, $_POST['vehicletwodetails']);
    $vehicle3details = mysqli_real_escape_string($con, $_POST['vehiclethree']);
    $tyreandrim = mysqli_real_escape_string($con, $_POST['tyreandrim']);
    $scratchanddent = mysqli_real_escape_string($con, $_POST['scratchanddent']);
    $excesswaiver = mysqli_real_escape_string($con, $_POST['excesswaiver']);
    $scratchanddent = mysqli_real_escape_string($con, $_POST['scratchanddent']);
    $funeralcover = mysqli_real_escape_string($con, $_POST['funeralcover']);
    $GAPcover = mysqli_real_escape_string($con, $_POST['GAPcover']);
    $medicalaid = mysqli_real_escape_string($con, $_POST['medicalaid']);
    $motorwarranty = mysqli_real_escape_string($con, $_POST['motorwarranty']);
    $drivername = mysqli_real_escape_string($con, $_POST['drivername']);
    $driversurname = mysqli_real_escape_string($con, $_POST['driversurname']);
    $drivermaritalstat = mysqli_real_escape_string($con, $_POST['drivermaritalstat']);
    $driverITC = mysqli_real_escape_string($con, $_POST['driverITC']);
    $driveroccupation = mysqli_real_escape_string($con, $_POST['driveroccupation']);
    $regdriverlicenseissuedate = mysqli_real_escape_string($con, $_POST['regdriverlicenseissuedate']);
    $regdriverlicensecode = mysqli_real_escape_string($con, $_POST['regdriverlicensecode']);

    $query = "INSERT INTO leaddetails (firstname,surname,primarycontact,primaryemail,secondarycontact,secondaryemail,idnumber,assignedto,datecreated,maritalstatus,occupation,passportno,leadstatus,insurer,dealer,itcconsent,insurancerequired,policytype,lifecover,createdby,leadsource,leadnotes,numberofcars,vehiclemake,yearmodel,mmcode,model,vehicleusage,nightparkingaddress,nightparkingtype,daytimeparkingaddress,trackingrequired,province,trackingproduct,installationdate,vehiclefinance,vehicleregistration,vinno,engineno,policyholderlicenseissuedate,carhire,regulardriver,licensecode,lastvehicleclaim,hashadcompcover,numberofclaims,typeofclaim,vehicle2details,vehicle3details,tyreandrim,excesswaiver,scratchanddent,bereavementandfuneral,gapcover,medicalaidplan,motorwarranty,driverfirstname,driverlastname,drivermaritalstatus,driveritcconsent,driveroccupation,driverlicenseissuedate,driverslicensecode) VALUES ('$leadname','$leadsurname','$leadphone','$leademail','$seccontact','$secemail','$idnumber','$assignedto','$datecreated','$maritalstat','$occupation','$passportno','$leadstatus','$insurer','$dealer','$itcconsent','$insurancerequired','$policytype','$lifecover','$createdby','$leadsource','$leadnotes','$number_vehicles','$vehiclemake','$yearmodel','$mmcode','$model','$vehicle_usage','$nightparking','$nightparktype','$dayparking','$tracking','$province','$producttracker','$installationdate','$motorfinance','$vehiclereg','$vinno','$engineno','$licenseissue','$carhire','$regulardriver','$licensecode','$vehicleclaim','$insurancehistory','$numberofclaims','$typeofclaim','$vehicletwodetails','$vehicle3details','$tyreandrim','$excesswaiver','$scratchanddent','$funeralcover','$GAPcover','$medicalaid','$motorwarranty','$drivername','$driversurname','$drivermaritalstat','$driverITC','$driveroccupation','$regdriverlicenseissuedate','$regdriverlicensecode')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Lead Created Successfully";
        header("Location: leadview.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Lead Not Created";
        header("Location: code.php");
        exit(0);
    }
}


if(isset($_POST['save_dealer']))
{
    $dealername = mysqli_real_escape_string($con, $_POST['dealername']);
    $dealersurname = mysqli_real_escape_string($con, $_POST['dealersurname']);
    $dealershipname = mysqli_real_escape_string($con, $_POST['delaershipname']);
    $dealeridno = mysqli_real_escape_string($con, $_POST['dealeridno']);
    $landlinetel = mysqli_real_escape_string($con, $_POST['landlinetel']);
    $dealeremail = mysqli_real_escape_string($con, $_POST['dealeremail']);
    $dealercellno = mysqli_real_escape_string($con, $_POST['dealercellno']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $dealerassign = mysqli_real_escape_string($con, $_POST['assignedto']);
    $dealercreated = mysqli_real_escape_string($con, $_POST['dealercreated']);
    $dealershipstreet = mysqli_real_escape_string($con, $_POST['dealershipstreet']);
    $dealershipcity = mysqli_real_escape_string($con, $_POST['dealershipcity']);
    $delaershippostalcode = mysqli_real_escape_string($con, $_POST['delaershippostalcode']);
    $dealershipcountry = mysqli_real_escape_string($con, $_POST['dealershipcountry']);
    $dealerprovince = mysqli_real_escape_string($con, $_POST['dealerprovince']);
    $dealernotes = mysqli_real_escape_string($con, $_POST['dealernotes']);
   

    $query = "INSERT INTO dealers (dealerfirstname,dealersurname,dealershipname,dealeridno,landlinetel,primaryemail,cellno,category,assignedto,dealerctreatedate,street,city,postalcode,country,province,descriptions) VALUES ('$dealername','$dealersurname','$dealershipname','$dealeridno','$landlinetel','$dealeremail','$dealercellno','$category','$dealerassign','$dealercreated','$dealershipstreet','$dealershipcity','$delaershippostalcode','$dealershipcountry','$dealerprovince','$dealernotes')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Dealer Created Successfully";
        header("Location: dealers.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Dealer Not Created";
        header("Location: adddealer.php");
        exit(0);
    }
}




?>