<?php

include   "headerowner.php";

?>
                              
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link  rel="stylesheet" href="stylee.css">
<!------ Include the above in your HEAD tag ---------->


    <!-- edit form column -->
    <style>
      .form-horizontal{
        background-color: #2E8B57;
    background-position: center;
    background-size : cover ;
    font-family: sans-serif;
    border: 1px solid #e0e0e0;
    padding-top: 15px;
      }
      </style>
    
   
<body>
      <!--<h3>Personal info</h3> --> 
      <form class="form-horizontal" role="form"  action="connectuserprofileowner.php" method="post" >

      <div class="container text-center">
              <h1 class="page-header ">Personal info</h1>
              <img src="footballplayground.jpeg"   onclick="triggerClick()" id="profileDisplay"  />
        <div class="row">
                  <label for="profileimage">  profileimage </label> 
              <input type="file" name="profileimage" onchange="displayImage(this)" id="profileimage" style="display: none;" >
</div>


        <div class="form-group" >
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
            <input class="form-control"  type="text" id="Firstname" name="Firstname" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input class="form-control"  type="text" id="Lastname" name="Lastname">
          </div>
        </div>
       
        
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control"  type="text" id="email" name="email">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control"  type="text" id="Username" name="Username">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control"  type="password" id="password" name="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" id="Confirmpassword" type="password" name="Confirmpassword">
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Save Changes" type="submit">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
            <button class="btn btn-default" type="submit"><a href="userprofileowner.php">Back</a></button>
          </div>
        </div>
      </form>
     
    
      </div>
  </div>
  
</div>
<script src="script.js"></script>


      </body>