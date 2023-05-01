


<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/sidemenu');?>



                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                   
                                   <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Main/saveform');?>">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="radio">
  <label><input type="radio" name="gender" value="male">male</label>
</div>
<div class="radio">
  <label><input type="radio" name="gender" value="female">Female</label>
</div>
<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" name="country" id="sel1">
    <option value="">select the country</option>
    <option value="india">india</option>
    <option value="china">china</option>
    <option value="jappan">jappan</option>
  </select>
</div>
<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment"></textarea>
</div>
  <div class="form-group">
      <label for="pwd">IMAGES:</label>
      <input type="file" class="form-control" id="pwd" name="image">
    </div>

<button type="submit" class="btn btn-default">Submit</button>
  </form>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="<?php echo base_url();?>assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="<?php echo base_url();?>assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="<?php echo base_url();?>assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="<?php echo base_url();?>assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="<?php echo base_url();?>assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="<?php echo base_url();?>assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/SmoothScroll.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="<?php echo base_url();?>assets/pages/widget/amchart/gauge.js"></script>
    <script src="<?php echo base_url();?>assets/pages/widget/amchart/serial.js"></script>
    <script src="<?php echo base_url();?>assets/pages/widget/amchart/light.js"></script>
    <script src="<?php echo base_url();?>assets/pages/widget/amchart/pie.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="<?php echo base_url();?>assets/js/pcoded.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js "></script>
</body>

</html>
