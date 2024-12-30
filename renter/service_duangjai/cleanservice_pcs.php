
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
    $clean_img = $_POST["clean_img"];
    $clean_details = $_POST["clean_details"];

   

        // Insert data into the database
        $SQL = "INSERT INTO clean (firstname, lastname, build, num_room, processing_date, clean_img, clean_details) 
                VALUES (:firstname, :lastname, :build, :num_room, :processing_date, :clean_img, :clean_details)";
        $stmt = $con->prepare($SQL);

        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':build', $build);
        $stmt->bindParam(':num_room', $num_room);
        $stmt->bindParam(':processing_date', $processing_date);
        $stmt->bindParam(':clean_img', $clean_img);
        $stmt->bindParam(':clean_details', $clean_details);

        $stmt->execute();

        // Close the database connection
        $con = null;
      
        header("Location: clean_service.php");
        exit(); // ต้องใส่ exit() เพื่อหยุดการทำงานของสคริปต์ทันทีหลังจาก header()

        
       
}

?>
