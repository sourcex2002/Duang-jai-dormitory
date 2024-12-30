
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
    $checkin_date = $_POST["checkin_date"];
    $tel = $_POST["tel"];
    $cardID = $_POST["cardID"];

        // Insert data into the database
        $SQL = "INSERT INTO rentroom (firstname, lastname, build, num_room, processing_date, checkin_date, tel, cardID) 
                VALUES (:firstname, :lastname, :build, :num_room, :processing_date, :checkin_date, :tel, :cardID)";
        $stmt = $con->prepare($SQL);

        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':build', $build);
        $stmt->bindParam(':num_room', $num_room);
        $stmt->bindParam(':processing_date', $processing_date);
        $stmt->bindParam(':checkin_date', $checkin_date);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':cardID', $cardID);

        $stmt->execute();
        
    }
    

        // Close the database connection
        $con = null;
       
        header("Location:   rentroom_form.php");
        exit(); // ต้องใส่ exit() เพื่อหยุดการทำงานของสคริปต์ทันทีหลังจาก header()

        
       


?>
