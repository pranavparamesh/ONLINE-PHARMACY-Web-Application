
		
			<a href="#.php">Category</a>
			<a href="allbook.php">Drugs</a>
		
			<a href="logout.php" style="float:right" >Logout</a>
			<?php
				if(isset($_SESSION['status'])&& $_SESSION['username']=="admin")
				{
					echo '<a href="../logout.php" style="float:right" >Logout</a>';
				}
				
			?>
			
		