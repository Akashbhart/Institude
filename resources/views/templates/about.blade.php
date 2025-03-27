<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
@extends('templates.headerfooter')
@section('main_section')
<!-- start slider code -->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('public/images/about-us.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
    </div>
  </div>
<!-- End slider code -->
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>Your Gateway to Excellence</h2>
            <p>Insta InfoTech was established in 2003 with a vision to bridge the gap between education and industry demand...</p>
            <p>Over the past two decades, we have expanded our courses in Data Science, AI, Cybersecurity, and more...</p>
            <button class="btn btn-primary">Show More</button>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('public/images/about.jpg') }}" class="img-fluid" alt="Classroom Image">
        </div>
    </div>

    <div class="row text-center my-5">
        <div class="col-md-3">
            <h3 class="counter" data-target="125500">0</h3>
            <p>Trained Students</p>
        </div>
        <div class="col-md-3">
            <h3 class="counter" data-target="22">0</h3>
            <p>Years of Experience</p>
        </div>
        <div class="col-md-3">
            <h3 class="counter" data-target="146">0</h3>
            <p>Countries Represented</p>
        </div>
        <div class="col-md-3">
            <h3 class="counter" data-target="24">0</h3>
            <p>Support</p>
        </div>
    </div>
</div>

<div class="container text-center my-5">
    <h3>Reasons To Select Us</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Customized Learning Paths</h5>
                <p>Education designed for you - experience personalized learning with no limits.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Trusted by Thousands</h5>
                <p>High-quality, industry-standard education trusted by learners worldwide.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Transform Your Classroom</h5>
                <p>Modern teaching tools ensure an interactive and dynamic learning experience.</p>
            </div>
        </div>
    </div>
</div>

<div class="container text-center my-5">
    <h3>Explore Our Top Categories</h3>
    <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('public/images/sap.jpg') }}" class="img-fluid" alt="SAP">
                        <p>SAP Certification</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('public/images/java.jpg') }}" class="img-fluid" alt="Accounting">
                        <p>Java</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('public/images/network.jpg') }}" class="img-fluid" alt="Network Security">
                        <p>Network & Security</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('public/images/python.jpg') }}" class="img-fluid" alt="Python">
                        <p>Python Course</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#categoryCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#categoryCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".counter");
        counters.forEach(counter => {
            counter.innerText = '0';
            const updateCounter = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / 200;
                if (count < target) {
                    counter.innerText = `${Math.ceil(count + increment)}`;
                    setTimeout(updateCounter, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCounter();
        });
    });
</script>
@endsection
</body>
</html>