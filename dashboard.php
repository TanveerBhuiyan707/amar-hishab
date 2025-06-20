<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>সুন্দরী ওড়না - ড্যাশবোর্ড</title>
  <!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      background: #f9f9f9;
    }
    .header {
      background: #ffc107;
      padding: 10px;
      color: #000;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .header .title {
      font-size: 18px;
      font-weight: bold;
    }
    .header .icons i {
      margin-left: 10px;
      font-size: 18px;
    }
    .section {
      background: #fff;
      margin: 10px;
      padding: 15px;
      border-radius: 8px;
    }
    .section .title {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .stats {
      display: flex;
      justify-content: space-between;
      font-size: 14px;
    }
    .offer {
      background: #ffca28;
      border-radius: 6px;
      padding: 10px;
      font-size: 14px;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
      margin-top: 10px;
    }
    .menu-item {
      background: #fff;
      padding: 10px;
      border-radius: 8px;
      text-align: center;
      font-size: 12px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.4);
    }
    .menu-item img {
      width: 32px;
      height: 32px;
    }
    .chat-btn {
      position: relative;
      bottom: 0;
      left: 0;
      right: 0;
      background: #fff;
      border-top: 1px solid #ddd;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .chat-btn button {
      background: #007bff;
      color: #fff;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
    }
    a{
      text-decoration: none;
      color: inherit;
    }
  </style>
</head>
<body>

  <div class="header">
    <div class="title">সুন্দরী ওড়না</div>
    <div class="icons">
      <i class="fa-brands fa-whatsapp"></i>
      <i class="fa-solid fa-bell"></i>
      <i class="fa-solid fa-gear"></i>
    </div>
  </div>

  <!-- <div class="section">
    <div style="color:red; font-weight:bold">সর্বশেষ ব্যাকআপঃ আপনার ডাটা ব্যাকআপ হচ্ছে না</div>
    <button style="margin-top: 5px; background:red; color:white; padding:4px 8px; border:none; border-radius:5px;">ডাটা ব্যাকআপ</button>
  </div> -->

  <div class="section">
    <div class="title">আজকের বিক্রি</div>
    <div class="stats">
      <div>৳ ০</div>
      <div>স্টক সংখ্যা: <span style="color:green;">২১৩৩</span></div>
    </div>
    <div class="stats">
      <div>আজকের ব্যয়: ৳০</div>
      <div>আজকের বাকি: ৳০</div>
    </div>
  </div>

  <!-- <div class="section offer"> -->
    <!-- ৪০% ছাড় লাইফটাইম প্যাকে<br>
    হিসাবীর লাইফটাইম প্যাক কিনুন মাত্র ৫৯৯/- টাকায় -->
  <!-- </div> -->

  <div class="section">
    <div class="grid">
      <a class="menu-item" href="buy_product.php"><img src="img/icons-buy.png" alt=""><br>কেনা</a>
      <div class="menu-item"><img src="img/icons-sell.png"><br>বেচা</div>
    </div>
  </div>

  <div class="section border border-1 border-secondary rounded-3 p-3 mb-3">
    <div class="title border-bottom border-1 border-secondary">খাতা সমূহ</div>
    <div class="grid">
      <a href="purchase_ledger.php" class="menu-item"><img src="img/icons-ledger-buy.png"><br>কেনার খাতা</a>
      <a href="sales_ledger.php" class="menu-item"><img src="img/icons-ledger-sell.png"><br>বিক্রির খাতা</a>
      <a href="outstanding_ledger.php" class="menu-item"><img src="img/Balance sheet.png"><br>বাকির খাতা</a>
      <a href="expenses_ledger.php" class="menu-item"><img src="img/Expense ledger.png"><br>খরচের খাতা</a>
    </div>
  </div>

  <div class="section border border-1 border-secondary rounded-3 p-3 mb-3">
    <div class="title border-bottom border-1 border-secondary">আপনার ব্যবসার জন্য</div>
    <div class="grid  d-flex flex-wrap justify-content-around">
      <div class="menu-item"><a href="contact.php"><img src="img/contact.png"><br></a>যোগাযোগ</div>
      <div class="menu-item"><a href="shopStock.php"><img src="img/stock.png"><br>দোকান স্টক</a> </div>
      <div class="menu-item"><img src="img/dying.png"><br>ডাইং</div>
      <div class="menu-item"><img src="img/godaun.png"><br>গোডাউন স্টক</div><br>
      <div class="menu-item"><img src="img/textile.png"><br>টেক্সটাইল</div>
      <div class="menu-item"><img src="img/funds.png"><br>পুঁজি</div>
      <div class="menu-item"><img src="img/result2.png"><br>ব্য়বসার রিপোর্ট</div>
      <div class="menu-item"><img src="img/printer.png"><br>প্রিন্টার</div>
      <div class="menu-item"><img src="img/others.png"><br>অন্য়ান্য়</div>
    </div>
  </div>

  <!-- <div class="chat-btn">
    <span>যেকোনো প্রয়োজনে এক্সপার্টের কাছ থেকে সহায়তা নিন</span>
    <button>লাইভ চ্যাট</button>
  </div> -->
  <?php include('partials/footer.php'); ?>

</body>
</html>
