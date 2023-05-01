


<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/sidemenu');?>



                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add student</button>  


                                                                      <!-- Modal -->
                                <div id="myModal" class="modal fade" role="dialog">
                                  <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                     
                                      <div class="modal-body">


                              <form method="post" enctype="multipart/form-data" id="studentform">    <input type="text" class="form-control" id="std" placeholder="Enter " name="student">        
                                 <div class="form-group">
                                  <label for="email">Name:</label>
                                  <input type="text" class="form-control" id="nam" placeholder="Enter email" name="name">
                                </div>
                                 <label for="email">Gender:</label>
                                <div class="checkbox">
                                  <label><input type="checkbox" name="gender" id="gen" value="male">  Male</label>
                                </div>
                                <div class="checkbox">
                                  <label><input type="checkbox" name="gender" id="gen" value="female">  Female</label>
                                </div>
                              
                              <div class="form-group">
                              <label for="sel1"> Select the Country:</label>
                              <select class="form-control" name="country" id="coun">
                                <option value="">Select the country</option>
                                <option value="india">india</option>
                                <option value="chennai">chennai</option>
                                <option value="mumbai">mumbai</option>
                              </select>
                            </div>
                             <div class="form-group">
                              <label for="comment">Comment:</label>
                              <textarea class="form-control" rows="5" name="comment" id="com"></textarea>
                            </div>
                                              
                                <button type ="submit">submit </button>
                              </form>
                                      </div>
                                      
                                    </div>

                                  </div>
                                </div>     
                                <!-- task, page, download counter  start -->
                                 <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>s.no</th>
                                    <th>name</th>
                                    <th>gender</th>
                                    <th>country</th>
                                    <th>comment</th>
                                     <th>Edit</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $x=1;
                                    foreach($list as $loop)
                                    {
                                    ?>
                                  <tr>
                                    <td><?php echo $x++;?></td>
                                    <td><?php echo $loop['name']?></td>
                                    <td><?php echo $loop['gender']?></td>
                                    <td><?php echo $loop['country']?></td>
                                    <td><?php echo $loop['comment']?></td>
                                    <td><button onclick="studentedit(<?php echo $loop['student_id']?>)">Edit</button></td>
                                   
                                  </tr>
                                  <?php
                              }
                                  ?>
                            
                                </tbody>
                              </table>      
                                                              
                                  
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
<?php $this->load->view('layout/footer');?>
<script>
   
   $('#studentform').on('submit', function(e){
        //var base=base_url+'Product_base/add_experience_indication';
        //alert(base)
        var unit=$('#studentform').serialize();
          alert(unit);
        e.preventDefault();
        $.ajax({
        url:'<?php echo base_url('Supermain/studentform')?>',
        type:'POST',
        dataType:'JSON',
      //  mimeType:"multipart/form-data",
        data:unit,
        success:function()
        {
       
        alert('added successfully');
        $('#myModal').modal('hide');
        //$('#unit_name').val('');
        location.reload();
        }
        });
        });

function studentedit(id)
{
    alert(id);
     $.ajax({
        url:'<?php echo base_url('Supermain/studentedit/')?>'+id,
        type:'POST',
        dataType:'JSON',
        
        success:function(res)
        {
       
        alert(res[0]['name']);
        $('#nam').val(res[0]['name']);
        $('#gen').val(res[0]['gender']);
         $('#coun').val(res[0]['country']);
        $('#com').val(res[0]['comment']);
         $('#std').val(res[0]['student_id']);

     $('#myModal').modal('show');
        //$('#unit_name').val('');
       // location.reload();
        }
        });
}




</script>