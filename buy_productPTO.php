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


    .switch-label {
  font-size: 14px;
  font-weight: 500;
  margin-left: 8px;
}
  </style>

<!-- form -->

 <form  method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: auto;" id="productForm">


 

  <label for="buy_price"> পার্টির নাম *</label>
    <input type="text"  id="clint_name" name="clint_name" required placeholder="পার্টির নাম লিখুন">

  <label for="buy_price"> পার্টির ঠিকানা *</label>
    <input type="text"  id="clint_address" name="clint_address" required placeholder="পার্টির ঠিকানা লিখুন">

  <label for="buy_price"> পার্টির ফোন নাম্বার *</label>
    <input type="text"  id="clint_phone" name="clint_phone" required placeholder="পার্টির ফোন নাম্বার লিখুন">
    

    <label for="product_quantity">প্রোডাক্ট সংখ্যা *</label>
    <input type="number" id="product_quantity" name="product_quantity" required placeholder="প্রোডাক্টের সংখ্যা লিখুন" min="1">

    <label for="buy_price">ক্রয় মূল্য *</label>
    <input type="number" step="0.01" id="buy_price" name="buy_price" required placeholder="ক্রয় মূল্য লিখুন">

    <label for="payment_type">পেমেন্টের ধরন</label>
<select id="payment_type" name="payment_type" required onchange="showPaymentFields()">
    <option value="" disabled selected>নির্বাচন করুন</option>
    <option value="cash">নগদ</option>
    <option value="check">চেক</option>
    <option value="due">বাকি</option>
    <option value="cash_due">নগদ + বাকি</option>
    <option value="cash_check">নগদ + চেক</option>
    <option value="check_due">চেক + বাকি</option>
</select>

<div id="payment_details" style="margin-top: 20px;"></div>

<script>
function showPaymentFields() {
    const type = document.getElementById("payment_type").value;
    const container = document.getElementById("payment_details");
    container.innerHTML = ""; // Clear previous fields

    const cashInput = `
        <label>নগদ টাকার পরিমাণ:</label>
        <input type="number" name="cash_amount" placeholder="পরিমাণ লিখুন" min="0"><br>
    `;

    const dueInput = `
        <label>বাকি টাকার পরিমাণ:</label>
        <input type="number" name="due_amount" placeholder="পরিমাণ লিখুন" min="0"><br>
    `;

    const checkInputs = `
        <label>চেকের পরিমাণ:</label>
        <input type="number" name="check_amount" placeholder="পরিমাণ লিখুন" min="0"><br>

        <label>চেক কার:</label>
        <select id="check_owner" name="check_owner" onchange="togglePartyFields()" required>
            <option value="" disabled selected>নির্বাচন করুন</option>
            <option value="self">নিজ</option>
            <option value="party">পার্টি</option>
        </select><br>

        <div id="check_common_fields" style="display: none;">
            <label>চেকের তারিখ:</label>
            <input type="date" name="check_date"><br>

            <label>ব্যাংকের নাম:</label>
            <input type="text" name="bank_name" placeholder="ব্যাংকের নাম"><br>
        </div>

        <div id="party_only_fields" style="display: none;">
            <label>পার্টির নাম:</label>
            <input type="text" name="party_name" placeholder="পার্টির নাম"><br>
        </div>
    `;

    // Show relevant fields based on payment type
    if (type === "cash") {
        container.innerHTML = cashInput;
    } else if (type === "check") {
        container.innerHTML = checkInputs;
    } else if (type === "due") {
        container.innerHTML = dueInput;
    } else if (type === "cash_due") {
        container.innerHTML = cashInput + "<br>" + dueInput;
    } else if (type === "cash_check") {
        container.innerHTML = cashInput + "<br>" + checkInputs;
    } else if (type === "check_due") {
        container.innerHTML = checkInputs + "<br>" + dueInput;
    }
}

function togglePartyFields() {
    const owner = document.getElementById("check_owner").value;
    const common = document.getElementById("check_common_fields");
    const party = document.getElementById("party_only_fields");

    if (owner === "self") {
        common.style.display = "block";
        party.style.display = "none";
    } else if (owner === "party") {
        common.style.display = "block";
        party.style.display = "block";
    } else {
        common.style.display = "none";
        party.style.display = "none";
    }
}
</script>
<div class="switches">
      <label class="switch">
        <input type="checkbox" name="discount" id="discount" value="1" onchange="toggleStockLimit()">
        <span class="slider"></span>
        <span class="switch-label">ডিসকাউন্ট</span>
      </label>
      <div id="discount_limit_group" class="mb-4 hidden">
        <label for="discount" class="block mb-1 font-medium">ডিসকাউন্ট কত পেয়েছেন</label>
        <input type="number" id="discount" name="discount" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="এখানে লিখুন">
      </div>

<div class="switches">
      <label class="switch">
        <input type="checkbox" name="vat_tax" id="vat_tax" value="1" onchange="toggleStockLimit2()">
        <span class="slider"></span>
        <span class="switch-label">ভ্যাট / ট্যাক্স</span>
      </label>
      <div id="vat_tax_limit_group" class="mb-4 hidden">
        <label for="vat_tax" class="block mb-1 font-medium">ভ্যাট / ট্যাক্স কত ? </label>
        <input type="number" id="vat_tax" name="vat_tax" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="এখানে লিখুন ">
      </div>
    </div>
    <button type="submit">Save</button>
  </form>
<script>
  // Function to preview the image
  function goBack(){
    window.history.back();
  }

// hidden feild function
  function toggleStockLimit() {
      const checkbox = document.getElementById("discount");
      const stockLimitGroup = document.getElementById("discount_limit_group");

      if (checkbox.checked) {
        stockLimitGroup.classList.remove("hidden");
      } else {
        stockLimitGroup.classList.add("hidden");
      }
    }

    function toggleStockLimit2(){
      const  checkbox2 = document.getElementById("vat_tax");
      const stockLimitGroup2 = document.getElementById("vat_tax_limit_group");

      if (checkbox2.checked) {
        stockLimitGroup2.classList.remove("hidden");
      } else {
        stockLimitGroup2.classList.add("hidden");
      }
    }
</script>
</body>
</html>
