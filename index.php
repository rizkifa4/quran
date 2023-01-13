<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Al-Quran Digital | Rizki Fa</title>
    <style> 
        @font-face{
            font-family: 'Uthmani';
            src: url('assets/fonts/UthmanicHafs1Ver09') format('truetype');
        }

        .arabic {
            font-family: 'Uthmani' serif;
            font-size: 20px;
            font-weight: normal;
            direction: rtl;
            padding: 0px 5px;
            margin: 0;
        }

    </style>
  </head>
  <body>
    <div class="container">
        <h3 class="text-center">Al-Quran Digital | Rizki Fa</h3>
        <hr>
        <table class="table table-striped table-bordered">
            <tr>
                <th>No.</th>
                <th>Surah</th>
                <th>Arti</th>
                <th>Jumlah Ayat</th>
                <th>Tempat Turun</th>
                <th>Urutan Pewahyuan</th>
            </tr>
            <?php
                //panggil koneksi
                include "koneksi.php";
                $tampil = mysqli_query($koneksi, "SELECT *FROM daftarsurah");
                while ($data = mysqli_fetch_array($tampil)) :
                ?>
                    <tr>
                        <td><?= $data['index'] ?></td>
                        <td>
                            <a href="detail.php?surah=<?= $data['index'] ?>&nama_surah=<?= $data
                            ['surah_indonesia'] ?>"> 
                                <?= $data['surah_indonesia'] ?> 
                            </a> <span class="arabic">(<?=$data['surah_arab']?>)</span>
                        </td>
                        <td><?= $data['arti'] ?></td>
                        <td><?= $data['jumlah_ayat'] ?></td>
                        <td><?= $data['tempat_turun'] ?></td>
                        <td><?= $data['urutan_pewahyuan'] ?></td>
                    </tr>

            <?php endwhile; ?>
        </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>