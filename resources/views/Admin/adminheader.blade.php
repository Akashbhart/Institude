<style>
    body {
        background-color: #f8f9fa;
    }
    .sidebar {
        width: 210px;
        height: 100vh;
        background-color: #343a40;
        color: white;
        position: fixed;
        padding-top: 20px;
    }
    .sidebar a {
        color: white;
        padding: 12px;
        display: block;
        text-decoration: none;
        transition: 0.3s;
    }
    .sidebar a:hover {
        background-color: #495057;
        border-left: 4px solid #00aaff;
    }
    .submenu {
        display: none;
        padding-left: 15px;
    }
    .submenu a {
        font-size: 14px;
    }
    .main-content {
        margin-left: 155px;
        padding: 74px;
    }
    .profile-pic {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid white;
    }
    .topbar {
        background-color: #343a40;
        padding: 10px;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 0;
        left: 210px;
        width: calc(103% - 248px);
        z-index: 1000;
        }
    .logout-btn {
        background-color: transparent;
        border: none;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }
    .logout-btn:hover {
        color: #00aaff;
    }
</style>
@if(session('msg'))
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 alert-msg" role="alert" style="z-index: 1050;">
        {{ session('msg') }}
    </div>
@endif
<!-- Sidebar -->
<div class="sidebar">
    <h4 class="text-center">Admin Panel</h4>
    <a href="{{ route('deshborad-login') }}" ><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    
    <!-- Students Module -->
    <a  onclick="toggleMenu('studentsMenu')"><i class="fas fa-user-graduate"></i> Students ▾</a>
    <div class="submenu" id="studentsMenu">
        <a href="{{ route('add-student') }}">Add Student</a>
        <a href="{{ route('view-student') }}">View Students</a>
    </div>

    <!-- Courses Module -->
    <a href="#" onclick="toggleMenu('coursesMenu')"><i class="fas fa-book"></i> Courses ▾</a>
    <div class="submenu" id="coursesMenu">
        <a >Add Course</a>
        <a >View Courses</a>
    </div>

    <!-- Institutes Module -->
    <a href="#" onclick="toggleMenu('institutesMenu')"><i class="fas fa-school"></i> Institutes ▾</a>
    <div class="submenu" id="institutesMenu">
        <a >Add Institute</a>
        <a >View Institutes</a>
    </div>

    <!-- Profile -->
    <a ><i class="fas fa-user"></i> Profile</a>
</div>

<!-- Top Bar -->
<div class="topbar">
    <div class="d-flex align-items-center">
        {{-- <h5 class="m-0">Welcome, {{ $user_data->name }}</h5> --}}
    </div>
    <div class="d-flex align-items-center gap-3">
        <img src="https://via.placeholder.com/40" alt="Profile" class="profile-pic">
        <form  method="get" action="{{ route('logout-session') }}">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
</div>

<!-- Main Content -->
<div class="main-content">
    @yield('content')
</div>

<!-- Script for Sidebar Toggle -->
<script>
    function toggleMenu(menuId) {
        let menu = document.getElementById(menuId);
        menu.style.display = menu.style.display === "block" ? "none" : "block";
    }
</script>
<script>
    setTimeout(function() {
        document.querySelector('.alert-msg').remove();
    }, 3000); // Auto-hide after 3 seconds
</script>