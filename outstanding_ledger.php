<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>বাকির খাতা</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Noto Sans Bengali', sans-serif;
      background-color: #f8f9fa;
    }
    .top-bar {
      background-color: #ffc107;
      padding: 10px 15px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .balance-box {
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      margin: 15px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      text-align: center;
    }
    .badge-red {
      background-color: #ffdddd;
      color: red;
      border-radius: 10px;
      padding: 10px;
    }
    .badge-green {
      background-color: #ddffdd;
      color: green;
      border-radius: 10px;
      padding: 10px;
    }
    .bottom-info {
      font-size: 14px;
      padding: 10px;
      border: 1px dashed #007bff;
      color: red;
      margin: 15px;
      text-align: center;
    }
    .search-filter {
      margin: 15px;
    }
  </style>
</head>
<body>
  <div class="top-bar">
    <div class="back-btn" onclick="goBack()" style="cursor:pointer">
      <i class="fas fa-arrow-left"></i>
    </div>

    <div><strong>বাকির খাতা</strong></div>
    <div>
      <img src="img/pdf-2.png" alt="PDF" width="24">
      <img src="https://img.icons8.com/ios-glyphs/30/000000/help.png" alt="Help" width="24">
    </div>
  </div>
  
  <main class="container h-100">
  <div class="balance-box">
    <div class="d-flex justify-content-between">
      <div class="badge-red w-50 me-2">পাবো <br> ৳ 0</div>
      <div class="badge-green w-50 ms-2">দিবো <br> ৳ 0</div>
    </div>
    <p class="mt-1">বাকি পাবো/দিবো হিসাবের পর সর্বমোট পাবো: ৳ 0</p>
    <button class="btn btn-outline-primary btn-sm mt-2">বাকির ইতিহাস</button>
  </div>

  <div class="search-filter d-flex">
    <input type="text" class="form-control me-2" placeholder="খুঁজুন (নাম, মোবাইল)">
    <button class="btn btn-outline-secondary">ফিল্টার</button>
  </div>

  <div class="text-center mb-2">
    <small>কাস্টমার (0) / সাপ্লায়ার (0) / কর্মচারী (0)</small><br>
    <small class="text-danger">আপনার কোন লেনদেন করা নেই</small>
  </div>
<!-- 
  <div class="bottom-info">
    আপনি ফ্রি ইউজার লিমিট অতিক্রম করেছেন: ১০<br>
    <a href="#">সাবস্ক্রিপশন আপগ্রেড করুন →</a>
  </div> -->

  <div class="text-center mb-4">
    <button class="btn btn-primary">+ নতুন বাকি</button>
  </div>
</main>

<script>
  function goBack(){
    window.history.back();
  }
</script>
</body>
</html>
