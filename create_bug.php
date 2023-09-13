<?php
require_once("model/crud.php");
require_once("model/helpermethod.php");
$conn=mysqli_connect("localhost","root","","test");
if (isset($_GET['u_id'])) {
    $up_id=$_GET['u_id'];
    $qu="select * from bug_reports where id='$up_id'";
    $res=mysqli_query($conn,$qu);
    $row=mysqli_fetch_assoc($res);

}
if (isset($_POST['submits'])) {
    $id=$_POST["uid"];
    $name=$_POST["name"];
    $pass=$_POST["title"];
    $roll=$_POST["desc"];
    $number=$_POST["assign"];
    $role=$_POST["prio"];
    $arr=query_exec("update bug_reports set name='$name',title='$pass',description='$roll',assigned_to='$number',priority='$role' where id='$id';");
    if($arr){
        redirect("dashboard.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <title>Document</title>
    
</head>
<body>
<br><br>
<center><h1>ENTRY OF BUG</h1></center>
<br><br>
<form method="post" action="create_bug.php" class="row row-cols-lg-auto g-3 align-items-center">
<div class="col-12">
    <div class="input-group">
     
    <input type="hidden" name="uid" value="<?php echo $row["id"] ?>">
    </div>
  
</div>  
<div class="col-12">
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" name="name" class="form-control" value="<?php echo $row["name"] ?>" id="inlineFormInputGroupUsername" placeholder="Username" />
    </div>
  </div>
  <div class="col-12">
    <div class="input-group">
     
      <input type="text" name="title" value="<?php echo $row["title"] ?>" class="form-control" id="inlineFormInputGroupUsername" placeholder="Title" />
    </div>
  
</div>
<div class="col-12">
    <div class="input-group">
     
      <input type="text" class="form-control"  id="inlineFormInputGroupUsername" name="desc" placeholder="Description" value="<?php echo $row["description"] ?>" />
    </div>
  
</div>
<div class="col-12">
    <div class="input-group">
     
      <input type="text" class="form-control" value="<?php echo $row["assigned_to"] ?>" id="inlineFormInputGroupUsername" name="assign" placeholder="Assigned To" />
    </div>
  
</div>
  <div class="col-12">
  <label class="mb-1"><strong>Priority</strong></label>
      <select class="form-control" name="prio">
		<option value="High">High</option>
  		<option value="Medium">Medium</option>
        <option value="Low">Low</option>
												
	</select>
  </div>

 
  <div class="col-12">
    <button type="submit" name="submits" class="btn btn-primary">Update</button>
  </div>
</form>


</body>
</html>