<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>স্টকের ইতিহাস</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
       <script src="https://cdn.tailwindcss.com"></script>

  <style>
    * {
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }
    body {
      margin: 0;
      background: #f2f2f2;
    }
    .header {
      background: #ffc107;
      padding: 10px 15px;
      display: flex;
      align-items: center;
    }
    .header h2 {
      margin: 0 auto;
      font-size: 18px;
    }
    .nav-date-selector {
      background: #1976d2;
      color: white;
      text-align: center;
      padding: 10px;
    }
    .nav-date-selector h3 {
      margin: 0;
      font-size: 16px;
    }
    .date-controls {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 5px;
    }
    .date-controls button {
      padding: 4px 10px;
      border: none;
      background: white;
      color: #1976d2;
      font-weight: bold;
      border-radius: 4px;
    }
    .tabs {
      display: flex;
      justify-content: space-around;
      padding: 10px;
      background: white;
    }
    .tabs button {
      padding: 5px 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background: white;
    }
    .entry {
      background: white;
      margin: 10px;
      padding: 10px;
      border-radius: 6px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .entry-header {
      display: flex;
      align-items: center;
    }
    .entry-header img {
      width: 30px;
      height: 30px;
      margin-right: 10px;
    }
    .entry-header .name {
      font-weight: bold;
      color: red;
    }
    .entry-body {
      font-size: 14px;
      margin-top: 5px;
    }
    .entry-body p {
      margin: 3px 0;
    }
    .value-green {
      color: green;
    }
    .value-red {
      color: red;
    }



  </style>
</head>
<body>

<div class="header">
  <div class="back-btn" onclick="goBack()" style="cursor:pointer">
      <i class="fas fa-arrow-left"></i>
    </div>
  <h2>স্টকের ইতিহাস</h2>
</div>

<div class="nav-date-selector">
  <h3>স্টকের ইতিহাস</h3>
  <div class="date-controls">
    <button>&larr;</button>
    <span>মে</span>
    <button>&rarr;</button>
  </div>
</div>

<div class="tabs">
  <button>দিন</button>
  <button>সপ্তাহ</button>
  <button style="background:#1976d2;color:white">মাস</button>
  <button>বছর</button>
</div>

<div class="entry">
  <div class="entry-header">
    <img src="https://img.icons8.com/ios-filled/50/000000/user.png"/>
    <div class="name">১৬ tuli </div>
  </div>
  <div class="entry-body">
    <p>5009</p>
    <p>পণ্য বিক্রয (Vivo V2120)</p><hr>
    <p>স্টক মূল্য: ৳ 205</p>
    <p class="nowrap"> পূর্ববী স্টক: 3,186 | স্টক কমান: <span class="value-red">-1</span> | পরবর্তী স্টক: 3,185</p>
  </div>
</div>


<div class="max-w-sm mx-auto bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-xl transition-shadow duration-300">
  <img class="w-full h-48 object-cover" src="https://source.unsplash.com/400x300/?product" alt="Card image">

  <div class="p-4">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-bold text-gray-800">Smart Watch X3</h2>
      <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">New</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">
      Lightweight, waterproof and comes with a 2-day battery life. Perfect for fitness tracking and staying connected on the go.
    </p>

    <div class="mt-4 flex justify-between items-center">
      <div>
        <span class="text-lg font-bold text-green-600">$129</span>
        <span class="text-xs text-gray-400 line-through ml-2">$169</span>
      </div>
      <button class="bg-green-500 hover:bg-green-600 text-white text-sm px-4 py-2 rounded-xl transition duration-200">
        Buy Now
      </button>
    </div>
  </div>
</div>



<script>
  function goBack(){
    window.history.back();
  }
</script>

</body>
</html>
