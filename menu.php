<?php include "header1.php" ?>


<title>Restaurant Menu</title>
<style>
	.container {
		width: 100%;
	}

	body {
		background-image: url("food.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		color: white;
	}


	h1 {
		text-align: center;
	}

	.menu {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;

	}

	.menu>div {
		margin: 20px;
		padding: 20px;
		font-size: 30px;
		text-align: center;
		
	}

	.menu-item {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		padding: 50px, 50px;
		margin: 100px;
		width: 35%;
		margin-bottom: 50px;
	}

	.menu-item img {
		display: flex;
		margin: auto;
		align-items: center;

	}

	.menu-item>h3 {
		
		text-align: center;
		color: white;
	}

	.menu-item>p {
		margin-top: auto;
		text-align: center;
		color: white;
	}
</style>

</head>

<body>
	<div class="container">
		<h1>Salsa Restaurant Menu</h1>
		<div class="menu">
			<div class="menu-item">
				<img src="https://images.unsplash.com/photo-1570197571499-166b36435e9f?ixlib=rb-4.>0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c2FsYWRzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
					alt="Salmon Avocado Salad">
				<p>£4,20</p>
				<h3>Salmon Avocado Salad</h3>

			</div>
			<div class="menu-item">
				<img src="https://images.unsplash.com/photo-1611171711925-92171c63fc4b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHNhbGFkc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60"
					alt="Mixed Green Salad with apple and Goat Cheese">
				<p>£3,99</p>
				<h3>Mixed Green Salad with apple and Goat Cheese</h3>

			</div>
			<div class="menu-item">
				<img src="https://images.unsplash.com/photo-1568158879083-c42860933ed7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHNhbGFkc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60"
					alt="Mixed Green Salad with apple and Goat Cheese">
				<p>£5,99</p>
				<h3>Mixed Green Salad with apple and Goat Cheese</h3>
			</div>
			<div class="menu-item">
				<img src="https://images.unsplash.com/photo-1655536259633-05170abf4b8b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDYyfHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
					alt="Lemon Balm Popsicles">
				<p>£4,99</p>
				<h3>Lemon Balm Popsicles</h3>

			</div>
			<div class="menu-item">
				<img src="https://plus.unsplash.com/premium_photo-1671980819443-e8bbeec85840?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDMwfHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
					alt="Lemon Balm Popsicles">
				<p>£7,99</p>
				<h3>Lemon Balm Popsicles</h3>
				
			</div>
			<div class="menu-item">
				<img src="https://images.unsplash.com/photo-1671637292704-bbc6fe8310a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ4fHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
					alt="Lemon Balm Popsicles">
				<p>£7,99</p>
				<h3>Lemon Balm Popsicles</h3>
				
			</div>
		</div>
	</div>
</body>

</html>
<?php include "footer1.php"	?>