<!-- Step 1: (2 points) Include your header here -->
<?php 
include("./.env.php");
include('_header.php');
// <!-- Step 2: (1 points) Create a link back to home.php -->
echo '<a href="./index.php">Home</a>'
// <!-- CREATE YOUR LINK BELOW THIS LINE -->

// <!-- Step 3: (15 points) Create a form that has a field for the following columns -->
// <!-- first_name, last_name, date_of_birth,  alias, active -->
    
?>
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
    <form action="./insert.php" method="post" target = "_blank">
    <div>
            <label>
                First Name:
            </label><br>
            <input name="first_name">
    </div>
     <div>
            <label>
                Last Name:
            </label><br>
            <input name="last_name">
    </div>
    <div>
            <label>
                Date of Birth:
            </label><br>
            <input name="date_of_birth" type="date">
    </div>
    <div>
            <label>
                Alias:
            </label><br>
            <input name="alias" >
    </div>
    <div>
            <label>
                Active:
            </label><br>
            <input name="active" >
    </div>
        <button type="submit">Create</button>
    </form>


<!-- Step 5: (2 points) Include your footer here -->

<?= include("./_footer.php")?>;

<!-- TOTAL POINTS POSSIBLE: 24 -->