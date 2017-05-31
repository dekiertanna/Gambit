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
                        <form role="form">
                            <fieldset>
                            <?php
                            $fattr = array('class' => 'form-signin');
                            echo form_open('/Main/register', $fattr); ?>
                                <div class="form-group">
                                  <?php echo form_input(array('name' => 'email','id'=> 'email','placeholder'=>'Email','class'=>'form-control','value'=>set_value('email'))); ?>
                                <?php echo form_error('email');?>
                                </div>
                               
                            <?php echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
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
