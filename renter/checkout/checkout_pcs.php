
<?php

 require('../../connect/connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $build = $_POST["build"];
    $num_room = $_POST["num_room"];
    $processing_date = $_POST["processing_date"];
    $checkout_date = $_POST["checkout_date"];

   

        // Insert data into the database
        $SQL = "INSERT INTO checkout_notify (firstname, lastname, build, num_room, processing_date, checkout_date) 
                VALUES (:firstname, :lastname, :build, :num_room, :processing_date, :checkout_date)";
        $stmt = $con->prepare($SQL);

        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':build', $build);
        $stmt->bindParam(':num_room', $num_room);
        $stmt->bindParam(':processing_date', $processing_date);
        $stmt->bindParam(':checkout_date', $checkout_date);

        $stmt->execute();

        // Close the database connection
        $con = null;
      
        header("Location:   checkout.php");
        exit(); // ต้องใส่ exit() เพื่อหยุดการทำงานของสคริปต์ทันทีหลังจาก header()

        
       
}

?>
