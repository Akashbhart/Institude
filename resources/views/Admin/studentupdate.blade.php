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
     <h3>Edit Student</h3>
     <form action="{{ route('students.update', $student->id) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="mb-3">
             <label for="name" class="form-label">Student Name</label>
             <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
         </div>
         <div class="mb-3">
             <label for="email" class="form-label">Email</label>
             <input type="email" class="form-control" id="email" name="email" value="{{ $student->email_id }}" required>
         </div>
         <div class="mb-3">
             <label for="contact" class="form-label">Contact</label>
             <input type="text" class="form-control" id="contact" name="contact" value="{{ $student->contact }}" required>
         </div>
         <div class="mb-3">
             <label for="course" class="form-label">Course</label>
             <input type="text" class="form-control" id="course" name="course" value="{{ $student->course }}" required>
         </div>
         <button type="submit" class="btn btn-primary">Update</button>
     </form>
 </div>
 @endsection 
</body>
</html>
