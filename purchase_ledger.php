<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>বেচার খাতা</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .top-bar {
      background-color: #ffc107;
      padding: 10px 15px;
      color: black;
    }
    .card-header-blue {
      background-color: #0d6efd;
      color: white;
      border-radius: 8px;
      padding: 10px;
      text-align: center;
    }
    .nav-btns button {
      border-radius: 5px;
    }
    .search-bar {
      border: 1px solid gray;
      padding: 5px;
      border-radius: 10px;
    }
    .receipt-card {
      background-color: white;
      padding: 10px;
      border-radius: 10px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
<?php
// this codes are using for date arrow changing
$months_bn = [
    1=>'জানুয়ারি', 2=>'ফেব্রুয়ারি',3=>'মার্চ',4=>'এপ্রিল',5=>'মে',6=>'জুন',
    7=>'জুলাই',8=>'আগস্ট',9=>'সেপ্টেম্বর',10=>'অক্টোবর',11=>'নভেম্বর',12=>'ডিসেম্বর'
];

$current_month = isset($_GET['month']) ? (int)$_GET['month']: date('n');
$current_year = isset($_GET['year']) ? (int)$_GET['year'] : date('y');


$prev_month = $current_month - 1;
$prev_year = $current_year;
if($prev_month < 1){
    $prev_month = 12;
    $prev_year--;
}


$next_month = $current_month + 1;
$next_year = $current_year;
if($next_month > 12){
    $next_month = 1;
    $next_year++;
}


$current_month_bn = $months_bn[$current_month];
?>


<?php
// this codes are using for search bar for filter/sorting;
$selected_tab = isset($_GET['filter']) ? $_GET['filter'] : 'month';
?>
  <div class="top-bar d-flex align-items-center justify-content-between">
    <div class="back-btn" onclick="goBack()" style="cursor:pointer";>
      <i class="fas fa-arrow-left"></i>
    </div>
    <span>কেনার খাতা</span>
    <div>
      <img src="img/pdf-2.png" alt="PDF" width="24">
      <img src="https://img.icons8.com/ios-glyphs/30/000000/help.png" alt="Help" width="24">
    </div>
  </div>

  <div class="container my-3">
    <div class="card-header-blue mb-3">
      <h6>মোট ক্রয়</h6>
      <div class="d-flex justify-content-center align-items-center gap-3">
        <a href="?month=<?= $prev_month ?>&year=<?= $prev_year ?>" class = "btn btn-light btn-sm">&lt;</a>
        <strong><?= $current_month_bn ?></strong>
        <!-- <button class="btn btn-sm btn-light">&lt;</button> -->
        <!-- <strong>মে</strong> -->
        <a href="?month=<?=$next_month ?>&year=<?=$next_year ?>" class="btn btn-light btn-sm">&gt;</a>

        <!-- <button class="btn btn-sm btn-light">&gt;</button> -->
      </div>
      <h4 ></h4>
      <div class="fs-4">৳ 28,580</div>
    </div>

    <!-- <div class="nav-btns d-flex justify-content-between mb-3">
      <button class="btn btn-outline-secondary w-25">দিন</button>
      <button class="btn btn-outline-secondary w-25">সপ্তাহ</button>
      <button class="btn btn-primary w-25">মাস</button>
      <button class="btn btn-outline-secondary w-25">বছর</button>
    </div> -->
   <div class="d-flex justify-content-center gap-2 mb-3">
    <?php
    $tabs = [
        'day' => 'দিন',
        'week' => 'সপ্তাহ',
        'month' => 'মাস',
        'year' => 'বছর'
    ];
    foreach ($tabs as $key => $label){
        $isActive = ($selected_tab == $key) ? 'btn-primary text-white' : 'btn-outline-secondary';
        echo "<a href='?filter=$key' class='btn $isActive'>$label</a>";
    }
    ?>
   </div> 
    <form action="" method="GET" class="mb-4">
        <input type="text" name="search" class="form-control" placeholder="অনুসন্ধান করুন (নাম, মোবাইল, রিসিপ্ট)" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">

    </form>

    <!-- Static Receipts -->
    <div class="receipt-card">
      <div><strong>রিসিপ্ট # DS97X4N</strong></div>
      <div>গাজাজাজ | 1 আইটেম</div>
      <div class="text-muted small">লিলেন সিকুয়েল | ২৮-মে-২০২৫ ০৪:৪৮</div>
      <div class="d-flex justify-content-between mt-2">
        <div class="fw-bold text-danger">৳ 230</div>
        <span class="badge bg-danger">বাকি</span>
      </div>
    </div>

    <div class="receipt-card">
      <div><strong>রিসিপ্ট # 26C5HWS</strong></div>
      <div>122 আইটেম | লিলেন সিকুয়েল, সূতি</div>
      <div class="text-muted small">২৮-মে-২০২৫ ০৪:৪০</div>
      <div class="d-flex justify-content-between mt-2">
        <div class="fw-bold">৳ 27,950</div>
        <span class="badge bg-primary">নগদ টাকা</span>
      </div>
    </div>

    <div class="receipt-card">
      <div><strong>রিসিপ্ট # WEXR1T3</strong></div>
      <div>ইলিয়াস | 1 আইটেম | সূতি</div>
      <div class="text-muted small">২৮-মে-২০২৫ ১২:৪১</div>
      <div class="d-flex justify-content-between mt-2">
        <div class="fw-bold text-danger">৳ 200</div>
        <span class="badge bg-danger">পরিশোধিত</span>
      </div>
    </div>

    <div class="receipt-card">
      <div><strong>রিসিপ্ট # 2MHEQBN</strong></div>
      <div>1 আইটেম | সূতি</div>
      <div class="text-muted small">২৮-মে-২০২৫ ১২:০৫</div>
      <div class="d-flex justify-content-between mt-2">
        <div class="fw-bold">৳ 200</div>
        <span class="badge bg-primary">নগদ টাকা</span>
      </div>
    </div>

  </div>
<script>
  function goBack(){
    window.history.back();
  }
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
