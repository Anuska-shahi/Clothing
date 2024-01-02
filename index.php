<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/mediaGrid.css" />
<link rel="stylesheet" href="css/responsive.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/index.js" defer></script>
<section class="hero">
    <div class="hero-contents col-10 col-m-7 col-s-3 marginAuto">
        <h1 class="hero-txt"><strong>D Aquarium &#38; Pet Store</strong></h1>
        <h3 class="hero-subtxt">
            Tailored accessories for your beloved companions.
        </h3>
        <a class="hero-scroller" href="#navbar">SCROLL DOWN</a>
        <img class="hero-pets" src="assets/hero-pets.svg" />
    </div>
</section>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>


        <!-- Main content -->
        <div class="content-wrapper">
            <div class="main-hero-wrapper">
                <div class="left-hero-wrapper col-6 col-m-8 col-s-1">
                    <h1 class="hero-header">One-stop solution for all your pet needs.</h1>
                    <h3 class="hero-subheader">Everything you need in one place.</h3>
                </div>
                <div class="right-hero-wrapper col-6 col-m-8 col-s-4">
                    <img id="hero-husky" src="assets/husky-hero.webp" />
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>
</body>

</html>