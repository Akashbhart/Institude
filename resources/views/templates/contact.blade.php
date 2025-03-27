<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .contact-section {
            display: flex;
            align-items: stretch; /* Ensures both divs have the same height */
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .map-container, .contact-form {
            width: 50%;
            min-height: 450px; /* Ensures equal height */
        }
        .contact-form {
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .info-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        @media (max-width: 768px) {
            .map-container, .contact-form {
                width: 100%;
                min-height: auto;
            }
        }
    </style>
</head>
<body>
@extends('templates.headerfooter')
@section('main_section')
<!-- start slider code -->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('public/images/banners2.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
<!-- End slider code -->
<div class="container my-5">
    <!-- First Section: Map & Contact Form -->
    <div class="contact-section row">
        <!-- Left: Google Map -->
        <div class="map-container col-md-6">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345086164!2d144.95373531531804!3d-37.8172099797515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5df1f3f3f3%3A0xf3b3b3b3b3b3b3b3!2sInstitute%20Location!5e0!3m2!1sen!2sin!4v1617958942322!5m2!1sen!2sin"
                width="100%" height="100%" style="border:0; min-height: 450px;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>

        <!-- Right: Contact Form -->
        <div class="contact-form col-md-6">
            <h2>Contact Us</h2>
            <form action="{{ route('form-submit') }}" method="post">
                @csrf
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            
            @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
                <div class="mb-3">
                    <label class="form-label">Your Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name">
                    @error('name')
                    <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Your Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                    @error('email')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Your Mobile No</label>
                    <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile no.">
                    @error('mobile')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Course</label>
                    <select class="form-select" name="course">
                        <option value="" selected disabled>Choose a course</option>
                        <option value="mean">MEAN Stack Development</option>
                        <option value="mern">MERN Stack Development</option>
                        <option value="python">Python Full Stack</option>
                        <option value="java">Java Full Stack</option>
                        <option value="php">PHP Full Stack</option>
                        <option value="dotnet">.NET Full Stack</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea class="form-control" rows="4" placeholder="Write your message" name="messages"></textarea>
                    @error('messages')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Second Section: Institute Address -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="info-box">
                <h3>Our Institute Address</h3>
                <p><strong>Insta InfoTech</strong></p>
                <p>123 Tech Park, Near Metro Station, Kanpur, India</p>
                <p>Email: info@instainfotech.com</p>
                <p>Phone: +91 98765 43210</p>
                <p>Working Hours: Mon - Sat, 9 AM - 6 PM</p>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>