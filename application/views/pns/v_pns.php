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
                <option value="2">Pensiun</option>
                <option value="3">Golongan</option>
              </select>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <?php if (isset($_GET['opsi']) && $_GET['opsi'] != '') : ?>
            <?php if ($_GET['opsi'] == 1) : ?>
              <form action="<?= base_url('admin/Pns') ?>" method="POST">
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
            <?php elseif ($_GET['opsi'] == 2) : ?>
              <h6 class="mt-2 text-light">Maaf Menu Belum Ada !</h6>
            <?php else : ?>
              <h6 class="mt-2 text-light">Maaf Menu Belum Ada !</h6>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php if (isset($_POST['submit1'])) : ?>
      <div class="card-body">
        <table width="100%" class="table table-hover table-bordered table-striped" id="datatable2">
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
        <table class="table table-striped table-bordered" id="datatable1">
          <thead>
            <tr class="text-nowrap">
              <th class="text-center">ACTION</th>
              <th class="text-center">No</th>
              <th class="text-center">NAMA</th>
              <th class="text-center">NIP</th>
              <th class="text-center">JENIS KELAMIN</th>
              <th class="text-center">GOLONGAN</th>
              <th class="text-center">TMT</th>
              <th class="text-center">GOLONGAN DARAH</th>
              <th class="text-center">JABATAN</th>
              <th class="text-center">TMT JABATAN</th>
              <th class="text-center">MASA KERJA</th>
              <th class="text-center">NAMA JABATAN</th>
              <th class="text-center">TAHUN JABATAN</th>
              <th class="text-center">STATUS DINAS</th>
              <th class="text-center">PENDIDIKAN</th>
              <TH class="text-center">TAHUN PENDIDIKAN</TH>
              <th class="text-center">IJAZAH</th>
              <th class="text-center">TANGGAL LAHIR</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
              foreach ($data_pns as $pns) : ?>
              <tr class="text-nowrap">
                <td>
                  <span data-toggle="tooltip" data-original-title="Edit Data" style="font-size:10;" data-placement="left">
                    <a data-toggle="modal" data-target="#modal-edit<?= $pns->id; ?>" class=" btn btn-sm btn-warning" href=""><i class="fas fa-edit"></i></a>
                  </span>
                  <span data-toggle="tooltip" data-original-title="Hapus Data" style="font-size:10;" data-placement="left">
                    <a onclick="return confirm('Apakah ingin dihapus ?')" class="btn btn-sm btn-danger" href="<?= base_url('Admin/Pns/delete/' . $pns->id) ?>"><i class="fas fa-trash-alt"></i>
                    </a>
                  </span>
                </td>
                <td class="text-center"><?= $no++ ?></td>
                <td><?= $pns->nama ?></td>
                <td><?= $pns->nip ?></td>
                <td><?= $pns->jenis_kelamin ?></td>
                <td><?= $pns->golongan ?></td>
                <td><?= $pns->tmt ?></td>
                <td><?= $pns->golongan_darah ?></td>
                <td><?= $pns->jabatan ?></td>
                <td><?= $pns->tmt_jabatan ?></td>
                <td><?= $pns->masa_kerja ?></td>
                <td><?= $pns->nama_jabatan ?></td>
                <td><?= $pns->tahun_jabatan ?></td>
                <td><?= $pns->status_dinas ?></td>
                <td><?= $pns->pendidikan ?></td>
                <td><?= $pns->tahun_pendidikan ?></td>
                <td><?= $pns->ijazah ?></td>
                <td><?= $pns->tanggal_lahir ?></td>
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