<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- 
    - primary meta tags
  -->
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
    <link rel="stylesheet" href="/phpmicro/E-books/E-books/upstyle.css" />

    <!-- 
    - google font link
  -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- 
    - preload image

  -->
  <style>
        .message {
            background-color: #f2f2f2;
            color: #333;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
   
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

            

    <section class="section hero" id="u_home" aria-label="home">
        <div class="container">
            <div class="hero-content">
                <p class="section-subtitle">Let's Make The Best Investment</p>
            
                <h1 class="h1 hero-title">
                E-BOOKWS <br><span>UPLOAD &</span> DOWNLOAD
                </h1>
            
                <p class="section-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad
                 harum quibusdam, assumenda quia explicabo.
                </p>
      
          

                <form class="upload_form" action="uplo.php" method="post" enctype="multipart/form-data">
                    <h2>Upload here</h2>
                   
                        <input type="text" name="book_name" placeholder="Enter Your Book name.." id="b_name">
                      
                        <input type="text" name="book_auth" placeholder="Enter Author name.." id="A_name">

                        <div class="upload-input">
                          <label for="book_img">Book Cover Page</label><br>
        <input type="file" id="book_img" name="book_img"><br>
                      </div><br>

                    <div class="upload-input">
                        <label for="book_pdf">Enter E-Book</label>
                        <label for="fileInput" class="upload-label"><i class="fas fa-upload"></i>Choose File</label>
                        <input type="file" name="book_pdf" id="fileInput" class="file-input" style="display: none;">
                    </div><br>
                    <div class="upload-input">
                        <textarea type="text" name="description" placeholder="Enter Book Description.." id="B_desc"></textarea>
                       
                    </div>

                    <div>
                        <button class="btnn" type="submit" name="submit">Upload</button>
                    </div>
                    <div class="message">
        <?php echo $message; ?>
    </div>
                </form>
                </div>

      
            </div>
        </div>   
            
    </section>
    


    <footer class="footer">
        <hr>
  
          <div class="footer-bottom">
            <p class="copyright">
              &copy; 2024 All right reserved. Made with ❤ by codewithus.
            </p>
          </div>
        </div>
      </footer>

  </body>
</html>
