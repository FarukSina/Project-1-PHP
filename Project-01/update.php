<?php
  // Step 1: (2 points) Include your connection
  
  include("./_connect.php");

  // CREATE YOUR CONNECTION BELOW THIS LINE

  // Step 2: (20 points) Update the existing 'supers' row in the database
  
  $sql = "UPDATE supers SET
  first_name = '{$_POST['first_name']}',
  last_name = '{$_POST['last_name']}',
  date_of_birth =  '{$_POST['date_of_birth']}',
  alias = '{$_POST['alias']}',
  active = '{$_POST['active']}'
  WHERE id = {$_POST['id']}";


  echo $sql;
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $res = mysqli_query($conn, $sql);

  
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message


    
  // Ensure you store the messages into the $_SESSION
  session_start();

  // Ensure you exit after your redirect
    if(empty($_POST['id'])){
      header("Location: ./new.php");
      exit;
}

    var_dump($_POST);
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE


    if($res){
        echo "The country was updated succesfully.";
    }
    else{
        echo "There was an error updating the record: " .mysqli_error($conn);
    }
     
  // TOTAL POINTS POSSIBLE: 38
?>