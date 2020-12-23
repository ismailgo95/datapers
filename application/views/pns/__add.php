<!-- Modal -->
<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="modal_add" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white font-weight-bold" id="modal_add">Tambah Data Pns</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Admin/Pns/create') ?>" method="POST">
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
                <label>NIP</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nip" placeholder="Masukan NIP">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <select name="jenis_kelamin" class="form-control">
                      <option value="" disabled selected>Pilih Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Golongan</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <select name="golongan" class="form-control">
                      <option value="" disabled selected>Pilih Golongan</option>
                      <option value="I/A">I/A</option>
                      <option value="I/B">I/B</option>
                      <option value="I/C">I/C</option>
                      <option value="I/D">I/D</option>
                      <option value="II/A">II/A</option>
                      <option value="II/B">II/B</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>TMT</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="date" class="form-control" name="tmt">
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
            </div>
            <!-- Kolom 2 -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Jabatan</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="jabatan" placeholder="Masukan Jabatan">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>TMT Jabatan</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="date" class="form-control" name="tmt_jabatan">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Masa Kerja</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="date" class="form-control" name="masa_kerja">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Nama Jabatan</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nama_jabatan" placeholder="Masukan Nama Jabatan">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Tahun jabatan</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="date" class="form-control" name="tahun_jabatan">
                  </div>
                </div>
              </div>
            </div>
            <!-- Kolom 3 -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Status Dinas</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <select name="status_dinas" class="form-control">
                      <option value="" selected disabled>Pilih Status Dinas</option>
                      <option value="Aktif">Aktif</option>
                      <option value="BP">BP</option>
                      <option value="BP Keluar">BP keluar</option>
                      <option value="MPP">MPP</option>
                      <option value="Dik">Dik</option>
                    </select>
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
                <label>Tahun Pendidikan</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="date" class="form-control" name="tahun_pendidikan">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Ijazah</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <select name="ijazah" class="form-control">
                      <option value="" selected disabled>Pilih Ijazah</option>
                      <option value="S2">S2</option>
                      <option value="S1">S1</option>
                      <option value="DIII">DIII</option>
                      <option value="SMA">SMA</option>
                      <option value="SMK">SMK</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="row align-items-center">
                  <div class="col-sm-12">
                    <input type="date" class="form-control" name="tanggal_lahir">
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