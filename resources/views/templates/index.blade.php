<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
           .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .hero-content {
            max-width: 50%;
        }
        .hero-image img {
            max-width: 100%;
            border-radius: 10px;
        }
        .course-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .course-card {
            text-align: center;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background: #fff;
        }
        .btn-custom {
            margin-right: 10px;
        }
        .course-card {
        overflow: hidden;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .course-card img {
        width: 100%;
        transition: transform 0.3s ease-in-out;
    }

    .course-card:hover img {
        transform: scale(1.1);
    }
    </style>
</head>
<body>
@extends('templates.headerfooter')
@section('main_section')
<!-- start slider code -->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('public/images/banners1.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('public/images/banners2.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('public/images/banners1.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- End slider code -->

<!-- Start Cart code -->
<div class="container my-5">
    <!-- First Section: Hero -->
    <div class="hero-section row">
        <div class="hero-content col-md-6">
            <h1>Full Stack Development</h1>
            <p><strong>Become a Full Stack Developer with Insta InfoTech!</strong></p>
            <p>Learn Java, Python, .NET, MEAN, and MERN stacks with hands-on projects and expert guidance.</p>
            <button class="btn btn-danger btn-custom">Explore All Courses</button>
            {{-- <button class="btn btn-outline-dark">Download Brochure</button> --}}
        </div>
        <div class="hero-image col-md-6">
            <img src="{{ asset('public/images/home2.jpg') }}" alt="Full Stack Development">
        </div>
    </div>

    <!-- Second Section: Courses -->
    <div class="row mt-5">
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <img src="{{ asset('public/images/home3.jpg') }}" alt="MEAN Stack">
                <h5 class="mt-3">MEAN Stack Development</h5>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <img src="{{ asset('public/images/home4.jpg') }}" alt="MERN Stack">
                <h5 class="mt-3">MERN Stack Development</h5>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <img src="{{ asset('public/images/home5.jpg') }}" alt="Python Stack">
                <h5 class="mt-3">Python Full Stack Developer</h5>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <img src="{{ asset('public/images/home6.jpg') }}" alt="Java Stack">
                <h5 class="mt-3">Java Full Stack Developer</h5>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <img src="{{ asset('public/images/home7.jpg') }}" alt="PHP Stack">
                <h5 class="mt-3">PHP Full Stack Developer</h5>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="course-card">
                <img src="{{ asset('public/images/home8.jpg') }}" alt=".NET Stack">
                <h5 class="mt-3">.NET Full Stack Developer</h5>
            </div>
        </div>
    </div>
</div>
<!-- End Cart Code -->

<div class="container py-5">
    <div class="row align-items-center">
        <!-- Left Section (6 columns) -->
        <div class="col-md-6">
            <h1 class="fw-bold">What is learning <span class="text-primary">Java</span> with <span class="text-success">CodeGym</span> like?</h1>
            <p class="fs-5 text-muted">You get an exciting training experience</p>
            <p class="text-secondary">
                CodeGym isn’t just a learning course, it’s a game. You upgrade your “player character” to new levels, 
                open new quests, and get achievements. Once you start, you move towards the destination point – 
                Yourself as a Coding Pro.
            </p>
            <img src="{{ asset('public/images/home1.png') }}" class="img-fluid rounded" alt="Learning Journey">
        </div>

        <!-- Right Section (6 columns) -->
        <div class="col-md-6">
            <div class="d-flex align-items-start mb-4">
                <div class="p-3 bg-danger rounded-circle text-white me-3">
                    <i class="bi bi-rocket"></i>
                </div>
                <div>
                    <h4 class="fw-semibold">START</h4>
                    <p class="text-muted">Get a personalized training program based on your preferences.</p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4">
                <div class="p-3 bg-warning rounded-circle text-white me-3">
                    <i class="bi bi-book"></i>
                </div>
                <div>
                    <h4 class="fw-semibold">LEARN</h4>
                    <p class="text-muted">Read bite-sized lectures about Java programming theory.</p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4">
                <div class="p-3 bg-success rounded-circle text-white me-3">
                    <i class="bi bi-code"></i>
                </div>
                <div>
                    <h4 class="fw-semibold">PRACTICE</h4>
                    <p class="text-muted">Write code from the beginning, and get an immediate check of your solutions.</p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4">
                <div class="p-3 bg-primary rounded-circle text-white me-3">
                    <i class="bi bi-laptop"></i>
                </div>
                <div>
                    <h4 class="fw-semibold">CREATE</h4>
                    <p class="text-muted">Write programs that solve real-world problems, and fun games.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="text-center mt-4">
        <a href="#" class="btn btn-success btn-lg">Start learning for FREE →</a>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <!-- Left Content (6 Columns) -->
        <div class="col-md-6">
            <div class="info-box">
                <h2 class="fw-bold">Practice coding from the first lesson of our Java online course</h2>
                <p class="text-muted">
                    To learn Java programming, you should code a lot – and you’ll like it! CodeGym is an online Java programming course 
                    consisting of 80% practice and 20% of essential theory. Use our handy tool to start coding smoothly.
                </p>
                <h5 class="fw-semibold mt-4">Enjoy non-boring training to master Java basics</h5>
                <h5 class="fw-semibold mt-2">Learn at a comfortable pace</h5>
                <h5 class="fw-semibold mt-2">Get a personalized program for Java practice and coding</h5>
            </div>
        </div>
        <!-- Right Task Box (6 Columns) -->
        <div class=" hero-image col-md-6">
                <img src="{{ asset('public/images/home9.png') }}" alt="Full Stack Development">
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>