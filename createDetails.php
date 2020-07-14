<?php 
$conn = mysqli_connect('localhost', 'id14338083_alvin', '@Al08145075442', 'id14338083_capture');


$message = '';

if (isset ($_POST['submit'])) {
    $fname = $_POST['fname'];
    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = $_POST['lname'];
    $lname = mysqli_real_escape_string($conn, $lname);
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conn, $email);

    $query = "INSERT INTO details (fname, lname, email) 
    
    VALUES ('$fname','$lname', '$email')";
    $result = mysqli_query($conn,$query);
    if ($result) {
        echo "<script>
        alert('Successfully Subscribed');
        </script>";
    }else {
        echo "<script>
        alert('Unsuccessful')
        </script>";
    }
}
