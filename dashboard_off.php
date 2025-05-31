<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<?php include('partials/header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Top Navigation Bar -->


<!-- Welcome -->
<div class="container my-4">
  <h5 class="text-center">Welcome, admin 👋</h5>
  <p class="text-center">Use the menu below to manage your store</p>

  <div class="row row-cols-4 g-2">
    <div class="col text-center">
      <button class="btn btn-outline-primary w-100 py-3">
        🛒<br> পাওনা খাতা
      </button>
    </div>

    <div class="col text-center">
      <button class="btn btn-outline-success w-100 py-3">
        🛍️<br>দেনা খাতা
      </button>
    </div>

    <div class="col text-center">
      <button class="btn btn-outline-warning w-100 py-3">
        👤<br>খরচ খাতা 
      </button>
    </div>
    <div class="col text-center">
      <button class="btn btn-outline-warning w-100 py-3">
        👤<br>পার্টি 
      </button>
    </div>

    <div class="col text-center">
      <button class="btn btn-outline-info w-100 py-3">
        🏬<br>দোকানের ‍হিসাব
      </button>
    </div>

    <div class="col text-center">
      <button class="btn btn-outline-secondary w-100 py-3">
        🏢<br>গোডাউনের ‍হিসাব
      </button>
    </div>

    <div class="col text-center">
      <button class="btn btn-outline-dark w-100 py-3">
        🎨<br>ডাইং
      </button>
    </div>

    <div class="col text-center">
      <button class="btn btn-outline-primary w-100 py-3">
        🧵<br>টেক্সটাইল
      </button>
    </div>

    <div class="col text-center">
      <button class="btn btn-outline-danger w-100 py-3">
        📦<br>পিকু/অন্যান্য
      </button>
    </div>
    <div class="row row-cols-2 g-3">
    <div class="col text-center">
      <button class="btn btn-outline-primary w-100 py-3">
        🛒<br> প্রোডাক্ট কেনা
      </button>
    </div>

    <!-- Plus buttons for adding more -->
    <div class="col text-center">
      <button class="btn btn-outline-success w-100 py-3">
        ➕<br>নতুন যোগ করুন
      </button>
    </div>
  </div>
</div>
</body>
</html>
<?php include('partials/footer.php'); ?>