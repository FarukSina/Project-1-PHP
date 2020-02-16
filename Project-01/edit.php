<?php
  // Step 1: (2 points) Include your connection
  include("./_connect.php");
  // CREATE YOUR CONNECTION BELOW THIS LINE
 // $conn = mysqli_connect("localhost", "root", null, "project_01");

  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "SELECT * FROM supers WHERE id = {$_GET['id']}");
  $row = mysqli_fetch_assoc($result);
  var_dump($row); 
?>

<!-- Step 3: (2 points) Include your header here -->

<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<?= '<a href="./index.php">It is a link to the home page index.php</a>' ?>

<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<!DOCTYPE html>
    <head>
        <title>Edit Supers</title>
    </head>
    <body>
        <header>
            <h1>Edit Supers</h1>
        </header>

        <form target="_blank" action="./update.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div>
                <label>
                    First Name:
                </label><br>
                <input name="first_name" value="<?= $row['first_name'] ?>">
            </div>
            <div>
                <label>
                    Last Name:
                </label><br>
                <input name="last_name" value="<?php echo $row['last_name'] ?>">
            </div>
            <div>
                <label>
                    Date of Birth:
                </label><br>
                <input name="date_of_birth" type="date" value="<?= $row['date_of_birth'] ?>">
            </div> 
            <div>
                <label>
                    Alias:
                </label><br>
                <input name="alias"  value="<?= $row['alias'] ?>">
            </div> 
            <div>
                <label>
                    Active:
                </label><br>
                <input name="active"  value="<?= $row['active'] ?>">
            </div>
            <button type="submit">Update</button>
        </form>
    </body>
</html>


<!-- Step 8: (2 points) Include your footer here -->
<?= include("./_footer.php") ?>



<!-- TOTAL POINTS POSSIBLE: 44 -->