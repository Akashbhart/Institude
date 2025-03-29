<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">  
   
</head>
<body>
 @extends('admin.adminheader')
@section('content')
<div class="container mt-5">
    <h3>Add Course</h3>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <form action="{{ route('course-store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="coursename" name="coursename" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Course Duration</label>
            <input type="number" class="form-control" id="duration" name="duration" required>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Cpurse Fees</label>
            <input type="number" class="form-control" id="fees" name="fees" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
 @endsection
</body>
</html>
