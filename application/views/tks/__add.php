<!-- Modal -->
<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="modal_add" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white font-weight-bold" id="modal_add">Tambah Data Tks</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Admin/Tks/create') ?>" method="POST">
        <div class="modal-body">
          <div class="row">
            <!-- Kolom ke 1 -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Nama</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Golongan</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="text" name="golongan" class="form-control" placeholder="Masukan Golongan">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <select name="jenis_kelamin" class="form-control">
                      <option value="" disabled selected>Pilih Jenis Kelamin</option>
                      <option value="Laki-Laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>NIT</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="text" name="nit" class="form-control" placeholder="Masukan NIT">
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
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="date" name="tanggal_lahir" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Golongan Darah</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <select name="golongan_darah" class="form-control">
                      <option value="" disabled selected>Pilih Golongan Darah</option>
                      <option value="Gol A">Gol A</option>
                      <option value="Gol B">Gol B</option>
                      <option value="Gol O">Gol O</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Penugasan</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="penugasan" placeholder="Masukan Penugasan">
                  </div>
                </div>
              </div>
            </div>
            <!-- Kolom 3 -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Nomor Sprint Tks</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nomor_sprint_tks" placeholder="Masukan Nomor Sprint">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>tmt</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="tmt" placeholder="Masukan Tmt">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Pendidikan</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="pendidikan" placeholder="Masukan Pendidikan">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Status Dinas</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <select name="status_dinas" class="form-control">
                      <option value="" disabled selected>Pilih Status</option>
                      <option value="Aktif">Aktif</option>
                      <option value="Non Aktif">Non Aktif</option>
                      <option value="Berhenti">Berhenti</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>