<title>ALL-Institute | Instructor List</title>
<?php
include 'side_bar.php';
include 'header.php';
include 'connect.php';


$query = "SELECT * FROM `tblmstinstructor` ";

$result = mysql_query($query)or die(mysql_error());
?>

<center><div class="alert alert-danger" id="rec_delete" style="width:1200px;display:none; margin:0px 0px 10px 0px; fonnt-size:20px"><strong>Your record was deleted! </strong> 
            </div>  
						</center>
<div class="panel panel-default">
    <div class="panel-heading">                                
        <h3 class="panel-title"><b>List of Instructors</b> </h3>   

        <div class="btn-group pull-right">
            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export All Instructors</button>
            <ul class="dropdown-menu">
                
               
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'excel', escape: 'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
                
            </ul>
        </div> 


    </div>
    <div class="panel-body">
        <table id="customers2" class="table datatable">
            <thead>
                <tr>
                    <th width="10">InsId</th>
                    <th width="5">Instructor Name </th>

                    <th width="330">About</th>
                   
					

					<th width="100">Is Active?</th>
                    <th width="110">Action</th>



                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;

                while ($row = mysql_fetch_array($result)) 
				{

                   
					//$D=date("H:i:s", strtotime($row['StartTime']));
                    ?>
                    <tr>
                       <?php //echo $i; ?>
						<td><?php echo $row['InsId']; ?></td>
                        <td width="280"><?php echo $row['InsName']; ?></td>

                        <?php //$sdate = date_create($row['StartDate']); ?>
                       <!-- <td class="text-center"><?php //echo date_format($sdate, 'm/d/Y') ?></td>

                        <?php //$edate = date_create($row['EndDate']); ?>
                        <td class="text-center"><?php //echo date_format($edate, 'm/d/Y') ?></td>
						 <td class="text-center"><?php //echo $D; ?></td>
                        <td width="100" class="text-center"><?php //echo $row['Location']; ?></td> -->
                       


                        


                        <td><?php echo $row['About']; ?></td>
						<td>  
                           <?php
                        if($row['IsActive']==1)
                    {
                        echo "Yes";
                    }
                    if($row['IsActive']==0)
                    {
                        echo "No";
                    }
?>
                        </td>
						
						
						<td>
                           
                            <a title="Edit"  href="edit_Ins.php?InsId=<?php echo$row['InsId']; ?>" style="margin:0px 10px 0px 0px">
							<i class="fa fa-pencil"></i></a><label> | </label>
							

                            <!-- <a class="simpleConfirm" title="Delete" href="delete.php?CourseID=<?php //echo $row['CourseID']; ?>" ><i class="fa fa-minus-circle"></i></a>-->

							

							<button title="Delete"type="button" class="btn-md btn-icon btn-link p4" data-toggle="modal" data-target="#myModal" onClick="delete1(<?php echo $row['InsId']; ?>)"> <i class="fa fa-trash-o text-danger" aria-hidden="true"></i></button>
							

						</td>

                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document" style="margin:20% auto;">
        <div class="modal-content">
            <div class="modal-body" >
              	<p>Are you sure you want to delete this record?</p>
              </div>
              <div class="modal-footer text-center">
              	<!--<button type="button" class="next_btn" id="yes_btn" name="update">Yes</button>-->
				<center><button type="button" class="btn-md btn-icon btn-link p4" id="yes_btn"><a href="" id="deleteYes" value="Yes"  class="btn btn-success">Yes</a></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button></center>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT -->
</div>
<?php
include 'footer.php';
?>
<!-- START PLUGINS -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>  



<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>    


<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->



<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>    
<script src="js/jquery.bvalidator.js"></script>
<script src="js/jquery.bvalidator-yc.js"></script>








<!-- <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio> -->
<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->


<script>
$(document).ready(function () {
	if (window.location.href.indexOf('view_Instructor.php#rec_delete') > -1) 
	{
		//alert('found it');
		$('#rec_delete').attr('style','display:inline-block;');
		setTimeout(function(){ window.location.href='view_Instructor.php'; }, 3000);
	}
});
function delete1(id)
{ //alert(id);
	
	$('#deleteYes').attr('href','delete_ins.php?InsId='+id);
	
}




       $('#customers2').dataTable( {
    "oLanguage": {
      "sLengthMenu": "Show _MENU_ Of Instructors",
      "sInfo": "Showing _START_ to _END_ of _TOTAL_ Instructors"
    }
});
    
            // $(".simpleConfirm").confirm();
			
			
			
			
			
            
</script>
<script>
setTimeout(function() {
	$('#delete_rec').click(function () {
   $("#rec_delete").fadeOut('hide');
});

}, 10000);

		
					
</script>
</body>
</html>
