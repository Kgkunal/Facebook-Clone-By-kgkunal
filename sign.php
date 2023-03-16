<?php

require 'connect/../db.php';

if( isset($_POST['first-name']) && !empty($_POST['first-name'])){

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook-Clone</title>

    <link rel="stylesheet" href="assets/css/style.css" >
</head>
<body>
    <div class="header"></div>
    <div class="main">
        <div class="left-side">
            <img src="assets/images/facebook Signin image.png" alt="picture">
        </div>
        <div class="right-side">
            <div class="error"></div>
            <h1 style="color:#212121;">Create an account</h1>
            <div style="color:#212121; font-size:20px;">Its free and always will be</div>
            <form action="sign.php" method="post" name="user-sign-up">
                <div class="sign-up-form">
                    <div class="sign-up-name">
                        <input type="text" name="first-name" id="first-name" class="text-field" placeholder="First Name">
                        <input type="text" name="last-name" id="last-name" class="text-field" placeholder="Last Name">
                    </div>
                    <div class="sign-wrap-mobile">
                        <input type="text" name="email-mobile" id="up-email" class="text-input" placeholder="Mobile number Or Email address">
                    </div>
                    <div class="sign-up-password">
                        <input type="password" name="up-password" id="up-password" class="text-input">
                    </div>

                    <div class="sign-up-birthday">
                        <div class="bdy">Birthday</div>
                        <div class="form-birthday">
                            <select name="birth-day" id="days" class="select-body"></select>
                            <select name="birth-month" id="months" class="select-body"></select>
                            <select name="birth-year" id="years" class="select-body"></select>
                        </div>

                       
                    </div>
                    <div class="gender-wrap">
                            <input type="radio" name="gen" id="fem" value="female" class="m0">
                            <label for="fem" class="gender">Female</label>

                            <input type="radio" name="gen" id="male" value="male" class="m0">
                            <label for="male" class="gender">male</label>
                        </div>

                        <div class="term">
                            By clicking Sign Up, you agree to our terms, data policy and 
                            cockie policy. you may recieve SMS notifications from us and can 
                            opt out any time.
                        </div>
                        <input type="submit" value="Sign Up" class="sign-up">
                </div>

            </form>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script>
        for(i= new Date().getFullYear() ; i > 1900 ; i--){

          $("#years").append($('<option/>').val(i).html(i));

        }
            for(i=1; i < 13 ; i++){
               $('#months').append($('<option/>').val(i).html(i));
            }

            updateNumberOfDays();

            function updateNumberOfDays(){
                $('#days').html('');
                month= $('#months').val();
                year= $('#years').val();
                days = daysInMonth(month, year);
                
                for(i=1; i < days+1 ; i++){
                    $('#days').append($('<option/>').val(i).html(i));
                }
            }

            $('#days , #months').on('change' , function(){
                updateNumberOfDays();
            })

            function daysInMonth(month,year){
                return new Date(year, month, 0).getDate();
            }
    </script>
</body>
</html>