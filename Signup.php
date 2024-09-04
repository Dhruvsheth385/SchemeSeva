<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1><img src="seva.png" width="60" height="60" alt="Subtract"> SchemeSeva</h1>
    <hr>
    <br>
    <h2>Sign Up</h2>
    <br>
    <form action="signup_process.php" method="post">
        <div class="form-floating mb-3" style="width: 40%; margin-left: 30%;">
            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="fullname">
            <label for="floatingInput">Full Name</label>
        </div>
        <div class="form-floating mb-3" style="width: 40%; margin-left: 30%;">
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3" style="width: 40%; margin-left: 30%;">
            <input type="tel" class="form-control" name="phonenumber" id="phonenumber" placeholder="phonenumber">
            <label for="floatingInput">Phone Number</label>
        </div>
        <br>
        <a href="Signup2.html">
            <button type="submit" name="submit" class="btn btn-outline-secondary" style="width: 100px; text-align: center; margin-left: 47%;">NEXT</button>
        </a>
    </form>
    <footer>
        <div class="hstack gap-6">
            <div class="p-2">SchemeSeva</div>
            <div class="p-2 ms-auto"><img src="insta1.png" width="25" height="25" alt="insta1"></div>
            <div class="vr"></div>
            <div class="p-2"><img src="faceb1.png" width="25" height="25" alt="faceb1"></div>
            <div class="vr"></div>
            <div class="p-2"><img src="twitter1.png" width="25" height="25" alt="twitter1"></div>
            <div class="vr"></div>
            <div class="p-2">About Us</div>
        </div>
    </footer>
</body>
</html>
