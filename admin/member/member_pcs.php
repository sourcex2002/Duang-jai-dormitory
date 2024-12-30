
<?php

 require('../../connect/connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $build = $_POST["build"];
    $num_room = $_POST["num_room"];
    $tel = $_POST["tel"];
    $cardID = $_POST["cardID"];
    $address_mem = $_POST["address_mem"];

   

        // Insert data into the database
        $SQL = "INSERT INTO member (firstname, lastname, build, num_room, tel, cardID ,address_mem) 
                VALUES (:firstname, :lastname, :build, :num_room, :tel, :cardID, :address_mem)";
        $stmt = $con->prepare($SQL);

        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':build', $build);
        $stmt->bindParam(':num_room', $num_room);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':cardID', $cardID);
        $stmt->bindParam(':address_mem', $address_mem);
        $stmt->execute();

        // Close the database connection
        $con = null;
      
        header("Location:  register_member.php");
        exit(); // ต้องใส่ exit() เพื่อหยุดการทำงานของสคริปต์ทันทีหลังจาก header()

        
       
}

?>
