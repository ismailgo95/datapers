<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-md-6">
      <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
      </div>
    </div>
    <div class="col-md-6">
      <div class=" float-right mb-2">
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
      <?php $data = $this->session->userdata('role_id');
      ?>
      <?php if ($data == 1) : ?>
        <h5 class="text-white mt-2">Anda Login Sebagai ( Admin )</h5>
      <?php endif; ?>
    </div>
    <div class="card-body">
      <table width="100%" class="table table-bordered table-striped" id="datatable">
        <thead>
          <tr class="text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Fhoto</th>
            <th>Email</th>
            <th>Date Created</th>
            <th>Role</th>
            <th>Status Users</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($user as $users) : ?>
            <tr class="text-center">
              <td><?= $no++ ?></td>
              <td class="text-dark font-weight-bold"><?= $users->name ?></td>
              <td>
                <img src="<?= base_url('assets/img/' . $users->image) ?>" width="50px">
              </td>
              <td><?= $users->email ?></td>
              <td><?= $users->date_created ?></td>
              <td>
                <?php if (($users->role_id) == 1) : ?>
                  Admin
                <?php elseif (($users->role_id) == 2) : ?>
                  Users
                <?php endif; ?>
              </td>
              <td>
                <?php if (($users->is_active) == 1) : ?>
                  Aktif
                <?php else : ?>
                  Tidak Aktif
                <?php endif; ?>
              </td>
              <td>
                <span data-toggle="tooltip" data-original-title="Edit Data" style="font-size:10;" data-placement="left">
                  <a data-toggle="modal" data-target="#modal-edit<?= $users->id; ?>" class=" btn btn-warning" href=""><i class="fas fa-edit"></i></a>
                </span>
                <span data-toggle="tooltip" data-original-title="Hapus Data" style="font-size:10;" data-placement="left">
                  <a onclick="return confirm('Apakah ingin dihapus ?')" class="btn btn-danger" href="<?= base_url('Admin/Militer/delete/' . $users->id) ?>"><i class="fas fa-trash-alt"></i>
                  </a>
                </span>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php require '__edit.php'; ?>
</div>
<!-- /.container-fluid -->