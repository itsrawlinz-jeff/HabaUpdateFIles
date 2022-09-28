<?php
 session_start();
 require_once('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Haba Match Request</title>
    <!--Css Link  put after title  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!--Script Link  put befor end of </body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>



    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<center>
    <h1> <b>FILL FORM TO REQUEST MATCH</b> </h1>
</center>

<body style="background-color:  #ffff99 ;color:black">

    <div class="container">
        <form name="match" class="" action="match.php" method="post">
            <div class="form-group pt-3">
                <label for="fullname">Your name</label>
                <input type="text" name="fullname" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email address (Format: enquiries@habadatingclub.com)</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <?php 
    $query ="SELECT country_name ,phone_code FROM countries";
    $result = $con->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
                <label for="contact" style="color:red">Pick Your Country</label>

                <select class="custom-select" name="country" id="inputGroupSelect01">
                    <option>Select Country</option>
                    <?php 
                    foreach ($options as $option) {
                    ?>
                    <option>(+<?php echo $option['phone_code']; ?>) <?php echo $option['country_name']; ?> </option>
                    <?php 
                         }
                    ?>
                </select>
                <!-- <input type="contact" name="contact" value="+" class="form-control"> -->
            </div>
            <div class="form-group">
                <label for="contact" style="color:red">Mobile Number (Format: Country Code First)</label>
                <input name="contact" type="text" class="form-control mb-2 inptFielsd" id="phone"
                    placeholder="Phone Number" />
                <!-- <input type="contact" name="contact" value="+" class="form-control"> -->
            </div>
            <div class="form-group">
                <label for="datepicker-invalid">Your Date Of Birth (Format: DD/MM/YYYY)</label>

                <b-form-datepicker id="datepicker-valid" :state="true"></b-form-datepicker>
                <input type="date" name="dob" class="form-control">
            </div>
            <label for="gender">Your Gender (Format: Male/Female)</label>

            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Your Gender</label>
                </div>
                <select class="custom-select" name="gender" id="inputGroupSelect01">
                    <option name="gender" selected>Choose...</option>
                    <option name="gender" alue="1">Male</option>
                    <option name="gender" value="2">Female</option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="gender">Your Gender (Format: Male/Female)</label>
                <br>
                <label for="gender"> <b>Male</b> </label>
                <input type="checkbox" name="gender" value="Male">
                <label for="gender"> <b>Female</b></label>
                <input type="checkbox" name="gender" value="Female">

            </div> -->
            <label for="gender">Your Preferred partner PGender (Searching For)</label>

            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Searching For</label>
                </div>
                <select name="pgender" class="custom-select" name="gender" id="inputGroupSelect01">
                    <option name="pgender" selected>Choose...</option>
                    <option name="pgender" value="1">Male</option>
                    <option name="pgender" value="2">Female</option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="pgender">Searching For (Format: Male/Female)</label>
                <br>
                <label for="pgender"> <b>Male</b> </label>
                <input type="checkbox" name="pgender" value="Male">
                <label for="pgender"> <b>Female</b></label>
                <input type="checkbox" name="pgender" value="Female">
            </div> -->
            <label for="rstatus">Your Relationship Status (Format: Single/Married/Divorced)</label>


            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Relastionship Status</label>
                </div>
                <select name="pgender" class="custom-select" name="rstatus" id="inputGroupSelect01">
                    <option name="rstatus" selected>Choose...</option>
                    <option name="rstatus" value="1">Single</option>
                    <option name="rstatus" value="2">Married</option>
                    <option name="rstatus" value="2">Divorced </option>

                </select>
            </div>
            <label for="smoke">Do You Smoke? </label>

            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Do You Smoke?</label>
                </div>
                <select name="pgender" class="custom-select" name="smoke" id="inputGroupSelect01">
                    <option name="smoke" selected>Choose...</option>
                    <option name="smoke" value="1">Never</option>
                    <option name="smoke" value="2">Moderately</option>
                    <option name="smoke" value="3">Regulary </option>

                </select>
            </div>

            <label for="drink">Do You Drink? </label>
            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Do You Drink?</label>
                </div>
                <select  class="custom-select" name="drink" id="inputGroupSelect01">
                    <option name="drink" selected>Choose...</option>
                    <option name="drink" value="1">Never</option>
                    <option name="drink" value="2">Moderately</option>
                    <option name="drink" value="3">Regulary </option>


                </select>
            </div>
            <label for="drink">Should Your Partner Do You Drink? </label>
            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Should Your Match Drink?</label>
                </div>
                <select  class="custom-select" name="pdrink" id="inputGroupSelect01">
                    <option name="pdrink" selected>Choose...</option>
                    <option name="pdrink" value="1">Never</option>
                    <option name="pdrink" value="2">Moderately</option>
                    <option name="pdrink" value="3">Regulary </option>
                    <option name="pdrink" value="4">No Preference </option>


                </select>
            </div>



            <div class="form-group">
                <label for="income">Whats Your Income Bracket (Check One Box)</label><br>

                <div class="form-check form-switch">
                    <input class="form-check-input" name="income" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault">Less than 25,000$</label><br>
                    <input class="form-check-input" name="income" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault">$5000 to $10000</label><br>
                    <input class="form-check-input" name="income" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault">$20001 to $35000</label><br>
                    <input class="form-check-input" name="income" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault">$35001 to $50001</label><br>
                    <input class="form-check-input" name="income" type="checkbox" id="flexSwitchCheckDefault" checked>
                    <label class="form-check-label" for="flexSwitchCheckDefault">$50001 and above</label><br>
                    <!-- </div> <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked> <br> -->
                </div>
                <div class="form-group">
                    <label for="partnerminage">Required Partner Age Bracket
                    </label>
                    <div class="input-group mb-3">
                        <br>

                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">I Want Between Age</label>
                        </div>
                        <select  class="custom-select" name="partnerage" id="inputGroupSelect01">
                            <option name="partnerage" selected>Choose...</option>
                            <option name="partnerage" selected>No Preference</option>
                            <option name="partnerage" value="1">18-25</option>
                            <option name="partnerage" value="2">26-30</option>
                            <option name="partnerage" value="4">41-50 </option>
                            <option name="partnerage" value="5">51-60 </option>
                            <option name="partnerage" value="6">61-70 </option>
                            <option name="partnerage" value="7">71-80 </option>
                            <option name="partnerage" value="7">80 And Above </option>



                        </select>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="partnermaxage">Req Partner Max Age (Format:50/No Preference)</label>
                    <input type="text" name="partnermaxage" class="form-control">
                </div> -->
                <div class="form-group">
                    <label for="chronic">Do You Have Any Chronic Illness? (Format:Yes/No)</label>
                    <div class="input-group mb-3">
                        <br>

                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Do You Drink?</label>
                        </div>
                        <select class="custom-select" name="chronic" inputGroupSelect01">
                            <option name=" chronic " selected>Choose...</option>
                            <option name=" chronic" value=" 1">Yes,i have Chronic Illness</option>
                            <option name=" chronic" value=" 2">No i dont have Chronic Illness</option>


                        </select>
                    </div>

                </div>
                  <div class="form-group">
                    <label for="chronic">Choose Haba Service</label>
                    <div class="input-group mb-3">
                        <br>

                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Membership</label>
                        </div>
                        <select name="pgender" class="custom-select" name="chronic id=" inputGroupSelect01">
                            <option name=" chronic " selected>Choose...</option>
                            <option name=" chronic" value=" 1">Membership For Men</option>
                            <option name=" chronic" value=" 2">Membership FOr Women</option>
                              <option name=" chronic" value=" 3">Black And White Dating</option>
                            <option name=" chronic" value=" 4">VIP And LUxury Dating</option>
                              <option name=" chronic" value=" 1">Safari Dating Membership</option>
                            <option name=" chronic" value=" 5">New Town Guide And EScort Membership</option>


                        </select>
                    </div>

                </div>
                    <div class="form-group">
                    <label for="chronic">Your Haba Package Plan</label>
                    <div class="input-group mb-3">
                        <br>

                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Subscription Plan</label>
                        </div>
                        <select name="pgender" class="custom-select" name="plan" inputGroupSelect01">
                            <option name=" plan " selected>Choose...</option>
                            <option name=" plan" value=" 1">Haba Gold</option>
                            <option name=" plan" value=" 2">Haba Silver</option>
                             <option name="plan" value=" 3">Haba Bronze</option>

                        </select>
                    </div>

                </div>

                <p>
                    <input type="submit" name="save" id="Submit"
                        onclick="window.location.href = 'http://localhost/LOGIN/loginsystem/welcome.php';" type="submit"
                        class="btn btn-success" value="SUBMIT REQUEST" />


                    <!-- <input type="submit" name="save" id="Submit" value="Submit"> -->
                </p>
            </div>

        </form>
        <script type="text/javascript">
        document.oncontextmenu = new Function("return false");
        </script>


        <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            separateDialCode: true,
            customPlaceholder: function(
                selectedCountryPlaceholder,
                selectedCountryData
            ) {
                return "e.g. " + selectedCountryPlaceholder;
            },
        });
        </script>
        <!-- REQUIRED CDN  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"
            integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw=="
            crossorigin="anonymous"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"
            integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg=="
            crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            integrity="sha512-BNZ1x39RMH+UYylOW419beaGO0wqdSkO7pi1rYDYco9OL3uvXaC/GTqA5O4CVK2j4K9ZkoDNSSHVkEQKkgwdiw=="
            crossorigin="anonymous"></script>


    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>