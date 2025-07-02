<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Responsive Product Card</title>
  <style>
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
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

  <div class="w-full max-w-sm">
    <!-- Card Container -->
    <div class="card bg-white rounded-2xl shadow-md transition-all duration-300 cursor-pointer overflow-hidden" onclick="toggleCard(this)">
      
      <!-- Upper 50% -->
      <div class="p-5 text-center">
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

</body>
</html>
