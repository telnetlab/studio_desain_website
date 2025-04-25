<?php
$koneksi = mysqli_connect("localhost", "root", "", "toko_penjualan");

$sql    = "SELECT produk, jumlah FROM penjualan";
$result = mysqli_query($koneksi, $sql);
$all    = mysqli_fetch_all($result);

$labels = array_column($all, 0);
$data   = array_column($all, 1);

$colors = [
  '#f94144', '#f3722c', '#f9844a', '#f9c74f',
  '#90be6d', '#43aa8b', '#577590', '#277da1'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chart Penjualan Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">

<div class="container py-5">
  <h2 class="text-center mb-5">Grafik Pie Penjualan Produk</h2>
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title text-center mb-4">Pie Chart</h5>
          <div class="chart-container">
            <canvas id="chartPie"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const labels   = <?= json_encode($labels) ?>;
  const values   = <?= json_encode($data) ?>;
  const bgColors = <?= json_encode($colors) ?>;

  function dataset(opts = {}) {
    return Object.assign({
      label: 'Jumlah',
      data: values,
      backgroundColor: bgColors,
      borderColor: '#fff',
      borderWidth: 1,
    }, opts);
  }

  new Chart(document.getElementById('chartPie'), {
    type: 'pie',
    data: {
      labels,
      datasets: [ dataset({ borderColor: '#fff', borderWidth: 2 }) ]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'bottom' }
      }
    }
  });
</script>

</body>
</html>
