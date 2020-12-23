<!-- Modal -->
<?php foreach ($data_militer as $militer) : ?>
  <div class="modal fade" id="modal-edit<?= $militer->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal_add" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white font-weight-bold" id="modal_add">Update Data Militer - ( <?= $militer->nama ?> )</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('Admin/Militer/update') ?>" method="POST">
          <div class="modal-body">
            <div class="row">
              <!-- Kolom ke 1 -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nama</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <input type="hidden" name="id" value="<?= $militer->id ?>">
                      <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="<?= $militer->nama ?>">
                    </div>
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                  </div>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <select name="jenis_kelamin" class="form-control">
                        <option value="<?= $militer->jenis_kelamin ?>"><?= $militer->jenis_kelamin ?></option>
                        <option value="Laki-Laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Pangkat</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <select name="id_pangkat" class="form-control">
                        <option value="<?= $militer->id_pangkat ?>"><?= $militer->nama_pangkat ?></option>
                        <?php foreach ($pangkat as $data) : ?>
                          <option value="<?= $data->id_pangkat ?>"><?= $data->nama_pangkat ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>TMT Pangkat</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <input type="date" class="form-control" name="tmt_pangkat" value="<?= $militer->tmt_pangkat ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Pendidikan Umum</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="pendidikan_umum" placeholder="Masukan Pendidikan Umum" value="<?= $militer->pendidikan_umum ?>">
                    </div>
                  </div>
                </div>
              </div>
              <!-- Kolom 2 -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir" value="<?= $militer->tempat_lahir ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Golongan Darah</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <select name="golongan_darah" class="form-control">
                        <option value="<?= $militer->golongan_darah ?>"><?= $militer->golongan_darah ?></option>
                        <option value="Gol A">Gol A</option>
                        <option value="Gol B">Gol B</option>
                        <option value="Gol O">Gol O</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>NRP</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="nrp" placeholder="Masukan NRP" value="<?= $militer->nrp ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>TMT Tni</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <input type="date" class="form-control" name="tmt_tni" value="<?= $militer->tmt_tni ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Pendidikan Militer</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="pendidikan_militer" placeholder="Masukan Pendidikan Militer" value="<?= $militer->pendidikan_militer ?>">
                    </div>
                  </div>
                </div>
              </div>
              <!-- Kolom 3 -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukan tanggal Lahir" value="<?= $militer->tanggal_lahir ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <select name="agama" class="form-control">
                        <option value="<?= $militer->agama ?>"><?= $militer->agama ?></option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protes">Protes</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="jabatan" placeholder="Masukan jabatan" value="<?= $militer->jabatan ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>TMT Jabatan</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <input type="date" class="form-control" name="tmt_jabatan" value="<?= $militer->tmt_jabatan ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <div class="row align-items-center">
                    <div class="col-sm-12">
                      <select name="status" class="form-control">
                        <option value="<?= $militer->status ?>"><?= $militer->status ?></option>
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>



      </div>
    </div>
  </div>
<?php endforeach; ?>