<!DOCTYPE html>
<html lang="en">
<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/mediaGrid.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="main contactUs">
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
    </div>
    <div class="contactForm">
        <div class="map-wrapper"></div>
        <div class="contactForm-wrapper">
            <main class="contact">
                <h3 class="section-header">Contact Us</h3>

                <div class="contactForm-wrapper">
                    <form id="contact-form" class="form-horizontal" role="form"
                        action="https://usebasin.com/f/771198f83426" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                    value="" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <input type="tel" class="form-control" id="number" placeholder="Phone Number"
                                    name="Phone Number" value="" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                    value="" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <select class="form-control" id="SubjectSelect" placeholder="Subject" name="Subject"
                                    value="" required>
                                    <option value="General Inquiry" selected>
                                        General Inquiry
                                    </option>
                                    <option value="Book an appointment">
                                        Book an appointment
                                    </option>
                                    <option value="Product/ Service Details">
                                        Product/ Service Details
                                    </option>
                                </select>
                            </div>
                            <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"
                                required></textarea>
                        </div>

                        <div class="submit-wrapper">
                            <button class="send-button" id="submit" type="submit" value="SEND">
                                <p>SEND</p>
                            </button>
                        </div>
                    </form>
                    <iframe id="map"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1129.834268719453!2d85.33314107834367!3d27.699738923048812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1684938762129!5m2!1sen!2snp"
                        style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </main>
        </div>
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