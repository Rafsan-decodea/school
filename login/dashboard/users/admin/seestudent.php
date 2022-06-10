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

<?php include '../../header.php'?>

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
color: #fff;
float: right;
font-family: Lato;
font-size: 14px;
letter-spacing: 0.3px;
margin-right: 9px;
margin-top: 9px;
padding: 6px 15px;
}
.dropdown > a > span.green:before {
border-left-color: #2dcb73;
}
.status-upload form button > i {
margin-right: 7px;
}

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div class="col-sm-6">
            <h1 class="m-0">Studnet Section</h1>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addteacher">
           Add new Student
        </button>
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

<section class="content">

<!-- Modal For adding Teacher -->
<div class="modal fade" id="addteacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

  <form id="studentaddsbmitform">
   <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="teacheremail" id="emailid" aria-describedby="emailHelp" Name placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Enter Your Email Id </small>
   </div>
   <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="teacherpassword" class="form-control" id="passwordid" placeholder="Password">
   </div>
   <div class="form-group">
      <label for="exampleInputPassword1">Mobile</label>
      <input type="text" name="teachermobile" class="form-control" id="mobilenumberid" placeholder="mobilenumber">
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Frist Name </label>
      <input type="text" class="form-control" name="teachername" id="fristnameid" aria-describedby="emailHelp" Name placeholder="Fristname">
      <small id="emailHelp" class="form-text text-muted">Enter Frist name </small>
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Image </label>
      <input id="upload_file" type="file" accept="image/*" onchange="loadFile(event)" name="teacherimage" />
      <small id="emailHelp" class="form-text text-muted">Enter Image </small>
      <img id="output" height="200" width="200" class="" src="#" alt="your image" />
      <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<!-- Show Image Using Javascript  -->
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Father Name</label>
      <input type="text" class="form-control" name="teacherfathername" id="lastnameid" aria-describedby="emailHelp" Name placeholder="Lastname">
      <small id="emailHelp" class="form-text text-muted">Enter Your Last Name</small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Mother Name</label>
      <input type="text" class="form-control" name="teachermothername" id="lastnameid" aria-describedby="emailHelp" Name placeholder="Lastname">
      <small id="emailHelp" class="form-text text-muted">Enter Your Last Name</small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">netLocation</label>
      <input type="text" class="form-control" name="teacherlocation" id="locationid" aria-describedby="emailHelp" Name placeholder="location">
      <small id="emailHelp" class="form-text text-muted">Enter Location </small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Sellary</label>
      <input type="text" class="form-control" name="teachersellary" id="locationid" aria-describedby="emailHelp" Name placeholder="Sallery">
      <small id="emailHelp" class="form-text text-muted">Sellary </small>
   </div>

   <input type="submit" class="btn btn-success" name="submit" value="submit" />
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End  -->

<!-- Script TeacherAdding Start -->

<script>

         $(document).ready(function(){
                     $("#studentaddsubmitform").on("submit",function(e){

                        e.preventDefault();

                        var formData = new FormData(this);

                        $.ajax({

                           url : "action.php",
                           type: "POST",
                           data : formData,
                           contentType: false,
                           processData: false,
                           success:function(data)
                           {
                          // alert(data);
                             toastr.success(" Adding Student Success ");


                           }
                        })


                     })
                  })


</script>
<!-- Script Teacher Adding Stop -->

<?php

    $sql = "select * from school_users where uid = 1";
    $result = $db->query($sql);

    ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">serial</th>
      <th scope="col">image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Father Name </th>
      <th scope="col">Mother Name </th>
      <th scope="col">phone </th>
      <th scope="col">location</th>
      <th scope="col">Entry Date </th>
      <th scope="col">Action </th>
    </tr>
  </thead>
  <tbody>


  </tbody>
</table>

<script>
  function confromDelete(profileid)
 {

  var result = confirm("Are You Want to Delete this "+profileid+" ?");
  if(result)
  {
    Delete(profileid)
  }
  else
  {
    toastr.warning("Not Delete Teacher ");
  }

 }

 function Delete(profileid)
  {

    $.ajax({
        url : "action.php",
        type : 'post',
        data : {
              profileidSend:profileid,
          },

      success: function (data,status)
      {


          toastr.info("Please reload The Page For See Effect");
          toastr.success("Delete Teacher  Successfully ");


      }


   });

  }


</script>


<!-- Modal For Edit Teacher  -->
<div class="modal fade" id="editteacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Teacher</h5>
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
   <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="updateteacherpassword" class="form-control" id="updateteacherpassword" placeholder="Password">
   </div>
   <div class="form-group">
      <label for="exampleInputPassword1">Mobile</label>
      <input type="text" name="updateteachermobile" class="form-control" id="updateteachermobile" placeholder="mobilenumber">
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Frist Name </label>
      <input type="text" class="form-control" name="updateteachername" id="updateteachername" aria-describedby="emailHelp" Name placeholder="Fristname">
      <small id="emailHelp" class="form-text text-muted">Enter Frist name </small>
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Image </label>
      <input id="updateteacherimage" type="file" accept="image/*" onchange="loadFilee(event)" name="updateteacherimage" />
      <small id="emailHelp" class="form-text text-muted">Enter Image </small>
      <img id="output2" height="200" width="200" class="" src="#" alt="your image" />
      <script>
  var loadFilee = function(event) {
    var output = document.getElementById('output2');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<!-- Show Image Using Javascript  -->
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Father Name</label>
      <input type="text" class="form-control" name="updateteacherfathername" id="updateteacherfathername" aria-describedby="emailHelp" Name placeholder="Lastname">
      <small id="emailHelp" class="form-text text-muted">Enter Your Last Name</small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Mother Name</label>
      <input type="text" class="form-control" name="updateteachermothername" id="updateteachermothername" aria-describedby="emailHelp" Name placeholder="Lastname">
      <small id="emailHelp" class="form-text text-muted">Enter Your Last Name</small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Location</label>
      <input type="text" class="form-control" name="updateteacherlocation" id="updateteacherlocation" aria-describedby="emailHelp" Name placeholder="location">
      <small id="emailHelp" class="form-text text-muted">Enter Location </small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Sellary</label>
      <input type="text" class="form-control" name="updateteachersellary" id="updateteachersellary" aria-describedby="emailHelp" Name placeholder="Sallery">
      <small id="emailHelp" class="form-text text-muted">Sellary </small>
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

<!-- Fetch Teacher Data Script  -->
<script>

     function FetchData(profileid)
     {

      $.ajax({

            url : "action.php",
            type: "POST",
            data : {
              sendProfileid: profileid,
            },
            success:function(data)
            {

              var fetchuserid  = JSON.parse(data);
              $("#updateteacherid").val(fetchuserid.id);
              $("#updateteacheremail").val(fetchuserid.email);
              $("#updateteacherpassword").val(fetchuserid.password);
              $("#updateteachermobile").val(fetchuserid.phone);
              $("#updateteachername").val(fetchuserid.name);
              $("#updatelastnameid").val(fetchuserid.profileimage);
              $("#output2").attr("src","/school/images/"+fetchuserid.profileimage);
              $("#updateteacherfathername").val(fetchuserid.fathername);
              $("#updateteachermothername").val(fetchuserid.mothername);
              $("#updateteacherlocation").val(fetchuserid.location);
              $("#updateteachersellary").val(fetchuserid.sellary);

            }
        });
     }

</script>

<!-- Teacher Update Script  -->
<script>

         $(document).ready(function(){
                     $("#teacherupdatesubmitform").on("submit",function(e){

                        e.preventDefault();

                        var formData = new FormData(this);

                        $.ajax({

                           url : "action.php",
                           type: "POST",
                           data : formData,
                           contentType: false,
                           processData: false,
                           success:function(data)
                           {
                             //alert(data);
                             toastr.success("Update Data Success ");


                           }
                        })


                     })
                  })


</script>
<!-- Teacher Update End  -->

</section>

<?php include '../../fotter.php'?>

<?php }?>