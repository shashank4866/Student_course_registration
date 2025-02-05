
<?php
include 'connection.php';

// Check if the form was submitted and if any checkboxes were selected
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['approve'])) {
    $approved_students = $_POST['approve'];  // Array of student IDs selected for approval

    // Loop through each approved student and update their approval status in the bca table
    foreach ($approved_students as $student_id) {
        $stmt = $conn->prepare("UPDATE bca SET attendance = 'PRESENT' WHERE roll_number= ?");
        $stmt->bind_param("i", $student_id);
        $stmt->execute();
    }   
    echo"<meta http-equiv='refresh' content='0;attendbca.php'>";
}else{
     echo"<meta http-equiv='refresh' content='0;attendbca.php'>";
}
?>