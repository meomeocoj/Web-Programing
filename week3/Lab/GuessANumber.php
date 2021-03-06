<?php
session_start();
$count=0;
if (!isset($_POST["guess"])) {
     $message = "Welcome to the guessing machine!";
     $count++; //Declare the variable $count to increment by 1.
     $_POST["numtobeguessed"] = rand(0,100);
} else if ($_POST["guess"] > $_POST["numtobeguessed"]) { //greater than
    $message = $_POST["guess"]." is too big! Try a smaller number.";
    $_SESSION["count"]++;

} else if ($_POST["guess"] < $_POST["numtobeguessed"]) { //less than
    $message = $_POST["guess"]." is too small! Try a larger number.";
    $_SESSION["count"]++;

} else { // must be equivalent
    $_SESSION["count"]++;
    $message = "Well done! You guessed the right number in ".$_SESSION["count"]." attempt(s)!"; 
        //Include the $count variable to the $message to show the user how many tries to took him.
}

?>
<html>
    <head>
        <title>A PHP number guessing script</title>
    </head>
    <body>
    <h1><?php echo $message; ?></h1>
        <form action="" method="POST">
        <p><strong>Type your guess here:</strong>
            <input type="text" name="guess"></p>
            <input type="hidden" name="numtobeguessed" 
                   value="<?php echo $_POST["numtobeguessed"]; ?>" ></p>
    <p><input type="submit" value="Submit your guess"/></p>
        </form>
    </body>
</html>