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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <h1><img src="seva.png" width="60" height="60" alt="Subtract"> SchemeSeva</h1>
    <hr>
    <br>
    
    <h2>Sign Up</h2>
    <br>
    
    <form action="signup_process2.php" method="post">
        <select class="form-select" name="age" id="age" aria-label="Default select example" style="width: 60%; margin-left: 20%;">
            <option selected>Select Your Age</option>
            <?php
            for ($i = 16; $i <= 50; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <br>

        <select class="form-select" name="gender" aria-label="Default select example" style="width: 60%; margin-left: 20%;">
            <option selected>Select Your Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select>
        <br>

        <select class="form-select" name="occupation" aria-label="Default select example" style="width: 60%; margin-left: 20%;">
            <option selected>Select Your Occupation</option>
            <option value="Farmer">Farmer</option>
            <option value="Student">Student</option>
            <option value="Job">Job</option>
            <option value="Small_Buisness">Small Business</option>
            <option value="Teacher">Teacher</option>
            <option value="Gov_Employee">Govt. Employee</option>
        </select>
        <br>

        <select class="form-select" name="category" aria-label="Default select example" style="width: 60%; margin-left: 20%;">
            <option selected>Select Your Category</option>
            <option value="General">General</option>
            <option value="SC">Scheduled Caste (SCs)</option>
            <option value="ST">Scheduled Tribes (STs)</option>
            <option value="OBC">Other Backward Classes (OBCs)</option>
            <option value="PWD">Physically Disabled</option>
            <option value="EWS">Economically Weaker Section</option>
            <option value="Other">Other</option>
        </select>
        <br>

        <button type="submit" class="btn btn-outline-secondary" style="width: 100px; text-align: center; margin-left: 47%;">NEXT</button>
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
