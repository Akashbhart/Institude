<style>
    .custom-input {
        background: #222;
        color: #fff;
        border: 1px solid #444;
        border-radius: 8px;
        padding: 12px;
        transition: all 0.3s ease-in-out;
    }
    .custom-input:focus {
        border-color: #00aaff;
        box-shadow: 0px 0px 10px rgba(0, 170, 255, 0.7);
    }
    .btn-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
        border: none;
        border-radius: 8px;
        padding: 12px;
        font-size: 18px;
        transition: all 0.3s ease-in-out;
    }
    .btn-primary:hover {
        background: linear-gradient(45deg, #0056b3, #007bff);
        box-shadow: 0px 0px 15px rgba(0, 170, 255, 0.7);
    }
</style>
@if(session('msg'))
    <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3" role="alert" style="z-index: 1050;">
        <strong>Error!</strong> {{ session('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 3000); // Auto-hide after 3 seconds
    </script>
@endif
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Institute Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white"  href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('about-us') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('contact-us') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('home') }}">Courses</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Login
            </button>
        </div>
    </div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-white" style="background: #111; border-radius: 12px; box-shadow: 0px 0px 20px rgba(0, 170, 255, 0.7);">
            <div class="modal-header border-0">
                <h2 class="modal-title text-primary mx-auto" id="exampleModalLabel">Welcome Back</h2>
                <button type="button" class="btn-close btn-close-white position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form  method="POST" action="{{ route('login-check') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label fw-bold">Email Address</label>
                        <input type="email" class="form-control custom-input" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control custom-input" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg custom-btn">Login</button>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div

@yield('main_section')

  <! -- Bootstrap Footer -->
<footer class="bg-dark text-white pt-5 pb-4 mt-4">
    <div class="container text-center text-md-start">
        <div class="row">
            <!-- Institute Details -->
            <div class="col-md-4">
                <h5 class="fw-bold">About Our Institute</h5>
                <p class="small">
                    Our institute is committed to excellence in education, innovation, and research.
                    We aim to shape the future through knowledge and practical learning.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4">
                <h5 class="fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a  href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
                    <li><a  href="{{ route('about-us') }}" class="text-white text-decoration-none">About</a></li>
                    <li><a  href="{{ route('contact-us') }}" class="text-white text-decoration-none">Contact</a></li>
                    <li><a  href="{{ route('home') }}" class="text-white text-decoration-none">Course</a></li>
                </ul>
            </div>

            <!-- Contact Details -->
            <div class="col-md-4">
                <h5 class="fw-bold">Contact Us</h5>
                <p class="small">
                    📍 123 Institute Lane, Kanpur, India<br>
                    📞 +91 98765 43210<br>
                    ✉️ info@institute.com
                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="text-white"><i class="fab fa-facebook fs-4"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter fs-4"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram fs-4"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin fs-4"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <hr class="border-light mt-4">
        <div class="text-center small">
            &copy; 2025 Institute Name. All rights reserved.
        </div>
    </div>
</footer>


<!-- Bootstrap & FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
