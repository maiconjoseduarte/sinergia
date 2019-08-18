<?php

/* @var $this yii\web\View */

$this->title = 'Contratos & Sinergia';

//echo "<h3 style='text-align: center; margin-top: 200px; font-size: 45px;'>{$this->title}</h3>";
?>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
                <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
            </ul>
            <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
        </div>
        <!-- /.nav-tabs-custom -->

        <!-- Chat box -->
        <div class="box box-success">
            <div class="box-header">
                <i class="fa fa-comments-o"></i>

                <h3 class="box-title">Chat</h3>

                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                    <div class="btn-group" data-toggle="btn-toggle">
                        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                    </div>
                </div>
            </div>
            <div class="box-body chat" id="chat-box">
                <!-- chat item -->
                <div class="item">
                    <img src="master/dist/img/user4-128x128.jpg" alt="user image" class="online">

                    <p class="message">
                        <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                            Mike Doe
                        </a>
                        I would like to meet you to discuss the latest news about
                        the arrival of the new theme. They say it is going to be one the
                        best themes on the market
                    </p>
                    <div class="attachment">
                        <h4>Attachments:</h4>

                        <p class="filename">
                            Theme-thumbnail-image.jpg
                        </p>

                        <div class="pull-right">
                            <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                        </div>
                    </div>
                    <!-- /.attachment -->
                </div>
                <!-- /.item -->
                <!-- chat item -->
                <div class="item">
                    <img src="master/dist/img/user3-128x128.jpg" alt="user image" class="offline">

                    <p class="message">
                        <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                            Alexander Pierce
                        </a>
                        I would like to meet you to discuss the latest news about
                        the arrival of the new theme. They say it is going to be one the
                        best themes on the market
                    </p>
                </div>
                <!-- /.item -->
                <!-- chat item -->
                <div class="item">
                    <img src="master/dist/img/user2-160x160.jpg" alt="user image" class="offline">

                    <p class="message">
                        <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                            Susan Doe
                        </a>
                        I would like to meet you to discuss the latest news about
                        the arrival of the new theme. They say it is going to be one the
                        best themes on the market
                    </p>
                </div>
                <!-- /.item -->
            </div>
            <!-- /.chat -->
            <div class="box-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Type message...">

                    <div class="input-group-btn">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box (chat box) -->

        <!-- TO DO List -->
        <div class="box box-primary">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>

                <h3 class="box-title">To Do List</h3>

                <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                <ul class="todo-list">
                    <li>
                        <!-- drag handle -->
                        <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <!-- checkbox -->
                        <input type="checkbox" value="">
                        <!-- todo text -->
                        <span class="text">Design a nice theme</span>
                        <!-- Emphasis label -->
                        <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Make the theme responsive</span>
                        <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Let theme shine like a star</span>
                        <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Let theme shine like a star</span>
                        <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Check your messages and notifications</span>
                        <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Let theme shine like a star</span>
                        <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
                <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
        </div>
        <!-- /.box -->

        <!-- quick email widget -->
        <div class="box box-info">
            <div class="box-header">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">Quick Email</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="box-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div>
                  <textarea class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                </form>
            </div>
            <div class="box-footer clearfix">
                <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                    <i class="fa fa-arrow-circle-right"></i></button>
            </div>
        </div>

    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">

        <!-- Map box -->
        <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                            title="Date range">
                        <i class="fa fa-calendar"></i></button>
                    <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                            data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                        <i class="fa fa-minus"></i></button>
                </div>
                <!-- /. tools -->

                <i class="fa fa-map-marker"></i>

                <h3 class="box-title">
                    Visitors
                </h3>
            </div>
            <div class="box-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
                <div class="row">
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                        <div id="sparkline-1"></div>
                        <div class="knob-label">Visitors</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                        <div id="sparkline-2"></div>
                        <div class="knob-label">Online</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-4 text-center">
                        <div id="sparkline-3"></div>
                        <div class="knob-label">Exists</div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.box -->

        <!-- solid sales graph -->
        <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
                <i class="fa fa-th"></i>

                <h3 class="box-title">Sales Graph</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="box-body border-radius-none">
                <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-border">
                <div class="row">
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                        <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                               data-fgColor="#39CCCC">

                        <div class="knob-label">Mail-Orders</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                        <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                               data-fgColor="#39CCCC">

                        <div class="knob-label">Online</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-4 text-center">
                        <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                               data-fgColor="#39CCCC">

                        <div class="knob-label">In-Store</div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->

        <!-- Calendar -->
        <div class="box box-solid bg-green-gradient">
            <div class="box-header">
                <i class="fa fa-calendar"></i>

                <h3 class="box-title">Calendar</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars"></i></button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Add new event</a></li>
                            <li><a href="#">Clear events</a></li>
                            <li class="divider"></li>
                            <li><a href="#">View calendar</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Progress bars -->
                        <div class="clearfix">
                            <span class="pull-left">Task #1</span>
                            <small class="pull-right">90%</small>
                        </div>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                        </div>

                        <div class="clearfix">
                            <span class="pull-left">Task #2</span>
                            <small class="pull-right">70%</small>
                        </div>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="clearfix">
                            <span class="pull-left">Task #3</span>
                            <small class="pull-right">60%</small>
                        </div>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                        </div>

                        <div class="clearfix">
                            <span class="pull-left">Task #4</span>
                            <small class="pull-right">40%</small>
                        </div>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- right col -->
</div>
<!-- /.row (main row) -->







































<!--<div class="d-sm-flex justify-content-between align-items-center my-3">-->
<!--    <h3 class="text-dark font-weight-medium">Sales dashboard overview</h3>-->
<!--    <div class="link-btn-group d-flex justify-content-start align-items-start">-->
<!--        <button type="button" class="btn btn-link text-dark py-0 pl-0">Add info</button>-->
<!--        <button type="button" class="btn btn-link text-dark py-0">Get updated by email</button>-->
<!--        <button type="button" class="btn btn-link text-dark py-0">See more</button>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="row">-->
<!--    <div class="col-md-12 grid-margin stretch-card">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <div class="d-sm-flex justify-content-between align-items-center">-->
<!--                    <h4 class="card-title">Revenue Statistics</h4>-->
<!--                    <div class="dropdown">-->
<!--                        <button type="button" class="btn btn-outline-light dropdown-toggle my-2 my-lg-0" data-toggle="dropdown" id="profileDropdown2">-->
<!--                            <i class="mdi mdi-calendar-blank text-extra-small"></i> Jan 12,2019 - Mar 12,2019-->
<!--                        </button>-->
<!--                        <div class="dropdown-menu dropdown-menu-left custom-drop-down" aria-labelledby="profileDropdown2">-->
<!--                            <a class="dropdown-item">-->
<!--                                <i class="mdi mdi-calendar-blank"></i> Sep 12,2018 - Dec 12,2018-->
<!--                            </a>-->
<!--                            <a class="dropdown-item">-->
<!--                                <i class="mdi mdi-calendar-blank"></i> Jun 12,2018 - Aug 12,2018-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <button type="button" class="btn btn-warning ml-sm-3 my-2 my-lg-0">Download Report</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="mb-4">-->
<!--                    <span class="pr-2">Sales</span><span class="pr-2"><i class="mdi mdi-chevron-right"></i></span><span>Revenue statistics</span>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-6">-->
<!--                        <div class="row chart-legends-revenue-statistics">-->
<!--                            <div class="col-sm-6 mb-4 mb-sm-0">-->
<!--                                <div class="legend-label d-flex align-items-center">-->
<!--                                    <span class="bg-secondary"></span>-->
<!--                                    <h5 class="mb-0 font-weight-normal">Gross Earnings</h5>-->
<!--                                </div>-->
<!--                                <h3 class="text-dark font-weight-medium mt-2">$14,000.00</h3>-->
<!--                            </div>-->
<!--                            <div class="col-sm-6 mb-4 mb-sm-0">-->
<!--                                <div class="legend-label d-flex align-items-center">-->
<!--                                    <span class="bg-info"></span>-->
<!--                                    <h5 class="mb-0 font-weight-normal">Gross Earnings</h5>-->
<!--                                </div>-->
<!--                                <h3 class="text-dark font-weight-medium mt-2">$23,000.00</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-6">-->
<!--                        <h5 class="text-dark font-weight-normal" >Summary</h5>-->
<!--                        <p>A comparison of people who mark themeselves of their interest based from-->
<!--                            the date range given above. <a href="#" class="text-success">Learn More</a></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row mt-3">-->
<!--                    <div class="col-sm-12">-->
<!--                        <canvas id="revenue-statistics"></canvas>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="row">-->
<!--    <div class="col-xl-4 grid-margin stretch-card">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <div class="d-flex justify-content-between align-items-center">-->
<!--                    <h4 class="card-title mb-0">Account Retention</h4>-->
<!--                    <button type="button" class="btn btn-link btn-md text-light p-0">14 Jan 2019</button>-->
<!--                </div>-->
<!--                <h2 class="text-dark font-weight-bold my-3">$23,769</h2>-->
<!--                <canvas id="account-retension"></canvas>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-xl-4 grid-margin stretch-card">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <div class="custom-fieldset mb-4">-->
<!--                    <div class="clearfix">-->
<!--                        <label>Product Sold</label>-->
<!--                    </div>-->
<!--                    <div class="d-lg-flex align-items-center text-dark">-->
<!--                        <i class="mdi mdi-inbox-arrow-up mr-3 mdi-36px animate-icon"></i>-->
<!--                        <div>-->
<!--                            <h2 class="mb-0">$45300</h2>-->
<!--                            <div class="text-light d-flex align-items-center"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up mdi-18px"></i>+4531</span>avg. sales per day</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="custom-fieldset mt-3">-->
<!--                    <div class="clearfix">-->
<!--                        <label>Product Orders</label>-->
<!--                    </div>-->
<!--                    <div class="d-lg-flex align-items-center text-dark">-->
<!--                        <i class="mdi mdi-cart-outline mr-3 mdi-36px animate-icon"></i>-->
<!--                        <div>-->
<!--                            <h2 class="mb-0">$61404</h2>-->
<!--                            <div class="text-light d-flex align-items-center"><span class="text-danger mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-down mdi-18px"></i>-231.33</span>avg. sales per day</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-xl-4 grid-margin stretch-card">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-6">-->
<!--                        <p class="text-dark font-weight-medium">Today Earnings</p>-->
<!--                        <h1 class="text-dark  mt-3">$2850</h1>-->
<!--                        <p class="text-dark text-small"><span class="circle-arrow"><i class="mdi mdi-arrow-top-right"></i></span>Avg. Sales per Day</p>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <canvas id="earnings" class=" mt-3"></canvas>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row mt-4">-->
<!--                    <div class="col-md-6 mb-4 mb-sm-0">-->
<!--                        <p class="text-dark">Total Income</p>-->
<!--                        <h2 class="text-dark  mt-2">$2850</h2>-->
<!--                        <div class="text-light d-flex align-items-center text-extra-small"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up  mdi-18px"></i>+43.54%</span>Last week</div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <p class="text-dark">Total Expenses</p>-->
<!--                        <h2 class="text-dark  mt-2">$54345</h2>-->
<!--                        <div class="text-light d-flex align-items-center text-extra-small"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up  mdi-18px"></i>0.7% </span>Last month</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="row">-->
<!--    <div class="col-md-12 grid-margin stretch-card">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <div class="d-sm-flex justify-content-between align-items-center">-->
<!--                    <h4 class="card-title">Purchase History</h4>-->
<!--                    <div class="d-flex">-->
<!--                        <button type="button" class="btn btn-outline-primary btn-icon-text my-2 my-lg-0">-->
<!--                            <i class="mdi mdi-printer text-extra-small btn-icon-prepend"></i>-->
<!--                            Print-->
<!--                        </button>-->
<!--                        <button type="button" class="btn btn-outline-primary btn-icon-text ml-3  my-2 my-lg-0">-->
<!--                            <i class="mdi mdi-email-outline text-extra-small btn-icon-prepend"></i>-->
<!--                            Email-->
<!--                        </button>-->
<!--                        <button type="button" class="btn btn-primary ml-3  my-2 my-lg-0">Generate Report</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="mb-4">-->
<!--                    <span class="pr-2">Sales</span><span class="pr-2"><i class="mdi mdi-chevron-right"></i></span><span>Purchase history</span>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-sm-12">-->
<!--                        <div class="table-responsive">-->
<!--                            <table class="table">-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <th>-->
<!--                                        Product-->
<!--                                    </th>-->
<!--                                    <th>-->
<!--                                        Order ID-->
<!--                                    </th>-->
<!--                                    <th>-->
<!--                                        Date-->
<!--                                    </th>-->
<!--                                    <th>-->
<!--                                        Price-->
<!--                                    </th>-->
<!--                                    <th>-->
<!--                                        Status-->
<!--                                    </th>-->
<!--                                    <th>-->
<!--                                        Action-->
<!--                                    </th>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td class="py-1">-->
<!--                                        <div class="d-flex align-items-center"><img src="admin/images/1.jpg" class="product-icon" alt="image">-->
<!--                                            <div> Reebok Running Shoes</div></div>-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        #4200-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        28 Dec 2019-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        $342.00-->
<!--                                    </td>-->
<!---->
<!--                                    <td>-->
<!--                                        <span class="text-danger">Pending</span>-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        <button class="btn btn-outline-primary btn-rounded">Details</button>-->
<!---->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td class="py-1">-->
<!--                                        <div class="d-flex align-items-center"><img src="admin/images/2.jpg" class="product-icon" alt="image">-->
<!--                                            <div>Puma Women's Shoes</div></div>-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        #4202-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        04 Jan 2019-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        $244.00-->
<!--                                    </td>-->
<!---->
<!--                                    <td>-->
<!--                                        <span class="text-success">Completed</span>-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        <button class="btn btn-outline-primary btn-rounded">Details</button>-->
<!---->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td class="py-1">-->
<!--                                        <div class="d-flex align-items-center"><img src="admin/images/3.jpg" class="product-icon" alt="image"> <div>Acteo Men's Loafers</div></div>-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        #4210-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        09 Jul 2019-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        $575.00-->
<!--                                    </td>-->
<!---->
<!--                                    <td>-->
<!--                                        <span class="text-warning">Shipping</span>-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        <button class="btn btn-outline-primary btn-rounded">Details</button>-->
<!---->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td class="py-1">-->
<!--                                        <div class="d-flex align-items-center"><img src="admin/images/4.jpg" class="product-icon" alt="image">-->
<!--                                            <div>ADL Headphones </div></div>-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        #4232-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        16 May 2019-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        $664.00-->
<!--                                    </td>-->
<!---->
<!--                                    <td>-->
<!--                                        <span class="text-danger">Pending</span>-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        <button class="btn btn-outline-primary btn-rounded">Details</button>-->
<!---->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td class="py-1">-->
<!--                                        <div class="d-flex align-items-center"><img src="admin/images/5.jpg" class="product-icon" alt="image">-->
<!--                                            <div>Vuhom Sunglasses </div></div>-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        #4290-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        22 Feb 2019-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        $123.00-->
<!--                                    </td>-->
<!---->
<!--                                    <td>-->
<!--                                        <span class="text-danger">Pending</span>-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        <button class="btn btn-outline-primary btn-rounded">Details</button>-->
<!---->
<!--                                    </td>-->
<!--                                </tr>-->
<!---->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="row">-->
<!--    <div class="col-md-4 grid-margin grid-margin-xl-0 grid-margin-lg-0 stretch-card">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <h4 class="card-title mb-0">Total Conversion Rate</h4>-->
<!--                <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">-->
<!--                    <h6 class="font-weight-normal">Mar 28 -  Apr 28.2019</h6>-->
<!--                    <button type="button" class="btn btn-outline-primary">Details</button>-->
<!--                </div>-->
<!--                <div class="row mt-4 d-flex align-items-center">-->
<!--                    <div class="col-xl-9 mb-4 mb-sm-0 ">-->
<!--                        <h1 class="font-weight-medium m-0 text-dark">$2345.00 <span class="text-danger text-small font-weight-normal">-11.45% (1.2%)</span></h1>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-xl-3"><canvas id="total-conversion"></canvas></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-md-4 grid-margin grid-margin-xl-0 grid-margin-lg-0 stretch-card">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <h4 class="card-title mb-0">Avg. Order Quantity</h4>-->
<!--                <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">-->
<!--                    <h6 class="font-weight-normal">Mar 28 -  Apr 28.2019</h6>-->
<!--                    <button type="button" class="btn btn-outline-primary">Details</button>-->
<!--                </div>-->
<!--                <div class="row mt-4 d-flex align-items-center">-->
<!--                    <div class="col-xl-9 mb-4 mb-sm-0 ">-->
<!--                        <div class="col-xl-9 ">-->
<!--                            <h1 class="font-weight-medium m-0 text-dark">4,356 <span class="text-success text-small font-weight-normal">+54.34 (1.2%)</span></h1>-->
<!--                        </div>-->
<!---->
<!--                        <div class="col-xl-3"><canvas id="avrg-order-quantity"></canvas></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-md-4 grid-margin grid-margin-xl-0 grid-margin-lg-0 stretch-card">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <h4 class="card-title mb-0">Percentage of licenses used</h4>-->
<!--                <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">-->
<!--                    <h6 class="font-weight-normal">Mar 28 -  Apr 28.2019</h6>-->
<!--                    <button type="button" class="btn btn-outline-primary">Details</button>-->
<!--                </div>-->
<!--                <div class="row mt-4 d-flex align-items-center">-->
<!--                    <div class="col-xl-9">-->
<!--                        <h1 class="font-weight-medium m-0 text-dark">45.34% <span class="text-success text-small font-weight-normal">+24.18 (2.6%)</span></h1>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-xl-3"><canvas id="percentage"></canvas></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
