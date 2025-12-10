<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website Makalah - 7 Kelompok</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
  
  <script>
    function openPDF(file) {
      window.open(file, "_blank"); // Buka PDF di tab baru
    }
  </script>

  <style>
    header {
      background-color: #F0E491;
      color: green;
      font-weight: 400;
    }
  </style>
</head>

<!-- Flexbox agar footer tetap di bawah -->
<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

  <!-- HEADER -->
  <header class="p-6 text-center text-2xl font-bold flex flex-col items-center">
    <img src="logo.png" alt="Logo" class="w-20 mb-3">
    Website Presentasi Makalah
  </header>

  <!-- MENU -->
  <nav class="p-6 max-w-4xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 flex-grow">

    <div onclick="openPDF('kelompok1.pdf')" class="cursor-pointer bg-white shadow-lg rounded-xl p-6 text-center font-semibold hover:shadow-2xl hover:bg-blue-50 transition">Kelompok 1</div>

    <div onclick="openPDF('kelompok2.pdf')" class="cursor-pointer bg-white shadow-lg rounded-xl p-6 text-center font-semibold hover:shadow-2xl hover:bg-blue-50 transition">Kelompok 2</div>

    <div onclick="openPDF('kelompok3.pdf')" class="cursor-pointer bg-white shadow-lg rounded-xl p-6 text-center font-semibold hover:shadow-2xl hover:bg-blue-50 transition">Kelompok 3</div>

    <div onclick="openPDF('kelompok4.pdf')" class="cursor-pointer bg-white shadow-lg rounded-xl p-6 text-center font-semibold hover:shadow-2xl hover:bg-blue-50 transition">Kelompok 4</div>

    <div onclick="openPDF('kelompok5.pdf')" class="cursor-pointer bg-white shadow-lg rounded-xl p-6 text-center font-semibold hover:shadow-2xl hover:bg-blue-50 transition">Kelompok 5</div>

    <div onclick="openPDF('kelompok6.pdf')" class="cursor-pointer bg-white shadow-lg rounded-xl p-6 text-center font-semibold hover:shadow-2xl hover:bg-blue-50 transition">Kelompok 6</div>

    <!-- MENU BARU -->
    <div onclick="openPDF('kelompok7.pdf')" class="cursor-pointer bg-white shadow-lg rounded-xl p-6 text-center font-semibold hover:shadow-2xl hover:bg-blue-50 transition">Kelompok 7</div>

  </nav>

  <!-- FOOTER -->
  <footer class="bg-gray-800 text-white text-center p-4 mt-auto">
    &copy; 2025 - Website Makalah
  </footer>

</body>
</html>
