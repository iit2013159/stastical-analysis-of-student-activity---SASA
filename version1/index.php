<!--
We have used Material Design Lite framework to completely design the admin panel. 

Material Design Lite (MDL) lets you add a Material Design look and feel to your static content websites. 
It doesn't rely on any JavaScript frameworks or libraries.

To edit or use the template please refer to the following website http://getmdl.io/

Morris.js is the library that powers the graphs on admin panel. It's a very simple API for drawing line, bar, area and donut charts.
Requirements : jquery, Raphael.js

For using Area and line graph :
http://morrisjs.github.io/morris.js/lines.html

For using Bar Graph : 
http://morrisjs.github.io/morris.js/bars.html

For using Donut Graph : 
http://morrisjs.github.io/morris.js/donuts.html
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
        var ar = <?php include '../student.php' ?>;
        var ah =<?php include '../hostel.php' ?>;
        var ab =<?php include '../buildingdata.php' ?>;
        var abh =<?php include '../boyshostel.php' ?>;
        var at =<?php include '../today.php' ?>;
        var ati =<?php include '../time.php' ?>;
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Statistical Analysis of Student Activity</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
            
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="iiita-logo nav navbar-header">
                        <img width="40px" height="40px" src="images/logo-iiita.jpeg" />
                </div>
                <a class="navbar-brand" href="index.html">Statistical Analysis of Student ctivity </a>
                
            </div>
            <!-- Notification Panel-->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="messages.html#m1">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>IIT2013069</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>STUDENT  !!!</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="messages.html#m2">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>IIT2013169</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>ILLEGAL log</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="messages.html#m3">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>IIT2013014</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>In the hostel for more than 48 hours !</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="messages.html">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="charts1.php"><span class="label label-default">Normal Log</span></a>
                        </li>
                        <li>
                            <a href="charts.php"><span class="label label-info">Student sleeping!</span></a>
                        </li>
                        <li>
                            <a href="charts.php"><span class="label label-warning">invalid log</span></a>
                        </li>
                        <li>
                            <a href="charts.php"> <span class="label label-danger">Student Missing</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.html"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Side-Menu -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="day.php"><i class="fa fa-fw fa-edit"></i> Day wise analysis</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3">
                            <div class="form-group input-group">
                            <form action="info.php" method ="POST">
                                <input type="text" name ="search" class="form-control" placeholder="example :IIT2013<rollno>">
                                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></span>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!--Alert notifications -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> <?php
                                            mysql_connect("localhost","root","acb132")or die("cannot connect");
                                            mysql_query("use project");
                                            $result=mysql_fetch_array(mysql_query("select max() from error where building_id=$i"));
                                                $sum=$sum+$result[0];
                                                $i=$i+1;
                                            
                                            echo $sum;
                                            ?> <strong>Student Logged out of campus!</strong> Roll-no : <a class="alert-link">IIT2013212</a> 
                        </div>
                    </div>
                </div>

                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="icon-ok-sign fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php
                                            mysql_connect("localhost","root","acb132")or die("cannot connect");
                                            mysql_query("use project");
                                            $result=mysql_fetch_array(mysql_query("select count(transaction_id) from log"));
                                            echo $result[0];
                                            ?>
                                        </div>
                                        <div>Normal logs</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="icon-frown fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
                                            mysql_connect("localhost","root","acb132")or die("cannot connect");
                                            mysql_query("use project");
                                            $i=1;
                                            $sum=0;
                                            while ($i < 9 ){
                                                $result=mysql_fetch_array(mysql_query("select b_number_of_students from building where building_id=$i"));
                                                $sum=$sum+$result[0];
                                                $i=$i+1;
                                            }
                                            echo $sum;
                                            ?>
                                        </div>
                                        <div>Inside Hostel</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="icon-exclamation fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                        <?php 
                                            mysql_connect("localhost","root","acb132")or die("cannot connect");
                                            mysql_query("use project");
                                            $result=mysql_fetch_array(mysql_query("select count(new_txn_id) from error"));
                                            echo $result[0];
                                            ?>
                                            </div>
                                        <div>Invalid log</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php 
                                            mysql_connect("localhost","root","acb132")or die("cannot connect");
                                            mysql_query("use project");
                                            $result=mysql_fetch_array(mysql_query("select r_number_of_students from region where region_id=0"));
                                            echo $result[0];
                                            ?>
                                            </div>
                                        <div>Student Logged out of campus!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Capacity of building vs current status of building -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> <strong>Current status vs capacity of different building</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Donut chart-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table showing last logs -->
                    <!--<div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Last Log Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-spinner"></i> Database Reset
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-sign-out"></i> IIT2013212 CC2
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-sign-in"></i> IIT2013212 CC2
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-sign-out"></i> IIT2013166 Library
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user IIT2013212 has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-exclamation-triangle"></i> Student Missing : IIT2013149
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Software initiated
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>-->

                    <!-- Log panel -->
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-gears fa-fw"></i> Log Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Enrollment ID</th>
                                                <th>Log Time</th>
                                                <th>Building</th>
                                            </tr>
                                        </thead>
                                        <tbody id="demo">
                                        
                                            
 
                                            <script>

                                            setInterval(loadDoc, 5000);

                                            function loadDoc() {
                                              var xhttp = new XMLHttpRequest();
                                              xhttp.onreadystatechange = function() {
                                                if (xhttp.readyState == 4 && xhttp.status == 200) {
                                                  document.getElementById("demo").innerHTML = '';
                                                  myvar = xhttp.responseText;
                                                  parsed = JSON.parse(myvar);
                                                  for (i = 0; i < parsed.length; i++) {
                                                    document.getElementById('demo').innerHTML += "<tr><td>"+parsed[i][0] +"<td>"+parsed[i][1]+"<td>" +parsed[i][2]+"</tr>";
                                                  }
                                                }
                                              };
                                              xhttp.open("POST", "ajax.php", true);
                                              // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                              xhttp.send("fname=Henry&lname=Ford");
                                            }
                                            </script>




                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
