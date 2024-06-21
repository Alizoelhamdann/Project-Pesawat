<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maskapai Penerbangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/tes.css">
</head>
<body>

    <!-- Carousel Section -->
    <div id="carouselBackground" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselBackground" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselBackground" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselBackground" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slider-item" style="background-image:url('../public/img/slide1.jpeg');">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                            <div class="col-md-12 ftco-animate text-center">
                                <div class="text mb-5 pb-3 animated-text">
                                    <h1 class="mb-3">Selamat Datang di <span style="color : red;">SIGMA</span> FLIGHTS!</h1>
                                    <p>Kami bangga melayani Anda dengan penerbangan terbaik dan kenyamanan terunggul.</p>
                                </div>
                            </div>
                        </div>
                        <img src="../public/img/logo.png" alt="Logo Sigma Flights" width="100" height="60" class="d-inline-block align-top" style="position: absolute; top: 10px; right: 1100px;">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider-item" style="background-image:url('../public/img/slide2.jpeg');">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                            <div class="col-md-12 ftco-animate text-center">
                                <div class="text mb-5 pb-3 animated-text">
                                    <h1 class="mb-3">Pilihan Terbaik untuk Perjalanan Anda</h1>
                                    <p>Nikmati pengalaman terbang yang menyenangkan bersama kami.</p>
                                </div>
                            </div>
                        </div>
                        <img src="../../public/img/logo.png" alt="Logo" width="100" height="60" class="d-inline-block align-top" style="position: absolute; top: 10px; right: 1100px;">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider-item" style="background-image:url('../public/img/slide3.jpeg');">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                            <div class="col-md-12 ftco-animate text-center">
                                <div class="text mb-5 pb-3 animated-text">
                                    <h1 class="mb-3">Kenikmatan Perjalanan Tanpa Batas</h1>
                                    <p>Rasakan kenyamanan dan keamanan dalam setiap penerbangan Anda.</p>
                                </div>
                            </div>
                        </div>
                        <img src="../../public/img/logo.png" alt="Logo" width="100" height="60" class="d-inline-block align-top" style="position: absolute; top: 10px; right: 1100px;">
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBackground" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBackground" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br><br>
      
    <!-- Form Penerbangan / Pesan Tiket Terbang -->
    <section id="forms" class="forms">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Pendaftaran Rute Penerbangan</h2>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form method="post" action="process.php" id="flightForm">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-3 mb-4">
                            <label for="maskapai" class="form-label">Maskapai</label>
                            <input type="text" class="form-control mb-3" id="maskapai" name="maskapai" placeholder="Nama Maskapai" required>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <label for="bandara_asal" class="form-label">Asal Penerbangan</label>
                            <select id="bandara_asal" name="bandara_asal" class="form-select mb-3" required>
                            <option selected disabled>Pilih Asal</option>
                            <option value="Soekarno-Hatta(CGK)">Soekarno-Hatta (CGK)</option>
                            <option value="Husein Sastranegara (BDO)">Husein Sastranegara (BDO)</option>
                            <option value="Abdul Rachman Saleh (MLG)">Abdul Rachman Saleh (MLG)</option>
                            <option value="Juanda (SUB)">Juanda (SUB)</option>  
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <label for="bandara_tujuan" class="form-label">Tujuan Penerbangan</label>
                            <select id="bandara_tujuan" name="bandara_tujuan" class="form-select mb-3" required>
                            <option selected disabled>Pilih Tujuan</option>
                            <option value="Ngurah Rai (DPS)">Ngurah Rai (DPS)</option>
                            <option value="Hasanuddin (UPG)">Hasanuddin (UPG)</option>
                            <option value="Inanwatan (INX)">Inanwatan (INX)</option>
                            <option value="Sultan Iskandarmuda (BTJ)">Sultan Iskandarmuda (BTJ)</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <label for="harga" class="form-label">Harga Tiket</label>
                            <input type="number" class="form-control mb-3" id="harga" name="harga" placeholder="Harga Tiket" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-s btn-primary" style="width: 100%;">Tambah Rute</button>
                </form>
            </div>
        </div>
    </div>
</section>

    <br><br>

<!-- Section Data dengan Pagination -->
<section class="Data">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Daftar Rute Penerbangan</h2>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Maskapai</th>
                    <th scope="col">Asal Penerbangan</th>
                    <th scope="col">Tujuan Penerbangan</th>
                    <th scope="col">Harga Tiket</th>
                    <th scope="col">Pajak</th>
                    <th scope="col">Total Harga Tiket</th>
                </tr>
            </thead>
            <tbody id="flightTableBody" class="table-group-divider">
                <!-- Baris data akan dimasukkan di sini -->
            </tbody>
        </table>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous" onclick="changePage('prev')">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#" onclick="changePage(1)">1</a></li>
                <li class="page-item"><a class="page-link" href="#" onclick="changePage(2)">2</a></li>
                <li class="page-item"><a class="page-link" href="#" onclick="changePage(3)">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next" onclick="changePage('next')">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Function untuk mengambil data dari data.json dan menampilkan ke dalam tabel
    function fetchDataAndDisplay() {
        fetch('data.json')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('flightTableBody');
                tableBody.innerHTML = ''; // Kosongkan isi tbody

                // Loop through data and create rows
                data.forEach((flight, index) => {
                    const rowHtml = `
                        <tr class="page page-${Math.ceil((index + 1) / 5)}">
                            <th scope="row">${index + 1}</th>
                            <td>${flight.maskapai}</td>
                            <td>${flight.bandara_asal}</td>
                            <td>${flight.bandara_tujuan}</td>
                            <td>${flight.harga}</td>
                            <td>${flight.total_tax}</td>
                            <td>${flight.total_harga}</td>
                        </tr>
                    `;
                    tableBody.innerHTML += rowHtml;
                });

                // Initialize pagination
                const totalPages = Math.ceil(data.length / 5); // 5 rows per page
                changePage(1, totalPages); // Initialize to first page
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    // Function untuk mengubah halaman
    function changePage(page, totalPages) {
        let currentPage = page === 'prev' ? Math.max(currentPage - 1, 1) :
            page === 'next' ? Math.min(currentPage + 1, totalPages) :
            parseInt(page);

        document.querySelectorAll('.page').forEach(row => {
            row.classList.add('hidden');
        });

        document.querySelectorAll(`.page-${currentPage}`).forEach(row => {
            row.classList.remove('hidden');
        });
    }

    // Panggil fetchDataAndDisplay saat DOM selesai dimuat
    document.addEventListener('DOMContentLoaded', fetchDataAndDisplay);
</script>
</body>
</html>
