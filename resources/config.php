<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rute Penerbangan</title>
</head>
<body>
    <!-- Container untuk konten utama -->
    <div class="container mt-5">
        <!-- Judul utama -->
        <h1>Tambah Rute Penerbangan Baru</h1>
        <!-- Garis horizontal -->
        <hr>

        <!-- Formulir untuk menambahkan rute penerbangan baru -->
        <form action="process.php" method="POST">
            <!-- Input untuk nama maskapai -->
            <div class="mb-3">
                <label for="maskapai" class="form-label">Maskapai</label>
                <input type="text" class="form-control" id="maskapai" name="maskapai" required>
            </div>

            <!-- Dropdown untuk memilih bandara asal -->
            <div class="mb-3">
                <label for="bandara_asal" class="form-label">Bandara Asal</label>
                <select class="form-select" id="bandara_asal" name="bandara_asal" required>
                    <option value="">Pilih Bandara Asal</option>
                    <option value="Soekarno-Hatta(CGK)">Soekarno-Hatta (CGK)</option>
                    <option value="Husein Sastranegara (BDO)">Husein Sastranegara (BDO)</option>
                    <option value="Abdul Rachman Saleh (MLG)">Abdul Rachman Saleh (MLG)</option>
                    <option value="Juanda (SUB)">Juanda (SUB)</option>
                </select>
            </div>

            <!-- Dropdown untuk memilih bandara tujuan -->
            <div class="mb-3">
                <label for="bandara_tujuan" class="form-label">Bandara Tujuan</label>
                <select class="form-select" id="bandara_tujuan" name="bandara_tujuan" required>
                    <option value="">Pilih Bandara Tujuan</option>
                    <option value="Ngurah Rai (DPS)">Ngurah Rai (DPS)</option>
                    <option value="Hasanuddin (UPG)">Hasanuddin (UPG)</option>
                    <option value="Inanwatan (INX)">Inanwatan (INX)</option>
                    <option value="Sultan Iskandarmuda (BTJ)">Sultan Iskandarmuda (BTJ)</option>
                </select>
            </div>

            <!-- Input untuk harga tiket -->
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Tiket</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>

            <!-- Tombol submit untuk menambahkan rute penerbangan -->
            <button type="submit" class="btn btn-primary">Tambah Rute</button>
        </form>
    </div>
</body>
</html>
