<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Camagru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div>
    <div class="box">
        <form method="POST" action="signup.php">
            <h3 style="text-align: center; font-family: Courier New, Courier, monospace">First:<br><input type="text" name="first"></h3>
            <h3 style="text-align: center; font-family: Courier New, Courier, monospace">Surname:<br><input type="text" name="surname"></h3>
            <h3 style="text-align: center; font-family: Courier New, Courier, monospace">Username:<br><input type="text" name="username"></h3>
            <h3 style="text-align: center; font-family: Courier New, Courier, monospace">Email:<br><input type="email" name="email"></h3>
            <input type="checkbox" name="c_box"><h3 style="text-align: center; font-family: Courier New, Courier, monospace; font-size: 10">Would you like to recieve an email when someone comments on your photos?<br></h3>
            <h3 style="text-align: center; font-family: Courier New, Courier, monospace">Password:<br><input type="password" name="pwd" required pattern="^(?=.*\d)[a-zA-Z\d]{8,13}$" title="Password must contain between 8-13 characters with at least one number"></h3>
            <h3 style="text-align: center; font-family: Courier New, Courier, monospace">Password Confirmation:<br><input type="password" name="pwdc"></h3>
            <input style="width: 70%; margin-left: 15%" type="submit" value="Finished?">
        </form>
    </div>
</div>
<div class="footer">
    <div class="back">
        <a href="http://localhost/Camagru/"><p style="text-align: center">Back</p></A>
    </div>
</div>
</body>
</html>