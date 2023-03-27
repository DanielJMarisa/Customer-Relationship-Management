<?php include 'dbcon.php';?>
<?php


if(isset($_POST['save_lead'])) {

    //header: 'leads.php';

    //lead details index

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $primarycontact = $_POST['contact'];
    $primaryemail = $_POST['email'];




//Query Code begins below. This code is responsible for taking the entered form information and submitting it to the databases. The databases connected to are:

// leaddetails


// This information will form the basis of our application, as the manipulation of these variables will make up the reports and statistics as well as comminication to and from 3rd party API's to store and send data.


// lead submission info query
        $query = "INSERT INTO leaddetails(firstname,surname,primarycontact,primaryemail)";

        $query .= "VALUES('$name', '$surname', '$primarycontact', '$primaryemail')";


        $result = mysqli_query($con,$query);

        if(!$result){
        echo "query failed";
        }



}




if(isset($_POST['trackingproduct'])) {
    $to = "jorge@dmafrica.co.za";
    $trackingproduct = $_POST['trackingproduct'];
    $title = $_POST['title'];
    $name = $_POST['name'];

    mail($to,$trackingproduct,$title,$name );
}




?>
