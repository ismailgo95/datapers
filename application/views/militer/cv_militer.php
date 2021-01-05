<div class="container-fluid">
  <div class="card shadow mb-4">
    <?php foreach ($data_militer as $militer) : ?>
      <div class="card-header py-2 bg-primary">
        <div class="row">
          <h5 class="text-white pt-2"><strong><?= $militer->nama ?></strong></h5>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-2">
                <div class="card">
                  <div class="mt-2 ml-2 mr-2">
                    <div class="col-sm-12 mt-2 text-center">
                      <img src="<?= base_url() ?>assets/img/default.png" id="preview" class="" width="100%" class="img-responsive">
                    </div>
                    <div class="mt-4">
                      <div id="msg"></div>
                      <form method="post" id="image-form">
                        <input type="file" name="img[]" class="file" accept="image/*">
                        <div class="input-group my-3">
                          <input type="text" class="form-control" disabled placeholder="File" id="file">
                          <div class="input-group-append">
                            <button type="button" class="browse btn btn-primary">Cari...</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-10">
                <div class="card">
                  <h5 class="text-center mb-2 mt-2 text-dark font-weight-bold">RIWAYAT HIDUP SINGKAT</h5>
                  <div class="row mt-2 mx-2">
                    <div class="col-md-6 font-small">
                      <table class="w-auto">
                        <tr>
                          <td width="45%" class="font-weight-bold">Nama Lengkap</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->nama ?></td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">Pangkat / Corps</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->nama_pangkat ?></td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">NRP</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->nrp ?></td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">Tempat / Tgl lahir</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->tempat_lahir ?> / <?= date('d-m-Y', strtotime($militer->tanggal_lahir)) ?></td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">TMT TNI</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->tmt_tni ?></td>
                        </tr>
                        <tr>
                          <td width="30%" class="font-weight-bold">Kategori</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->status_dinas ?></td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-md-6">
                      <table class="w-auto">
                        <tr>
                          <td width="34%" class="font-weight-bold">Golongan Darah</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->golongan_darah ?></td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">Status</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->status ?></td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">Jabatan</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->jabatan ?></td>
                        </tr>
                        <tr>
                          <td width="30%" class="font-weight-bold">TMT jabatan</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->tmt_jabatan ?></td>
                        </tr>
                        <tr>
                          <td width="30%" class="font-weight-bold">Agama</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->agama ?></td>
                        </tr>
                        <tr>
                          <td width="30%" class="font-weight-bold">Jenis Kelamin</td>
                          <td class="font-weight-bold">:</td>
                          <td><?= $militer->jenis_kelamin ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active small" id="nav-pendidikan-tab" data-toggle="tab" href="#nav-pendidikan" role="tab" aria-controls="nav-pendidikan" aria-selected="true">Pendidikan</a>
                    <a class="nav-link small" id="nav-bahasa-tab" data-toggle="tab" href="#nav-bahasa" role="tab" aria-controls="nav-bahasa" aria-selected="false">Bahasa</a>
                    <a class="nav-link small" id="nav-tanda-jasa-tab" data-toggle="tab" href="#nav-tanda-jasa" role="tab" aria-controls="nav-tanda-jasa" aria-selected="false">Tanda jasa</a>
                    <a class="nav-link small" id="nav-penugasan-operasi-tab" data-toggle="tab" href="#nav-penugasan-operasi" role="tab" aria-controls="nav-penugasan-operasi" aria-selected="false">Penugasan operasi</a>
                    <a class="nav-link small" id="nav-penugasan-luar-negeri-tab" data-toggle="tab" href="#nav-penugasan-luar-negeri" role="tab" aria-controls="nav-penugasan-luar-negeri" aria-selected="false">Penugasan Luar Negeri</a>
                    <a class="nav-link small" id="nav-kepangkatan-tab" data-toggle="tab" href="#nav-kepangkatan" role="tab" aria-controls="nav-kepangkatan" aria-selected="false">Kepangkatan</a>
                    <a class="nav-link small" id="nav-jabatan-tab" data-toggle="tab" href="#nav-jabatan" role="tab" aria-controls="nav-jabatan" aria-selected="false">Jabatan</a>
                    <a class="nav-link small" id="nav-keluarga-tab" data-toggle="tab" href="#nav-keluarga" role="tab" aria-controls="nav-keluarga" aria-selected="false">Keluarga</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-pendidikan" role="tabpanel" aria-labelledby="nav-pendidikan-tab">1</div>
                  <div class="tab-pane fade" id="nav-bahasa" role="tabpanel" aria-labelledby="nav-bahasa-tab">2</div>
                  <div class="tab-pane fade" id="nav-tanda-jasa" role="tabpanel" aria-labelledby="nav-tanda-jasa-tab">3</div>
                  <div class="tab-pane fade" id="nav-penugasan-operasi" role="tabpanel" aria-labelledby="nav-penugasan-operasi-tab">4</div>
                  <div class="tab-pane fade" id="nav-penugasan-luar-negeri" role="tabpanel" aria-labelledby="nav-penugasan-luar-negeri-tab">5</div>
                  <div class="tab-pane fade" id="nav-kepangkatan" role="tabpanel" aria-labelledby="nav-kepangkatan-tab">6</div>
                  <div class="tab-pane fade" id="nav-jabatan" role="tabpanel" aria-labelledby="nav-jabatan-tab">7</div>
                  <div class="tab-pane fade" id="nav-keluarga" role="tabpanel" aria-labelledby="nav-keluarga-tab">8</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>