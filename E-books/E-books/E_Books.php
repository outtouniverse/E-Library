<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- 
    - primary meta tags
  -->
  <title>E-Books</title>
  <meta name="title" content="Bookish - Read More And Make Success" />
  <meta name="description" content="Read More And Make Success The Result Of Perfection. - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad harum quibusdam, assumenda quia explicabo." />

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml" />

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="style.css" />

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

  <!-- 
    - preload image
  -->
  <link rel="preload" as="image" href="hero-banner.png" />
</head>

<body>
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <a href="#" class="logo">E-Books</a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#benefits" class="navbar-link" data-nav-link>Description</a>
          </li>

          <!-- <li class="navbar-item">
              <a href="#chapters" class="navbar-link" data-nav-link>Chapters</a>
            </li> -->

          <li class="navbar-item">
            <a href="#pricing" class="navbar-link" data-nav-link>Profile</a>
          </li>

          <li class="navbar-item">
            <a href="#author" class="navbar-link" data-nav-link>Author</a>
          </li>

          <li class="navbar-item">
            <a href="#achievements" class="navbar-link" data-nav-link>Upload & Download</a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
          </li>
        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="open"></ion-icon>

        <ion-icon name="close-outline" aria-hidden="true" class="close"></ion-icon>
      </button>
    </div>
  </header>

  <main>
    <article>
      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="home">
        <div class="container">
          <div class="hero-content">
            <p class="section-subtitle">Let's Make The Best Investment</p>

            <h1 class="h1 hero-title">
              Read More And Make Success The Result Of Perfection.
            </h1>

            <p class="section-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad
              harum quibusdam, assumenda quia explicabo.
            </p>
          </div>

          <div class="hero-banner has-before">
            <img src="hero-banner.png" width="431" height="596" alt="things i never said, a novel by claudia wilson" class="w-100" />

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>
        </div>
      </section>

      <!-- 
        - #BENEFITS
      -->

      <section class="section benefits" id="benefits" aria-label="benefits">
        <div class="container">
          <li class="benefits-content">
            <h2 class="h2 section-title">
              Description of books and their Authors
            </h2>

            <p class="section-text">
              Lorem ipsum dolor sit amet, consectetuer laoreet dolore magna.
            </p>
          </li>
          <li>
            <div class="all-books" style="display: flex; align-items:center; justify-content:center; flex-wrap:wrap; gap:2vw; flex-direction:row;">
              <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "micro";

              $conn = new mysqli($servername, $username, $password, $dbname);

              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              // Query to select all books
              $sql = "SELECT * FROM `ebook`";
              $result = $conn->query($sql);

              // Display books
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  $bookName = $row["bname"];
                  $bookimg = $row["bpic"];
                  $bookauth = $row["bauthour"];
                  $description = $row["bdescription"];
                  $pdfFile = $row["bpdf"];
              ?>
                  <div class="book-div" style=" width:20%; height:50%;">
                    <div class="benefits-card has-before has-after">
                      <div class="card-icon">
                        <img src="uploads/<?php echo $bookimg; ?>" alt="<?php echo $bookName; ?>" width="100" height="150">
                      </div>
                      <h3 class="h3 card-title"><?php echo $bookName; ?></h3>
                      <p class="card-text">
                        <?php echo  $bookauth; ?><br><?php echo $description; ?></p>
                      <p><a href="uploads/<?php echo $pdfFile; ?>" download><button class="btn btn-secondary">Download</button></a></p>
                    </div>
                  </div>
              <?php
                }
              } else {
                echo "No books uploaded yet.";
              }

              $conn->close();
              ?>
            </div>

          </li>
        </div>
      </section>

    

      <section class="section preview" aria-label="preview">
        <div class="container">
          <p class="section-subtitle">Preview</p>

          <h2 class="h2 section-title has-underline">
            Top-5 E-Books
            <span class="span has-before"></span>
          </h2>

          <ul class="tab-list">
            <li>
              <div class="tab-card active" data-tab-card>
                <h3 class="h3 tab-text">Kobo Libra 2</h3>

                <img src="preview-1.png" width="820" height="630" loading="lazy" alt="Chapter 1" class="w-100" />
              </div>
            </li>

            <li>
              <div class="tab-card" data-tab-card>
                <h3 class="h3 tab-text">Amazon Kindle Paperwhite</h3>

                <img src="preview-2.png" width="820" height="630" loading="lazy" alt="Chapter 2" class="w-100" />
              </div>
            </li>

            <li>
              <div class="tab-card" data-tab-card>
                <h3 class="h3 tab-text">Kindle Scribe</h3>

                <img src="preview-3.png" width="820" height="630" loading="lazy" alt="Chapter 3" class="w-100" />
              </div>
            </li>

            <li>
              <div class="tab-card" data-tab-card>
                <h3 class="h3 tab-text">Amazon Kindle Oasis</h3>

                <img src="preview-4.png" width="820" height="630" loading="lazy" alt="Chapter 4" class="w-100" />
              </div>
            </li>

            <li>
              <div class="tab-card" data-tab-card>
                <h3 class="h3 tab-text">BOOX Tab X</h3>

                <img src="preview-5.png" width="820" height="630" loading="lazy" alt="Chapter 5" class="w-100" />
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- 
        - #PRICING
      -->

      <section class="section pricing" id="pricing" aria-label="pricing">
        <div class="container">
          <p class="section-subtitle">Profile</p>

          <h2 class="h2 section-title has-underline">
            Student's Profile
            <span class="span has-before"></span>
          </h2>
          <div class="profiles-container">
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "micro";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch user profiles
            $sql = "SELECT `usern`, `email` FROM `login`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // Output data of each row
              while ($row = $result->fetch_assoc()) {
                echo '<div class="profile">';
                echo '<div class="pricing-card">';
                echo '<data class="price" value="5"><center><img src="book-1.jpg" /></center></data>';
                echo '<ul class="pricing-card-list">';
                echo '<li class="card-item"><p class="card-text">Name: ' . $row["usern"] . '</p></li>';
                echo '<li class="card-item"><p class="card-text">Email: ' . $row["email"] . '</p></li>';
                echo '</ul>';
                echo '<button class="btn btn-secondary">Edit</button>';
                echo '</div>';
                echo '</div>';
              }
            } else {
              echo "0 results";
            }

            $conn->close();
            ?>
          </div>

          </ul>
        </div>
      </section>

      <!-- 
        - #AUTHOR
      -->

      <section class="section author" id="author">
        <div class="container">
          <figure class="author-banner img-holder" style="--width: 700; --height: 720">
            <img src="author-1.jpeg" width="700" height="720" loading="lazy" alt="Martin Jenny" class="img-cover" />
          </figure>

          <div class="author-content">
            <p class="section-subtitle">The Author</p>

            <h2 class="h2 section-title">Michael Stern Hart</h2>

            <p class="author-name">Style: Art, Fiction</p>

            <div class="section-text">
              Starting back in 1971, Michael S. Hart launched Project
              Gutenberg and digitized the U.S. Declaration of Independence,
              becoming the first eBook in the world. (To put the date into
              context, 1971 was the year that the first email message was ever
              sent– between two mainframe computers!) In 1985, the Voyager
              Company, a pioneer in CD-ROMs, was founded and published
              “expanded books” on CD-ROM including Michael Crichton’s Jurassic
              Park, and in 1993, Digital Book, Inc. offered the first 50
              digital books on floppy disk.
            </div>
          </div>
        </div>
      </section>

      <!-- 
        - #ACHIEVEMENT
      -->

      <section class="section achievement" id="achievements" aria-label="achievement">
        <div class="container">
          <p class="section-subtitle">E-Books</p>

          <h2 class="h2 section-title has-underline">
            Upload & Download
            <span class="span has-before"></span>
          </h2>

          <ul class="grid-list">
            <li>
              <div class="achievement-card">
                <figure class="card-banner img-holder" style="--width: 450; --height: 300">
                  <img src="achievement-1.jpg" width="450" height="300" loading="lazy" alt="Nominated" class="img-cover" />
                </figure>

                <div class="card-content">
                  <img src="award.svg" width="80" height="80" loading="lazy" alt="trophy" class="abs-img" />

                  <h3 class="h3 card-title">Upload your e-Book here</h3>

                  <p class="card-text">
                    International Thriller Writers Award for Best Novel (These
                    Toxic Things)
                  </p>
                  <br />
                  <button style="background-color: #866584; padding:5px 22px; border-radius:50px; color:#fff;"><a class="uploadBtn" href="upload.html
                    ">Upload</a></button>
                </div>
              </div>
            </li>





          </ul>
        </div>
      </section>

      <!-- 
        - #CONTACT
      -->

      <section class="section contact" id="contact" aria-label="contact">
        <div class="container">
          <p class="section-subtitle">Contact</p>

          <h2 class="h2 section-title has-underline">
            Write me anything
            <span class="span has-before"></span>
          </h2>

          <div class="wrapper">

            <form method="post" action="/phpmicro/contact.php" class="contact-form">
              <input type="text" name="name" placeholder="Your Name" required class="input-field" />

              <input type="email" name="email_address" placeholder="Your Email" required class="input-field" />

              <input type="text" name="subject" placeholder="Subject" required class="input-field" />

              <textarea name="message" placeholder="Your Message" class="input-field"></textarea>

              <button type="submit" class="btn btn-primary">Send Now</button>
            </form>
            <ul class="contact-card">
              <li>
                <p class="card-title">Address:</p>

                <address class="address">
                  RC Technical<br />
                  Sola, Ahmedabad
                </address>
              </li>

              <li>
                <p class="card-title">Phone:</p>

                <a href="tel:1234567890" class="card-link">123 456 7890</a>
              </li>

              <li>
                <p class="card-title">Email:</p>

                <a href="mailto:support@support.com" class="card-link">abc@gmail.com</a>
              </li>

              <li>
                <p class="social-list-title h3">Connect book socials</p>

                <ul class="social-list">
                  <li>
                    <a href="#" class="social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="social-link">
                      <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="social-link">
                      <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="social-link">
                      <ion-icon name="logo-whatsapp"></ion-icon>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <a href="#" class="logo">E-Books</a>

        <ul class="footer-list">
          <li>
            <a href="#" class="footer-link">Home</a>
          </li>

          <li>
            <a href="#" class="footer-link">Description</a>
          </li>

          <!-- <li>
              <a href="#" class="footer-link">Chapters</a>
            </li> -->

          <li>
            <a href="#" class="footer-link">Profile</a>
          </li>

          <li>
            <a href="#" class="footer-link">Author</a>
          </li>

          <li>
            <a href="#" class="footer-link">Upload & Download</a>
          </li>


          <li>
            <a href="#" class="footer-link">Contact</a>
          </li>
        </ul>
      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy; Made with ❤ by AK.
        </p>
      </div>
    </div>
  </footer>

  <!-- 
    - custom js link
  -->
  <script src="script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>