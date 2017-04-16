<?php include('inc/header.php');?>
   <div class="container">
       <div class="row">
           <div class="col-md-offset-6 col-md-6 text-right">
              <br>
               <a href="index.php" class="btn btn-primary btn-lg">Go Back</a>
           </div>          
           <div class="col-md-12">
              
               <h2>Update Employee</h2>
<?php 
$id = $_GET['id'];
if(!isset($id)){
  header('Location: index.php'); 
}
$query = "SELECT * FROM employees_info WHERE id=$id";
$select = $db->select($query)->fetch_assoc();              
?>               
<?php if(isset($_POST['update'])){
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
    <?php $query = "UPDATE employees_info SET name='$name',position='$position',office='$office',age='$age',start_date='$start_date',salary='$salary' WHERE id='$id'";
    $update = $db->update($query);           
    ?> 
    <?php }?>
<?php } ?>   
                <?php if(isset($error)){?> 
                    <div class="alert alert-danger" role="alert"><?php  echo $error;?></div>
                <?php }?>                             
                <form action="" method="post">
                  <div class="form-group">
                    <label for="name">Employee Name</label>
                    <input name="name" type="text" class="form-control" id="name" value="<?php echo $select['name'];?>">
                  </div> 
                  <div class="form-group">
                    <label for="position">Position</label>
                    <input name="position" type="text" class="form-control" id="position" value="<?php echo $select['position'];?>">
                  </div>
                  <div class="form-group">
                    <label for="office">Office</label>
                    <input name="office" type="text" class="form-control" id="office" value="<?php echo $select['office'];?>">
                  </div>   
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input name="age" type="number" class="form-control" id="age" value="<?php echo $select['age'];?>">
                  </div>  
                  <div class="form-group">
                    <label for="start_date">Start date</label>
                    <input name="start_date" type="text" class="form-control" id="start_date" value="<?php echo $select['start_date'];?>">
                   
                  </div> 
                  <div class="form-group">
                    <label for="salary">Salary (in dollars)</label>
                    <div class="input-group">
                      <div class="input-group-addon">$</div>
                      <input name="salary" type="text" class="form-control" id="salary" value="<?php echo $select['salary'];?>"> 
                    </div>
                  </div>  
                  <input name="update" type="submit" class="btn btn-default" value="Update">
                </form>                    
           </div>
       </div>
   </div>  
<?php include('inc/footer.php');?>