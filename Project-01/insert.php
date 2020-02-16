<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('./_connect.php');
  // Step 2: (17 points) Insert the new 'supers' row into the database
  var_dump($_POST);

  $sql = "INSERT INTO supers (
      first_name,
      last_name,
      date_of_birth,
      alias,
      active
  ) VALUES (
      '{$_POST['first_name']}',
      '{$_POST['last_name']}',
      '{$_POST['date_of_birth']}',
      '{$_POST['alias']}',
      '{$_POST['active']}'
  )";

  echo($sql);
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $resp = mysqli_query($conn, $sql);

  
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  session_start();

  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE

    if($resp){
    // We were successfull
    $_SESSION['notification'] = "The new country was created successfully";
    }
    else{
        // We failed and should be ashamed of ourselves
        $_SESSION['notification'] = "There was an error creating the country: " . mysqli_error($conn);
    }
      // Here we redirect it to notifications page as we learn it on week 5.
     header("Location: ./notification.php");
     exit; 
  // TOTAL POINTS POSSIBLE: 35
?>