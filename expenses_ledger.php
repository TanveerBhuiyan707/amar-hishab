<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>খরচ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Noto Sans Bengali', sans-serif;
      margin: 0;
      padding: 0;
    }
    body {
      background: #f9f9f9;
    }
    header {
      background: #ffc107;
      color: #000;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .back-btn {
      font-size: 1.2rem;
      cursor: pointer;
    }
    .main-card {
      background: #0d6efd;
      color: #fff;
      margin: 2px;
      border-radius: 10px;
      padding: 15px;
    }
    .main-card h2 {
      margin-bottom: 10px;
    }
    .sub-boxes {
      display: flex;
      justify-content: space-between;
      margin-top: 15px;
      gap: 10px;
    }
    .sub-box {
      background: rgba(255, 255, 255, 0.1);
      padding: 10px;
      width: 23%;
      border-radius: 8px;
      text-align: center;
    }
    .expense-list-btn {
      background: #fff;
      color: #0d6efd;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: auto;
      margin-top: 15px;
    }
    .section {
      padding: 0 15px;
    }
    .section-title {
      margin-top: 20px;
      font-size: 18px;
      margin-bottom: 10px;
    }
    .expense-type {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }
    .expense-type-item {
      flex: 1 1 45%;
      background: #fff;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .learn-btn {
      margin: 20px 15px;
      padding: 12px;
      border: 1px solid #004aad;
      border-radius: 8px;
      color: #004aad;
      text-align: center;
      font-size: 14px;
      background: #fff;
    }
    @media (max-width: 600px) {
      .sub-boxes {
        flex-wrap: wrap;
      }
      .sub-box {
        width: 48%;
        margin-bottom: 10px;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="back-btn" onclick="goBack()" style="cursor:pointer">
      <i class="fas fa-arrow-left"></i>
    </div>
    <h3>খরচ</h3>
    <i class="fas fa-question-circle"></i>
  </header>

  <div class="main-card">
    <h4 class="text-warning">মোট খরচ</h4>
    <h1>৳0</h1>
    <p>May, 2025</p>

    <div class="sub-boxes">
      <div class="sub-box">
        <p>৳0.0</p>
        <small>বেতন</small>
      </div>
      <div class="sub-box">
        <p>৳0.0</p>
        <small>কেনা</small>
      </div>
      <div class="sub-box">
        <p>৳0.0</p>
        <small>বিল</small>
      </div>
      <div class="sub-box">
        <p>৳0.0</p>
        <small>ভাড়া</small>
      </div>
    </div>

    <div class="expense-list-btn">
      <i class="fas fa-arrow-right-arrow-left"></i>
    </div>
    <p style="text-align:right; margin-top: 5px;">ব্যয়ের তালিকা</p>
  </div>

  <div class="section">
    <div class="section-title">নতুন খরচ</div>
    <div class="expense-type">
      <div class="expense-type-item">
        <img src="img/salary.png">
        <p>বেতন</p>
      </div>
      <div class="expense-type-item">
                <img src="img/buy.png">

        <p>কেনা</p>
      </div>
      <div class="expense-type-item">
        <img src="img/bill.png">
        
        <p>বিল</p>
      </div>
      <div class="expense-type-item">
                <img src="img/vara.png">
        
        <p>ভাড়া</p>
      </div>
    </div>
  </div>

  <div class="learn-btn">
    ▶ চলুন শিখে নেই কিভাবে এই ফিচারটি কাজ করে
  </div>
<script>
  function goBack(){
    window.history.back();
  }
</script>
</body>
</html>
