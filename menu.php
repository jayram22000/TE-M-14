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
	button{
		height: 5%;
		width:20%
	}
	
</style>

</head>

<body>
	<div class="container">
		<h1>Salsa Restaurant Menu</h1>
		<div class="menu">
			<div class="menu-item">
				<img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&ixid" width=100%, height=100%;
					alt="spicy beef burger">
					<button type="button" class="btn btn-primary">order</button>
					<h3>Burger</h3><p><br>£4,20</p>
				
				<br>
				<br>

			</div>
			<div class="menu-item">
				<img src="https://images.unsplash.com/photo-1611171711925-92171c63fc4b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHNhbGFkc3xlbnwwfHwwfHw%3D&auto" width=100%, height=100%;
					alt="Mixed Green Salad with apple and Goat Cheese">
					<button type="button" class="btn btn-primary">order</button>
					<h3>apple Salad</h3><p><br>£3,99</p>
				
				
				<br>
				<br>
			</div>
			<div class="menu-item">
				<img src="https://images.unsplash.com/photo-1568158879083-c42860933ed7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHNhbGFkc3xlbnwwfHwwfHw%3D&auto"width=100%, height=100%;
					alt="Mixed Green Salad with apple and Goat Cheese">
					<button type="button" class="btn btn-primary">order</button>
					<h3>Mixed Green Salad</h3><p><br>£5,99</p>
				
				<br>
				
			</div>
			<div class="menu-item">
				<img src="https://images.unsplash.com/photo-1655536259633-05170abf4b8b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDYyfHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto"width=100%, height=100%;
					alt="Lemon Balm Popsicles">
					<button type="button" class="btn btn-primary">order</button>
					<h3>Lemon Balm Popsicles</h3> <p><br>£4,99</p>
				
				<br>
				<br>

			</div>
			<div class="menu-item">
				<img src="https://plus.unsplash.com/premium_photo-1671980819443-e8bbeec85840?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDMwfHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto" width=100%, height=100%;
					alt="Lemon Balm Popsicles">
					<button type="button" class="btn btn-primary">order</button>
					<h3>Lemon Balm Popsicles</h3> <p><br>£7,99</p>
				
				
				<br>
				<br>
			</div>
			<div class="menu-item">
				<img src="https://images.unsplash.com/photo-1671637292704-bbc6fe8310a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ4fHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto"width=100%, height=100%;
					alt="Lemon Balm Popsicles">
					<button type="button" class="btn btn-primary">order</button> 
					<h3>Lemon Balm Popsicles</h3> <p><br>£7,99</p>
				
				
				
				
			</div>
		</div>
	</div>
</body>

</html>
<br>
<br>
<br>
<?php include "footer1.php"	?>

    <div id="ocFooterWrapper">
 <div id="supWrapperToPreventFeedbackFlickering" data-enable-star-rating="False">
  <section id="supFeedbackWrapper" class="prrFeedbackWrapper">
 <div id="supColumnWrapper" class="prrFeedbackWrapper">
   <div id="supFeedBackCountainer">
   <section id="supFB" class="ocFB">
   <div id="supFBCont">
   <form action="javascript:void(0);" id="extendedFeedbackForm" name="smartFeedbackForm"
    class="smartFeedbackForm supStickyFeedbackMarginBottom">
    <div class="ocSmartFeedbackBegin extendedFeedbackArticleInfoUseful" role="region"
  aria-label="provide feedback about this article">
    <h2 id="beginFeedbackHeader" class="boldFont extendedFeedbackHeader"> was the
    service good?</h2>
   <div class="feedbackButtons" role="group" aria-labelledby="beginFeedbackHeader">
    <button
    class="ocFeedbackButton supStickyFeedbackBotton feedbackSelection feedbackButtonBlue"
    name="buttonYes" type="button" data-bi-id="buttonYes"
 data-bi-mto>Yes</button>
 <button
    class="ocFeedbackButton supStickyFeedbackBotton feedbackSelection feedbackButtonBlue"
  name="buttonNo" type="button" data-bi-id="buttonNo"
  data-bi-mto>No</button>
   </div>
   </div>