
<?php
   require('config.php');
  # include('session.php');
   session_start();
if(isset($_POST['upload'])){
 $email=$_SESSION['email'];
$msg="";
//$conn=mysqli_connect("localhost","root","","cs project");
$target_dir="post/";
$target_file=$target_dir.basename($_FILES["filetoupload"]["name"]);
#$result = mysqli_query($db,$sql);
#$postid=$_POST['postid'];
$email=$_POST['email'];
$productname=$_POST['productname'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$county=$_POST['county'];


$sql="INSERT INTO post (email, productname,  price,  image, quantity, county) VALUES ( '$email', '$productname', '$price', '$target_file', '$quantity', '$county')";

mysqli_query($db,$sql);
    
if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_file)) {
    # code...
    $msg="Image uploaded successfully";
    
}else{
    $msg="There is a problem";
}

header('Location:posts.php');

}
?>


    <!DOCTYPE html>
    <html>

    <head>
        <title>Upload post</title>

        <style>
            body{
                
            }
            
     #box{
           align-content: center;
           left:55px;
           
            }
            .btn-file {
    position: relative;
    background-color: forestgreen;
    font-size:18px;
    width:10%;
    color:white;
    border:solid;
    border-color:transparent;
    border-radius:50px;
   
}
 input[type=file] {
    padding:10px;
    margin:8px;
    position: relative;
    background-color: forestgreen;
    font-size:18px;
    width:20%;
    color:black;
    border:solid;
    border-color:transparent;
    border-radius:50px;
}
input[type=text] {
    padding:10px;
    margin:8px;
    width:35%;
    border:solid;
    border-color:limegreen;
    border-radius:50px;
    opacity:0.6;
}
            input[type=email] {
    padding:10px;
    margin:8px;
    width:35%;
    border:solid;
    border-color:limegreen;
    border-radius:50px;
    opacity:0.6;
    
}

#img-upload{
    width: 100%;
}
    img {
        width: 40%;
        border-radius: 80px;
        padding: 0px;
        align-self: center;
        justify-content: center;

    }        
            
            
        </style>
    </head>

    <body>
        
        
        
        <div id="content">
            <?php
   /* while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
     	echo "<img src='post/".$row['image']."' >";
        echo "<p>".$row['email']."</p>";
      	echo "<p>".$row['productname']."</p>";
        echo "<p>".$row['price']."</p>";
        echo "<p>".$row['quantity']."</p>";*/
      echo "</div>";
        
  ?>        <div id=box>
            <img src=generatedtext.jpg>
                <form method="POST" action="uploadpost.php" enctype="multipart/form-data">
                    <input type="hidden" name="size" value="1000000">
                    <div>
  	  <input type="file" name="filetoupload">
  	</div>
                     <p>  <input type=email id="email"  name="email" placeholder="email">
                   <p> <input type=text id="productname"  name="productname" placeholder="Product Name">
                    <p>   <input type=text id="price"  name="price" placeholder="Price per Kg">
                   <p>  <input type=text id="quantity"  name="quantity" placeholder="Quantity Available">
                        <p>  <input type=text id="county"  name="county" placeholder="county">
                       
                   
                    <div>
                        <button type="submit" name="upload"class="btn-file">POST</button>
                    
                        
                    </div>
                </form>
        </div>
        </div>
    </body>

    </html>
