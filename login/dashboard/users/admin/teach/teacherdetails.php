<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/school/db/db.php";
$db = new DB();
// This is dashboard

if (!isset($_SESSION["id"])) {
    header("location:/school/index.php");

}

if ($_SESSION["uid"] == 0) {

    ?>

<?php include '../../../header.php'?>

<style>

body .no-padding {
padding: 0;
}
.widget-area {
background-color: #fff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
float: left;
margin-top: 30px;
padding: 25px 30px;
position: relative;
width: 100%;
}
.status-upload {
background: none repeat scroll 0 0 #f5f5f5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
float: left;
width: 100%;
}
.status-upload form {
float: left;
width: 100%;
}
.status-upload form textarea {
background: none repeat scroll 0 0 #fff;
border: medium none;
-webkit-border-radius: 4px 4px 0 0;
-moz-border-radius: 4px 4px 0 0;
-ms-border-radius: 4px 4px 0 0;
-o-border-radius: 4px 4px 0 0;
border-radius: 4px 4px 0 0;
color: #777777;
float: left;
font-family: Lato;
font-size: 14px;
height: 142px;
letter-spacing: 0.3px;
padding: 20px;
width: 100%;
resize:vertical;
outline:none;
border: 1px solid #F2F2F2;
}

.status-upload ul {
float: left;
list-style: none outside none;
margin: 0;
padding: 0 0 0 15px;
width: auto;
}
.status-upload ul > li {
float: left;
}
.status-upload ul > li > a {
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #777777;
float: left;
font-size: 14px;
height: 30px;
line-height: 30px;
margin: 10px 0 10px 10px;
text-align: center;
-webkit-transition: all 0.4s ease 0s;
-moz-transition: all 0.4s ease 0s;
-ms-transition: all 0.4s ease 0s;
-o-transition: all 0.4s ease 0s;
transition: all 0.4s ease 0s;
width: 30px;
cursor: pointer;
}
.status-upload ul > li > a:hover {
background: none repeat scroll 0 0 #606060;
color: #fff;
}
.status-upload form button {
border: medium none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
}
.dropdown > a > span.green:before {
border-left-color: #2dcb73;
}
.status-upload form button > i {
margin-right: 7px;
}

.buttonSpace{

 margin-right: 10px;

}


</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div class="col-sm-6">
            <h1 class="m-0">Teachers Details sections</h1>
            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addteacher">
           Add new Teacher
        </button> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content" >

<div class="container border border-primary">

<?php
$sql = "select id, email from school_users where uid = 1";
    $result = $db->query($sql);
    ?>

  <br>
Select Teacher Gmail :===>
<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="teachernameid" onchange="getTeacherData(this);">
  <option selected disabled  >Select Teachers gmail </option>
  <?php while ($row = $result->fetch_assoc()) {?>
  <option value="<?php echo $row["id"]; ?>"><?php echo $row["email"]; ?></option>
  <?php }
    $result->free();?>
</select>
   <!-- Teacher Profile Details  -->
<div  id="teacherdetailstab"class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img id="teacherprofileimage" class="rounded mx-auto d-block" width="200px" height="250px" src="#"><span class="font-weight-bold" id="teachersname" value=""></span><span class="text-black-50" id="teachersemail"></span><span> </span></div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label><input disabled type="text" id="teachername" class="form-control" placeholder="first name" value=""></div>
                    <!-- <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div> -->
                </div>
                <div class="col-md-12">
                    <div class=""><label class="labels">Mobile Number</label><input disabled type="text" class="form-control" id="teacherphone" placeholder="enter phone number" value=""></div>
                    <div class="form-group">
                   <label for="exampleInputEmail1">Gender </label>
                      <div class="form-check">
                        <input disabled class="form-check-input" type="radio" name="teachergender" value="1" id="malechecked" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                          <input disabled class="form-check-input" type="radio" name="teachergender" value="2" id="femalechecked" >
                          <label class="form-check-label" for="flexRadioDefault2">
                            Female
                          </label>
                      </div>
                   </div>
                   </div>
                   <div class="col-md-12"><label class="labels">Father Name </label><input disabled  type="text" id="teacherfathername" class="form-control" placeholder="enter address line 1" value=""></div>
                   <div class="col-md-12"><label class="labels">mother Name </label><input disabled type="text" id="teachermothername" class="form-control" placeholder="enter address line 1" value=""></div>
                   <div class="col-md-12"><label class="labels">Sellary </label><input disabled type="text" id="teachersellary" class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" disabled id="teacherstate" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" disabled class="form-control" placeholder="country" value="Bangladesh"></div>
                    <div class="col-md-6"><label class="labels">Religion</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <!-- <div class="col-md-3">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div> -->
    </div>
</div>

<script>
  $("#teacherdetailstab").hide();
  function getTeacherData(teacher)
  {
    $("#teacherdetailstab").show();
    var teacherid = teacher.value;
    $.ajax({
        url : "../action.php",
        type : 'post',
        data : {
          sendProfileid:teacherid,
          },

      success: function (data,status)
      {

              var fetchuserid2  = JSON.parse(data);
              $("#teacherprofileimage").attr("src","/school/images/"+fetchuserid2.profileimage);
              $("#teachersname").text(fetchuserid2.name);
              $("#teachername").val(fetchuserid2.name);
              $("#teacherphone").val(fetchuserid2.phone);
              if(fetchuserid2.gender ==1 ){$("#malechecked").prop("checked", true);}else{$("#femalechecked").prop("checked", true);}
              $("#teacherfathername").val(fetchuserid2.fathername);
              $("#teachermothername").val(fetchuserid2.mothername);
              $("#teachersellary").val(fetchuserid2.sellary);
              $("#updateteacherid").val(fetchuserid2.id);
              $("#teachersemail").text(fetchuserid2.email);
              $("#teachersname").val(fetchuserid2.name);
              $("#updatelastnameid").val(fetchuserid2.profileimage);
              $("#teacherstate").val(fetchuserid2.location);
             ;


      }


   });

  }

</script>

</div>
 <!-- Teacher Profile Details  End  -->


<!-- Teacher Add More Details Tab start  -->
 <div class="modal fade" id="addteacherdetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Teacher Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

  <form id="teacherupdatesubmitform">
    <input  type="hidden" name="updateteacherid" id="updateteacherid"/>
   <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="updateteacheremail" id="updateteacheremail" aria-describedby="emailHelp" Name placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Enter Your Email Id </small>
   </div>

   <input type="submit" class="btn btn-success" name="submit"  value="submit" />
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End  -->

</section>

<?php include '../../../fotter.php'?>

<?php }?>

<!-- <br>
        <div class="row">
            <div class="col">

            <div class="container">
            <div class="row">
               <h3><u> Teacher's Addtional Details</u> </h3>
            </div>
            <div class="row">
               <button class="btn btn-primary buttonSpace "  data-toggle="modal" data-target="#addteacherdetails" > Add Teacher More Details</button>
               <button class="btn btn-primary buttonSpace  "> Add Teacher Selary Deaits</button>
               <button class="btn btn-primary buttonSpace  "> Add Teacher Teaching Subject Details</button>

            </div>
         </div>

            </div>
        </div>
      <br> -->