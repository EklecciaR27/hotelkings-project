@extends('layouts.global')

@include('components.navbardashboard')



<head>
    <title>Grafik Reservasi dan Tamu</title>
    <!-- Tambahkan referensi ke Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="text-center flex flex-col items-center">
        <h1 class="text-2xl font-bold mt-8">CHART TOTAL TAMU DAN TOTAL RESERVASI</h1>
        <div class=" w-full p-3"></div>
    <div style="">
        <canvas id="myChart" width="400" height="400"></canvas>
        <script>
            var totalReservasi = @json($totalReservasi);
            var totalTamu = @json($totalTamu);

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Data 1', 'Data 2', 'Data 3', 'Data 4', 'Data 5', 'Data 6'],
                    datasets: [{
                            label: 'Total Reservasi',
                            data: totalReservasi,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            fill: false
                        },
                        {
                            label: 'Total Tamu',
                            data: totalTamu,
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1,
                            fill: false
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    aspectRatio: 1, // Ganti sesuai kebutuhan
                    // ... (opsi lainnya)
                }
            });
        </script>
    </div>
</div>
</body>

