<!DOCTYPE html>
<html xml:lang="ar" dir="rtl">
<meta name="format-detection" content="telephone=no">

<head>

    <title>Home</title>

    <!-- START PWA -->

    <!-- END PWA -->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="css/stylead21.css?version=4" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.smartbanner.css" type="text/css" media="screen">
    <link href="css/ar.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/costum.css">

    <script src="js/modernizr-2.6.2.min.js"></script>

</head>
<body class="two-columns-layout">
<?php include('header.php') ?>
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-9.jpg);">
    <div class="shell">
        <h2 class="breadcrumbs-custom__title">Tenders</h2>
        <ul class="breadcrumbs-custom__path">
            <li><a href="index.php">Home</a></li>
            <li><a href="Tenders.php">Tenders</a></li>
            <li class="active">Tenders</li>
        </ul>
    </div>
</section>
<div class="wrapper">

    <main class="mainContainer">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Sign in</h4>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" frameborder="0"></iframe>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->    <!-- PAGE TITLE -->
        <h1 class="page-main-title"><span>Purchases</span></h1>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-container">

                        <style>
                            legend {
                                display: block;
                            }

                            .padding-top .col-md-3 {
                                padding-top: 1.8em;
                            }
                        </style>
                        <aside class="col-md-3 filter-tenders">
                            <label for="filter"><h3 class="aside-title">Search for competitions <i
                                            class="pull-left fa fa-search"></i></h3></label>
                            <input type="checkbox" id="filter" class="hide">
                            <!-- START FILTER -->
                            <div class="filter-container">
                                <ul class="nav nav-tabs" id="tenders-inner-page">
                                    <li class=""><a href="competitions.php"
                                                    style="white-space: nowrap;">List of competitions</a></li>
                                    <li class="active"><a href="Tenders.php" style="white-space: nowrap;">
                                            Purchases </a></li>
                                </ul>
                                <div id="search-form" class="clearfix">
                                    <form id="filter_form" method="post">
                                        <div class="form-group mt-10 ttt">

                                            <input type="text" name="title" id="title" value=""
                                                   placeholder="Operation name"></div>
                                        <div class="form-group ttt">

                                            <input type="text" name="ref_no" id="ref_no" value=""
                                                   placeholder="operation number"></div>
                                        <hr class="divider">
                                        <div class="filter-date">
                                            <fieldset id="fieldset-offer_delivery_date" class="">
                                                <legend>Deadline for receiving offers</legend>

                                                <div class="form-group ttt">

                                                    <input type="text" name="offer_delivery_date_from_hijri"
                                                           id="offer_delivery_date_from_hijri" value=""
                                                           placeholder="From"></div>
                                                <div class="form-group ttt">

                                                    <input type="text" name="offer_delivery_date_to_hijri"
                                                           id="offer_delivery_date_to_hijri" value=""
                                                           placeholder="To"></div>
                                            </fieldset>
                                        </div>
                                        <div class="form-group ttt">

                                            <select name="publish_date" id="publish_date"
                                                    placeholder="Date of publication of the process">
                                                <option value="">At Any time</option>
                                                <option value="1">Two days ago</option>
                                                <option value="2">Week ago</option>
                                                <option value="3">Month ago</option>
                                            </select></div>
                                        <hr class="divider">

                                        <div class="form-group ttt">

                                            <select name="ga_head" id="ga_head" placeholder="Government Entity">
                                                <option value="">- Please select -</option>
                                                <option value="223">Jeddah Self Resources Management</option>
                                                <option value="45">Al-Riad state area</option>
                                                <option value="53">Emirate of Medina</option>
                                                <option value="133">Jazan Region</option>
                                            </select></div>
                                        <div class="form-group">

                                            <select name="main_category" id="main_category"
                                                    placeholder="Main activities">
                                                <option value="">Operation activity</option>
                                                <option value="1">Construction contracting competitions</option>
                                                <option value="23">Security and military services sector competitions</option>
                                                <option value="33">Electromechanical business competitions</option>
                                                <option value="56">Electronic Business Competitions</option>
                                            </select></div>
                                        <hr class="divider">
                                        <div class="form-group ttt">

                                            <select name="regions" id="regions" placeholder="Areas">
                                                <option value="">- Please select -</option>
                                                <option value="1">Riyadh region</option>
                                                <option value="2">Makkah Region</option>
                                                <option value="3">Medina area</option>
                                                <option value="4">Qassim area</option>
                                                <option value="5">Eastern Province</option>
                                                <option value="6">Asir Region</option>
                                            </select></div>
                                        <hr class="divider">
                                        <div class="">
                                            <div>
                                                <input type="hidden" name="no_old_tenders" value="0"><input
                                                        type="checkbox" name="no_old_tenders" id="no_old_tenders"
                                                        value="1" checked="checked"
                                                        placeholder="Do not show past purchases.">
                                                <label for="no_old_tenders" class="optional no_old_tenders">Do not show past purchases.</label></div>
                                        </div>
                                        <div class="group-btn">

                                            <input type="submit" name="submit" id="submit" value="Search"
                                                   placeholder="Search">
                                            <input type="submit" name="reset" id="reset" value="Reset"
                                                   placeholder="Reset"></div>
                                        <div style="display:none">
                                            <div class="form-group ttt">
                                                <input type="hidden" name="offer_delivery_date_from" value=""
                                                       id="offer_delivery_date_from"></div>
                                            <div class="form-group ttt">
                                                <input type="hidden" name="offer_delivery_date_to" value=""
                                                       id="offer_delivery_date_to"></div>
                                        </div>
                                        <div class="form-group ttt">
                                            <input type="hidden" name="token" value="cbcda9c478537ce711b67c0178684dcf"
                                                   id="token"></div>
                                    </form>
                                </div>
                            </div>
                            <!-- END FILTER -->

                        </aside>

                        <!-- START TENDER LIST -->
                        <div class="tenders-list col-md-9 clearfix">
                            <!-- START TENDER LIST HEADER -->
                            <div class="row hide">
                                <div class="col-md-12">
                                    <div class="tenders-head clearfix">
                                        <div class="col-md-8">
                                            تفاصيل عملية الشراء
                                        </div>
                                        <div class="col-md-4">
                                            التواريخ
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END TENDER LIST HEADER -->


                            <!-- START TENDER LIST ITEM -->


                            <div class="tender-list-item">
                                <div class="one">
                                    <img class="gov-logo-home" width="90px" height="90px"
                                         title="" alt=""
                                         src="images/221795-abb9e8976bc02688bf5838523571e0f8.png">
                                    <div class="tender-information">
                                        <h3>
                                            <a href="https://monafasat.etimad.sa/tenders/tender-details/tid/28723"
                                               title="">
                                                Transformers</a>
                                        </h3>
                                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolores ex exercitationem facilis magni placeat ratione voluptatibus. Eum, impedit laborum maiores modi natus quaerat quisquam saepe sit. Nam optio, praesentium?</h4>
                                    </div>
                                </div>
                                <div class="tow">
                                    <div class="tow-in">
                                        <span class="label-title">operation number</span>
                                        <span>441</span>
                                    </div>
                                    <div class="tow-in">
                                        <span class="label-title">Booklet Value</span>
                                        <span>
                                                                    Free                                                            </span>
                                    </div>
                                </div>
                                <div class="three">

                                    <div class="three-in">
                                        <span class="label-title">Date of publication of the process</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/09</span>
                                    </div>
                                    <div class="three-in">
                                        <span class="label-title">Deadline for receiving offers</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/12 -
                                09:00</span>
                                    </div>

                                    <div class="three-in">

                                        <span class="label-title">Date and time of opening the envelopes</span>

                                        <i class="fa fa-calendar"></i>
                                        <span>
                                                                            1439/06/12 -
                                        09:00                                                                    </span>

                                    </div>

                                    <div class="three-in">
                                        <div class='time-bar num-1 clearfix'>
                                            <div class="done">
                                                <div class="still" data-place="inner">
                                                    2 Day - 13 Hour
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- END TENDER LIST ITEM -->

                            <!-- START TENDER LIST ITEM -->


                            <div class="tender-list-item">
                                <div class="one">
                                    <img class="gov-logo-home" width="90px" height="90px"
                                         title="" alt=""
                                         src="images/221795-abb9e8976bc02688bf5838523571e0f8.png">
                                    <div class="tender-information">
                                        <h3>
                                            <a href="https://monafasat.etimad.sa/tenders/tender-details/tid/28723"
                                               title="">
                                                Transformers</a>
                                        </h3>
                                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolores ex exercitationem facilis magni placeat ratione voluptatibus. Eum, impedit laborum maiores modi natus quaerat quisquam saepe sit. Nam optio, praesentium?</h4>
                                    </div>
                                </div>
                                <div class="tow">
                                    <div class="tow-in">
                                        <span class="label-title">operation number</span>
                                        <span>441</span>
                                    </div>
                                    <div class="tow-in">
                                        <span class="label-title">Booklet Value</span>
                                        <span>
                                                                    Free                                                            </span>
                                    </div>
                                </div>
                                <div class="three">

                                    <div class="three-in">
                                        <span class="label-title">Date of publication of the process</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/09</span>
                                    </div>
                                    <div class="three-in">
                                        <span class="label-title">Deadline for receiving offers</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/12 -
                                09:00</span>
                                    </div>

                                    <div class="three-in">

                                        <span class="label-title">Date and time of opening the envelopes</span>

                                        <i class="fa fa-calendar"></i>
                                        <span>
                                                                            1439/06/12 -
                                        09:00                                                                    </span>

                                    </div>

                                    <div class="three-in">
                                        <div class='time-bar num-1 clearfix'>
                                            <div class="done">
                                                <div class="still" data-place="inner">
                                                    2 Day - 13 Hour
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- END TENDER LIST ITEM -->

                            <!-- START TENDER LIST ITEM -->


                            <div class="tender-list-item">
                                <div class="one">
                                    <img class="gov-logo-home" width="90px" height="90px"
                                         title="" alt=""
                                         src="images/221795-abb9e8976bc02688bf5838523571e0f8.png">
                                    <div class="tender-information">
                                        <h3>
                                            <a href="https://monafasat.etimad.sa/tenders/tender-details/tid/28723"
                                               title="">
                                                Transformers</a>
                                        </h3>
                                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolores ex exercitationem facilis magni placeat ratione voluptatibus. Eum, impedit laborum maiores modi natus quaerat quisquam saepe sit. Nam optio, praesentium?</h4>
                                    </div>
                                </div>
                                <div class="tow">
                                    <div class="tow-in">
                                        <span class="label-title">operation number</span>
                                        <span>441</span>
                                    </div>
                                    <div class="tow-in">
                                        <span class="label-title">Booklet Value</span>
                                        <span>
                                                                    Free                                                            </span>
                                    </div>
                                </div>
                                <div class="three">

                                    <div class="three-in">
                                        <span class="label-title">Date of publication of the process</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/09</span>
                                    </div>
                                    <div class="three-in">
                                        <span class="label-title">Deadline for receiving offers</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/12 -
                                09:00</span>
                                    </div>

                                    <div class="three-in">

                                        <span class="label-title">Date and time of opening the envelopes</span>

                                        <i class="fa fa-calendar"></i>
                                        <span>
                                                                            1439/06/12 -
                                        09:00                                                                    </span>

                                    </div>

                                    <div class="three-in">
                                        <div class='time-bar num-1 clearfix'>
                                            <div class="done">
                                                <div class="still" data-place="inner">
                                                    2 Day - 13 Hour
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- END TENDER LIST ITEM -->

                            <!-- START TENDER LIST ITEM -->


                            <div class="tender-list-item">
                                <div class="one">
                                    <img class="gov-logo-home" width="90px" height="90px"
                                         title="" alt=""
                                         src="images/221795-abb9e8976bc02688bf5838523571e0f8.png">
                                    <div class="tender-information">
                                        <h3>
                                            <a href="https://monafasat.etimad.sa/tenders/tender-details/tid/28723"
                                               title="">
                                                Transformers</a>
                                        </h3>
                                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolores ex exercitationem facilis magni placeat ratione voluptatibus. Eum, impedit laborum maiores modi natus quaerat quisquam saepe sit. Nam optio, praesentium?</h4>
                                    </div>
                                </div>
                                <div class="tow">
                                    <div class="tow-in">
                                        <span class="label-title">operation number</span>
                                        <span>441</span>
                                    </div>
                                    <div class="tow-in">
                                        <span class="label-title">Booklet Value</span>
                                        <span>
                                                                    Free                                                            </span>
                                    </div>
                                </div>
                                <div class="three">

                                    <div class="three-in">
                                        <span class="label-title">Date of publication of the process</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/09</span>
                                    </div>
                                    <div class="three-in">
                                        <span class="label-title">Deadline for receiving offers</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/12 -
                                09:00</span>
                                    </div>

                                    <div class="three-in">

                                        <span class="label-title">Date and time of opening the envelopes</span>

                                        <i class="fa fa-calendar"></i>
                                        <span>
                                                                            1439/06/12 -
                                        09:00                                                                    </span>

                                    </div>

                                    <div class="three-in">
                                        <div class='time-bar num-1 clearfix'>
                                            <div class="done">
                                                <div class="still" data-place="inner">
                                                    2 Day - 13 Hour
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- END TENDER LIST ITEM -->

                            <!-- START TENDER LIST ITEM -->


                            <div class="tender-list-item">
                                <div class="one">
                                    <img class="gov-logo-home" width="90px" height="90px"
                                         title="" alt=""
                                         src="images/221795-abb9e8976bc02688bf5838523571e0f8.png">
                                    <div class="tender-information">
                                        <h3>
                                            <a href="https://monafasat.etimad.sa/tenders/tender-details/tid/28723"
                                               title="">
                                                Transformers</a>
                                        </h3>
                                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolores ex exercitationem facilis magni placeat ratione voluptatibus. Eum, impedit laborum maiores modi natus quaerat quisquam saepe sit. Nam optio, praesentium?</h4>
                                    </div>
                                </div>
                                <div class="tow">
                                    <div class="tow-in">
                                        <span class="label-title">operation number</span>
                                        <span>441</span>
                                    </div>
                                    <div class="tow-in">
                                        <span class="label-title">Booklet Value</span>
                                        <span>
                                                                    Free                                                            </span>
                                    </div>
                                </div>
                                <div class="three">

                                    <div class="three-in">
                                        <span class="label-title">Date of publication of the process</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/09</span>
                                    </div>
                                    <div class="three-in">
                                        <span class="label-title">Deadline for receiving offers</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/12 -
                                09:00</span>
                                    </div>

                                    <div class="three-in">

                                        <span class="label-title">Date and time of opening the envelopes</span>

                                        <i class="fa fa-calendar"></i>
                                        <span>
                                                                            1439/06/12 -
                                        09:00                                                                    </span>

                                    </div>

                                    <div class="three-in">
                                        <div class='time-bar num-1 clearfix'>
                                            <div class="done">
                                                <div class="still" data-place="inner">
                                                    2 Day - 13 Hour
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- END TENDER LIST ITEM -->

                            <!-- START TENDER LIST ITEM -->


                            <div class="tender-list-item">
                                <div class="one">
                                    <img class="gov-logo-home" width="90px" height="90px"
                                         title="" alt=""
                                         src="images/221795-abb9e8976bc02688bf5838523571e0f8.png">
                                    <div class="tender-information">
                                        <h3>
                                            <a href="https://monafasat.etimad.sa/tenders/tender-details/tid/28723"
                                               title="">
                                                Transformers</a>
                                        </h3>
                                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolores ex exercitationem facilis magni placeat ratione voluptatibus. Eum, impedit laborum maiores modi natus quaerat quisquam saepe sit. Nam optio, praesentium?</h4>
                                    </div>
                                </div>
                                <div class="tow">
                                    <div class="tow-in">
                                        <span class="label-title">operation number</span>
                                        <span>441</span>
                                    </div>
                                    <div class="tow-in">
                                        <span class="label-title">Booklet Value</span>
                                        <span>
                                                                    Free                                                            </span>
                                    </div>
                                </div>
                                <div class="three">

                                    <div class="three-in">
                                        <span class="label-title">Date of publication of the process</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/09</span>
                                    </div>
                                    <div class="three-in">
                                        <span class="label-title">Deadline for receiving offers</span>
                                        <i class="fa fa-calendar"></i><span>1439/06/12 -
                                09:00</span>
                                    </div>

                                    <div class="three-in">

                                        <span class="label-title">Date and time of opening the envelopes</span>

                                        <i class="fa fa-calendar"></i>
                                        <span>
                                                                            1439/06/12 -
                                        09:00                                                                    </span>

                                    </div>

                                    <div class="three-in">
                                        <div class='time-bar num-1 clearfix'>
                                            <div class="done">
                                                <div class="still" data-place="inner">
                                                    2 Day - 13 Hour
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- END TENDER LIST ITEM -->


                        </div>
                        <!-- END TENDER LIST -->
                        <ul class="pagination">

                            <!-- First page link -->

                            <!-- Previous page link -->
                            <li class="prev disabled">
                                <a href="#">
                                    <span class="fa fa-arrow-left" title="prev" aria-hidden="true"></span>
                                </a>
                            </li>

                            <!-- Numbered page links -->
                            <li class="active"><a>1</a></li>
                            <li><a href="#"> 2</a></li>
                            <li><a href="#"> 3</a></li>

                            <!-- Next page link -->
                            <li class="next">
                                <a href="#">
                                    <span class="fa fa-arrow-right" title="next"></span>
                                </a>
                            </li>

                            <!-- Last page link -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div style="clear:both;"></div>

    <?php include('footer.php') ?>
    <a href="#" id="ui-to-top" class="ui-to-top fa fa-angle-up"></a>


</div>
<script src="js/javascripts.min.js"></script>
<script src="js/core.min.js"></script>

<script type="text/javascript" async="" src="js/ec.js"></script>

<script src="js/script.js"></script>
</body>

</html>
