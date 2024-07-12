<?php 
include_once ("templates/heading.php");
require_once("includes/db_connect.php");
include_once ("templates/nav.php"); 


if(isset($_POST["signup"])){
    $fn = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $mail = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $pass = mysqli_real_escape_string($conn, $_POST["passphrase"]);
    $genderId = mysqli_real_escape_string($conn, $_POST["genderId"]);
    $roleId = mysqli_real_escape_string($conn, $_POST["roleId"]);

    
if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    $_SESSION["wrong_email_format"] = "wrong email format";
    $_SESSION["error"] = "";
}

if(!isset($_SESSION["error"])){
        $insert_message = "INSERT INTO messages (sender_name, sender_email, subject_line, text_message) VALUES ('$fn', '$mail', '$subject', '$message')";

        if ($conn->query($insert_message) === TRUE) {
            header("Location: view_messages.php");
            exit();
        } else {
            echo "Error: " . $insert_message . "<br>" . $conn->error;
        }
    }
} ?>
    
    <div class="banner">
        <h1 style="font-style:inherit; color:black ;">Sign Up</h1>
    </div>

    <p>Sign up here to create an account and get notifications from your favourite authors, get updates whenever 
        a new book is published and keep up with book trends
    </p>
    <form action=""method="post">
        <label for="fn">Full Name:</label><br>
        <input type="text" id="fn"
        placeholder="Full Name"><br><br>

        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd"
        placeholder="Password"><br><br>

        <input type="number"
        placeholder="Age"><br><br>
        <input type="email"
        placeholder="Email Address"><br><br>
        <input type="date"
        placeholder="Deadline"><br><br>
        <input type="time"
        placeholder="Time"> <br><br>
        
        <input name="level"><input type="radio" id="Basic"><label
        for="Basic">Basic</label><br>
        <input name="level"><input type="radio" id="Intermediate"><label
        for="Intermediate">Intermediate</label><br>
        <input name="level"><input type="radio" id="Advanced"><label
        for="Advanced">Advanced</label><br>
        <br>
        <p>Select the languages you speak: </p>
        <input type="checkbox" name="Swahili"
        id="Swahili"><label for="Swahili">Swahili</label><br>
        <input type="checkbox" name="Japanese"
        id="Japanese"><label for="Japanese">Japanese</label><br>
        <input type="checkbox" name="English"
        id="English"><label for="English">English</label><br>
        <input type="checkbox" name="Korean"
        id="Korean"><label for="Korean">Korean</label><br>
        <input type="checkbox" name="Chinese"
        id="Chinese"><label for="Chinese">Chinese</label><br>
        <input type="checkbox" name="French"
        id="French"><label for="French">French</label><br>
        <input type="checkbox" name="German"
        id="German"><label for="German">German</label><br><br>


        <textarea name="" id="" cols="30" rows="10"></textarea>

        <br><br>

        <select name="" id="">
            <option value="">--Select Gender--</option>
            <option value="">Female</option>
            <option value="">Male</option>
            <option value="">Rather Not Say</option>
        </select>
        <br><br>

        <input type="submit" value="Save Details">

    </form>

    <?php include_once("templates/footer.php"); ?>
</body>
</html>