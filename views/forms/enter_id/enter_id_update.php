<?php

include "../../includes/constants.php";
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Profile Page</title>

        <!-- Bootstrap core CSS -->
        <link href="../../assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../../assets/js/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="../../assets/js/bootstrap-daterangepicker/daterangepicker.css" />

        <!-- Custom styles for this template -->
        <link href="../../assets/css/style.css" rel="stylesheet">
        <link href="../../assets/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

    <section id="container" >
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>RIDEX DASHBOARD</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->

        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                    <h5 class="centered">Ridex Communication</h5>
                    <li class="sub-menu">
                        <a class="active" href="javascript:;" >
                            <i class="fa fa-tasks"></i>
                            <span>Record Operations</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a  href="<?php echo (FIVEZEROSIX."/views/forms/record/AddRecord.php");?>">Add Records</a></li>
                        </ul>

                        <ul class="sub">
                            <li class="active"><a  href="<?php echo (FIVEZEROSIX."/views/forms/enter_id/enter_id_update.php");?>">Update Records</a></li>
                        </ul>

                        <ul class="sub">
                            <li class="active"><a  href="<?php echo (FIVEZEROSIX."/views/forms/record/ViewRecord.php");?>">View Records</a></li>
                        </ul>

                        <ul class="sub">
                            <li class="active"><a  href="<?php echo (FIVEZEROSIX."/views/forms/record/DeleteRecord.php");?>">Delete Records</a></li>
                        </ul>

                        <ul class="sub">
                            <li class="active"><a  href="<?php echo (FIVEZEROSIX."/views/forms/record/SearchRecord.php");?>">Search Records</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-th"></i>
                            <span>Data Tables</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="basic_table.html">Basic Table</a></li>
                            <li><a  href="responsive_table.html">Responsive Table</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i> Update Record ID</h3>

                <!-- INLINE FORM ELELEMNTS -->
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Enter ID</h4>
                            <form class="form-inline" role="form" method="post" action="<?php echo FIVEZEROSIX.'/views/forms/record/UpdateRecord.php'?>">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Enter id</label>
                                    <input type="text" class="form-control" name="id_update" id="exampleInputEmail2">
                                </div>
                                <button type="submit" class="btn btn-theme" name="submit_id_update">Submit ID</button>
                            </form>
                        </div><!-- /form-panel -->
                    </div><!-- /col-lg-12 -->
                </div><!-- /row -->
    </section>
    <section id="main-content">
                <section class="wrapper">
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="content-panel">
                                <section id="unseen">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Customer Name</th>
                                            <th class="numeric">Phone Fault</th>
                                            <th class="numeric">Phone Model</th>
                                            <th class="numeric">Amount Charged</th>
                                            <th class="numeric">Amount Deposited</th>
                                            <th class="numeric">Date</th>
                                            <th class="numeric">Contact</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>(1)</td>
                                            <td>AKEEB ISMAIL OYINDAMOLA</td>
                                            <td class="numeric">Broken Screen</td>
                                            <td class="numeric">Sony Xeperia</td>
                                            <td class="numeric">N3000%</td>
                                            <td class="numeric">N1200</td>
                                            <td class="numeric">29/01/2017</td>
                                            <td class="numeric">08107315070</td>
                                        </tr>
                                        <tr>
                                            <td>(2)</td>
                                            <td>MOGBEYITEREN OWUMI DAVID</td>
                                            <td class="numeric">Bad Charging Port</td>
                                            <td class="numeric">Techno L8 Lite</td>
                                            <td class="numeric">N3500</td>
                                            <td class="numeric">N2000</td>
                                            <td class="numeric">02/02/2017</td>
                                            <td class="numeric">09086464072</td>
                                        </tr>
                                        <tr>
                                            <td>(3)</td>
                                            <td>EMEHINOLA IDOUW OLOLADE</td>
                                            <td class="numeric">Dead</td>
                                            <td class="numeric">Nokia 3310</td>
                                            <td class="numeric">N1000</td>
                                            <td class="numeric">N200</td>
                                            <td class="numeric">04/02/2017</td>
                                            <td class="numeric">08161691968</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </div><!-- /content-panel -->
                        </div><!-- /col-lg-4 -->
                    </div><!-- /row -->

                </section><! --/wrapper -->
            </section><!-- /MAIN CONTENT -->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../../assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="../../assets/js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom switch-->
    <script src="../../assets/js/bootstrap-switch.js"></script>

    <!--custom tagsinput-->
    <script src="../../assets/js/jquery.tagsinput.js"></script>

    <!--custom checkbox & radio-->

    <script type="text/javascript" src="../../assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script type="text/javascript" src="../../assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


    <script src="../../assets/js/form-component.js"></script>


    <script>
        //custom select box

        $(function(){
            $('select.styled').customSelect();
        });

    </script>

    </body>
    </html>



<?php
//include ("../../../models/server.php");
//$query = "SELECT * FROM records";
//$result = mysqli_query($connection , $query);
//if($result){
//    $row = mysqli_fetch_assoc($result);
//    if(count($row) > 0){
//        print "<pre>";
//        print_r($row);
//        print "<pre>";
//    }else{
//        print ("<h2>No Records to Display</h2>");
//    }
//}


?>