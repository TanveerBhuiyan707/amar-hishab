<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>যোগাযোগ</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background-color: #f9f9f9;
        }

        .header {
            background-color: #ffc107;
            padding: 15px;
            text-align: left;
            font-size: 20px;
            font-weight: bold;
            color: black;
        }

        .container {
            padding: 15px;
        }

        .tabs {
            display: flex;
            flex-wrap: nowrap; /* Ensure all tabs are on one line */
            justify-content: space-between; /* Distribute space */
            border-bottom: 1px solid #ccc;
            margin-bottom: 10px;
        }

        .tab {
            flex: 1;
            padding: 10px 5px;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: 0.3s;
            text-align: center;
        }

        .tab.active {
            border-bottom: 3px solid #007bff;
            font-weight: bold;
        }

        .search-box {
            margin: 10px 0;
        }

        .search-box input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

        .no-data {
            text-align: center;
            padding: 50px 10px;
            font-size: 18px;
            color: #888;
            position: relative;
        }

        .info-text {
            font-size: 14px;
            color: gray;
            text-align: center;
            margin-top: 10px;
        }

        .add-btn {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 12px;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
        }
    .top-bar {
      background-color: #ffc107;
      padding: 10px 15px;
      color: black;
    }
    </style>
</head>
<body>

<div class="top-bar d-flex align-items-center justify-content-between ">
    <div class="back-btn" onclick="goBack()" style="cursor:pointer;">
        <i class="fas fa-arrow-left"></i>
    </div>
    <span>যোগাযোগ</span>
    <div>
      <img src="img/pdf-2.png" alt="PDF" width="24">
      <img src="https://img.icons8.com/ios-glyphs/30/000000/help.png" alt="Help" width="24">
    </div>
  </div>

<div class="container">
    <div class="tabs">
        <div class="tab active" onclick="switchTab('employee')">কর্মচারী</div>
        <div class="tab" onclick="switchTab('customer')">কাস্টমার</div>
        <div class="tab" onclick="switchTab('others')">সাপ্লায়ার</div>
    </div>

    <div class="search-box">
        <input type="text" placeholder="খোঁজ করুন">
    </div>

    <div id="content-area">
        <div class="no-data">
            <div>কোন কর্মচারী পাওয়া যায়নি</div>
        </div>
    </div>

    <div class="info-text">ফ্রি ইউজার লিমিট: ১০</div>
    <div class="add-btn">+ নতুন কর্মী যুক্ত করুন</div>
</div>

<script>
    function switchTab(type) {
        let tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => tab.classList.remove('active'));
        event.target.classList.add('active');

        document.getElementById('content-area').innerHTML = `
            <div class="no-data">
                <div>কোন ${type === 'employee' ? 'কর্মচারী' : type === 'customer' ? 'কাস্টমার' : 'তথ্য'} পাওয়া যায়নি</div>
            </div>
        `;
    }
</script>
<script>
  function goBack(){
    window.history.back();
  }
</script>
</body>
</html>
