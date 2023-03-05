<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- fonts -->
  <!-- font-family: 'Playfair Display', serif; -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="css/style.css">

  <title>Finsweet</title>
</head>

<body>

  <?php include('header.php')?>

  <div class="section contact">
    <div class="container">
      <div class="contact__wrapper">
        <div class="contact__side">
          <h1 class="contact__title title">Have a Question ? <br>Get in Touch with us</h1>
          <span class="contact__text">Fill up the Form  and ou team will get back to within 24 hrs</span>
          <div class="contact__form-box">
            <form action="#" class="contact__form">
              <input type="text" name="name" class="contact__input input" placeholder="Name" required>
              <input type="email" name="email" class="contact__input input" placeholder="Email" required>
              <input type="text" name="message" class="contact__input input" placeholder="Messege">
            </form>

            <a href="#" class="contact__btn">Send Messege
              <img src="assets/img/arrow-yellow.svg" class="arrow-yellow" alt="">
            </a> 
          </div>
        </div>
        <div class="contact__side">
          <img src="assets/img/contact/contact-1.jpg" alt="" class="contact__img">
          <img src="assets/img/contact/contact-2.jpg" alt="" class="contact__img">
        </div>
      </div>
    </div>
  </div>

  <?php include('map.php')?>
  <?php include('footer.php')?>

  <script src="js/main.js"></script>
</body>