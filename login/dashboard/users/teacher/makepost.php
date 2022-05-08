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
            <h1 class="m-0">Make Post</h1>
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
<div class="parent-container d-flex">
<div class="container border border-primary">
   <div class="row">
      <div class="col">
         <div class="container">
            <div class="row">
               <h3>ঘোসনা </h3>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="widget-area no-padding blank">
                     <div class="status-upload">
                      <?php 
                      
                       $sql = "select * from posts";
                       $result = $db->query($sql);
                       $data = mysqli_fetch_array($result);
                      
                      ?>
                           <textarea id="heading" placeholder="What are you doing right now?" style="resize: vertical;
resize: horizontal;height:100px; width:500px;" ><?php echo $data['heading'];?></textarea>
                           <ul>
                             
                           </ul>
                           <button type="submit" onclick="updateHeading();" class="btn btn-success green"><i class="fa fa-share"></i> Update</button>
                       
                     </div>

                     <!-- Heading Post Java Script  -->
                     <script>
                      function updateHeading()
                        {
                        
                             
                          var  heading = $("#heading").val();

                        $.ajax({
                              url : "action.php",
                              type : 'post',
                              data : {
                                   headingSend:heading,

                               },
                              success:function(data,status)
                                  {
                                  

                                    toastr.success("  ঘোসনা Update Success");

                                   }

                              });
                            }
                     </script>
                     <!-- Status Upload  -->
                  </div>
                  <!-- Widget Area -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="mx-auto" style="width: 100px;">
  <!-- Space  -->
</div>


    <div class="container border border-primary">
        <div class="row">
            <div class="col">
               
            <div class="container">
            <div class="row">
               <h3>ইতিহাস </h3>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="widget-area no-padding blank">
                     <div class="status-upload">
                     <?php 
                      
                      $sql = "select * from posts";
                      $result = $db->query($sql);
                      $data = mysqli_fetch_array($result);
                     
                     ?>
                           <textarea id="history" placeholder="What are you doing right now?" style="resize: vertical;
resize: horizontal; height:100px;  width:500px;" ><?php echo $data['history']?></textarea>
                           <ul>
                             
                           </ul>
                           <button type="submit" onclick="updateHistory()" class="btn btn-success green"><i class="fa fa-share"></i>Updata</button>
                     </div>
                     <!-- Status Upload  -->
                  </div>
                  <!--  Update History Status  -->
                  <script>
                      function updateHistory()
                        {
            
                          var  history = $("#history").val();

                        $.ajax({
                              url : "action.php",
                              type : 'post',
                              data : {
                                   historySend:history,

                               },
                              success:function(data,status)
                                  {
                                  

                                    toastr.success("ইতিহাস Update Success");

                                   }

                              });
                            }
                     </script>
                  <!-- Widget Area -->
               </div>
            </div>
         </div>

            </div>
        </div>
    </div>
    
</div>
<br> <br>
<!-- Another Section  -->
<div class="parent-container d-flex">
<div class="container border border-primary">
   <div class="row">
      <div class="col">
         <div class="container">
            <div class="row">
               <h3>অধ্যক্ষের বাণী </h3>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="widget-area no-padding blank">
                     <div class="status-upload">
                     <?php 
                      
                      $sql = "select * from posts";
                      $result = $db->query($sql);
                      $data = mysqli_fetch_array($result);
                     
                     ?>
                      
                           <textarea id="principletalk" placeholder="What are you doing right now?" style="resize: vertical;
resize: horizontal; height:100px; width:500px;" ><?php echo $data['principletalk']?></textarea>
                           <ul>
                             
                           </ul>
                           <button  onclick="updatePrinciple()" type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Update</button>
                     
                     </div>
                     <!-- Status Upload  -->
                  </div>
                  <!-- Script for update Principle bani -->
                  <script>
                      function updatePrinciple()
                        {
            
                          var  principletalk = $("#principletalk").val();

                        $.ajax({
                              url : "action.php",
                              type : 'post',
                              data : {
                                 principletalkSend:principletalk,

                               },
                              success:function(data,status)
                                  {
                                  

                                    toastr.success(" অধ্যক্ষের বাণী  Update Success");

                                   }

                              });
                            }
                     </script>
                  <!-- Widget Area -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="mx-auto" style="width: 100px;">
  <!-- Space  -->
</div>


    <div class="container border border-primary">
        <div class="row">
            <div class="col">
               
            <div class="container">
            <div class="row">
               <h3>উপধ্যক্ষের বাণী </h3>
            </div>
      <form id="submitform">
            <div class="row">

            <input id="upload_file" type="file" accept="image/*" name="upload_file" />
          <br>
           
         <div id="preview">
            <div class="card" id="image_preview" style="width: 18rem;">
               <img src="..." class="card-img-top" alt="...">
 
                </div>
            </div>
               <div class="col-md-6">
                  <div class="widget-area no-padding blank">
                     <div class="status-upload">
                  
                     <?php 
                      
                      $sql = "select * from posts";
                      $result = $db->query($sql);
                      $data = mysqli_fetch_array($result);
                     
                     ?>
                           <textarea id="preprincipletalk" name="preprincipletalk" style="resize: vertical;
resize: horizontal; height:100px; width:500px;" ><?php  echo $data['preprincipletalk']?></textarea>
                           <ul>
                             
                           </ul>
                           <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Update</button>
                    
                     </div>
                  </form>
                     <!-- Status Upload  -->
                  </div>
                 
                  <!-- Preprinciple Talk Script  -->
                  <script>
                     
                  $(document).ready(function(){
                     $("#submitform").on("submit",function(e){

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
                              alert(data);
                             // $("#image_preview").html(data);
                             // $("#upload_file").val('');


                           }
                        })
                        
                      
                     })
                  })

                       

                     //  function updateprePrinciple()
                     //    {
            
                     //      var  preprincipletalk = $("#preprincipletalk").val();
                     //      var image = $("#uploadImage").val();

                     //    $.ajax({
                     //          url : "action.php",
                     //          type : 'post',
                     //          data : {
                     //             preprincipletalkSend: preprincipletalk,
                     //             sendImage: image,

                     //           },
                     //          success:function(data,status)
                     //              {
                     //               alert(data);
                     //               alert(image);

                     //                toastr.success(" উপধ্যক্ষের বাণী  Update Success");

                     //               }

                     //          });
                     //        }
                     </script>
                  <!-- Widget Area -->
               </div>
            </div>
         </div>
         
            </div>
        </div>
    </div>
    
</div>

<br> <br>
<!-- Another Section  -->


<div class="parent-container d-flex">
<div class="container border border-primary">
   <div class="row">
      <div class="col">
         <div class="container">
            <div class="row">
               <h3>Heading Scroll Bar </h3>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="widget-area no-padding blank">
                     <div class="status-upload">
                        <form>
                           <textarea placeholder="What are you doing right now?" style="resize: vertical;
resize: horizontal; width:500px;" ></textarea>
                           <ul>
                             
                           </ul>
                           <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Post</button>
                        </form>
                     </div>
                     <!-- Status Upload  -->
                  </div>
                  <!-- Widget Area -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="mx-auto" style="width: 100px;">
  <!-- Space  -->
</div>


    <div class="container border border-primary">
        <div class="row">
            <div class="col">
               
            <div class="container">
            <div class="row">
               <h3>Heading Scroll Bar </h3>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="widget-area no-padding blank">
                     <div class="status-upload">
                        <form>
                           <textarea placeholder="What are you doing right now?" style="resize: vertical;
resize: horizontal; width:500px;" ></textarea>
                           <ul>
                             
                           </ul>
                           <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Post</button>
                        </form>
                     </div>
                     <!-- Status Upload  -->
                  </div>
                  <!-- Widget Area -->
               </div>
            </div>
         </div>
         
            </div>
        </div>
    </div>
    
</div>

</section>

<?php include '../../fotter.php'?>

<?php }?>