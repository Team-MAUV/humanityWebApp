<?php $page = 'home';
include "staff_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Product Card HTML & CSS</title>

    <script src="js/all.min.js"></script>
    <script type="text/javascript" src="../../public/js/all.min.js"></script>


</head>
<body>
	<div class="card">
		<div class="imgBox">
        <img src="<?= URL ?>public/images/glass.jpg" alt="glass"/>
		
		</div>
		<div class="details">
			<div class="textContent">
				<h3>Glass</h3>
				<div class="price">Rs6000.00</div>
			</div>
			<h4>Quantity: 120kg</h4>
		
			<button>Delete</button>
			<button>update</button>
		</div>

		<div class="description">
			<div class="icon"><i class="fas fa-info-circle"></i></div>
			<div class="contents">
				<h2>Glass</h2>
				<p>This product has collected from the Mawella street people. They gave their home wastage glasses on 5th August 2020 </p>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="imgBox">
        <img src="<?= URL ?>public/images/paper.jpg" alt="paper"/>
		
		</div>
		<div class="details">
			<div class="textContent">
				<h3>Paper</h3>
				<div class="price">Rs1900.00</div>
			</div>
			<h4> Quantity: 320kg </h4>
			<button>Delete</button>
			<button>update</button>
		
		</div>

		<div class="description">
			<div class="icon"><i class="fas fa-info-circle"></i></div>
			<div class="contents">
				<h2>Papers </h2>
				<p> These papers are collected from the shops near by Hambantota Town on 19th September 2020  </p>
		</div>
		</div>
	</div>
	<div class="card">
		<div class="imgBox">
        <img src="<?= URL ?>public/images/plastic.jpg" alt="plastic"/>
			
		</div>
		<div class="details">
			<div class="textContent">
				<h3>Plastic</h3>
				<div class="price">Rs5000.00</div>
			</div>
			<h4> Quantity: 190kg </h4>
			<button>Delete</button>
			<button>update</button>
		
		</div>

		<div class="description">
			<div class="icon"><i class="fas fa-info-circle"></i></div>
			<div class="contents">
				<h2>Plastic</h2>
				<p> These are collected from the Hikkaduwa beach clean campaign on 23rd September 2020  </p>
		</div>
		</div>
	</div>


	<div class="card">
		<div class="imgBox">
        <img src="<?= URL ?>public/images/cardboard.jpg" alt="cardboard"/>
			
		</div>
		<div class="details">
			<div class="textContent">
				<h3>Card board</h3>
				<div class="price">Rs3000.00</div>
			</div>
			<h4> Quantity: 100kg </h4>
			<button>Delete</button>
			<button>update</button>
		
		</div>

		<div class="description">
			<div class="icon"><i class="fas fa-info-circle"></i></div>
			<div class="contents">
				<h2>Card Boards </h2>
				<p> These card boards are remaining wastes of ladt two months activity of Organization and also given by staff's home wastages.  </p>
		</div>
		</div>
	</div>
	
	
</body>
</html>

</div>
</div>

<?php include "staff_footer.php" ?>