<html>
<head>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/register.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form method="post" action="reg_vlidate.php" id="register_form" novalidate>
            <div class="firstname finput">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" class="moving" placeholder="Enter a First Name">
            </div>
            <div class="lastname finput">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" class="moving" placeholder="Enter a Last Name">
            </div>
            <div class="fathername">
                <label for="fatherName">Father's Name</label>
                <input type="text" name="fatherName" id="fatherName" class="moving" placeholder="Enter a Father's Name">
            </div>
            <div class="e_mail">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="moving" placeholder="Enter a Email ID">
            </div>
            <div class="pass_word pinput">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="moving" placeholder="Enter a Password">
            </div>
            <div class="phone_no minput">
                <label for="phoneno">Phone Number</label>
                <input type="text" name="phoneno" id="phoneno" class="moving" placeholder="Enter a Phone Number">
            </div>
            <button name="reg_btn" id="reg_btn">Register</button>
        </form>
    </div>
</body>
</html>