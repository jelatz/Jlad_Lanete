<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_assets/css/bootstrap.css">
    <link rel="stylesheet" href="_assets/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <title>Jlad Lanete Portfolio</title>
</head>

<body>
<!-- HOME -->
    <section id="home" style="background-color: black;">
        <div class="container-fluid" style="height: inherit;">
            <div class="row p-2" style="height: inherit;">
                <div class="col-md-2 p-0">
                            <nav class="nav nav-pills nav-stacked flex-column gap-md-5 align-items-center">
                                <a href="index.php" class="nav-link my-3"><img src="_assets/images/logo.png" alt="logo" width="300" height="100" class="img-fluid"></a>
                                <a class="nav-link text-white fw-bolder my-sm-4 " href="#about">About</a>
                                <a class="nav-link text-white fw-bolder my-sm-4 " href="#portfolio">Portfolio</a>
                                <a class="nav-link text-white fw-bolder my-sm-4 " href="#services">Services</a>
                                <a class="nav-link text-white fw-bolder my-sm-4 " href="#contact">Contact</a>
                            </nav>
                        </div>

                <div class="col-md-8">
                    <img src="_assets/images/back.gif" alt="background" class="" width="100%" height="100%">
                </div>

                <div class="col-md-2 d-flex align-items-center justify-content-center">
                    <ul class="nav nav-pills nav-stacked justify-content-center medium gap-md-3">
                        <a href="https://www.facebook.com/latz.lanete" class="nav-link fs-3"><i class="bi bi-facebook text-secondary"></i>
                        </a>
                        <a href="https://www.instagram.com/lanetejlad/" class="nav-link fs-3"><i class="bi bi-instagram text-secondary"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/jojie-lad-lanete-3466b116a/" class="nav-link fs-3"><i class="bi bi-linkedin text-secondary"></i>
                        </a>
                        <a href="https://github.com/jelatz" class="nav-link fs-3"><i class="bi bi-github text-secondary"></i>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT -->
    <section id="about" class="bg-dark overflow-auto">
        <div class="container-fluid p-4" style="height: inherit;">
            <div class="row justify-content-center text-center gap-5 align-items-center" style="height: inherit;">
                <div class="col-md-4 align-center">
                    <img src="_assets/images/profile1.jpg" alt="profile" width="400" height="500" class="rounded img-fluid zoom">
                </div>
                <div class="col-md-4 align-items-center d-flex flex-column">
                    <p class="text-white fs-5">Hello Everyone! I am Jay, a dedicated graduating student and currently an intern of Accenture Philippines. Everything started way back 2018 when my client asked me to help him out with his website. I did learn some things online and got interested in web development. I went to school and took Bachelors of Science in Information Technology(BSIT).

                    Fast forward, I am now a freelance web developer and a virtual assistant at the same time. Eager to explore new things specially in the field of technology. 

                </p>
                <figure class="text-center">
                <blockquote class="blockquote">
                <p class="text-white">
                The beautiful thing about learning is that nobody can take it away from you.
                </p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <cite>B.B. King</cite>
                </figcaption>
                </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- PORTFOLIO -->
    <section id="portfolio" class="position-relative p-2" style="background-color: black;">
        <div class="container d-flex text-center align-items-center align-center justify-content-center" style="height: inherit;">
            <div class="row">
            <h1 class="text-white mb-5">My Projects</h1>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="_assets/images/saekyung.png" class="d-block w-100" alt="Saekyung Auxilium">
                    <h1 class="text-white pt-4">Saekyung Auxilium</h1>
                  </div>
                  <div class="carousel-item">
                    <img src="_assets/images/rfid.png" class="d-block w-100" alt="rfid">
                    <h1 class="text-white pt-4">USPF RFID Processing</h1>
                  </div>
                  <div class="carousel-item">
                    <img src="_assets/images/iqonnect.png" class="d-block w-100" alt="iQonnect">
                    <h1 class="text-white pt-4">iQonnect</h1>
                  </div>
                  <div class="carousel-item">
                    <img src="_assets/images/healteeth.png" class="d-block w-100" alt="healteeth">
                    <h1 class="text-white pt-4">Healteeth</h1>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
        </div>
    </section>
    <!-- SERVICES -->
    <section id="services" class="bg-dark">
        <div class="container-fluid" style="height: inherit;">
            <div class="row justify-content-center align-items-center flex-column" style="height: inherit;">
                <h1 class="text-white text-center my-5 fw-bolder">Services</h1>
                <div class="col-10 text-center gap-4 d-flex flex-column align-items-center">
                    <h1 class="text-white" style="font-family: 'Lato';">Web Development Support and Maintenance</h1>
                    <h1 class="text-white" style="font-family: 'Lato';">Web Design</h1>
                    <h1 class="text-white" style="font-family: 'Lato';">Web Programming</h1>
                    <h1 class="text-white" style="font-family: 'Lato';">Web Optimization</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT -->
    <section id="contact" class="" style="background-color: black;">
    <?php if (isset($_GET['sent'])) { ?><p class="success alert alert-success"><?php echo $_GET['sent']; ?></p> <?php } ?>
        <div class="container-fluid" style="height: inherit;">
            <div class="row justify-content-center align-items-center" style="height: inherit;">
                <h1 class="text-white text-center" style="font-family: 'Lato';">Send me a message!</h1>
                <div class="col-lg-5 col-md-6 col-xl-4 p-5 rounded" style="background: rgb(39, 39, 46);">
                    <form action="Back/contact.php" method="POST" class="">
                        <label for="email" class="form-label" style="font-family: 'Lato'; color: rgb(163, 163, 170);">Email Address:</label>
                        <input type="text" name="email" id="email" class="form-control border-white" style="font-family: 'Lato'; background-color: rgb(55, 55, 61); color: white;" required>
                        <label for="inquiry" class="form-label mt-3" style="font-family: 'Lato'; color: rgb(163, 163, 170);">Inquiry</label>
                        <textarea name="inquiry" id="inquiry" cols="30" rows="10" class="form-control border-white" style="font-family: 'Lato'; background-color: rgb(55, 55, 61); color: white;"></textarea>
                        <input type="submit" name="submit" value="Submit" class="mt-4 btn" style="color: rgb(163, 163, 170); background-color: rgb(63, 63, 111); caret-color: red;">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../_assets/js/bootstrap.bundle.js">
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
    $('.carousel').carousel();
</script>

</body>

</html>