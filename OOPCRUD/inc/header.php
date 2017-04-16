<?php 
include('Database.php');
$db = new Database;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
    $( "#start_date" ).datepicker( {
    dateFormat: 'yy-mm-dd'
} );
} );    
</script> 
<style>
 
.ui-datepicker.ui-widget.ui-widget-content.ui-helper-clearfix.ui-corner-all {
    background: #fff none repeat scroll 0 0; 
    padding: 10px;
    text-align: center;
    width: 200px !important; 
}
table.ui-datepicker-calendar {
    width: 100%;
}
.ui-corner-all {
    cursor: pointer;
    font-weight: bold;
    padding: 0 20px;
}
    
</style>     
</head>
<body>