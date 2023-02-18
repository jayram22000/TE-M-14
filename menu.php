
<?php
$title = "Exercise: Number 1";
 ?>
<body>  
<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Menu</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 20px;
		}
		h1 {
			text-align: center;
		}
		.menu {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: center;
			margin-top: 20px;
		}
		.menu-item {
			width: 30%;
			margin-bottom: 30px;
			position: relative;
			overflow: hidden;
		}
		.menu-item img {
			max-width: 100%;
			height: auto;
		}
		.menu-item .menu-item-text {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: rgba(0, 0, 0, 0.7);
			color: #fff;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			opacity: 0;
			transition: opacity 0.3s ease-in-out;
		}
		.menu-item:hover .menu-item-text {
			opacity: 1;
		}
		.menu-item .menu-item-text h2 {
			font-size: 24px;
			margin: 0;
		}
		.menu-item .menu-item-text p {
			font-size: 16px;
			margin: 0;
			text-align: center;
		}
		@media screen and (max-width: 767px) {
			.menu-item {
				width: 100%;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Our Menu</h1>
		<div class="menu">
			<div class="menu-item">
				<img src="img/item1.png" alt="Item 1">
				<div class="menu-item-text">
					<h2>Item 1</h2>
					<p>Description of Item 1</p>
				</div>
			</div>
			<div class="menu-item">
				<img src="img/item2.jpg" alt="Item 2">
				<div class="menu-item-text">
					<h2>Item 2</h2>
					<p>Description of Item 2</p>
				</div>
			</div>
			<div class="menu-item">
				<img src="img/item3.jpg" alt="Item 3">
				<div class="menu-item-text">
					<h2>Item 3</h2>
					<p>Description of Item 3</p>
				</div>
			</div>
			<div class="menu-item">
				<img src="img/item4.jpg" alt="Item 4">
				<div class="menu-item-text">
					<h2>Item 4</h2>
					<p>Description of Item 4</p>
				</div>
			</div>
			<div class="menu-item">
</body>

</html>
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



