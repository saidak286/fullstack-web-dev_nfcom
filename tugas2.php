<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container px-5 my-5">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
            <div class="mb-3">
                <label class="form-label" for="nama">Nama Pegawai</label>
                <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="nama:required">Nama Pegawai is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="agama">Agama</label>
                <select class="form-select" id="agama" aria-label="Agama" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manager" data-sb-validations="required" />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="asisten" type="radio" name="jabatan" value="Asisten" data-sb-validations="required" />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="kabag" type="radio" name="jabatan" value="Kabag" data-sb-validations="required" />
                    <label class="form-check-label" for="kabag">Kabag</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff" data-sb-validations="required" />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="jabatan:required">One option is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" data-sb-validations="required" />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="belumMenikah" type="radio" name="status" value="Belum menikah" data-sb-validations="required" />
                    <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="jumlahAnak">Jumlah Anak</label>
                <input class="form-control" id="jumlahAnak" name="jumlahanak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" name="proses" type="submit">Submit</button>
            </div>
        </form>

        <?php error_reporting(0);
        //tangkap request
        $nama = $_POST['nama'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jumlahanak = $_POST['jumlahanak'];
        $tombol = $_POST['proses'];
        //tentukan gapok
        switch ($jabatan) {
            case 'Manager':
                $gapok = 20000000;
                break;
            case 'Asisten':
                $gapok = 15000000;
                break;
            case 'Kabag':
                $gapok = 10000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
            default:
                $gapok = 0;
                break;
        };

        $tunjab = 0.2 * $gapok;

        if ($status === "Menikah" && $jml_anak <= 2) {
            $tunkel = 0.05 * $gapok;
        } elseif ($status === "Menikah" && $jml_anak >= 3 && $jml_anak <= 5) {
            $tunkel = 0.1 * $gapok;
        } elseif ($status === "Menikah" && $jml_anak >= 6) {
            $tunkel = 0.15 * $gapok;
        } else {
            $tunkel = 0;
        }

        $gator = $gapok + $tunjab + $tunkel;
        $zaprof = $agama === "Islam" && $gator >= 6000000 ? 2.5 / 100 * $gator : 0;
        $thp = $gator - $zaprof;

        if (isset($tombol)) { ?>
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Jumlah Anak</th>
                                <th scope="col">Gaji Pokok</th>
                                <th scope="col">Tunjangan Jabatan</th>
                                <th scope="col">Tunjuangan Keluarga</th>
                                <th scope="col">Gaji Kotor</th>
                                <th scope="col">Zakat Profesi</th>
                                <th scope="col">THP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start"><?= $nama; ?></td>
                                <td><?= $agama; ?></td>
                                <td><?= $jabatan; ?></td>
                                <td><?= $status; ?></td>
                                <td><?= $jumlahanak; ?></td>
                                <td><?= 'Rp. ' . number_format($gapok); ?></td>
                                <td><?= 'Rp. ' . number_format($tunjab); ?></td>
                                <td><?= 'Rp. ' . number_format($tunkel); ?></td>
                                <td><?= 'Rp. ' . number_format($gator); ?></td>
                                <td><?= 'Rp. ' . number_format($zaprof); ?></td>
                                <td><?= 'Rp. ' . number_format($thp); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
<?php } ?>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>