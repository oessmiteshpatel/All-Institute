<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aere</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php
include 'side_bar.php';
include 'header.php';
include 'connect.php';
include 'functions.php';




$error = false;

if (isset($_POST['save'])) {

    // clean user inputs to prevent sql injectionfs
    $Title = trim($_POST['Title']);
    $Title = strip_tags($Title);
    $Title = htmlspecialchars($Title);

    $OfferedBy = trim($_POST['OfferedBy']);
    $OfferedBy = strip_tags($OfferedBy);
    $OfferedBy = htmlspecialchars($OfferedBy);

    $Summary = trim($_POST['Summary']);
    $Summary = strip_tags($Summary);
    $Summary = htmlspecialchars($Summary);

    $StartDate = trim($_POST['StartDate']);
    $StartDate = strip_tags($StartDate);
    $StartDate = htmlspecialchars($StartDate);

    $EndDate = trim($_POST['EndDate']);
    $EndDate = strip_tags($EndDate);
    $EndDate = htmlspecialchars($EndDate);

    $Location = trim($_POST['Location']);
    $Location = strip_tags($Location);
    $Location = htmlspecialchars($Location);



    $Time = trim($_POST['Time']);
    $Time = strip_tags($Time);
    $Time = htmlspecialchars($Time);

    $IntendedAudience = trim($_POST['IntendedAudience']);
    $IntendedAudience = strip_tags($IntendedAudience);
    $IntendedAudience = htmlspecialchars($IntendedAudience);

    $MeetingType = trim($_POST['MeetingType']);
    $MeetingType = strip_tags($MeetingType);
    $MeetingType = htmlspecialchars($MeetingType);

    $CourseFees = trim($_POST['CourseFees']);
    $CourseFees = strip_tags($CourseFees);
    $CourseFees = htmlspecialchars($CourseFees);

    $TotalCapacity = trim($_POST['TotalCapacity']);
    $TotalCapacity = strip_tags($TotalCapacity);
    $TotalCapacity = htmlspecialchars($TotalCapacity);

    $NoofUserRegistered = trim($_POST['NoofUserRegistered']);
    $NoofUserRegistered = strip_tags($NoofUserRegistered);
    $NoofUserRegistered = htmlspecialchars($NoofUserRegistered);

    $Instructor = trim($_POST['Instructor']);
    $Instructor = strip_tags($Instructor);
    $Instructor = htmlspecialchars($Instructor);

    $CreatedBy = trim($_POST['CreatedBy']);
    $CreatedBy = strip_tags($CreatedBy);
    $CreatedBy = htmlspecialchars($CreatedBy);

    $CreatedOn = trim($_POST['CreatedOn']);
    $CreatedOn = strip_tags($CreatedOn);
    $CreatedOn = htmlspecialchars($CreatedOn);

    $ModifiedBy = trim($_POST['ModifiedBy']);
    $ModifiedBy = strip_tags($ModifiedBy);
    $ModifiedBy = htmlspecialchars($ModifiedBy);

    $ModifiedOn = trim($_POST['ModifiedOn']);
    $ModifiedOn = strip_tags($ModifiedOn);
    $ModifiedOn = htmlspecialchars($ModifiedOn);

    if (!$error) {

        //$query = "INSERT INTO tbl_emp(user_name ,first_name ,last_name,company,email,group_id) VALUES('$user_name','$first_name','$last_name','$company','$email','$group_id')";
        $query = "INSERT INTO `tblcourse`(Title,OfferedBy,Summary,StartDate,EndDate,Location,Time,IntendedAudience,MeetingType,CourseFees,TotalCapacity,NoofUserRegistered,Instructor,CreatedBy,CreatedOn,ModifiedBy,ModifiedOn) VALUES('$Title','$OfferedBy','$Summary','$StartDate','$EndDate','$Location','$Time','$IntendedAudience','$MeetingType','$CourseFees','$TotalCapacity','$NoofUserRegistered','$Instructor','$CreatedBy',now(),'$ModifiedBy',now())";
        $res = mysql_query($query);



        if ($res) {
            echo 'success';
            /*
              $errTyp = "success";
              $errMSG = "Successfully registered, you may login now";
              unset($fname);
              unset($mname);
              unset($lname);
              unset($email);
              unset($phone);
              unset($compay_id);image1
              unset($company);
              unset($address1);

              unset($address2);
              unset($city);
              unset($state);
              unset($agency_id);
              unset($agency);
              unset($ability);
              unset($a_date);
              unset($a_time);
              unset($salary);
              unset($s_date);
              unset($e_salary);
              unset($visa);
              unset($note);
             * 
             */
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";
        }
    }
}
?>

<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

                <script src="js/index.js"></script>
                <form name="form_register" id='form_register' method="post" class="my_frm"  enctype="multipart/form-data" >

                    <table class="table">

                        <tr>
                            <th width="30%">* Title :</th>

                            <td><input type="text" name="Title" id="Title" class="form-control" placeholder="Title"/></td>
                        </tr>
                        <tr>
                            <th width="30%">* Offered By :</th>

                            <td><input type="text" name="OfferedBy" id="OfferedBy" class="form-control" placeholder="Offered By"/></td>
                        </tr>
                        <tr>
                            <th>Description :</th>

                            <td>
                                <textarea  name="Summary" id="area1" style="width:90%;height:200px;"  class="form-control" placeholder="Description" /></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>*  Start Date : </th>

                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" name="StartDate" id="StartDate"  class="form-control" placeholder=" Start Date "/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>* End Date : </th>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" name="EndDate" id="EndDate"  class="form-control" placeholder=" End Date "/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th> * Location :</th>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                    <input type="text" name="Location" id="Location" class="form-control" placeholder="Location"/>
                                </div>
                                
                            </td>
                        </tr>


                        <tr>
                            <th>* Time :</th>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                    <input type="text" name="Time" id="Time"  class="form-control" placeholder="Time"/>
                                </div>
                                
                            </td>
                        </tr>

                        <tr>
                            <th>* Intended Audience:</th>

                            <td><input type="text" name="IntendedAudience" id="IntendedAudience"  class="form-control" placeholder="Intended Audience"/></td>
                        </tr>


                        <tr>
                            <th>* Meeting Type:</th>

                            <td><input type="text" name="MeetingType" id="MeetingType"  class="form-control" placeholder="Meeting Type"/></td>
                        </tr>
                        <tr>
                            <th>* Course Fees :</th>

                            <td><input type="text" name="CourseFees" id="CourseFees" class="form-control" placeholder="Course Fees"/></td>
                        </tr>

                        <tr>
                            <th>* Total Capacity:</th>

                            <td><input type="text" name="TotalCapacity" id="TotalCapacity" class="form-control" placeholder="Total Capacity"/></td>
                        </tr>
                        <tr>
                            <th>* No of User Registered :</th>

                            <td><input type="text" name="NoofUserRegistered" id="NoofUserRegistered"  class="form-control" placeholder="No of User Registered "/></td>
                        </tr>


                        <tr>
                            <th>* Instructor :</th>

                            <td><input type="text" name="Instructor" id="Instructor"  class="form-control" placeholder="Instructor"/></td>
                        </tr>

                        <tr>
                            <th>* Created By :</th>

                            <td><input type="text" name="CreatedBy" id=""  class="form-control" placeholder="Created By"/></td>
                        </tr>

                        <tr>
                            <th>* Modified By :</th>

                            <td>

                                <input type="text" name="ModifiedBy" id="ModifiedBy"  class="form-control" placeholder="Modified By"/></td>
                        </tr>

                        <tr>
                            <th>&nbsp;</th>

                            <td><input type="submit" name="save" class="btn btn-warning"  value="Save" /></td>

                        </tr>
                    </table>
                </form>



            </div>

        </div>

    </div>


</div>
<!-- END PAGE CONTENT WRAPPER -->                                



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


<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>

<script>
    $(function () {
        $("#StartDate").datepicker();
        $("#EndDate").datepicker();
    });
</script>

<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript" src="nicEdit-latest.js"></script>
<script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function () {

      new nicEditor({fullPanel: true, maxHeight: 200}).panelInstance('area1');
  });
  //]]>
</script>

<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->



</body>
<script type="text/javascript">
//<![CDATA[
    $(document).ready(function ()

    {


        $("#form_register").validate(
                {

                    rules: {

                        'Title': {

                            required: true,
                            alphanumeric:true,
                            minlength: 3

                        },

                        'OfferedBy': {

                            required: true,
                            alphanumeric:true,   
                            minlength: 3,

                        },
                        
                        'StartDate': {

                            required: true,
                            date: true

                        },
                        'EndDate': {

                            required: true,
                            date: true

                        },
                        'Location': {

                            required: true,

                            minlength: 3

                        },
                   'Time': {

                            required: true,

                        }, 
                      
                 'IntendedAudience': {

                            required: true,
                            alphanumeric:true,   
                            minlength: 3,

                        },
                        'MeetingType': {

                            required: true,
                            alphanumeric:true,   

                        }, 
                        'CourseFees': {

                            required: true,
                            number:true,
                            maxlenght:3,
                        }, 
                        'TotalCapacity': {

                            required: true,
                             number:true,
                             maxlenght:3,

                        }, 

                    'NoofUserRegistered': {

                            required: true,
                            number:true,
                            maxlenght:3,

                        }, 
                        
                        'Instructor': {

                            required: true,
                            alphanumeric:true,
                            maxlenght:50,

                        }, 
                        
                        
                        
                        

                        'date': {

                            required: true,

                            date: true

                        },

                        
                    },

                    messages: {

                        'Title': {

                            required: "The title is mandatory!",

                            minlength: "Choose a title of at least 3 letters!",

                        },
                        
                        'OfferedBy': {

                            required: "The offered by is mandatory!",

                            minlength: "Choose a Offered By of at least 3 letters!",

                        },
                        'StartDate': {

                            required: "The start date by is mandatory!",

                            

                        },
                        
                        'EndDate': {

                            required: "The end date by is mandatory!",

                            

                        },
                        
                        'Location': {

                            required: "The location by is mandatory!",

                            minlength: "Choose a Location By of at least 3 letters!",

                        },
                        
                        'Time': {

                            required: "The time by is mandatory!",

                            

                        },
                        'IntendedAudience': {

                            required: "The intended audience by is mandatory!",

                            minlength: "Choose a IntendedAudience By of at least 3 letters!",

                        },
                        
                        'MeetingType': {

                            required: "The meeting type by is mandatory!",

                            

                        },

                       
                        'CourseFees': {

                            required: "The course fees by is mandatory!",

                            

                        },
                        'TotalCapacity': {

                            required: "The total capacity by is mandatory!",

                            

                        },
                        
                        'NoofUserRegistered': {

                            required: "The no of user registered by is mandatory!",

                        },
                        
                        'Instructor': {

                            required: "The instructor by is mandatory!",

                        },
                
                'username': {

                            required: "The username field is mandatory!",

                            minlength: "Choose a username of at least 4 letters!",

                            username_regex: "You have used invalid characters. Are permitted only letters numbers!",

                            remote: "The username is already in use by another user!"

                        },

                        'email': {

                            required: "The Email is required!",

                            email: "Please enter a valid email address!",

                            remote: "The email is already in use by another user!"

                        },

                        'web': {

                            required: "The Web Address is required!"

                        },

                        'pass1': {

                            required: "The password field is mandatory!",

                            minlength: "Please enter a password at least 8 characters!"

                        },

                        'pass2': {

                            equalTo: "The two passwords do not match!"

                        }

                    }

                });

    });

//]]>
</script>

</html>

<?php ob_end_flush(); ?>
