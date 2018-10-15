<?php
include 'includes/db.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body style="background-image:url(pe.jpg)">
<div class="form">
    <div class=box style="padding:10px">
<p><a href="dash.php">Dashboard</a> 
| <a href="ins.php">Insert New Record</a> 
| <a href="includes/logout.inc.php">Logout</a></p>
    </div>
<h1 style="text-align:center;color:dodgerblue">View Records</h1>
    <br>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Email</strong></th>
<th><strong>Password</strong></th>
<th><strong>Date</strong></th>
<th><strong>Time</strong></th>
  <th><strong>Category</strong></th>  
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT firstname, em, pass, dat, time, dep from book";
$result = mysqli_query($conn, $sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["firstname"]; ?></td>
<td align="center"><?php echo $row["em"]; ?></td>
<td align="center"><?php echo $row["pass"]; ?></td>
<td align="center"><?php echo $row["dat"]; ?></td>
<td align="center"><?php echo $row["time"]; ?></td>
<td align="center"><?php echo $row["dep"]; ?></td>
<td align="center">
<a href="edit.php?firstname=<?php echo $row["firstname"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?firstname=<?php echo $row["firstname"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>