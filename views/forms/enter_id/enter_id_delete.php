<html>
<head>
    <title>Enter ID Update</title>
    <?php include("../../includes/header.php"); ?>
</head>
<body>
<?php include("../../includes/dashboard.php");?>
<form method="post" action="<?=FIVEZEROSIX.'/controllers/DeletePhoneController.php' ?>">
    <input type="text" name="enter_id_delete"><br><br>
    <input type="submit" name="submit_delete">
</form>
<?php
include ("../../../models/server.php");
$query = "SELECT * FROM records";
$result = mysqli_query($connection , $query);
if($result){
    $row = mysqli_fetch_assoc($result);
    print "<pre>";
    print_r($row);
    print "<pre>";
}


?>
</body>
</html>