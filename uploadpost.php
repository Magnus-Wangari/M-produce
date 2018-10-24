
<?php
session_start();
   require('config.php');
<<<<<<< HEAD
  # include('session.php');
=======
>>>>>>> 8e21554b32f7bcb53e7b817f2d43f3af9651128d
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
    
//insert into database
$sql="INSERT INTO post (email, productname,  price,  image, quantity, county) VALUES ( '$email', '$productname', '$price', '$target_file', '$quantity', '$county')";

mysqli_query($db,$sql);
    
if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_file)) {
    # code...
    $msg="Image uploaded successfully";
    
}
    
    else{
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
             ul {
        list-style-type: none;
        padding: 10px;
        margin: 0;
        background-color:grey;
        border-radius: 10px;

        overflow: hidden;
    }
    
    li {
        float: right;
    }
         
    li a {
        display: block;
        text-decoration: none;
        text-align: right;
        color: white;
        padding: 0px 10px;
        font-family: sans-serif;
        font-size: 18px;


    }

    li a:hover {
        color: darkgreen;
    }
            select:hover{
                color:forestgreen; 
            }

   
            
     #box{
           align-content:center;
           left:55px;
           
            }
            .btn-file {
    position: relative;
    background-color: dodgerblue;
    font-size:18px;
    width:10%;
    color:white;
<<<<<<< HEAD
    border:solid;
    border-color:transparent;
    border-radius:50px;
    opacity:0.7;
=======
                border: solid transparent;
                border-radius:50px;
>>>>>>> 8e21554b32f7bcb53e7b817f2d43f3af9651128d
   
}
 input[type=file] {
    padding:8px;
    margin:8px;
    position: relative;
    background-color: dodgerblue;
    font-size:18px;
    width:19%;
    color:black;
<<<<<<< HEAD
    border:solid;
    border-color:transparent;
    border-radius:10px;
=======
     border: solid transparent;
     border-radius:50px;
>>>>>>> 8e21554b32f7bcb53e7b817f2d43f3af9651128d
}
input[type=text] {
    padding:15px;
    margin:8px;
<<<<<<< HEAD
    width:55%;
    border:solid;
    border-color:dodgerblue;
    border-radius:10px;
=======
    width:35%;
    border: solid limegreen;
    border-radius:50px;
>>>>>>> 8e21554b32f7bcb53e7b817f2d43f3af9651128d
    opacity:0.6;
    border-width:1px;
}
    input[type=email] {
    padding:15px;
    margin:8px;
<<<<<<< HEAD
    width:55%;
    border:solid;
    border-color:dodgerblue;
    border-radius:10px;
=======
    width:35%;
                border: solid limegreen;
                border-radius:50px;
>>>>>>> 8e21554b32f7bcb53e7b817f2d43f3af9651128d
    opacity:0.6;
    border-width:1px;            
    
} select{
    padding:15px;
    margin:8px;
    width:55%;
    border:solid;
    border-color:dodgerblue;
    border-radius:10px;
    opacity:0.6;
    border-width:1px; 
            }

/*
#img-upload{
    width: 100%;
}
    img {
        width: 60%;
        border-radius: 80px;
        padding: 0px;
        align-self: center;
        justify-content: center;
    }        
<<<<<<< HEAD
            

=======
*/

            
>>>>>>> 8e21554b32f7bcb53e7b817f2d43f3af9651128d
        </style>
    </head>

    <body>
        
         <ul>
        <li>
            <p><b><a href="includes/logout.inc.php">Logout</a></b></p>
        </li>
        <li>
            <p><b><a href="http://www.agricultureauthority.go.ke/category/prices/">News Feeds</a></b></p>
        </li>
        <li>
            <p><b><a href="userprofile.php">View Profile</a></b></li>
        <li>
            <p><b><a href="view.php">Notifications</a></b></li>
        <li>
            <p><b><a href="posts.php">View Posts</a></b></li>




    </ul>

        
        <div id="content">
            <?php
  
      echo "</div>";
        
  ?>        <div id=box>
           <!-- <img src=gen6.jpg style="width:900px">-->
                <form method="POST" action="uploadpost.php" enctype="multipart/form-data">
<<<<<<< HEAD
                    
                     <p>  <input type=email id="email"  name="email" placeholder="email">
                   <p> <input type=text id="productname"  name="productname" placeholder="Product Name">
                    <p>   <input type=text id="price"  name="price" placeholder="Price per Kg">
=======
                    <input type="hidden" name="size" value="1000000">
                    <div>
  	  <input type="file" name="filetoupload">
  	</div>
                     <p><input type=email id="email"  name="email" placeholder="email">
                   <p><input type=text id="productname"  name="productname" placeholder="Product Name">
                    <p><input type=text id="price"  name="price" placeholder="Price per Kg">
>>>>>>> 8e21554b32f7bcb53e7b817f2d43f3af9651128d
                   <p>  <input type=text id="quantity"  name="quantity" placeholder="Quantity Available">
                       			
				
			<P>	<select name="county">
					<option value="">Choose County...</option>
					<option value="Baringo">Baringo</option>
					<option value="Bomet">Bomet</option>
					<option value="Bungoma">Bungoma</option>
					<option value="Busia">Busia</option>
					<option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
					<option value="Embu">Embu</option>
					<option value="Garissa">Garissa</option>
					<option value="Homa Bay">Homa Bay</option>
					<option value="Isiolo">Isiolo</option>
					<option value="Kajiado">Kajiado</option>
					<option value="Kakamega">Kakamega</option>
					<option value="Kericho">Kericho</option>
					<option value="Kiambu">Kiambu</option>
					<option value="Kilifi">Kilifi</option>
					<option value="Kirinyaga">Kirinyaga</option>
					<option value="Kisii">Kisii</option>
					<option value="Kisumu">Kisumu</option>
					<option value="Kitui">Kitui</option>
					<option value="Kwale">Kwale</option>
					<option value="Laikipia">Laikipia</option>
					<option value="Lamu">Lamu</option>
					<option value="Machakos">Machakos</option>
					<option value="Makueni">Makueni</option>
					<option value="Mandera">Mandera</option>
					<option value="Meru">Meru</option>
					<option value="Migori">Migori</option>
					<option value="Marsabit">Marsabit</option>
					<option value="Mombasa">Mombasa</option>
					<option value="Muranga">Muranga</option>
					<option value="Nairobi">Nairobi</option>
					<option value="Nakuru">Nakuru</option>
					<option value="Nandi">Nandi</option>
					<option value="Narok">Narok</option>
					<option value="Nyamira">Nyamira</option>
					<option value="Nyandarua">Nyandarua</option>
					<option value="Nyeri">Nyeri</option>
					<option value="Samburu">Samburu</option>
					<option value="Siaya">Siaya</option>
					<option value="Taita Taveta">Taita Taveta</option>
					<option value="Tana  River">Tana  River</option>
					<option value="Tharaka Nithi">Tharaka Nithi</option>
					<option value="Trans Nzoia">Trans Nzoia</option>
					<option value="Turkana">Turkana</option>
					<option value="Uasin Gishu">Uasin Gishu</option>
					<option value="Vihiga">Vihiga</option>
					<option value="Wajir">Wajir</option>
					<option value="West Pokot">West Pokot</option>
				</select>
                   </P>
                    <div>
<<<<<<< HEAD
                        <button type="submit" name="upload"class="btn-file">POST</button>
                     <input type="hidden" name="size" value="1000000">
=======
                        <button type="submit" name="upload" class="btn-file">POST</button>
>>>>>>> 8e21554b32f7bcb53e7b817f2d43f3af9651128d
                    
  	               <input type="file" name="filetoupload">
                    </div>
                   
  	
                </form>
        </div>
        </div>
    </body>

    </html>
