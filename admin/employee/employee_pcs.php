
<?php

 require('../../connect/connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve form data
    $firstname_emp = $_POST["firstname_emp"];
    $lastname_emp = $_POST["lastname_emp"];
    $position_emp = $_POST["position_emp"];
    $address_emp = $_POST["address_emp"];
    $tel_emp = $_POST["tel_emp"];
    $cardID_emp = $_POST["cardID_emp"];


   

        // Insert data into the database
        $SQL = "INSERT INTO employee (firstname_emp, lastname_emp, position_emp, address_emp, tel_emp, cardID_emp ) 
                VALUES (:firstname_emp, :lastname_emp, :position_emp , :address_emp, :tel_emp, :cardID_emp)";
        $stmt = $con->prepare($SQL);

        $stmt->bindParam(':firstname_emp', $firstname_emp);
        $stmt->bindParam(':lastname_emp', $lastname_emp);
        $stmt->bindParam(':position_emp', $position_emp);
        $stmt->bindParam(':address_emp', $address_emp);
        $stmt->bindParam(':tel_emp', $tel_emp);
        $stmt->bindParam(':cardID_emp', $cardID_emp);
        $stmt->execute();

        // Close the database connection
        $con = null;
      
        header("Location:  register_employee.php");
        exit(); // ต้องใส่ exit() เพื่อหยุดการทำงานของสคริปต์ทันทีหลังจาก header()

        
       
}

?>
