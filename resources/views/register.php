<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=News+Cycle:400,700">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
        <link rel="stylesheet" href="assets/css/KD_Header.css">
        <link rel="stylesheet" href="assets/css/user.css">
        <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
        <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
        <link rel="stylesheet" href="assets/css/KD_Header.css">
        <link rel="stylesheet" href="assets/css/Article-List.css">
        <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
        <link rel="stylesheet" href="assets/css/Footer-Basic.css">
        <link rel="stylesheet" href="assets/css/Footer-Dark.css">
        <link rel="stylesheet" href="assets/css/FPE-Gentella-form-elements.css">
        <link rel="stylesheet" href="assets/css/FPE-Gentella-form-elements.css">
        <link rel="stylesheet" href="assets/css/Header--Menu--Sections.css">
        <link rel="stylesheet" href="assets/css/Header-Dark.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
        <link rel="stylesheet" href="assets/css/KD_Header.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
        <link rel="stylesheet" href="assets/css/PHP-Contact-Form-dark.css">
        <link rel="stylesheet" href="assets/css/PHP-Contact-Form-dark.css">
        <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
        <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
        <link rel="stylesheet" href="assets/css/Simple-Slider.css">
        <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    </head>

    <body>
        <div id="contact">
            <div class="container">
                <div class="intro">
                    <h2>Welcome to Rego!</h2>
                    <p>You will have best experience here!</p>
                </div>
                <form action="/userdb" method="post" id="Register-form" onsubmit=" return validationFunction(this)">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"><label class="control-label" for="firstname">Firstname* </label><input class="form-control" required type="text" name="firstname" required="" placeholder="John" id="firstname" data-error="Vorname erforderlich.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="control-label"  for="lastname">Lastname* </label><input class="form-control" required type="text" name="lastname" required="" placeholder="Smith" id="lastname" data-error="Nachname erforderlich.">
                                    <div
                                        class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><label class="control-label" for="email">E-Mail* </label><input class="form-control" type="email" required name="email" required="" placeholder="example@mail.com *" id="email" data-error="Vorname erforderlich.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="control-label" for="phone">CellPhone </label><input class="form-control" required type="number" name="phone" placeholder="5141231234" id="phone" data-error="Telefonnummer erforderlich">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><label class="control-label" for="password">Password* </label><input class="form-control" required type="password" name="password" required="" placeholder="" id="password" data-error="Nachricht erforderlich."
                                                                                                                         rows="4">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="control-label" for="confirm">Confirm* </label><input class="form-control" required type="password" name="confirm" required="" placeholder="" id="confirm" data-error="Nachricht erforderlich."
                                                                                                                       rows="4">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-success btn-send" onclick="window.history.back();" >Back</button>
                            <button class="btn btn-success btn-send" type="submit" value="submit">Submit</button>
                        </div>
                    </div>
                    <!--
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted"><strong>*</strong> Pflichtfelder</p>
                    </div>
                </div>
                    -->
                </form>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
        <script src="assets/js/PHP-Contact-Form-dark.js"></script>
        <script src="assets/js/PHP-Contact-Form-dark.js"></script>
        <script src="assets/js/Simple-Slider.js"></script>
        <script>
                                function validationFunction(registeform) {
                                    var password = registeform.password.value;
                                    var confirm = registeform.confirm.value;
                                    if (password !== confirm) {
                                        alert("your password is not match!");
                                        return false;
                                    }
                                    var email = registeform.email.value;
                                    var xhttp = new XMLHttpRequest();
                                    var obj
                                    xhttp.onreadystatechange = function () {
                                        //alert(1);
                                        if (this.readyState === 4 && this.status === 200) {
                                            //alert(2);
                                            obj = JSON.parse(this.responseText);
                                        }
                                    };
                                    xhttp.open("GET", "/userdb/validation/" + email, false);
                                    xhttp.send();
                                    if (obj.result === 1) {
                                        alert("your email already exist!please input again!");
                                        return false;
                                    } else if (obj.result === 0) {
                                        return true;
                                    }
                                }
        </script>
    </body>

</html>