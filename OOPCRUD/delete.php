<?php include('inc/header.php');?>
<?php 
$id = $_GET['id'];
if(!isset($id)){
  header('Location: index.php'); 
}
$query = "DELETE FROM employees_info WHERE id=$id";
$delete = $db->delete($query); 
?>
   
 
<?php include('inc/footer.php');?>