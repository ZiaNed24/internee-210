
<?php


require_once("model/crud.php");
require_once("model/helpermethod.php");

if(isset($_POST["submit"])){
$name=$_POST["name"];
$pass=$_POST["title"];
$roll=$_POST["desc"];
$number=$_POST["assign"];
$role=$_POST["prio"];


$result = insert_row("bug_reports",array("name"=>$name,"title"=>$pass,"description"=>$roll,"assigned_to"=>$number,"priority"=>$role));
if($result){

        redirect("dashboard.php");}
   

else{
    echo"error";
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
<form method="post" action="dashboard.php" class="row row-cols-lg-auto g-3 align-items-center">
 
<div class="col-12">
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" name="name" class="form-control"  id="inlineFormInputGroupUsername" placeholder="Username" />
    </div>
  </div>
  <div class="col-12">
    <div class="input-group">
     
      <input type="text" name="title"  class="form-control" id="inlineFormInputGroupUsername" placeholder="Title" />
    </div>
  
</div>
<div class="col-12">
    <div class="input-group">
     
      <input type="text" class="form-control"  id="inlineFormInputGroupUsername" name="desc" placeholder="Description"  />
    </div>
  
</div>
<div class="col-12">
    <div class="input-group">
     
      <input type="text" class="form-control"  id="inlineFormInputGroupUsername" name="assign" placeholder="Assigned To" />
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
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
  
</form>
<br><br>
<center><h1>BUG REPORT</h1></center>
<br><br>
<input type="text" id="searchInput" placeholder="Search..." onkeyup="searchTable()">

<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Description</th>
                <th>Assigned TO</th>
                <th>Priority</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
            $query = "SELECT * FROM `bug_reports`";
            $result = query_exec($query);
            while ($arrival = mysqli_fetch_array($result)) {
                        ?>
            <tr>
                <td><?php echo $arrival["name"] ?></td>
                <td><?php echo $arrival["title"] ?></td>
                <td><?php echo $arrival["description"] ?></td>
                <td><?php echo $arrival["assigned_to"] ?></td>
                <td><?php echo $arrival["priority"] ?></td>
                
                <td><a href="create_bug.php?u_id=<?php echo $arrival["id"] ?>"><button type="submit" class="btn btn-primary">Update</button></td>
                
            </tr>
            
                <?php } ?>
        </tbody>
       
    </table>

</body>

    <script>
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("example");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Assuming the first column is the title
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    
</script>
</html>