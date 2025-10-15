<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Situs Sedang Dalam Pemeliharaan | AlgoTri</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at top left, #0f2027, #203a43, #2c5364);
      color: #fff;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
    }

    .maintenance-icon {
      font-size: 6rem;
      color: #00d4ff;
      animation: pulse linear 05s infinite;
    }

    @keyframes pulse {
      0% { transform: rotate(0deg);  }
      100% { transform: rotate(300deg); } 
      
    }

    h1 {
      font-weight: 600;
      margin-top: 20px;
      font-size: 2.5rem;
    }

    p {
      color: #cfd8dc;
      margin-bottom: 40px;
    }

    .btn-custom {
      background-color: #00d4ff;
      color: #0f2027;
      border-radius: 30px;
      padding: 10px 25px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #00bcd4;
      color: #fff;
      transform: translateY(-3px);
    }

    footer {
      position: absolute;
      bottom: 15px;
      color: #9ea7ad;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <div class="container text-center">
    <div class="maintenance-icon mb-3">
      <i class="bi bi-gear-fill"></i>
    </div>

    <h1>Website Sedang Dalam Pemeliharaan</h1>
    <p>Kami sedang melakukan peningkatan sistem untuk memberikan pengalaman terbaik bagi Anda.<br>
    Silakan kembali beberapa saat lagi.</p>

   
  </div>

  <footer>
    &copy; 2025 AlgoTri | All rights reserved.
  </footer>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>