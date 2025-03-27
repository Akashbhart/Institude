<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">  
    <style>
      body {
          background-color: #f8f9fa;
          font-family: 'Poppins', sans-serif;
      }
      .card {
          border: none;
          border-radius: 10px;
          transition: transform 0.2s ease-in-out;
      }
      .card:hover {
          transform: translateY(-5px);
      }
      .chart-container {
          width: 100%;
          height: 300px;
      }
      .table-responsive {
          overflow-x: auto;
      }
  </style> 
</head>
<body>
 @extends('admin.adminheader')
 @section('content')
 <div class="container mt-4">
  <h2 class="text-center fw-bold mb-4">Course Enrollment Dashboard</h2>

  <!-- Stats Cards -->
  <div class="row g-4">
      <div class="col-lg-3 col-md-6">
          <div class="card shadow p-3 text-center">
              <h5 class="text-primary">Total Students</h5>
              <h2 class="fw-bold">1,250</h2>
          </div>
      </div>
      <div class="col-lg-3 col-md-6">
          <div class="card shadow p-3 text-center">
              <h5 class="text-success">Active Courses</h5>
              <h2 class="fw-bold">24</h2>
          </div>
      </div>
      <div class="col-lg-3 col-md-6">
          <div class="card shadow p-3 text-center">
              <h5 class="text-danger">Total Enrollments</h5>
              <h2 class="fw-bold">3,500</h2>
          </div>
      </div>
      <div class="col-lg-3 col-md-6">
          <div class="card shadow p-3 text-center">
              <h5 class="text-warning">Revenue</h5>
              <h2 class="fw-bold">$45,000</h2>
          </div>
      </div>
  </div>

  <!-- Charts -->
  <div class="row mt-4">
      <div class="col-md-6">
          <div class="card shadow p-3">
              <h5 class="text-center">Enrollment Trends</h5>
              <canvas id="enrollmentChart"></canvas>
          </div>
      </div>
      <div class="col-md-6">
          <div class="card shadow p-3">
              <h5 class="text-center">Course Popularity</h5>
              <canvas id="courseChart"></canvas>
          </div>
      </div>
  </div>

  <!-- Recent Enrollments Table -->
  <div class="card shadow p-3 mt-4">
      <h5 class="text-center">Recent Enrollments</h5>
      <div class="table-responsive">
          <table class="table table-striped table-hover">
              <thead class="table-primary">
                  <tr>
                      <th>Student Name</th>
                      <th>Course</th>
                      <th>Enrollment Date</th>
                      <th>Status</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Rahul Sharma</td>
                      <td>Web Development</td>
                      <td>March 22, 2025</td>
                      <td class="text-success">Active</td>
                  </tr>
                  <tr>
                      <td>Aisha Khan</td>
                      <td>Data Science</td>
                      <td>March 20, 2025</td>
                      <td class="text-warning">Pending</td>
                  </tr>
                  <tr>
                      <td>Vikram Singh</td>
                      <td>Graphic Design</td>
                      <td>March 18, 2025</td>
                      <td class="text-danger">Inactive</td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>

</div>

<script>
  // Enrollment Trend Chart (Line Chart)
  const ctx1 = document.getElementById('enrollmentChart').getContext('2d');
  new Chart(ctx1, {
      type: 'line',
      data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
          datasets: [{
              label: 'Enrollments',
              data: [200, 250, 300, 450, 400, 500],
              borderColor: '#007bff',
              borderWidth: 2,
              backgroundColor: 'rgba(0, 123, 255, 0.2)',
              tension: 0.4
          }]
      }
  });

  // Course Popularity Chart (Pie Chart)
  const ctx2 = document.getElementById('courseChart').getContext('2d');
  new Chart(ctx2, {
      type: 'pie',
      data: {
          labels: ['Web Dev', 'Data Science', 'AI & ML', 'Cybersecurity'],
          datasets: [{
              data: [30, 25, 20, 25],
              backgroundColor: ['#007bff', '#28a745', '#dc3545', '#ffc107']
          }]
      }
  });
</script>
 @endsection
</body>
</html>
