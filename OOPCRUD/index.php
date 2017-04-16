<?php include('inc/header.php');?>
<?php 
$query = "SELECT * FROM employees_info";
$select = $db->select($query);               
?>
   
    <div class="container">
        <div class="row">
           <div class="col-md-offset-6 col-md-6 text-right">
              <br>
               <a href="create.php" class="btn btn-primary btn-lg">Add Employee</a>
           </div>
            <div class="col-md-12">  
                <h2>All Employees</h2>
                <?php if(isset($_GET['message'])){
                $message = $_GET['message'];?> 
                    <div class="alert alert-success" role="alert"><?php  echo $message;?></div>
                <?php }else{ 
                $msgerr = $_GET['msgerr'];?>     
                    <div class="alert alert-danger" role="alert"><?php  echo $msgerr;?></div>   
                <?php }?>      
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                       <?php if($select){?>  
                       <?php while($row = $select->fetch_assoc()){?>  
                        <tr>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['position'];?></td>
                            <td><?php echo $row['office'];?></td>
                            <td><?php echo $row['age'];?></td>
                            <td><?php echo $row['start_date'];?></td>
                            <td>$<?php echo $row['salary'];?></td>
                            <td><a href="edit.php?id=<?php echo urlencode($row['id']);?>">Edit</a> || <a href="delete.php?id=<?php echo urlencode($row['id']);?>">Delete</a></td>
                        </tr>
                        <?php } ?> 
                        <?php }  ?> 
                    </tbody>
                </table>                  
            </div>
        </div>
<?php include('inc/footer.php');?>