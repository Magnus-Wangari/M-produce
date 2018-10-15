<?php
session_start();
include('session.php');
require('config.php');

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
<p><a href="book.html">Go back</a> 
| <a href="logout.php">Logout</a></p>
    </div>
<h1 style="text-align:center;color:dodgerblue">BOOKED DATES</h1>
    <br>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>No</strong></th>
<th><strong>Date</strong></th>
<th><strong>Time</strong></th>
  <th><strong>Department</strong></th>  
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select  dat, time, dep from book";
$result = mysqli_query($db,$sel_query);
while($row =$result-> fetch_assoc()) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["dat"]; ?></td>
<td align="center"><?php echo $row["time"]; ?></td>
<td align="center"><?php echo $row["dep"]; ?></td>

</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>