<?php include_once ("templates/heading.php"); ?>

<?php include_once ("templates/nav.php"); ?>

    <div class="banner">
        <h1 style="font-style:inherit; color:black ;">Log in</h1>
    </div>

    <p>Already have an account? Log in:</p>
    <form action=""method="post">
        <label for="Username">Username/E-mail address:</label><br>
        <input type="text" id="Username"
        placeholder="Username/E-address"><br><br>

        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd"
        placeholder="Password"><br><br>

        <input type="submit" value="Log in">

    <?php include_once("templates/footer.php"); ?>
        <br><br>
</body>
</html>