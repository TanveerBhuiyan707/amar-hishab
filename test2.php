<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>কেনা</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      font-family: 'Noto Sans Bengali', sans-serif;
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    .nav-tabs-container {
      position: relative;
      margin-bottom: 15px;
    }
    .nav-tabs .nav-link.active {
      background-color: #0d6efd;
      color: #fff;
    }
    .progress-wrapper {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      height: 30px;
      margin-top: 5px;
    }
    .progress-line {
      height: 4px;
      background-color: #e0e0e0;
      width: 100%;
      position: relative;
      border-radius: 5px;
    }
    .progress-bar-fill {
      position: absolute;
      height: 4px;
      background-color: #0d6efd;
      top: 0;
      left: 0;
      width: 0%;
      border-radius: 5px;
      transition: width 0.4s ease;
    }
    .progress-step {
      position: absolute;
      width: 16px;
      height: 16px;
      background: #fff;
      border: 3px solid #e0e0e0;
      border-radius: 50%;
      top: -6px;
      transform: translateX(-50%);
      transition: background 0.4s, border-color 0.4s;
    }
    .step-filled {
      background: #0d6efd;
      border-color: #0d6efd;
    }
    .step-1 { left: 0%; }
    .step-2 { left: 50%; }
    .step-3 { left: 100%; }
    .tab-pane {
      padding: 20px;
      background: #fff;
      border: 1px solid #dee2e6;
      border-top: none;
      border-radius: 0 0 10px 10px;
    }
    .btn-next {
      margin-top: 40px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .is-invalid {
      border-color: red;
      background-color: #ffe6e6;
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
      /* padding: 20px; */
    }

    form {
      background: #fff;
      /* padding: 25px; */
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
        /* padding: 15px; */
      }

      button {
        font-size: 15px;
      }
    }

    /* Newly Added Hidden Class */
    .hidden {
      display: none;
    }
 


    .total-box {
  margin-top: 20px;
}

.total-amount-box {
  font-size: 20px;
  font-weight: bold;
  color: #155724;
  background-color: #d4edda;
  border: 2px solid #c3e6cb;
  border-radius: 8px;
  padding: 12px;
  text-align: center;
  box-shadow: 0 0 10px rgba(21, 87, 36, 0.1);
  transition: 0.3s ease-in-out;
}
.total-amount-box:focus {
  outline: none;
  box-shadow: 0 0 12px rgba(0, 123, 255, 0.4);
}


  </style>
</head>
<body class="bg-light">
<header>
    <div class="back-btn" onclick="goBack()" style="cursor:pointer">
      <i class="fas fa-arrow-left"></i>
    </div>
    <h3>কেনা</h3>
    <i class="fas fa-question-circle"></i>
  </header>


  <div class="container ">
    <div class="nav-tabs-container">
      <ul class="nav nav-tabs" id="formTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active prevent-tab-click" id="product-tab" data-bs-toggle="tab" data-bs-target="#product" type="button" role="tab">পণ্যের তথ্য</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link prevent-tab-click" id="party-tab" data-bs-toggle="tab" data-bs-target="#party" type="button" role="tab">পার্টি তথ্য</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link prevent-tab-click" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab">পেমেন্ট</button>
        </li>
      </ul>
      <div class="progress-wrapper">
        <div class="progress-line">
          <div class="progress-bar-fill" id="progressFill"></div>
          <div class="progress-step step-1" id="circle1"></div>
          <div class="progress-step step-2" id="circle2"></div>
          <div class="progress-step step-3" id="circle3"></div>
        </div>
      </div>
    </div>

    <form method="POST" enctype="multipart/form-data">
      
      <div class="tab-content" id="formTabsContent">
        <div class="tab-pane fade show active" id="product" role="tabpanel">
          <label for="unit">পণ্যের একক</label>
     <select id="unit" name="unit">
        <option value="goj">গজ</option>
       <option value="pis">পিছ</option>
       <option value="dojon">ডজন</option>
       <option value="inch">ইঞ্চি</option>
       <option value="haat">হাত</option>
     </select>
          <label>পণ্যের নাম *</label>
          <input type="text" name="product_name" placeholder="এখানে লিখুন" class="form-control" required>
          
          <label class="mt-3">কেনার তারিখ</label>
          <input type="date" name="product_entry_date" class="form-control">
          <label for="unit">পণ্যের ক্যাটাগরি</label>
<select id="unit" name="unit" onchange="checkNewCategory(this.value)">button
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
          <label class="mt-3">মন্তব্য</label>
          <textarea name="product_details" placeholder="এখানে লিখুন" class="form-control"></textarea>
          <label class="mt-3">পণ্যের ছবি</label>
          <input type="file" name="product_pic" class="form-control">
          <button type="button" class="btn btn-primary btn-next" onclick="nextTab('party-tab', 2)">Next</button>
        </div>

        <div class="tab-pane fade" id="party" role="tabpanel">
          <label>পার্টির নাম *</label>
          <input type="text" name="clint_name" placeholder="এখানে লিখুন" class="form-control" required>
          <label class="mt-3">ঠিকানা</label>
          <input type="text" name="clint_address" placeholder="এখানে লিখুন" class="form-control">
          <label class="mt-3">ফোন নাম্বার </label>
          <input type="text" name="clint_phone" placeholder="এখানে লিখুন" class="form-control" required>
          
          <button type="button" class="btn btn-primary btn-next" onclick="nextTab('payment-tab', 3)">Next</button>
        </div>

        <div class="tab-pane fade" id="payment" role="tabpanel">
          <label>ক্রয় মূল্য</label>
          <input type="number" placeholder="এখানে লিখুন" name="buy_price" class="form-control">
          <label class="mt-3">পণ্যের পরিমাণ *</label>
          <input type="number" name="product_quantity" placeholder="এখানে লিখুন" class="form-control" min="1" required>

          <div class="mt-3 total-box">
            <label for="totalAmount">মোট পরিমাণ:</label>
<input type="text" id="totalAmount" class="form-control total-amount-box" readonly>          </div>

<div class="switches">
      <label class="switch">
        <input type="checkbox" name="discount" id="discount" value="1" onchange="toggleStockLimit()">
        <span class="slider"></span>
        <span class="switch-label">ডিসকাউন্ট</span>
      </label>
      <div id="discount_limit_group" class="mb-4 hidden">
        <label for="discount" class="block mb-1 font-medium">ডিসকাউন্ট কত পেয়েছেন</label>
<input type="number" id="discount_amount" name="discount_amount" class="form-control" placeholder="এখানে লিখুন">      </div>

          <div class="switches">
      <label class="switch">
        <input type="checkbox" name="vat_tax" id="vat_tax" value="1" onchange="toggleStockLimit2()">
        <span class="slider"></span>
        <span class="switch-label">ভ্যাট / ট্যাক্স</span>
      </label>
      <div id="vat_tax_limit_group" class="mb-4 hidden">
        <label for="vat_tax" class="block mb-1 font-medium">ভ্যাট / ট্যাক্স কত ? </label>
<input type="number" id="vat_tax_amount" name="vat_tax_amount" class="form-control" placeholder="এখানে লিখুন">      </div>
    </div>

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
    
          <!-- <input type="number" name="vat_tax" class="form-control"> -->
          <button type="submit" class="btn btn-success btn-next">Save</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Prevent tab click from navigating
    document.querySelectorAll('.prevent-tab-click').forEach(tab => {
      tab.addEventListener('click', function (e) {
        e.preventDefault();
      });
    });

    function nextTab(tabId, step) {
      const currentTabPane = document.querySelector('.tab-pane.active');
      const inputs = currentTabPane.querySelectorAll('input, select, textarea');

      let isValid = true;
      inputs.forEach(input => {
        if (!input.checkValidity()) {
          input.classList.add('is-invalid');
          isValid = false;
        } else {
          input.classList.remove('is-invalid');
        }
      });

      if (!isValid) {
        const firstInvalid = currentTabPane.querySelector('.is-invalid');
        if (firstInvalid) firstInvalid.focus();
        return;
      }

      const triggerEl = document.querySelector(`#${tabId}`);
      const tab = new bootstrap.Tab(triggerEl);
      tab.show();
      updateProgress(step);
    }

    function updateProgress(step) {
      const fill = document.getElementById('progressFill');
      const circles = [document.getElementById('circle1'), document.getElementById('circle2'), document.getElementById('circle3')];
      const widths = ["0%", "50%", "100%"];
      fill.style.width = widths[step - 1];

      circles.forEach((circle, index) => {
        if (index < step) {
          circle.classList.add('step-filled');
        } else {
          circle.classList.remove('step-filled');
        }
      });
    }

    // Initial progress
    updateProgress(1);



// discount script

    function toggleStockLimit() {
      const checkbox = document.getElementById("discount");
      const stockLimitGroup = document.getElementById("discount_limit_group");

      if (checkbox.checked) {
        stockLimitGroup.classList.remove("hidden");
      } else {
        stockLimitGroup.classList.add("hidden");
      }
    }
// vat tax script
    function toggleStockLimit2(){
      const  checkbox2 = document.getElementById("vat_tax");
      const stockLimitGroup2 = document.getElementById("vat_tax_limit_group");

      if (checkbox2.checked) {
        stockLimitGroup2.classList.remove("hidden");
      } else {
        stockLimitGroup2.classList.add("hidden");
      }
    }


    // total amount script

  // এই ফাংশনটি দাম এবং পরিমাণ ইনপুট অনুযায়ী মোট দাম আপডেট করবে
  function calculateTotal() {
    const price = parseFloat(document.querySelector('[name="buy_price"]').value) || 0;
    const quantity = parseFloat(document.querySelector('[name="product_quantity"]').value) || 0;

    let discount = 0;
    let vat = 0;

    const discountInput = document.querySelector('[name="discount_amount"]');
    const vatInput = document.querySelector('[name="vat_tax_amount"]');

    if (document.getElementById("discount").checked && discountInput) {
      discount = parseFloat(discountInput.value) || 0;
    }

    if (document.getElementById("vat_tax").checked && vatInput) {
      vat = parseFloat(vatInput.value) || 0;
    }

    let total = (price * quantity) - discount + vat;
    document.getElementById("totalAmount").value = total.toFixed() + " ৳";
  }

  // Initial Event Binding
  document.querySelector('[name="buy_price"]').addEventListener('input', calculateTotal);
  document.querySelector('[name="product_quantity"]').addEventListener('input', calculateTotal);
  document.getElementById("discount").addEventListener('change', function() {
    toggleStockLimit(); // ফিল্ড দেখাও
    setTimeout(() => {
      const input = document.querySelector('[name="discount_amount"]');
      if (input) input.addEventListener('input', calculateTotal);
    }, 100);
    calculateTotal();
  });

  document.getElementById("vat_tax").addEventListener('change', function() {
    toggleStockLimit2(); // ফিল্ড দেখাও
    setTimeout(() => {
      const input = document.querySelector('[name="vat_tax_amount"]');
      if (input) input.addEventListener('input', calculateTotal);
    }, 100);
    calculateTotal();
  });


  </script>
</body>
</html>
