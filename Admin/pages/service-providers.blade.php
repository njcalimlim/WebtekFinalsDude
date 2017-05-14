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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Welcome Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Christine De Alban would like to tutor Bass <span class="label label-info">View Info</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="notifications.html">
                                <strong>View All Request</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="service-providers.html"><i class="fa fa-table fa-fw"></i>Service Providers</a>
                        </li>
                         <li>
                            <a href="customers.html"><i class="fa fa-table fa-fw"></i>Customers</a>
                        </li>
                        <li>
                            <a href="notifications.html"><i class="fa fa-wrench fa-fw"></i> Requests<span class="fa arrow"></span></a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Service Provider</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Service Provider
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Service Provider ID</th>
                                        <th>Lastname</th>
                                        <th>Firstname</th>
                                        <th>Birthdate</th>
                                        <th>Contact No.</th>
                                        <th>E-mail Address</th>
                                        <th>Address</th>
                                        <th>Type of Service</th>
                                        <th>Field</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Activation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1001</td>
                                        <td>Fernandez</td>
                                        <td>Mariella</td>
                                        <td>April 6, 2017</td>
                                        <td>09913145134</td>
                                        <td>mariella@gmail.com</td>
                                        <td>456 Aurora Hill</td>
                                        <td>Cooking or Baking</td>
                                        <td>Baking</td>
                                        <td>marz</td>
                                        <td>0987</td>
                                        <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="warning" data-offstyle="info"></td>
                                    </tr>
                                    <tr>
                                        <td>1002</td>
                                        <td>Caguioa</td>
                                        <td>Christine</td>
                                        <td>April 30, 2017</td>
                                        <td>09913145678</td>
                                        <td>Christine@gmail.com</td>
                                        <td>456 Quirino Hill</td>
                                        <td>Academics</td>
                                        <td>Mathematics</td>
                                        <td>tintin</td>
                                        <td>tin123</td>
                                        <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                                    </tr>
                                    <tr>
                                        <td>1003</td>
                                        <td>Maslian</td>
                                        <td>Avery</td>
                                        <td>May 7, 2017</td>
                                        <td>09956745134</td>
                                        <td>Avery@gmail.com</td>
                                        <td>456 Green Valley</td>
                                        <td>Language</td>
                                        <td>Nihongo</td>
                                        <td>AbiMaslian</td>
                                        <td>biri</td>
                                        <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                                    </tr>
                                    <tr>
                                        <td>1003</td>
                                        <td>Calimlim</td>
                                        <td>Nathan</td>
                                        <td>September 7, 2017</td>
                                        <td>09956798765</td>
                                        <td>Nathan@gmail.com</td>
                                        <td>89 Green Valley</td>
                                        <td>Instrumental</td>
                                        <td>Drums</td>
                                        <td>thaniel</td>
                                        <td>niel89</td>
                                        <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                  
                                    </tr>
                                    <tr>
                                        <td>1004</td>
                                        <td>Marbella</td>
                                        <td>Richard</td>
                                        <td>March 10, 1995</td>
                                        <td>09123456789</td>
                                        <td>Rich@gmail.com</td>
                                        <td>155 Lower Bonifacio St</td>
                                        <td>Academics</td>
                                        <td>English/Science</td>
                                        <td>chard</td>
                                        <td>darch13</td>
                                        <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                   
                                    </tr>
                                    <tr>
                                        <td>1005</td>
                                        <td>Arciosa</td>
                                        <td>Rommel</td>
                                        <td>February 19, 2017</td>
                                        <td>09876543219</td>
                                        <td>Mel2gmail.com</td>
                                        <td>99 Ambiong</td>
                                        <td>Academics</td>
                                        <td>Logic/Programming</td>
                                        <td>melli</td>
                                        <td>melski19</td>
                                        <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                     
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
