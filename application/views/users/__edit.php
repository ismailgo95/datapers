<!-- Modal -->
<?php foreach ($user as $users) : ?>
  <div class="modal fade" id="modal-edit<?= $users->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal_add" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white font-weight-bold" id="modal_add">Update Data Users - ( <?= $users->name ?> )</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('Admin/Militer/update') ?>" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label>Role Status</label>
              <div class="row align-items-center">
                <div class="col-sm-12">
                  <select name="role_id" id="" class="form-control">
                    <option value="
                    <?php if (($users->role_id) == 1) : ?>
                        <?= "Admin" ?>
                      <?php else : ?>
                        <?= "Users" ?>
                      <?php endif; ?>
                    ">
                      <?php if (($users->role_id) == 1) : ?>
                        <?= "Admin" ?>
                      <?php else : ?>
                        <?= "Users" ?>
                      <?php endif; ?>
                    </option>
                    <option value="1">Admin</option>
                    <option value="2">Users</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Aktivasi</label>
              <div class="row align-items-center">
                <div class="col-sm-12">
                  <select name="is_active" id="" class="form-control">
                    <option value="
                    <?php if (($users->is_active) == 1) : ?>
                        <?= "Aktif" ?>
                      <?php else : ?>
                        <?= "Tidak Aktif" ?>
                      <?php endif; ?>
                    ">
                      <?php if (($users->is_active) == 1) : ?>
                        <?= "Aktif" ?>
                      <?php else : ?>
                        <?= "Tidak Aktif" ?>
                      <?php endif; ?>
                    </option>
                    <option value="1">Aktif</option>
                    <option value="2">Tidak Aktif</option>
                  </select>
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