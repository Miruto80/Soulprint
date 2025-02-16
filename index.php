<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/a994ffc8cf.js" crossorigin="anonymous"></script>
    <title>Soulprint creative</title>
</head>
<body>
    <div class="top-bar" id="top-bar">
        <div class="top-bar-content">
            <span class="contact-info"><i class="fa-solid fa-phone"> Call us:</i><a href="tel:817-376-7103"> 817-376-7103</a></span>
            <div class="social-links">
                <a href="https://www.facebook.com/profile.php?id=61566474924038&mibextid=wwXIfr" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/soulprintcreativ?igsh=MTU4MjBkbWU0dGtoaA%3D%3D&utm_source=qr" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="imagenes/Logo2.png" alt="Logo Taekyon" width="170" height="130" class="d-inline-block align-text-top">
            </a>
            <h1 class="navbar-brand fs-4 d-none d-sm-inline d-lg-inline fs-lg-2 text-white">
              <b>Your imagination, our creation</b>
            </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-white"></i>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="#top-bar">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Clothes">Clothes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Banners</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Articles">Articles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Reviews.php">Reviews</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      
      <section class="info-section">
        <h2>Our Story – Soulprint Creative</h2>
        <p id="pinfo">
            Welcome to Soulprint Creative, a space where creativity comes to life, and every design tells a story. I’m Luissana Colina, a passionate creator who believes that every detail matters and that each piece should be a unique expression of the person who wears it.
        </p>
        <div class="features">
            <div class="card-group">
              <div class="card">
                <img class="card-img-top" src="imagenes/Joven.jpeg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Since childhood, I’ve had a special connection with crafts, design, and the joy of creating something unique from scratch. Although my professional journey led me to become a lawyer, my true passion has always been design—the ability to transform ideas into something tangible, meaningful, and special.</p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="imagenes/Familia.jpeg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Soulprint Creative was born as a family dream, a project where I pour my heart and creativity into crafting products that reflect each person’s essence. From personalized shirts to mugs, tumblers, and a variety of custom-made items, every piece we create is made with dedication, ensuring it becomes more than just an object—it becomes a personal mark, an expression of identity and emotion.</p>     
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="imagenes/Decoracion (1).jpeg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">I truly believe that details make all the difference, and through personalization, we can bring joy, inspiration, and connection to those around us. My mission with Soulprint Creative is not just to offer products but to create experiences, memories, and special moments that last a lifetime.</p>
                </div>
              </div>
            </div>
      </section>
      
    

    <h2 id="Clothes">Clothes</h2>
    <div class="caja_img">
    
        <div class="car">
        <div class="car-images">
            <img src="imagenes/Ropa.jpeg" title="2023 Honda civic" alt="2023 Honda civic">
            <img src="imagenes/Ropa (3).jpeg" title="2023 Honda civic" alt="2023 Honda civic">
        <div class="car-info">
            <h3>Full Clothes</h3>
            <div class="car-controls">
                <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                <button class="arrow" onclick="nextImage(this)">&#9654;</button>
            </div>
            <button onclick="openForm('Full Clothes')">Request Information</button>
        </div>
    </div>
</div>
<div class="car">
        <div class="car-images">
            <img src="imagenes/Uniformes (1).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Uniformes (2).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Uniformes.jpeg" title="Uniformes" alt="Uniformes">
        <div class="car-info">
            <h3>Uniforms</h3>
            <div class="car-controls">
                <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                <button class="arrow" onclick="nextImage(this)">&#9654;</button>
            </div>
            <button onclick="openForm('Uniforms')">Request Information</button>
        </div>
    </div>
</div>


<div class="car">
        <div class="car-images">
            <img src="imagenes/Camisa (1).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (2).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (3).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa.jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (4).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (5).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (6).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (7).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (8).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (9).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (10).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (11).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (12).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Camisa (13).jpeg" title="Uniformes" alt="Uniformes">
        <div class="car-info">
            <h3>Shirts</h3>
            <div class="car-controls">
                <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                <button class="arrow" onclick="nextImage(this)">&#9654;</button>
            </div>
            <button onclick="openForm('Shirts')">Request Information</button>
        </div>
    </div>
</div>

<div class="car">
        <div class="car-images">
            <img src="imagenes/Sueter (1).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Sueter (2).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Sueter (3).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Sueter (4).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Sueter (5).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Sueter (6).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Sueter (7).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Sueter (8).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Sueter.jpeg" title="Uniformes" alt="Uniformes">
        <div class="car-info">
            <h3>Hoodies</h3>
            <div class="car-controls">
                <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                <button class="arrow" onclick="nextImage(this)">&#9654;</button>
            </div>
            <button onclick="openForm('Hoodies')">Request Information</button>
        </div>
    </div>
</div>

<div class="car">
        <div class="car-images">
            <img src="imagenes/Baby.jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Baby (2).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Baby (3).jpeg" title="Uniformes" alt="Uniformes">
            <img src="imagenes/Baby (4).jpeg" title="Uniformes" alt="Uniformes">
        <div class="car-info">
            <h3>Kids</h3>
            <div class="car-controls">
                <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                <button class="arrow" onclick="nextImage(this)">&#9654;</button>
            </div>
            <button onclick="openForm('Kids')">Request Information</button>
        </div>
    </div>
</div>
<div class="car">
        <div class="car-images">
            <img src="imagenes/Sueters pareja.jpeg" title="Uniformes" alt="Uniformes">
        <div class="car-info">
            <h3>Couple</h3>
            <div class="car-controls">
                <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                <button class="arrow" onclick="nextImage(this)">&#9654;</button>
            </div>
            <button onclick="openForm('Couple')">Request Information</button>
        </div>
    </div>
</div>
</div>

<section class="car-carousel">
    <div class="carousel-container">
        <h2 class="carousel-title">Banners</h2>
        <button class="carousel-arrow left-arrow" onclick="previousImage()">&#8249;</button>
        <div class="carousel-image">
            <img id="carousel-bg" src="imagenes/Banner.jpeg" alt="Banner">
        </div>
        <button class="carousel-arrow right-arrow" onclick="nexttImage()">&#8250;</button>
    </div>
</section>

<h2 id="Articles">Articles</h2>
<div class="caja_img">

    <div class="car">
    <div class="car-images">
        <img src="imagenes/Bandeja.jpeg" title="2023 Honda civic" alt="2023 Honda civic">
    <div class="car-info">
        <h3>Trays</h3>
        <div class="car-controls">
            <button class="arrow" onclick="prevImage(this)">&#9664;</button>
            <button class="arrow" onclick="nextImage(this)">&#9654;</button>
        </div>
        <button onclick="openForm('Trays')">Request Information</button>
    </div>
</div>
</div>
<div class="car">
    <div class="car-images">
        <img src="imagenes/Vasos.jpeg" title="Cups" alt="Cups">
        <img src="imagenes/Decoracion (3).jpeg" title="Cups" alt="Cups">
    <div class="car-info">
        <h3>Cups</h3>
        <div class="car-controls">
            <button class="arrow" onclick="prevImage(this)">&#9664;</button>
            <button class="arrow" onclick="nextImage(this)">&#9654;</button>
        </div>
        <button onclick="openForm('Cups')">Request Information</button>
    </div>
</div>
</div>
<div class="car">
    <div class="car-images">
        <img src="imagenes/Decoracion (1).jpeg" title="Decoracion" alt="Decoracion">
        <img src="imagenes/Decoracion (2).jpeg" title="Decoracion" alt="Decoracion">
        <img src="imagenes/Decoracion (3).jpeg" title="Decoracion" alt="Decoracion">
        <img src="imagenes/Decoracion (4).jpeg" title="Decoracion" alt="Decoracion">
        <img src="imagenes/Decoracion (5).jpeg" title="Decoracion" alt="Decoracion">
    <div class="car-info">
        <h3>Themed decoration</h3>
        <div class="car-controls">
            <button class="arrow" onclick="prevImage(this)">&#9664;</button>
            <button class="arrow" onclick="nextImage(this)">&#9654;</button>
        </div>
        <button onclick="openForm('Themed decoration')">Request Information</button>
    </div>
</div>
</div>
</div>

<section id="reviewsList" >
  <h3 class="text-center">Recent Reviews</h3>
  <?php
  $conn = new mysqli('localhost', 'u417714339_Soulprint', 'Basededatos13.', 'u417714339_ReviewsSoul');
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
          $result = $conn->query("SELECT name, rating, review, created_at FROM reviews ORDER BY created_at DESC LIMIT 3");
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $stars = str_repeat('★', $row['rating']) . str_repeat('☆', 5 - $row['rating']);
              
              // Formatear la fecha a un formato más amigable (February 9, 2025)
              $created_at = date("F j, Y", strtotime($row['created_at']));
              
              echo "<div>
                      <strong>" . htmlspecialchars($row['name']) . " <span class='star-rating'>($stars)</span></strong>
                      <p>" . htmlspecialchars($row['review']) . "</p>
                      <small>Reviewed on: $created_at</small>
                    </div>";
            }
          } else {
            echo "<p>No reviews yet. Be the first to leave one!</p>";
          }
          $conn->close();
          ?>
<button onclick="location.href='Reviews.php'">Leave a review here</button>
</section>



<div id="contactForm" class="form-popup">
    <form class="form-container" action="https://formspree.io/f/xzzdgjwz" method="POST" onsubmit="return validarenvio()">
        <div class="form-header">
            <h2>Request Information</h2>
            <button type="button" class="close-icon" onclick="closeForm()">✖</button>
        </div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Your name" required>
        <span id="sname" class="errorform"></span>

        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" placeholder="Your email or phone number" required>
        <span id="scontact" class="errorform"></span>

        <label for="message">Message</label>
        <textarea name="message" id="message" placeholder="Your message" required></textarea>
        <span id="smessage" class="errorform"></span>


        <label for="car">Interest in</label>
        <input type="text" name="car" id="car" readonly>

        <input type="submit" class="btn" value="Send">
    </form>
</div>

<footer>
    <h4>Social Media</h4>
    <div class="redes-sociales" id="contact">
        <a target="_blank" href="https://www.instagram.com/soulprintcreativ?igsh=MTU4MjBkbWU0dGtoaA%3D%3D&utm_source=qr">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a target="_blank" href="https://www.facebook.com/profile.php?id=61566474924038&mibextid=wwXIfr">
            <i class="fa-brands fa-facebook"></i>
        </a>
        <i><i class="fa-solid fa-phone"></i><a href="tel:817-376-7103"> 817-376-7103 </a></i>
        <i>Creativesoulprint@gmail.com <i class="fa-solid fa-envelope"></i></i>

    </div>
    
    <div class="legal">
        <button id="legal-button">
            Legal <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div id="legal-content" class="hidden">
            <p>&copy; Soulprint creative 2024</p>
            <p>All rights reserved. The images are used with permission.</p>
        </div>
    </div>
</footer>


    <script src="js/index.js"></script>
</body>
</html>