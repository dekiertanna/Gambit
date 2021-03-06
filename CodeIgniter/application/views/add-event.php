<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src='js/jquery.min.js'></script>

<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
<script src="js/jquery.datetimepicker.full.js"></script>
    <script src='js/moment.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
    <script src="js/calendar.js"></script>

  <script>
  jQuery(document).ready(function(){
      "use strict";
      jQuery('#datetimepicker-start, #datetimepicker-end').datetimepicker({
          step:5
      });
  });
  $.datetimepicker.setLocale('pl');
  </script>
    <script>
    function addEvent(){
		
    var newEvent = new Object();
    newEvent.title = document.getElementById('titleInput').value;
    newEvent.start = $('#datetimepicker-start').datetimepicker('getValue');
    newEvent.end = $('#datetimepicker-end').datetimepicker('getValue');
    $('#calendar').fullCalendar('renderEvent',newEvent,true);
    $('#calendar').fullCalendar('rerenderEvents');

	window.history.go(-1);
	console.log("Fired!");
    
    
	}
    </script>

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
 

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

    <div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dodaj wydarzenie</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Wydarzenie
                        </div>
                        <div class="panel-body">
                            
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nazwa wydarzenia</label>
                                            <input class="form-control" id="titleInput">
                                            <label>Początek</label>
                                            <input class="form-control" id="datetimepicker-start" name="datetimepicker" type="text">
                                            <label>Koniec</label>
                                            <input class="form-control" id="datetimepicker-end" name="datetimepicker" type="text">

                                        </div>
                                        <div class="form-group">
                                            <label>Opis</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <button onclick="addEvent()" type="submit" class="btn btn-default">Gotowe</button>
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->


    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>


</html>
