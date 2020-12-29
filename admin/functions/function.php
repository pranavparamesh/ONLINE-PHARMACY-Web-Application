<?php
$conn=mysqli_connect("localhost","root","","books")or die("Can't Connect...");

function getCats(){
	
	global $conn;
	
	$get_cats = "select * from category";
	
	$run_cats = mysqli_query($conn, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id']; 
		$cat_nm = $row_cats['cat_nm'];
	
	echo "<li><a href='home3.php?cat=$cat_id'>$cat_nm</a></li>";
	
	
	}


}
function getPro(){

	if(!isset($_GET['cat'])){
		
	global $conn; 
	
	$get_pro = "select * from book order by b_id DESC LIMIT 0,6";

	$run_pro = mysqli_query($conn, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		
		$b_id = $row_pro['b_id'];
		$b_nm = $row_pro['b_nm'];
		$b_desc = $row_pro['b_desc'];
		
		$b_price = $row_pro['b_price'];
		$b_img = $row_pro['b_img'];
	
		echo "
				
				<div id='single_product'>
				
					<h3>$b_nm</h3>
					
					<img src='$b_img' width='180' height='180' />
					
					<p><b> Price: $b_price </p></b>
					
				
					
					<a href='ship.php?b_id=$b_id'><button style='float:right'><b>Buy now</b></button></a>
				
				</div>
		
		
		";
	
	}
	}
}

function getCatPro(){

	if(isset($_GET['cat'])){
		
		$cat_id = $_GET['cat'];

	global $conn; 
	
	$get_cat_pro = "select * from book where b_subcat='$cat_id'";

	$run_cat_pro = mysqli_query($conn, $get_cat_pro); 
	
	$count_cats = mysqli_num_rows($run_cat_pro);
	
	if($count_cats==0){
	
	echo "<h2 style='padding:20px;'>No plants were found in this category!</h2>";
	
	}
	
	while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
	
		$b_id = $row_cat_pro['b_id'];
		$b_nm = $row_cat_pro['b_nm'];
		$b_subcat = $row_cat_pro['b_subcat'];
		
		
		$b_price = $row_cat_pro['b_price'];
		$b_img = $row_cat_pro['b_img'];
		
	
		echo "
                    <div id='single_product'>
				
					<h3>$b_nm</h3>
					
					<img src='$b_img' width='300' height='200' />
					
					<p><b> Price:</b> $b_price </p>
					
					
					<a href='ship.php?b_id=$b_id'><b>Buy now</b></a><br>
					
					
					
				
				</div>
		
		
		";
	
		
	
	}
	
}

}
