<?php
  include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add product</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&display=swap" rel="stylesheet">
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
</head>
<body>


<!-- form er sathe backend connected -->
<?php
// Recive data from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$product_name = $_POST['product_name'];
$product_quantity = $_POST['product_quantity'];
$product_entry_date = $_POST['product_entry_date'] ?? null;
$sell_price = $_POST['sell_price'];
$buy_price = $_POST['buy_price'];
$unit = $_POST['unit'] ?? null;
$stock_alert = isset($_POST['stock_alert']) ? 1: 0;
$discount = isset($_POST['discount']) ? 1: 0;
$vat_tax = isset($_POST['vat_tax']) ? 1:0;
$min_stock = isset($_POST['min_stock']) ? (int) $_POST['min_stock'] : 0;


// Image upload handling
$image_name = "";
if (isset($_FILES['product_pic']) && $_FILES['product_pic']['error'] == 0) {
  $upload_dir = "uploads/";
  if(!is_dir($upload_dir)){
    mkdir($upload_dir,0777,true);//create upload folder if not exist
  }
  $image_name = time() . '_' . basename($_FILES["product_pic"]["name"]);
  $target_file = $upload_dir . $image_name;

  move_uploaded_file($_FILES["product_pic"]["tmp_name"],$target_file);
}


// Insert query
$sql = "INSERT INTO products
(product_name,product_quantity,product_entry_date,sell_price,buy_price,unit,stock_alert,discount,vat_tax,image,min_stock)
VALUES (?,?,?,?,?,?,?,?,?,?,?)";


$stmp = $conn->prepare($sql);
$stmp->bind_param("sissddiiisi",$product_name,$product_quantity,$product_entry_date,$sell_price,$buy_price,$unit,$stock_alert,$discount,$vat_tax,$image_name,$min_stock);


if($stmp->execute()){
  echo "<script>alert('product saved successfully !');window.location.href='add_product.php';</script>";
}else{
  echo "something wrong" . $stmp->error;
}

$stmp->close();
$conn->close();
}
?>
  <header>
    <div class="back-btn" onclick="goBack()">
      <i class="fas fa-arrow-left"></i>
    </div>
    <div><span>প্রোডাক্ট যুক্ত করুন</span></div>
    <i class="fas fa-question-circle"></i>
  </header>

  <form  method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: auto;" id="productForm">
    <label for="product_name">প্রোডাক্ট নাম *</label>
    <input type="text" id="product_name" name="product_name" required placeholder="প্রোডাক্টের নাম লিখুন">

    <label for="product_quantity">প্রোডাক্ট সংখ্যা *</label>
    <input type="number" id="product_quantity" name="product_quantity" required placeholder="প্রোডাক্টের সংখ্যা লিখুন" min="1">

    <label for="product_entry_date">প্রোডাক্ট দোকানে কবে ঢুকেছে তারিখ</label>
    <input type="date" id="product_entry_date" name="product_entry_date">

    <label for="sell_price">বিক্রয় মূল্য *</label>
    <input type="number" step="0.01" id="sell_price" name="sell_price" required placeholder="বিক্রয় মূল্য লিখুন">

    <label for="buy_price">ক্রয় মূল্য *</label>
    <input type="number" step="0.01" id="buy_price" name="buy_price" required placeholder="ক্রয় মূল্য লিখুন">

    <label for="unit">পন্যের একক</label>
    <select id="unit" name="unit">
      <option value="pis">পিছ</option>
      <option value="goj">গজ</option>
      <option value="dojon">ডজন</option>
      <option value="inch">ইঞ্চি</option>
      <option value="haat">হাত</option>
    </select>

    <div class="switches">
      <label class="switch">
        <input type="checkbox" name="stock_alert" id="stock_alert" value="1" onchange="toggleStockLimit()">
        <span class="slider"></span>
        <span class="switch-label">স্টক কমের অ্যালার্ট</span>
      </label>
      <div id="min_stock_limit_group" class="mb-4 hidden">
        <label for="min_stock" class="block mb-1 font-medium">নূন্যতম স্টক লিমিট</label>
        <input type="number" id="min_stock" name="min_stock" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="উদাহরণ: 10">
      </div>

      <label class="switch">
        <input type="checkbox" name="discount" value="1">
        <span class="slider"></span>
        <span class="switch-label">ডিসকাউন্ট</span>
      </label>
      <label class="switch">
        <input type="checkbox" name="vat_tax" value="1">
        <span class="slider"></span>
        <span class="switch-label">ভ্যাট / ট্যাক্স</span>
      </label>
    </div>

    <label for="product_pic">প্রোডাক্ট ছবি</label>
    <input type="file" id="product_pic" name="product_pic" accept="image/*" onchange="previewImage(event)">
    <img id="preview" style="max-width: 100px; margin-top: 10px; display: none;"/>

    <button type="submit">Save</button>
  </form>

  <script>
    function goBack() {
      window.history.back();
    }

    function toggleStockLimit() {
      const checkbox = document.getElementById("stock_alert");
      const stockLimitGroup = document.getElementById("min_stock_limit_group");

      if (checkbox.checked) {
        stockLimitGroup.classList.remove("hidden");
      } else {
        stockLimitGroup.classList.add("hidden");
      }
    }

    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function(){
        const preview = document.getElementById('preview');
        preview.src = reader.result;
        preview.style.display = 'block';
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
</body>
</html>
