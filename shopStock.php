<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>দোকানের স্টক</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
      /* padding: 20px; */
      /* background: #fff; */
      border-radius: 10px;
      /* margin: 15px; */
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      text-align: center;
    }
    .blue-box{
      background-color: #1959dd;
      color: white;
      padding: 15px;
      /* border-radius: 10px; */
      /* margin: 15px; */
    }
    .badge-red {
      background-color: #557fd3;
      color: #ffffff;
      border-radius: 10px;
      padding: 10px;
      margin-right:0;
    }
    .badge-green {
      background-color: #557fd3;
      color: #ffffff;
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
    .receipt-card {
      background-color: white;
      padding: 10px;
      border-radius: 10px;
      margin-bottom: 10px;
      box-shadow:0 0 8px rgba(0, 0, 0, 0.2);
    }
    .last-item{
      width: 100%;
    }
    /* .item-1{
      width: 50%;
    }*/
    .item-2{
      background: #1959dd;
      color: white;
    } 
    .r{
      width: 45%;
      border:1px solid #007bff;
      border-radius: 10px;
      padding: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .r span{
      font-size:14px
    }
  </style>
</head>
<body>

  <div class="top-bar">
    <div class="back-btn" onclick="goBack()" style="cursor:pointer;">
      <i class="fas fa-arrow-left"></i>
    </div>
    <div><span>দোকানের স্টক</span></div>
    <div class="border p-1 rounded-3 border-secondary"><span>স্টকের ইতিহাস</span></div>
    <div><i class="fa-solid fa-ellipsis-vertical"></i></div>
  </div>
  <div class="blue-box">
    <div class="balance-box">
      <div class="d-flex justify-content-between">
        <div class="badge-red w-50 me-2">মোট মজুদ <br> ৳ 0</div>
        <div class="badge-green w-50 ms-2">মজুদ মূল্য <br> ৳ 0</div>
      </div>
    </div>
  </div>
  <main class="container h-100">
 

  <div class="search-filter d-flex">
    <input type="text" class="form-control me-2" placeholder="খুঁজুন (নাম, মোবাইল)">
    <button class="btn btn-outline-secondary">ফিল্টার</button>
  </div>

  <div class="text-center mb-2">
   <div class="receipt-card">
      <div><strong>রিসিপ্ট # DS97X4N</strong></div>
      <div>গাজাজাজ | 1 আইটেম</div>
      <div class="text-muted small">লিলেন সিকুয়েল | ২৮-মে-২০২৫ ০৪:৪৮</div>
      <div class="d-flex justify-content-between mt-2">
        <div class="fw-bold text-danger">৳ 230</div>
        <span class="badge bg-danger">বাকি</span>
      </div>
    </div>
  </div>
<!-- 
  <div class="bottom-info">
    আপনি ফ্রি ইউজার লিমিট অতিক্রম করেছেন: ১০<br>
    <a href="#">সাবস্ক্রিপশন আপগ্রেড করুন →</a>
  </div> -->

</main>
<div class="last-item d-flex justify-content-around mb-3">
  <div class="item-1 r"><span> পন্য সংখ্যা আপডেট করুন</span></div>
  <div class="item-2 r"><span>প্রোডাক্ট যুক্ত করুন</span></div>
</div>

<script>
  function goBack(){
    window.history.back();
  }
</script>
</body>
</html>
