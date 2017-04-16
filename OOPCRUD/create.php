<?php include('inc/header.php');?>
   <div class="container">
       <div class="row">
           <div class="col-md-offset-6 col-md-6 text-right">
              <br>
               <a href="index.php" class="btn btn-primary btn-lg">Go Back</a>
           </div>          
           <div class="col-md-12">
              
               <h2>Add Employee</h2>
<?php if(isset($_POST['add'])){
    $name = mysqli_real_escape_string($db->connect,$_POST['name']);
    $position = mysqli_real_escape_string($db->connect,$_POST['position']);
    $office = mysqli_real_escape_string($db->connect,$_POST['office']);
    $age = mysqli_real_escape_string($db->connect,$_POST['age']);
    $start_date = mysqli_real_escape_string($db->connect,$_POST['start_date']);
    $salary = mysqli_real_escape_string($db->connect,$_POST['salary']);
    ?>
    <?php if($_POST['name'] == '' || $_POST['position'] == '' || $_POST['office'] == '' || $_POST['age'] == '' || $_POST['start_date'] == '' || $_POST['salary'] == '' ){
    $error = "All Fields must be Filled!";?>
    <?php }else{ ?>
    <?php $query = "INSERT INTO employees_info(name,position,office,age,start_date,salary) VALUES ('$name','$position','$office','$age','$start_date','$salary')";
    $create = $db->insert($query);           
    ?> 
    <?php }?>
<?php }?>   
                <?php if(isset($error)){?> 
                    <div class="alert alert-danger" role="alert"><?php  echo $error;?></div>
                <?php }?>                             
                <form action="" method="post">
                  <div class="form-group">
                    <label for="name">Employee Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                  </div> 
                  <div class="form-group">
                    <label for="position">Position</label>
                    <input name="position" type="text" class="form-control" id="position" placeholder="Position">
                  </div>
                  <div class="form-group">
                    <label for="office">Office</label>
                    <input name="office" type="text" class="form-control" id="office" placeholder="office">
                  </div>   
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input name="age" type="number" class="form-control" id="age" placeholder="age">
                  </div>  
                  <div class="form-group">
                    <label for="start_date">Start date</label>
                    <input name="start_date" type="text" class="form-control" id="start_date" placeholder="Start date">
                   
                  </div> 
                  <div class="form-group">
                    <label for="salary">Salary (in dollars)</label>
                    <div class="input-group">
                      <div class="input-group-addon">$</div>
                      <input name="salary" type="text" class="form-control" id="salary" placeholder="Salary"> 
                    </div>
                  </div>  
                  <input name="add" type="submit" class="btn btn-default" value="Add">
                </form>
                
                                              
           </div>
       </div>
   </div>  
<?php include('inc/footer.php');?>