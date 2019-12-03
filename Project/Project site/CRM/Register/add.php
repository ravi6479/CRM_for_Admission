<!-- <?php
//   include '../../Dashboard/Head_of_the_department/header.php';
//   include '../../Dashboard/Head_of_the_department/left.php';
?> -->

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Faculty</h1>
                  <small>Faculty list</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="clist.html"> 
                              <i class="fa fa-list"></i>  Faculty List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" action="register.php" method="POST">
                              <div class="form-group">
                                 <label>Employee ID</label>
                                 <input type="text" class="form-control" placeholder="Enter Employee ID" name="empid"
                                 id="empid" required>
                              </div>
                              <div class="form-group">
                                 <label>First Name</label>
                                 <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name" required>
                              </div>
                              <div class="form-group">
                                 <label>Last Name</label>
                                 <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter last Name" required>
                              </div>
                              <div class="form-group">
                                 <label>Email</label>
                                 <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                              </div>
                              <div class="form-group">
                                 <label>Mobile</label>
                                 <input type="number" class="form-control" name="contact" id="contact" placeholder="Enter Mobile" required>
                              </div>
                               <div class="form-group">
                                 <label>City</label>
                                 <input type="text" class="form-control" name="city" id="city" placeholder="Enter City" required>
                              </div>
                              <!--
                              <div class="form-group">
                                 <label>Picture upload</label>
                                 <input type="file" name="picture">
                                 <input type="hidden" name="old_picture">
                              </div>
                              <div class="form-group">
                                 <label>Bank details</label>
                                 <input type="text" class="form-control" placeholder="Enter Bank details" required>
                              </div>
                              <div class="form-group">
                                 <label>Passport</label>
                                 <input type="text" class="form-control" placeholder="Enter Passport details" required>
                              </div>
                              <div class="form-group">
                                 <label>Facebook Id</label>
                                 <input type="text" class="form-control" placeholder="Enter Facebook details" required>
                              </div>
                              <div class="form-group">
                                 <label>Date of Birth</label>
                                 <input id='minMaxExample' type="text" class="form-control" placeholder="Enter Date...">
                              </div>-->
                              <div class="form-group">
                                 <label>Address</label>
                                 <textarea class="form-control" rows="3" name="address" id="address" required></textarea>
                              </div>
                               <div class="form-group">
                                 <label>Password</label>
                                 <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                              </div>
                               <div class="form-group">
                                 <label>Designation</label>
                                 <select id="Designation" name="Designation" class="form-control">
                                    <option value="1">Principal</option>
                                    <option value="2">Admission Coordinator</option>
                                    <option value="3">Head of the department</option>
                                    <option value="4">Faculty</option>
                                 </select>
                              </div>
                              
                              <div class="form-group">
                                 <label>Department</label>
                                 <select class="form-control" id="department" name="department">
                                    <option value="01">Degree Computer</option>
                                    <option value="02">Degree Mechanical</option>
                                    <option value="03">Degree Civil</option>
                                    <option value="04">Degree Electrical</option>
                                    <option value="11">Diploma Mechanical</option>
                                    <option value="12">Diploma Civil</option>
                                    <option value="13">Diploma Electrical</option>
                                    <option value="21">Humidity and Science</option>
                                 </select>
                              </div>
                              <!--<div class="form-group">
                                 <label>Sex</label><br>
                                 <label class="radio-inline"><input name="sex" value="1" checked="checked" type="radio">Male</label> 
                                 <label class="radio-inline"><input name="sex" value="0" type="radio">Female</label>
                              </div>
                              <div class="form-check">
                                 <label>Status</label><br>
                                 <label class="radio-inline">
                                 <input type="radio" name="status" value="1" checked="checked">Active</label>
                                 <label class="radio-inline"><input type="radio" name="status" value="0" >Inctive</label>
                              </div>
                           -->   
                               <input type="submit" name="save" id="save" value="Save" class="btn btn-success">
                              <div class="reset-button">
                                 <a href="add-customer.php" class="btn btn-warning">Reset</a>
                                <!--  <a href="register.php" class="btn btn-success">Save</a> -->

                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>

