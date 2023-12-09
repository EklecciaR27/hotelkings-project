@extends('layouts.global')

@include('components.navbardashboard')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Load Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<section class="h-[700px] relative">
    <div class="container py-24 px-12 mx-auto">
        <div class="flex flex-col items-center z-28 md:flex-row">
            <div class="text-center mb-16 md:text-left md:w-1/2 md:pr-10">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-10">KING HOTEL Nusa Dua, Bali - INDONESIA</h1>
                <p class="leading-relaxed mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <div><a href="" class="group relative bg-gray-900  px-0 py-2 w-28 font-bold flex justify-center gap-4 hover:bg-slate-800 ">
                    <p class="invisible">DISCOVER</p>
                    <p class="absolute text-white">DISCOVER</p>
                </a>
                </div>
            </div>

            <div class="md:w-1/2">
                <img src="{{ asset('assets/img/other4.jpg') }}" alt="resto" class="h-full w-full">
            </div>
        </div>
    </div>

    <div style="display: flex; justify-content: space-around;">
        <div style="width: 45%;">
            <h2>Total Reservasi</h2>
            <canvas id="reservasiChart" width="200" height="200"></canvas>
        </div>
        <div style="width: 45%;">
            <h2>Total Tamu</h2>
            <canvas id="tamuChart" width="200" height="200"></canvas>
        </div>
    </div>



</section>
{{--
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const reservasiCanvas = document.getElementById('reservasiChart').getContext('2d');
        const tamuCanvas = document.getElementById('tamuChart').getContext('2d');

        const totalReservasi = <?php echo json_encode($reservasi->count()); ?>;
        const totalTamu = <?php echo json_encode($guest->count()); ?>;

        // Buat grafik Total Reservasi
        new Chart(reservasiCanvas, {
            type: 'bar',
            data: {
                labels: ['Total Reservasi'],
                datasets: [{
                    label: 'Total Reservasi',
                    data: [totalReservasi],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Total Reservasi'
                    }
                }
            }
        });

        // Buat grafik Total Tamu
        new Chart(tamuCanvas, {
            type: 'pie',
            data: {
                labels: ['Total Tamu', 'Sisa Kamar'],
                datasets: [{
                    label: 'Total Tamu',
                    data: [totalTamu, 100 - totalTamu],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 205, 86, 0.5)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 205, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Total Tamu'
                    }
                }
            }
        });
    });
</script> --}}

