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

    <?php echo link_tag('css/bootstrap.css'); ?>



    <!-- Custom CSS -->
 
    <?php echo link_tag('css/sb-admin-2.css'); ?>

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
                        <h3 class="panel-title">Please Sign In</h3>
                        <?php
                        if(!empty($success_msg))
                        {
                            echo'<p class="statusMsg">'.succsess_msg.'</p>';
                        }
                        elseif(!empty($error_msg))
                        {
                            echo '<p class="statusMsg">'.$serror_msg.'</p>';
                        }
                        ?>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>
                              <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
                          <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>

        </div>
        <div class="form-group">
            <input type="submit" name="loginSubmit" class="btn-primary" value="Submit"/>
        </div>
                               
                                <!-- Change this to a button or input when using this as a form -->
                              
                            </fieldset>
                        </form>
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

</body>

</html>
