


<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/sidemenu');?>



                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add product</button>  


                                                                      <!-- Modal -->
                                <div id="myModal" class="modal fade" role="dialog">
                                  <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                     
                                      <div class="modal-body">
                                    <form method="post" id="contactform">
                                         <input type="text" class="form-control" id="siv" placeholder="Enter email" name="user">
                                 <div class="form-group">
                                  <label for="email">Name:</label>
                                  <input type="text" class="form-control" id="nam" placeholder="Enter email" name="name">
                                </div>
                                  <div class="form-group">
                                  <label for="email">city:</label>
                                  <input type="text" class="form-control" id="cit" placeholder="Enter city" name="city">
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
                                    <th>S.No</th>
                                    <th>name</th>
                                    <th>city</th>
                                    <th>Edit</th>
                                     <th>Delete</th>


                                    
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
                                     <td><?php echo $loop['city']?></td>
                                     <td>
                                        <button type="button" onclick="editform(<?php echo $loop['siva_id']?>)"><i class="ti-pencil-alt" style="font-size:20px;"></i></button>
                                    </td>
                                    <td>
                                        <button type="button" onclick="deleteform(<?php echo $loop['siva_id']?>)"><i class="ti-trash" style="font-size:20px;"></i></button>
                                    </td>
                                      
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

$('#contactform').on('submit', function(e){
        //var base=base_url+'Product_base/add_experience_indication';
        var unit=$('#contactform').serialize();
          //alert(unit);
          //exit;
        e.preventDefault();
        $.ajax({
        url:'<?php echo base_url('Submain/productform')?>',
        type:'POST',
        dataType:'JSON',
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

function editform(id)
{
    alert(id);
     $.ajax({
        url:'<?php echo base_url('Submain/productedit/')?>'+id,
        type:'POST',
        dataType:'JSON',
        
        success:function(res)
        {
       
        alert(res[0]['name']);
        $('#nam').val(res[0]['name']);
         $('#cit').val(res[0]['city']);
        $('#siv').val(res[0]['siva_id']);

     $('#myModal').modal('show');
        //$('#unit_name').val('');
       // location.reload();
        }
        });
}

function deleteform(id)
{
    alert(id);
     $.ajax({
        url:'<?php echo base_url('Submain/deletedata/')?>'+id,
        type:'POST',
        dataType:'JSON',
        
        success:function(res)
        {
       
        alert('data removed');
     
        location.reload();
        }
        });
}

</script>