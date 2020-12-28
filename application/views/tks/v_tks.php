<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-md-6">
      <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
      </div>
    </div>
    <div class="col-md-6">
      <div class=" float-right mb-2">
        <a href="<?= base_url('Admin/Pns/excel') ?>" class="btn btn-success btn-icon-split">
          <span class="icon text-white">
            <i class="fas fa-file-csv"></i>
          </span>
          <span class="text">
            Excel
          </span>
        </a>
        <a href="<?= base_url('Admin/Pns/mpdf') ?>" class="btn btn-danger btn-icon-split">
          <span class="icon text-white">
            <i class="fas fa-file-pdf"></i>
          </span>
          <span class="text">
            PDF
          </span>
        </a>
        <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#modal_add" id="btn_tambah">
          <span class="icon text-white">
            <i class="fas fa-plus-square"></i>
          </span>
          <span class="text">
            Tambah Data
          </span>
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?= $this->session->flashdata('pesan') ?>
    </div>
  </div>
  <?= $this->session->flashdata('pesan') ?>
  <!-- Basic Card Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-2 bg-primary">
      <div class="row">
        <div class="col-md-2">
          <form action="" method="get">
            <div class="input-group">
              <select name="opsi" class="custom-select" onchange="this.form.submit()">
                <option selected disabled>Pilih Pencarian</option>
                <option value="1">Ulang Tahun</option>
              </select>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <?php if (isset($_GET['opsi']) && $_GET['opsi'] != '') : ?>
            <?php if ($_GET['opsi'] == 1) : ?>
              <form action="<?= base_url('admin/Tks') ?>" method="POST">
                <div class="input-group">
                  <select name="bulan" class="custom-select">
                    <option selected disabled>Pilih Bulan Lahir</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="December">December</option>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-outline-light" name="submit1" type="submit"> <i class="fas fa-search fa-sm"></i></button>
                  </div>
                </div>
              </form>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php if (isset($_POST['submit1'])) : ?>
      <div class="card-body">
        <table width="100%" class="table table-bordered table-striped" id="datatable2">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">NAMA</th>
              <th class="text-center">TANGGAL LAHIR</th>
              <th class="text-center">GOLONGAN</th>
              <th class="text-center">JENIS KELAMIN</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
              foreach ($ultah as $ultah_pns) : ?>
              <tr class="text-nowrap text-center">
                <td><?= $no++ ?></td>
                <td><?= $ultah_pns->nama ?></td>
                <td class="text-dark font-weight-bold"><?= date('d-F-Y', strtotime($ultah_pns->bulan_lahir)) ?></td>
                <td><?= $ultah_pns->golongan ?></td>
                <td><?= $ultah_pns->jk ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php else : ?>
      <div class="card-body">
        <table class="table table-striped table-bordered" id="datatable2">
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
    <?php endif; ?>
  </div>

  <?php require '__add.php'; ?>
  <?php require '__edit.php'; ?>
</div>
<!-- /.container-fluid -->