<?php
include 'db.php'; // Include your database connection file

  // Fetch products from the database
  $query = "SELECT * FROM products";
  $result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>গোডাউন স্টক</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
      position: fixed;
      bottom: 20px;
      z-index: 999;
    }
    .item-1{
      width: 50%;
      background: #1959dd;
      color: white;

    }
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
    .page-content {
    padding-bottom: 55px;
  }




    .reveal {
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      transition: all 0.4s ease-in-out;
    }
    .card.open .reveal {
      max-height: 200px;
      opacity: 1;
    }

  </style>
</head>
<body>

<!-- header & back button  -->
  <div class="top-bar">
    <div class="back-btn" onclick="goBack()" style="cursor:pointer;">
      <i class="fas fa-arrow-left"></i>
    </div>
    <div><span>গোডাউন স্টক</span></div>
    <div class="border p-1 rounded-3 border-secondary"><span><a href="shop_stock_history.php" style="text-decoration:none">স্টকের ইতিহাস</a></span></div>
    <div><i class="fa-solid fa-ellipsis-vertical"></i></div>
  </div>
  <div class="blue-box">
    <div class="balance-box">
      <div class="d-flex justify-content-between">
        <?php 
          $total_quantity = 0;
          $total_price = 0;

          // $query = "SELECT * FROM products";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_assoc($result)){
            $total_quantity += $row['product_quantity'];
            $total_price +=  $row['buy_price']* $row['product_quantity'];
          }
        ?>
        <div class="badge-red w-50 me-2">মোট মজুদ <br> ৳ <?= $total_quantity ?></div>
        <div class="badge-green w-50 ms-2">মজুদ মূল্য <br> ৳  <?= $total_price ?></div>
      </div>
    </div>
  </div>
  <main class="container h-100">
 

  <div class="search-filter d-flex">
    <input type="text" class="form-control me-2" placeholder="প্রোডাক্ট  খুঁজুন (নাম, কোড)">
    <button class="btn btn-outline-secondary">ফিল্টার</button>
  </div>

  <?php
//   $query = "SELECT * FROM products ";
//   $result = mysqli_query($conn, $query);
//   if (mysqli_num_rows($result) > 0) {
//     while ($row=mysqli_fetch_assoc($result)) {
//       echo 
//       ' <a style="text-decoration:none; color:#000;" href="update_product.php?id=' . $row['id'] . '">
//        <div class="text-center mb-2 page-content" >
//           <div class="receipt-card">
//             <div><strong>রিসিপ্ট # ' . $row['id'] .'</strong></div>
//             <div>' . $row['product_name'] . '</div>
//             <div>'. $row['product_quantity'] .'</div>
//             <div class="text-muted small">' . $row['product_entry_date'] . '</div>';
           
//             if (!empty($row['image'])) {
//         echo '<div><img src="uploads/' . $row['image'] . '" width="100" style="border-radius: 8px; margin: 5px 0;"></div>';
//       }


//         echo 
//            ' <div class="d-flex justify-content-between mt-2">
//               <div class="fw-bold text-danger">'. $row['buy_price'] . '৳ </div>
//               <span class="badge bg-danger">'. $row['buy_price'] * $row['product_quantity'].'</span>
//             </div>
//           </div>
//         </div> </a>';
//     }
//   }
  ?>
 


 <div class="w-full max-w-sm">
    <!-- Card Container -->
    <div class="card bg-white rounded-2xl shadow-md transition-all duration-300 cursor-pointer overflow-hidden" onclick="toggleCard(this)">
      
      <!-- Upper 50% -->
      <div class=" text-center">
        <img src="https://source.unsplash.com/80x80/?box" alt="Product" class="w-20 h-20 mx-auto rounded-full border-4 border-gray-200 shadow-sm mb-3">
        <h2 class="text-lg font-bold text-gray-800">Premium Rice</h2>
        <p class="text-sm text-gray-500">Quantity: <strong>150 kg</strong></p>
      </div>

      <!-- Hidden Lower 50% -->
      <div class="reveal bg-gray-50 px-6 py-4 border-t border-gray-200">
        <p class="text-sm text-gray-600"><strong>Entry Date:</strong> 2025-06-23</p>
        <p class="text-sm text-gray-600"><strong>Supplier:</strong> Golden Agro Ltd.</p>
        <p class="text-sm text-gray-600">
          <strong>Status:</strong>
          <span class="inline-block bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full ml-1">In Stock</span>
        </p>
      </div>

    </div>
  </div>

  <script>
    function toggleCard(card) {
      card.classList.toggle('open');
    }
  </script>
</main>
<div class="last-item d-flex justify-content-around mb-3">
  <!-- <div class="item-1 r"><span> পন্য আপডেট করুন</span></div> -->
  <div class="item-2 r"><a href="add_product.php" style="text-decoration:none;color:white; cursor:pointer"><span>প্রোডাক্ট যুক্ত করুন</span></a></div>
</div>

<script>
  // Function to go back to the previous page
  function goBack(){
    window.history.back();
  }
</script>
</body>
</html>
