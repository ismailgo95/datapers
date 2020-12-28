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
        <a href="<?= base_url('Admin/Militer/excel') ?>" class="btn btn-success btn-icon-split">
          <span class="icon text-white">
            <i class="fas fa-file-csv"></i>
          </span>
          <span class="text">
            Excel
          </span>
        </a>
        <a href="<?= base_url('Admin/Militer/mpdf') ?>" class="btn btn-danger btn-icon-split">
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
                <option value="2">TMT Naik Pangkat</option>
                <option value="3">Pangkat</option>
              </select>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <?php if (isset($_GET['opsi']) && $_GET['opsi'] != '') : ?>
            <?php if ($_GET['opsi'] == 1) : ?>
              <form action="<?= base_url('admin/Militer') ?>" method="POST">
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
              <form action="<?= base_url('admin/Militer') ?>" method="POST">
                <div class="input-group">
                  <select name="tmt_naik" class="custom-select">
                    <option selected disabled>Pilih Kenaikan Pangkat</option>
                    <option value="empat_tahun">4 Tahun TMT</option>
                    <option value="lima_tahun">5 Tahun TMT</option>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-outline-light" name="submit2" type="submit"> <i class="fas fa-search fa-sm"></i></button>
                  </div>
                </div>
              </form>
            <?php else : ?>
              <h6 class="mt-2 text-light">Maaf Menu Belum Ada !</h6>
            <?php endif ?>

          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php if (isset($_POST['submit1'])) : ?>
      <div class="card-body">
        <table class="table table-bordered table-striped" id="datatable2">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">NAMA</th>
              <th class="text-center">TANGGAL LAHIR</th>
              <th class="text-center">JENIS KELAMIN</th>
              <th class="text-center">JABATAN</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
              foreach ($ultah as $ultah_militer) : ?>
              <tr class="text-nowrap text-center">
                <td><?= $no++ ?></td>
                <td><?= $ultah_militer->nama ?></td>
                <td class="text-dark font-weight-bold"><?= date('d-F-Y', strtotime($ultah_militer->tanggal_lahir)) ?></td>
                <td><?= $ultah_militer->jenis_kelamin ?></td>
                <td><?= $ultah_militer->jabatan ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php elseif (isset($_POST['submit2'])) : ?>
      <div class="card-body">
        <table class="table table-bordered table-striped" id="datatable2">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">NAMA</th>
              <th class="text-center">TMT PANGKAT</th>
              <th class="text-center">KENAIKAN PANGKAT</th>
              <th class="text-center">JABATAN</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
              foreach ($data_militer as $militer) {
                $naik_pangkat = $militer->tmt_pangkat;
                $pangkat_selanjutnya = date('Y-m-d', strtotime('+4 years',  strtotime($naik_pangkat)));
                ?>
              <tr class="text-nowrap text-center">
                <td><?= $no++ ?></td>
                <td><?= $militer->nama ?></td>
                <td><?= $militer->tmt_pangkat ?></td>
                <td class="text-dark font-weight-bold"><?= $pangkat_selanjutnya ?></td>
                <td><?= $militer->jabatan ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    <?php else : ?>
      <div class="card-body">
        <table class="table table-bordered table-striped" id="datatable">
          <thead>
            <tr>
              <th class="text-center">ACTION</th>
              <th class="text-center">VIEW</th>
              <th class="text-center">No</th>
              <th class="text-center">NAMA</th>
              <th class="text-center">JENIS KELAMIN</th>
              <th class="text-center">TEMPAT LAHIR</th>
              <th class="text-center">TANGGAL LAHIR</th>
              <th class="text-center">GOLONGAN DARAH</th>
              <th class="text-center">AGAMA</th>
              <th class="text-center">NAMA PANGKAT</th>
              <th class="text-center">TMT PANGKAT</th>
              <th class="text-center">NRP</th>
              <th class="text-center">JABATAN</th>
              <th class="text-center">TMT JABATAN</th>
              <th class="text-center">TMT TNI</th>
              <th class="text-center">PENDIDIKAN UMUM</th>
              <th class="text-center">PENDIDIKAN MILITER</th>
              <TH class="text-center">STATUS</TH>
              <th class="text-center">STATUS DINAS</th>

            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
              foreach ($data_militer as $militer) : ?>
              <tr class="text-nowrap text-center">
                <td>
                  <span data-toggle="tooltip" data-original-title="Edit Data" style="font-size:10;" data-placement="left">
                    <a data-toggle="modal" data-target="#modal-edit<?= $militer->id; ?>" class=" btn btn-sm btn-warning" href=""><i class="fas fa-edit"></i></a>
                  </span>
                  <span data-toggle="tooltip" data-original-title="Hapus Data" style="font-size:10;" data-placement="left">
                    <a onclick="return confirm('Apakah ingin dihapus ?')" class="btn btn-sm btn-danger" href="<?= base_url('Admin/Militer/delete/' . $militer->id) ?>"><i class="fas fa-trash-alt"></i>
                    </a>
                  </span>
                </td>
                <td>
                  <a href="<?= base_url('Admin/Militer/detail/' . $militer->id) ?>" class="btn btn-sm btn-primary">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
                <td><?= $no++ ?></td>
                <td><?= $militer->nama ?></td>
                <td><?= $militer->jenis_kelamin ?></td>
                <td><?= $militer->tempat_lahir ?></td>
                <td><?= $militer->tanggal_lahir ?></td>
                <td><?= $militer->golongan_darah ?></td>
                <td><?= $militer->agama ?></td>
                <td><?= $militer->nama_pangkat ?></td>
                <td><?= $militer->tmt_pangkat ?></td>
                <td><?= $militer->nrp ?></td>
                <td><?= $militer->jabatan ?></td>
                <td><?= $militer->tmt_jabatan ?></td>
                <td><?= $militer->tmt_tni ?></td>
                <td><?= $militer->pendidikan_umum ?></td>
                <td><?= $militer->pendidikan_militer ?></td>
                <td><?= $militer->status ?></td>
                <td><?= $militer->status_dinas ?></td>

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