<?php include("header.php") ?>
	<div class="card">
		<div class="card-header">
			<h1>PHP : Comment</h1>
		</div>
	<div class="card-body">
		<?php
			echo ("Hello.. Jinesh <br>");
			//	echo (" <br> Ganpat Univarsity");
			#	echo (" <br> Ahmedabad");
			/*	echo (" <br> Gujarat"); */
		?>
		
		<!-- Variable -->
		<?php
			echo ("<h3> String In PHP... </h3><br>");
			$fname = "Jinesh";
			echo ($fname);
			$lname = "Patel";
			echo ($lname);
			echo ("<br>" . $fname. " " . $lname);
			echo ("<br>");
			// To Know The Data Type Of Variable
			echo (var_dump($fname));
		?>
							
		<!-- Integer -->
		<?php
			echo ("<h3> Numbers </h3>");
			$sub1 = 10;
			$sub2 = 30;
			$sub3 = 50;
			echo ("<br> Subject 1 :- $sub1");
			echo ("<br> Subject 2 :- $sub2");
			echo ("<br> Subject 3 :- $sub3");
			$total = $sub1+$sub2+$sub3;
			echo ("<br><h5>All Subject Total :- $total / 300</h5>");
			// To Know The Data Type Of Variable
			echo ("<br>");
			echo (var_dump($total));
			// MOst Recent Assignment Value
			$sub4 = 60;
			$sub4 = 70;
			echo ("<br> Subject $ :- $sub4");
		?>
											
		<!-- boolean -->
		<?php
			echo ("<h3>Boolean</h4>");
			$gender = true;
			if($gender){
				echo ("<br> Male");
			}
			else{
				echo("<br> Female");
			}
			echo( "<br>");
			echo var_dump($gender);
		?>
		</div>
		</div>				
	<?php include("footer.php")?>