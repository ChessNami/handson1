<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HandsOnProject</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>


  <style>
    .mybg {

        background-color: #044556;
    }
    .mybg2{
        background-color: white;
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light mybg">
        <div class="container">
          <!-- Brand and toggle button inside the same container -->
          <a class="navbar-brand text-light" href="#">USTP CONeXT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
           <!-- Navigation items inside the same container -->
           <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item active">
                <a class="nav-link text-light" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#faq">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#administrators">Administrator</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   
      <nav class="navbar navbar-expand-lg navbar-dark mybg2">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Move the JOIN NOW! button to the right of the text -->
        <div class="d-grid gap-2 d-md-flex align-items-center">
            <a class="navbar-register text-dark fs-5" href="#" style= "text-decoration :none;">Register to be a Legit TRAILBLAZER</a>
            <button id="joinNowButton" class="btn btn-primary btn-sm" type="button">JOIN NOW!</button>

        </div>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<section id="administrators" class="bg-primary pt-5 pb-5">
        <div class="container mt-5">
          <div class="row pb-5">
            <div class="col-sm-12 text-align-item text-light">
              <h2 "mb-0"> RECENT TRAILBLAZER</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
              <div class="card text-center bg-light" style="height: 100%;">
                <div class="card-body">
                 <img src="{{ asset('me1.jpg') }}" class="w-50 rounded-circle" alt="">
                  <h5 class="card-title mt-3">Jessa Mae Betita</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem repellendus unde veniam eius quia inventore amet dicta? Incidunt, cumque.</p>
                  <i class="fab fa-twitter"></i>&nbsp;
                  <i class="fab fa-facebook-f"></i>&nbsp;
                  <i class="fab fa-instagram"></i>&nbsp;
                  <i class="fab fa-linkedin-in"></i>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
              <div class="card text-center bg-light" style="height: 100%;">
                <div class="card-body">
                <img src="{{ asset('ako11.jpg') }}" class="w-50 rounded-circle" alt="">
                  <h5 class="card-title mt-3">Jessa Mae Betita</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem repellendus unde veniam eius quia inventore amet dicta? Incidunt, cumque.</p>
                  <i class="fab fa-twitter"></i>&nbsp;
                  <i class="fab fa-facebook-f"></i>&nbsp;
                  <i class="fab fa-instagram"></i>&nbsp;
                  <i class="fab fa-linkedin-in"></i>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
              <div class="card text-center bg-light" style="height: 100%;">
                <div class="card-body">
                  <img src="{{ asset('ako22.jpg') }}" class="w-50 rounded-circle" alt="">
                  <h5 class="card-title mt-3">Jessa Mae Betita</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem repellendus unde veniam eius quia inventore amet dicta? Incidunt, cumque.</p>
                  <i class="fab fa-twitter"></i>&nbsp;
                  <i class="fab fa-facebook-f"></i>&nbsp;
                  <i class="fab fa-instagram"></i>&nbsp;
                  <i class="fab fa-linkedin-in"></i>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
              <div class="card text-center bg-light" style="height: 100%;">
                <div class="card-body">
                  <img src="{{ asset('ako33.jpg') }}" class="w-50 rounded-circle" alt="">
                  <h5 class="card-title mt-3">Jessa Mae Betita</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem repellendus unde veniam eius quia inventore amet dicta? Incidunt, cumque.</p>
                  <i class="fab fa-twitter"></i>&nbsp;
                  <i class="fab fa-facebook-f"></i>&nbsp;
                  <i class="fab fa-instagram"></i>&nbsp;
                  <i class="fab fa-linkedin-in"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <section class="mybg">
        <div class="container">
          <div class="row pt-5 pb-5">
              <p class="text-white text-center">Copyright © 2023</p>
          </div>
        </div>
      </section>
      </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const joinNowButton = document.getElementById('joinNowButton');
        const registrationForm = document.getElementById('registrationForm');

        joinNowButton.addEventListener('click', function () {
            registrationForm.classList.toggle('d-none');
        });
    });
</script>




  










<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>