<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <!-- Google recatcha API library -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <?php
    $rand = rand(9999, 1000);
    ?>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="form-inner-cnt">
                <form action="save.php" method="post" class="cnt-form">
                    <h2>CONTACT FORM</h2>

                    <div class="form-input">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
                        <br>
                    </div>
                    <div class="form-input">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Enter last Name" required>
                        <br>
                    </div>
                    <div class="form-input">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required> <br>
                    </div>
                    <div class="form-input">
                        <label for="mobile">Mobile</label>
                        <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" required> <br>
                    </div>

                    <div class="form-input">
                        <label for="captcha">Enter Captcha</label><br>
                        <div class="second">
                            <input type="text" name="captcha" class="form-control" id="captcha" placeholder="Enter Captcha" required data-parsley-trigger="keyup" oninput="inputFunction(this)">
                        </div>
                        <input type="hidden" name="captcha-rand" value="<?php echo $rand; ?>">
                        <div class="captcha"><?php echo $rand; ?></div>

                    </div>
                    <div id="test"></div>
                    <input onclick="validcap()" id="submitButton" name="submit" type="submit" class="form-control submit" value="submit" disabled="true">
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    function inputFunction(element){
        var stg1 = element.value;
        var stg1 = document.getElementById('captcha').value;
        var stg2 = <?php echo $rand; ?>;
        if (stg1 == stg2) {
            document.getElementById("submitButton").disabled = false;
            // alert("Form is validated Succesfully");
            return true;
        }
    }
    function validcap(){
        alert("Form is validated Succesfully");
    }
</script>

</html>{}