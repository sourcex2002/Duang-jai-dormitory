
<?php

 require('../../connect/connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve form data
    $N_header = $_POST["N_header"];
    $N_information = $_POST["N_information"];
    $processing_date = $_POST["processing_date"];
    $useflag = $_POST["useflag"];



   

        // Insert data into the database
        $SQL = "INSERT INTO news (N_header, N_information, processing_date , useflag) 
                VALUES (:N_header, :N_information, :processing_date , :useflag)";
        $stmt = $con->prepare($SQL);

        $stmt->bindParam(':N_header', $N_header);
        $stmt->bindParam(':N_information', $N_information);
        $stmt->bindParam(':processing_date', $processing_date);
        $stmt->bindParam(':useflag', $useflag);

        $stmt->execute();

        // Close the database connection
        $con = null;
      
        header("Location: news.php");
        exit(); // ต้องใส่ exit() เพื่อหยุดการทำงานของสคริปต์ทันทีหลังจาก header()

        
       
}

?>
