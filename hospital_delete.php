<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

if(isset($_POST['deletedata']))
{
    $hospital_id = $_POST['delete_hospital_id'];

   $query_run ="CALL delete_hospital_val('$hospital_id')";


  //$query_run = "DELETE FROM users WHERE user_id='$user_id'";
   $query = mysqli_query($connection, $query_run);

    if($query)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location: hospital_index.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>