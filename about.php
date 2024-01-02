<!DOCTYPE html>
<html lang="en">
<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/mediaGrid.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="main">
        <header>
            <nav id="navbar">
                <ul>
                    <li class="logo" id="nav-logo" onclick="location.href = 'index.php'">
                        D Aquarium &#38; Pet Store
                    </li>
                    <li class="items"><a href="about.php">About Us</a></li>
                    <li class="items"><a href="contact.php">Contact</a></li>
                    <li class="items"><a href="login.php">Login</a></li>

                </ul>
            </nav>
        </header>

        <main>
            <h1 class="t-center t-accent">About Us</h1>
            <div class="about-details">
                <div class="about-txt col-6">
                    <p>
                        We, D Aquarium and Pet Store, are a well-known pet shop situated
                        in Dallu Chautara, Kathmandu. We established our store back in
                        2007 A.D, Naresh Munikar and Sumita Maharjan, along with three
                        more dedicated staff members. Being one of the oldest pet shops in
                        this bustling commercial area, we take pride in specializing in
                        aquarium supplies and a variety of pets, such as fish, birds, and
                        small animals.
                    </p>
                    <br>
                    <p>
                        As the owners of D Aquarium and Pet Store, we are deeply
                        passionate about offering top-notch pet products and delivering
                        personalized customer service to all the pet owners in our
                        community. We also extend our services to provide in-home
                        assistance to animals in need of vaccinations or treatment for
                        specific ailments. Our store has garnered a reputation for
                        offering an extensive range of aquarium supplies, including
                        filters, pumps, and lighting options. Additionally, we take pride
                        in our diverse selection of fish and small pet animals.
                    </p>
                </div>
                <div class="about-img col-6">
                    <img src="assets/family-pet.jpg" id="family-pets" />
                </div>
            </div>
        </main>
    </div>
    <section class="footer-section">
        <footer>
            <a href="https://www.facebook.com/profile.php?id=100057303054335" target="_blank">Facebook</a>
            <a href="https://goo.gl/maps/3e4y7zVzaGkPTNRe7" target="_blank">Take me there!</a>
            <a href="tel:+9779841584306" target="_blank">Whatsapp</a>
        </footer>
    </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/index.js" defer></script>

</html>