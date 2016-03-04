<!DOCTYPE html>
<html lang="en">

<head>

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
                <a class="navbar-brand" href="index.html">Statistical Analysis of Student Activity  </a>
                
            </div>
            <!-- Top Menu Items -->
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
                                        <p>STUDENT MISSING !!!</p>
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
                            <a href="charts.html"><span class="label label-default">Normal Log</span></a>
                        </li>
<!--
                        <li>
                            <a href="#"><span class="label label-primary"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="label label-success"></span></a>
                        </li>
-->
                        <li>
                            <a href="charts.html"><span class="label label-info">Student sleeping!</span></a>
                        </li>
                        <li>
                            <a href="charts.html"><span class="label label-warning">invalid log</span></a>
                        </li>
                        <li>
                            <a href="charts.html"> <span class="label label-danger">Student Missing</span></a>
                        </li>
                        <li class="divider"></li>
                        
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
<!--
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
-->
                        <li>
                            <a href="logout.html"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
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
<!--
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
            
            <div class="col-lg-5">
                <img src="users/iit2013212.jpg" alt="sanjeev" class="img-thumbnail">
            </div>
            <div class="col-lg-6">
               
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-info-circle"></i><?php 
                                                                    echo ' '.$_POST['search'] ;
                                                                ?></h3>
                            </div>
                            <div class="panel-body">
                                <div id="lt">
                                    
                                        <h4 class="card-title">Sanjeev S</h4>
                                       
                                    
                                    
                                        <div class="card-block">
                                            <p class="card-text">
                                                <b>Name: </b><i> 
                                                                <?php 
                                                                    echo $_POST['search'] ;
                                                                ?>
                                                            </i> <br>
                                                <b>Email id: </b><i> sanjeevsureshn@gmail.com</i> <br>
                                                <b>Mobile number: </b><i>7766655511</i> <br>
                                                <b>Parents number: </b><i> 8870666551</i> <br>
                                                <b>Friend with: </b><i> Sarvapriya raj</i> <br> 
                                                <b>Last Log: </b><i> CC3 at 7:49 26/11/2015</i> <br>
                                            </p>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-gears fa-fw"></i> Log Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Transaction</th>
                                                <th>Gate ID</th>
                                                <th>Log Time</th>
                                                <th>Region</th>
                                            </tr>
                                        </thead>

                                        <tbody id="demo"> 
                                            <script>

                                            var search = <?php
                                                echo '"' . $_POST['search'] . "\"";
                                            ?>

                                            setInterval(loadDoc, 1000);

                                            function loadDoc() {
                                              var xhttp = new XMLHttpRequest();
                                              xhttp.onreadystatechange = function() {
                                                if (xhttp.readyState == 4 && xhttp.status == 200) {
                                                  document.getElementById("demo").innerHTML = '';
                                                  varr = xhttp.responseText;
                                                  parsed = JSON.parse(varr);
                                                  // console.log(parsed)
                                                  for (i = 0; i < parsed.length; i++) {
                                                    document.getElementById('demo').innerHTML += "<tr><td>"+parsed[i][0] +"<td>"+parsed[i][1]+"<td>" +parsed[i][2]+"<td>" +parsed[i][3]+"</tr>";
                                                  }
                                                }
                                              };
                                              xhttp.open("GET", "ajax_student.php?search=" + search, true);
                                              console.log("ajax_student.php?search=" + search);
                                              // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                              xhttp.send();
                                            }
                                            </script>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>

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

</body>

</html>
