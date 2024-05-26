<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ebooks</title>
    <meta name="title" content="Bookish - Read More And Make Success" />
    <meta
      name="description"
      content="Read More And Make Success The Result Of Perfection. - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad harum quibusdam, assumenda quia explicabo."
    />

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml" />

    <!-- 
    - custom css link
    -->
    <link rel="stylesheet" href="E-books\E-books\profile.css" />
    <link rel="stylesheet" href="style.css" />

    <!-- 
    - google font link
  -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    
    <!--Font Awesome CDN-->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!--Google Font-->

    <link
      href="https://fonts.googleapis.com/ css2?family=Rubik&display=swap"
      rel="stylesheet"
    />
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
              <a href="#Description" class="navbar-link" data-nav-link
                >Description</a
              >
            </li>

            <li class="navbar-item">
              <a href="#Preview" class="navbar-link" data-nav-link>Preview</a>
            </li>

            <li class="navbar-item">
              <a href="#Profile" class="navbar-link" data-nav-link>Profile</a>
            </li>

            <li class="navbar-item">
              <a href="#author" class="navbar-link" data-nav-link>Author</a>
            </li>

            <li class="navbar-item">
              <a href="#upload&download" class="navbar-link" data-nav-link
                >Upload & Download</a
              >
            </li>

            <li class="navbar-item">
              <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
            </li>
          </ul>
        </nav>

        <button
          class="nav-toggle-btn"
          aria-label="toggle menu"
          data-nav-toggler
        >
          <ion-icon
            name="menu-outline"
            aria-hidden="true"
            class="open"
          ></ion-icon>

          <ion-icon
            name="close-outline"
            aria-hidden="true"
            class="close"
          ></ion-icon>
        </button>
      </div>
    </header>

            
    <div class="container">
        <figure class="image-container">
          <img id="chosen-image" src="A Beautiful View.jpg" />
          <figcaption id="file-name">Demo File Name</figcaption>
        </figure>
  
        <input type="file" id="upload-button" accept="image/*" />
        <label for="upload-button">
          <i class="fas fa-upload"></i> &nbsp; Choose A Photo
        </label>

        
    <!-- <div class="upload_form"> -->
        <center>
            <div class="upload-input">  </label>

        
<!-- <div class="upload_form"> -->
    <center>
        <div class="upload-input"><center><input type="text" name="name" placeholder="Enter Your Name" id="name"></center>
                <center><input type="email" name="email" placeholder="Enter Your Email" id="email"></center>
                <center><input type="text" name="book_name" placeholder="Upload Your Book.." id="b_name"></center>
                <label for="fileInput" class="upload-label"><i class="fas fa-upload"></i>Choose File</label>
                <input type="file" id="fileInput" class="file-input" style="display: none;">     
            </div>
        </center>
        
    <footer class="footer">
        <hr>
  
          <div class="footer-bottom">
            <p class="copyright">
              &copy; 2024 All right reserved. Made with ❤ by codewithus.
            </p>
          </div>
        </div>
      </footer>

      <script src="profile.js"></script>

        <script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
      ></script>
      <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
      ></script>
        
  </body>
</html>
