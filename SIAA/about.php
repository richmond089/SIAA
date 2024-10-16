<?php include('partials-front/menu.php'); ?>

<style>
.about {
    border-radius: 15px;
    position: relative;
    width: 1100px;
    height: 700px;
    padding: 0px;
    text-align: left; /* Align text to the left */
    margin: auto;
    margin-top: 8px;
    color: black;
    align-content: center;
    font-family: sans-serif;
    box-shadow: 0px 8px 15px -2px rgba(0,0,0,0.5);
    text-decoration-color: black;
    background-color: #f9f9f9; /* Added background color */
    display: flex; /* Use flexbox */
    justify-content: space-between; /* Space between text and image */
    align-items: center; /* Center items vertically */
}

.about img {
    height: 55%;
    margin: 50px;
    padding-top: 0px;
    width: 400px;
    border-radius: 20%;
    float: left; /* Float image to the left */
    margin-right: 55px; /* Add margin to the right of the image */
}

.about .card-text {
    text-align: left; /* Align text to the left */
    width: 60%; /* Adjusted width to fit better */
    height: 50%;
    margin: 50px; /* Remove auto margin */
    padding-top: 20px;
    font-size: 18px;
}

.title {
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    margin-top: 20px;
}
</style>

<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="wrappera">
        <div class="title">About Us</div>
        <div class="about">
            <p class="card-text">Welcome to LEX EAT NAA, a fusion of culinary flavors, a touch of today’s technology and a seamless dining experience. A humble food cart founded in 2018, and then steadily growing, our customer base and operational needs have also grown. To meet demand and offer better service, we’ve harnessed our Online Ordering and Point of Sale (POS) system with email notification, e-receipts to deliver a convenient transaction. We try to simplify order processing, minimize errors and real time financial tracking, so that customers are better served and business is better run. This bottom to top dribble txt is how we’re introducing LEX EAT NAA - Innovation meets flavor and serves you better, faster, smarter… </p>
            <img src="images/abt.jpg">
        </div>
    </div>
</div>
<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    <div class="imagecont">
    </div>
</div>

<?php include('partials-front/footer.php'); ?>