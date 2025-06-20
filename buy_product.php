<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>কেনা</title>
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
    <h3>কেনা</h3>
    <i class="fas fa-question-circle"></i>
  </header>
    <style>
    .back-btn {
      font-size: 1.2rem;
      cursor: pointer;
    }

    header {
      background: #ffc107;
      color: #000;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    body {
      font-family: 'Noto Sans Bengali', sans-serif;
      background: #f0f2f5;
      padding: 20px;
    }

    form {
      background: #fff;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.08);
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: 600;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    select,
    input[type="file"] {
      width: 100%;
      padding: 10px 12px;
      margin-top: 5px;
      border-radius: 8px;
      border: 1px solid #c7e0f5;
      background: #f9fbff;
      box-shadow: inset 0 0 3px #e0f0ff;
    }

    input:focus, select:focus {
      outline: none;
      border-color: #007bff;
      background: #eef8ff;
    }

    .switches {
      margin-top: 15px;
    }

    .switch {
      display: flex;
      align-items: center;
      margin-top: 10px;
    }

    .switch input {
      display: none;
    }

    .slider {
      width: 40px;
      height: 20px;
      background: #ccc;
      border-radius: 20px;
      position: relative;
      transition: 0.4s;
      margin-right: 10px;
    }

    .slider::before {
      content: "";
      position: absolute;
      height: 16px;
      width: 16px;
      left: 2px;
      bottom: 2px;
      background-color: white;
      border-radius: 50%;
      transition: 0.4s;
    }

    .switch input:checked + .slider {
      background-color: #4CAF50;
    }

    .switch input:checked + .slider::before {
      transform: translateX(20px);
    }

    .switch-label {
      font-size: 14px;
      font-weight: 500;
    }

    button {
      margin-top: 25px;
      padding: 12px 25px;
      background: linear-gradient(135deg, #007bff, #00c6ff);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background: linear-gradient(135deg, #0056b3, #0095c9);
    }

    @media (max-width: 600px) {
      form {
        padding: 15px;
      }

      button {
        font-size: 15px;
      }
    }

    /* Newly Added Hidden Class */
    .hidden {
      display: none;
    }
  </style>

<!-- form -->

 <form  method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: auto;" id="productForm">

     <label for="unit">পন্যের একক</label>
     <select id="unit" name="unit">
        <option value="goj">গজ</option>
       <option value="pis">পিছ</option>
       <option value="dojon">ডজন</option>
       <option value="inch">ইঞ্চি</option>
       <option value="haat">হাত</option>
     </select>

    <label for="product_name">প্রোডাক্ট নাম *</label>
    <input type="text" id="product_name" name="product_name" required placeholder="প্রোডাক্টের নাম লিখুন">

    

    <label for="product_entry_date">কেনার তারিখ</label>
    <input type="date" id="product_entry_date" name="product_entry_date">

    <!-- <label for="sell_price">বিক্রয় মূল্য *</label>
    <input type="number" step="0.01" id="sell_price" name="sell_price" required placeholder="বিক্রয় মূল্য লিখুন"> -->




  <label for="unit">পণ্যের ক্যাটাগরি</label>
<select id="unit" name="unit" onchange="checkNewCategory(this.value)">
  <option value="সুতি">সুতি</option>
  <option value="লিলেন">লিলেন</option>
  <option value="ভিসকস">ভিসকস</option>
  <option value="জরজেট">জরজেট</option>
  <option value="রেয়ন">রেয়ন</option>
  <option value="সিল্ক">সিল্ক</option>
  <option value="পলিয়েস্টার">পলিয়েস্টার</option>
  <option value="new">➕ নতুন ক্যাটাগরি যোগ করুন</option>
</select>

<!-- ইনপুট ফিল্ড, শুরুতে লুকানো থাকবে -->
<div id="newCategoryInput" style="margin-top:10px; display: none;">
  <input type="text" name="new_category" placeholder="নতুন ক্যাটাগরির নাম লিখুন" class="form-control mt-2">
</div>

<script>
  function checkNewCategory(value) {
    var inputDiv = document.getElementById("newCategoryInput");
    if (value === "new") {
      inputDiv.style.display = "block";
    } else {
      inputDiv.style.display = "none";
    }
  }
</script>
    <label for="product_entry_date">প্রোডাক্টের বিস্তারিত লিখুন</label>

  <textarea id="product_details" name="product_details" class="form-control" required placeholder="এখানে লিখুন"></textarea>
 

      <!-- <label class="switch">
        <input type="checkbox" name="discount" value="1">
        <span class="slider"></span>
        <span class="switch-label">ডিসকাউন্ট</span>
      </label>
      <label class="switch">
        <input type="checkbox" name="vat_tax" value="1">
        <span class="slider"></span>
        <span class="switch-label">ভ্যাট / ট্যাক্স</span>
      </label> -->
    </div>

    <label for="product_pic">প্রোডাক্ট ছবি</label>
    <input type="file" id="product_pic" name="product_pic" accept="image/*" onchange="previewImage(event)">
    <img id="preview" style="max-width: 100px; margin-top: 10px; display: none;"/>

    <a href="buy_productPTO.php"><button type="button">Next</button></a>
  </form>






















  <!-- <div class="learn-btn">
    ▶ চলুন শিখে নেই কিভাবে এই ফিচারটি কাজ করে
  </div> -->
<script>
  function goBack(){
    window.history.back();
  }
</script>
</body>
</html>
