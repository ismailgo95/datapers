<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
  </div>

  <!-- Basic Card Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <?= $this->session->flashdata('pesan') ?>
      <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#modal_add" id="btn_tambah">
        <span class="icon text-white">
          <i class="fas fa-plus-square"></i>
        </span>
        <span class="text">
          Tambah Data
        </span>
      </a>
    </div>
    <div class="card-body">
      <table class="table table-responsive table-striped table-bordered table-hover" id="datatable">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">NAMA</th>
            <th class="text-center">GOLONGAN</th>
            <th class="text-center">JENIS KELAMIN</th>
            <th class="text-center">NIT</th>
            <th class="text-center">TEMPAT LAHIR</th>
            <th class="text-center">TANGGAL LAHIR</th>
            <th class="text-center">GOLONGAN DARAH</th>
            <th class="text-center">PENUGASAN</th>
            <th class="text-center">NOMOR SPRINT TKS</th>
            <th class="text-center">TMT</th>
            <th class="text-center">PENDIDIKAN</th>
            <th class="text-center">STATUS DINAS</th>
            <th class="text-center">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($data_tks as $tks) : ?>
            <tr class="text-nowrap text-center">
              <td class="text-dark font-weight-bold"><?= $no++ ?></td>
              <td><?= $tks->nama ?></td>
              <td><?= $tks->golongan ?></td>
              <td><?= $tks->jenis_kelamin ?></td>
              <td><?= $tks->nit ?></td>
              <td><?= $tks->tempat_lahir ?></td>
              <td><?= $tks->tanggal_lahir ?></td>
              <td><?= $tks->golongan_darah ?></td>
              <td><?= $tks->penugasan ?></td>
              <td><?= $tks->nomor_sprint_tks ?></td>
              <td><?= $tks->tmt ?></td>
              <td><?= $tks->pendidikan ?></td>
              <td><?= $tks->status_dinas ?></td>
              <td>
                <span data-toggle="tooltip" title="Edit Data" data-placement="top">
                  <a data-toggle="modal" data-target="#modal-edit<?= $tks->id; ?>" class=" btn btn-sm btn-warning" href=""><i class="fas fa-edit"></i></a>
                </span>
                <span data-toggle="tooltip" data-original-title="Hapus Data" style="font-size:10;" data-placement="left">
                  <a onclick="return confirm('Apakah ingin dihapus ?')" class="btn btn-sm btn-danger" href="
                   <?= base_url('Admin/Tks/delete/' . $tks->id) ?>
                  "><i class="fas fa-trash-alt"></i>
                  </a>
                </span>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php require '__add.php'; ?>
  <?php require '__edit.php'; ?>
</div>
<!-- /.container-fluid -->