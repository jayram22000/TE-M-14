<?php
$title = "Exercise: Number 1";
include "header.php" ?>





<!DOCTYPE html>
<html>

<head>
    <title>Restaurant Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: black;
            color: blue;
            padding: 20px;
        }

        h1 {
            margin: 0;
            text-align: center;
            background-color: black;
        }

        .menu-container {
            max-width: 800px;
            margin: 20px auto;
        }

        h2 {
            margin-top: 30px;
            margin-bottom: 20px;
            color: white;
        }

        .menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
            color: white;
        }

        .menu-list li {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 10px;
        }

        h3 {
            margin-top: 0;
        }

        .menu-description {
            margin-bottom: 10px;
        }

        .menu-price {
            float: right;
        }
    


</head>

<body>





    <header>
        <h1>Restaurant Menu</h1>
    </header>

    <section class="menu-container">
        <h2>Appetizers</h2>
        <ul class="menu-list">
            <li>
                <h3>Garlic Bread</h3>
                <p class="menu-description">Toasted bread with garlic and butter</p>
                <span class="menu-price">$5.99</span>
            </li>
            <li>
                <h3>Caprese Salad</h3>
                <p class="menu-description">Fresh mozzarella, tomatoes, and basil with balsamic glaze</p>
                <span class="menu-price">$7.99</span>
            </li>
        </ul>

        <h2>Entrees</h2>
        <ul class="menu-list">
            <li>
                <h3>Chicken Alfredo</h3>
                <p class="menu-description">Fettuccine pasta in a creamy Alfredo sauce with grilled chicken</p>
                <span class="menu-price">$12.99</span>
            </li>
            <li>
                <h3>Grilled Salmon</h3>
                <p class="menu-description">Fresh salmon fillet grilled to perfection with lemon butter sauce</p>
                <span class="menu-price">$15.99</span>
            </li>
        </ul>

        <h2>Desserts</h2>
        <ul class="menu-list">

            <li>
                <h3>Chocolate Brownie Sundae</h3>
                <p class="menu-description">Warm chocolate brownie topped with vanilla ice cream and hot fudge</p>
                <span class="menu-price">$6.99</span>
            </li>
            <li>
                <h3>Crème Brûlée</h3>
                <p class="menu-description">Rich and creamy vanilla custard with caramelized sugar topping</p>
                <span class="menu-price">$7.99</span>

            </li>
        </ul>

    </section>

</body>

</html>

</style>
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

<img src="logo.png" alt="">
<?php include "footer.php" ?>