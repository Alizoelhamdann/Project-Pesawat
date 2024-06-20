<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandara</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
            border: 1px solid #dee2e6;
            text-align: center;
            font-size: 14px;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: middle;
            border-bottom: 2px solid #dee2e6;
            font-weight: bold;
            background-color: #f8f9fa;
            color: #212529;
        }

        .table tbody td {
            font-weight: normal;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">FORM BANDARA</h1>
                <form method="post">
                    <div class="mb-3">
                        <label for="inputMaskapai" class="form-label">Maskapai</label>
                        <input type="text" class="form-control" name="maskapai" id="inputMaskapai"
                            placeholder="Masukan Maskapai...." required>
                    </div>
                    <div class="mb-3">
                        <label for="inputNamaAsal" class="form-label">Bandara Asal</label>
                        <select class="form-control" name="bandara_asal" id="inputNamaAsal">
                            <option value="" disabled selected>Pilih Bandara Asal</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputNamaTujuan" class="form-label">Bandara Tujuan</label>
                        <select class="form-control" name="bandara_tujuan" id="inputNamaTujuan">
                            <option value="" disabled selected>Pilih Bandara Tujuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputHargaTiket" class="form-label">Harga Tiket</label>
                        <input type="number" class="form-control" name="harga_tiket" id="inputHargaTiket"
                            placeholder="Masukan Harga Tiket...." required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php bandara(); ?>
            </div>
        </div>
    </div>
</body>

</html>



<?php
function load_json_data($file_path)
{
    $jsonData = file_get_contents($file_path);
    return json_decode($jsonData, true) ?? [];
}

function kalkulasi($bandara_asal, $bandara_tujuan, $asalJson, $tujuanJson)
{
    $pajak_asal = 0;
    $pajak_tujuan = 0;

    foreach ($asalJson as $data) {
        if ($data['bandara_asal'] === $bandara_asal) {
            $pajak_asal = $data['pajak_asal'];
            break;
        }
    }

    foreach ($tujuanJson as $data) {
        if ($data['bandara_tujuan'] === $bandara_tujuan) {
            $pajak_tujuan = $data['pajak_tujuan'];
            break;
        }
    }

    return $pajak_asal + $pajak_tujuan;
}

function bandara()
{
    $asalJson = load_json_data("../resources/dataPenerbanganAsal.json");
    $tujuanJson = load_json_data("../resources/dataPenerbanganTuj.json");
    $semuaPenerbangan = load_json_data("../resources/dataSemuaPenerbangan.json");

    echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo 'var asalSelect = document.getElementById("inputNamaAsal");';
    echo 'var tujuanSelect = document.getElementById("inputNamaTujuan");';

    foreach ($asalJson as $data) {
        echo 'var option = document.createElement("option");';
        echo 'option.value = "' . $data['bandara_asal'] . '";';
        echo 'option.text = "' . $data['bandara_asal'] . '";';
        echo 'asalSelect.add(option);';
    }

    foreach ($tujuanJson as $data) {
        echo 'var option = document.createElement("option");';
        echo 'option.value = "' . $data['bandara_tujuan'] . '";';
        echo 'option.text = "' . $data['bandara_tujuan'] . '";';
        echo 'tujuanSelect.add(option);';
    }

    echo '});';
    echo '</script>';

    if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['bandara_asal']) && !empty($_POST['bandara_tujuan']) && !empty($_POST['maskapai']) && !empty($_POST['harga_tiket'])) {
        $bandara_asal = htmlspecialchars($_POST['bandara_asal']);
        $bandara_tujuan = htmlspecialchars($_POST['bandara_tujuan']);
        $maskapai = htmlspecialchars($_POST['maskapai']);
        $harga_tiket = (int) htmlspecialchars($_POST['harga_tiket']);

        $total_pajak = kalkulasi($bandara_asal, $bandara_tujuan, $asalJson, $tujuanJson);
        $total_harga = $harga_tiket + $total_pajak;

        $new_penerbangan = [
            "bandara_asal" => $bandara_asal,
            "bandara_tujuan" => $bandara_tujuan,
            "maskapai" => $maskapai,
            "harga_tiket" => $harga_tiket,
            "total_pajak" => $total_pajak,
            "total_harga" => $total_harga
        ];

        $semuaPenerbangan[] = $new_penerbangan;
        file_put_contents("../resources/dataSemuaPenerbangan.json", json_encode($semuaPenerbangan, JSON_PRETTY_PRINT));


        usort($semuaPenerbangan, function ($a, $b) {
            return strcmp($a['maskapai'], $b['maskapai']);
        });

        echo "<h2>Results:</h2>";
        echo '<div class="table-responsive">';
        echo '<table class="table table-striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Bandara Asal</th>';
        echo '<th>Bandara Tujuan</th>';
        echo '<th>Maskapai</th>';
        echo '<th>Harga Tiket</th>';
        echo '<th>Total Pajak</th>';
        echo '<th>Total Harga</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($semuaPenerbangan as $penerbangan) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($penerbangan['bandara_asal']) . '</td>';
            echo '<td>' . htmlspecialchars($penerbangan['bandara_tujuan']) . '</td>';
            echo '<td>' . htmlspecialchars($penerbangan['maskapai']) . '</td>';
            echo '<td>' . htmlspecialchars($penerbangan['harga_tiket']) . '</td>';
            echo '<td>' . htmlspecialchars($penerbangan['total_pajak']) . '</td>';
            echo '<td>' . htmlspecialchars($penerbangan['total_harga']) . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    }
}
?>