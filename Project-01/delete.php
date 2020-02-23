<?php
  // Step 1: (2 points) Include your connection
  include("./.env.php");
  include('./_connect.php');
  // CREATE YOUR CONNECTION BELOW THIS LINE
  
  // Step 2: (20 points) Delete the existing 'supers' row from the database
  $sql = "DELETE FROM supers WHERE id = {$_GET['id']}";

  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  $res = mysqli_query($conn, $sql);
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message

  // Ensure you store the messages into the $_SESSION
  session_start();

  // Ensure you exit after your redirect
  if(empty($_GET['id'])){
    header("Location: ./new.php");
    exit;
}
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  if($res){
    echo "The country was deleted succesfully";
  }
  else{
    echo "There was an error deleting the row : " . mysqli_error();
  }

    
  // TOTAL POINTS POSSIBLE: 38
?>