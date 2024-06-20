<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maskapai Penerbangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body>

    <!-- Carousel Section -->
    <div id="carouselBackground" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselBackground" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselBackground" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselBackground" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <a href="#forms" class="btn btn-primary btn-primary-center" data-bs-slide="next">Rute Penerbangan</a>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slider-item" style="background-image:url('../../public/img/slide1.jpeg');">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                            <div class="col-md-12 ftco-animate text-center">
                                <div class="text mb-5 pb-3 animated-text"> <!-- Tambah class animated-text -->
                                    <br><br><br><br><br>
                                    <h1 class="mb-3">Selamat Datang di </br> <span style="color : red;">SIGMA</span> FLIGHTS!</h1>
                                    <p>Kami bangga melayani Anda dengan penerbangan terbaik dan kenyamanan terunggul.</p>
                                </div>
                            </div>
                        </div>
                        <img src="../../public/img/logo.png" alt="Logo Sigma Flights" width="100" height="60" class="d-inline-block align-top" style="position: absolute; top: 10px; right: 1100px;">
                    </div>
                </div>
            </div>
            <!-- Tambahkan class animated-text pada setiap slide -->
            <div class="carousel-item">
                <div class="slider-item" style="background-image:url('../../public/img/slide2.jpeg');">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                            <div class="col-md-12 ftco-animate text-center">
                                <div class="text mb-5 pb-3 animated-text"> <!-- Tambah class animated-text -->
                                    <br><br><br><br><br>
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
                <div class="slider-item" style="background-image:url('../../public/img/slide3.jpeg');">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                            <div class="col-md-12 ftco-animate text-center">
                                <div class="text mb-5 pb-3 animated-text"> <!-- Tambah class animated-text -->
                                    <br><br><br><br><br>
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
      
    <!-- membuat form penerbangan/pesan tiket terbang -->
    <section id="forms" class="forms">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                  <h2 class="mb-4">Pendaftaran Rute Penerbangan</h2>
                </div><br><br>
            <div class="card shadow">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-3 mb-4">
                            <form class="form-group">
                                <label for="maskapai" class="form-label">Maskapai</label>
                                <input type="text" class="form-control mb-3" id="form1Input" placeholder="Nama Maskapai" required>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <form class="form-group">
                                <label for="form3Input" class="form-label">Asal Penerbangan</label>
                                <select id="form3Input" class="form-select mb-3">
                                    <option selected>Pilih Asal</option>
                                    <option value="1">Soekarno-Hatta</option>
                                    <option value="2">Ngurah Rai</option>
                                    <option value="3">Juanda</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <form class="form-group">
                                <label for="form3Input" class="form-label">Tujuan Penerbangan</label>
                                <select id="form3Input" class="form-select mb-3">
                                    <option selected>Pilih Tujuan</option>
                                    <option value="1">Soekarno-Hatta</option>
                                    <option value="2">Ngurah Rai</option>
                                    <option value="3">Juanda</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <form class="form-group">
                                <label for="form4Input" class="form-label">Harga Tiket</label>
                                <input type="number" class="form-control mb-3" id="form4Input" placeholder="Harga Tiket" required>
                            </form>
                        </div>
                    </div>
                    <button type="pesan sekarang" class="btn btn-s btn-primary" style="width: 100%;">Pesan Sekarang</button>
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
                <tbody class="table-group-divider">
                    <tr class="page page-1">
                        <th scope="row">1</th>
                        <td>Adam Air</td>
                        <td>Soekarno-Hatta</td>
                        <td>Sultan Iskandarmuda</td>
                        <td>2000000</td>
                        <td>120000</td>
                        <td>2120000</td>
                    </tr>
                    <tr class="page page-1">
                        <th scope="row">2</th>
                        <td>Air Asia</td>
                        <td>Juanda</td>
                        <td>Ngurah Rai</td>
                        <td>540000</td>
                        <td>120000</td>
                        <td>660000</td>
                    </tr>
                    <tr class="page page-1">
                        <th scope="row">3</th>
                        <td>Batik</td>
                        <td>Husen Sastranegara</td>
                        <td>Sultan Iskandarmuda</td>
                        <td>1000000</td>
                        <td>1000000</td>
                        <td>2000000</td>
                    </tr>
                    <tr class="page page-1">
                        <th scope="row">4</th>
                        <td>Batik</td>
                        <td>Husen Sastranegara</td>
                        <td>Sultan Iskandarmuda</td>
                        <td>1000000</td>
                        <td>1000000</td>
                        <td>2000000</td>
                    </tr>
                    <tr class="page page-1">
                        <th scope="row">5</th>
                        <td>Batik</td>
                        <td>Husen Sastranegara</td>
                        <td>Sultan Iskandarmuda</td>
                        <td>1000000</td>
                        <td>1000000</td>
                        <td>2000000</td>
                    </tr>
                    <tr class="page page-2 hidden">
                        <th scope="row">6</th>
                        <td>Batik</td>
                        <td>Husen Sastranegara</td>
                        <td>Sultan Iskandarmuda</td>
                        <td>1000000</td>
                        <td>1000000</td>
                        <td>2000000</td>
                    </tr>
                    <tr class="page page-2 hidden">
                        <th scope="row">7</th>
                        <td>Batik</td>
                        <td>Husen Sastranegara</td>
                        <td>Sultan Iskandarmuda</td>
                        <td>1000000</td>
                        <td>1000000</td>
                        <td>2000000</td>
                    </tr>
                    <tr class="page page-2 hidden">
                        <th scope="row">8</th>
                        <td>Batik</td>
                        <td>Husen Sastranegara</td>
                        <td>Sultan Iskandarmuda</td>
                        <td>1000000</td>
                        <td>1000000</td>
                        <td>2000000</td>
                    </tr>
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

    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>
        document.querySelector('.btn-deep-sky-blue').addEventListener('click', function() {
            document.getElementById('forms').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
    <script>
        let currentPage = 1;
        const totalPages = 3;
    
        function changePage(page) {
            if (page === 'prev') {
                currentPage = currentPage > 1 ? currentPage - 1 : 1;
            } else if (page === 'next') {
                currentPage = currentPage < totalPages ? currentPage + 1 : totalPages;
            } else {
                currentPage = page;
            }
    
            document.querySelectorAll('.page').forEach((row) => {
                row.classList.add('hidden');
            });
    
            document.querySelectorAll(`.page-${currentPage}`).forEach((row) => {
                row.classList.remove('hidden');
            });
        }
    
        changePage(currentPage); // Initialize the first page
    </script>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        var carousel = document.querySelector('#carouselBackground');
        carousel.addEventListener('slide.bs.carousel', function (event) {
            var items = document.querySelectorAll('.carousel-item .animated-text');
            items.forEach(function(item) {
                item.classList.remove('fadeIn');
                void item.offsetWidth;  // Trigger reflow to restart animation
                item.classList.add('fadeIn');
            });
        });
    });
</script>
</body>
</html>
