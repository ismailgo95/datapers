<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Data Militer</title>
</head>

<body>
  <img src="<?= base_url('assets/img/hesti.png') ?>" style="margin: auto;" width="50px">
  <h3 style="text-align: center;">Laporan Personalia Pns</h3>
  <small>Laporan : <?= date('d F Y') ?></small>
  <table border="1" width="100%" style="border: 0.1mm solid #000000;" cellpadding="8">
    <thead>
      <tr style="background-color: lightblue;">
        <th>No</th>
        <th>Nama</th>
        <th>Golongan</th>
        <th>Jabatan</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($pns as $data) : ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $data->nama ?></td>
          <td><?= $data->golongan ?></td>
          <td><?= $data->jabatan ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>