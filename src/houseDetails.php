<?php
require 'dbconn.php';
$house_id = $_GET['house_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="housedetail-style.css">
  <title>Document</title>
</head>
<body>
  <section class="title">
        <center><h1>House Details in Behrang</h1></center>
    </section>

    <section class="container">
    <?php
	
		//bahagian gambar ada prob kat coding

		$sql = "SELECT *
				FROM images
				WHERE `rental_id` = $house_id";
         $query = mysqli_query($conn, $sql);
		 
        //detail dah siap  
        $sql = "SELECT *
				FROM house
				WHERE `id` = $house_id";
        $query = mysqli_query($conn, $sql);

        while($house = mysqli_fetch_array($query)){
        ?>
			
			<div class="card">
				<h2>Pictures:</h2>
			<?php 
			
				//bahagian gambar ada prob kat coding

				$sql = "SELECT *
						FROM images
						WHERE `rental_id` = $house_id";
				 $query = mysqli_query($conn, $sql);
				 
				 while($images = mysqli_fetch_array($query)){
				?>

						<p><img src=images/"<?php echo $images['image_name']; ?>" width="250" height="200"></p>

			 <?php
				}
				?>
			
			</div>
				
				
			
            <div class="card">
                <h2>House Details:</h2>
                <p><?php echo $house['details']; ?></p>
            </div>
         
           
	 <?php
        }
        ?>
    </section>
</body>
</body>
</html>
