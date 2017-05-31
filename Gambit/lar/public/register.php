<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">



    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="register-form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                             <div class="form-group">
                                    <input class="form-control" placeholder="Confirm password" name="password2" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="index.html" class="btn btn-lg btn-success btn-block"type="submit">Sign Up!</a>
                            </fieldset>
                        </form>

                        <script type="text/javascript">
                            var frmvalidator  = new Validator("register-form");
                            frmvalidator.addValidation("email","req","This field is required");
                            frmvalidator.addValidation("email","email","Provide correct email");
                            frmvalidator.addValidation("password","req","This field is required");
                            frmvalidator.addValidation("password","minlen=6","Password cannot be shorter than 6 characters");
                            frmvalidator.addValidation("password2","req","This field is required");
                            frmvalidator.addValidation("password2","minlen=6","Password cannot be shorter than 6 characters");
                            fmvalidator.addValidation("password2","eqelmnt=password","Passwords don't match");
                            </script>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->


    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
  <script src="js/gen_validator4.js"></script>
</body>

</html>
