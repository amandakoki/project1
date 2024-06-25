<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="toplink">
        <a href="./index.html">Home</a>
        <a href="news.html">News</a>
        <a href="about_us.html">About Us</a>
        <a href="contact_us.html">Contact Us</a>
        <a href="my_books.html">My Books</a>

        <div class="toplink-right">
        <a href="signup.html">Sign Up</a>
        <a href="login.html">Log in</a>
        </div>
    </div>

    
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

    <div class="footer">
        <br> <br>
        Copyright BBIT 2.1A &copy; All rights reserved
    </div>
</body>
</html>