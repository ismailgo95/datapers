<div class="container-fluid">
  <?php foreach ($data_militer as $militer) : ?>
    <div class="card shadow mb-4">
      <div class="card-header py-2 bg-primary">
        <div class="row">
          <h5 class="text-white pt-2"><strong><?= $militer->nama ?></strong></h5>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="card" style="width: 150px;">
              <img src="<?= base_url('assets/img/default.png') ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <span class="btn btn-file">Upload<input type="file" /></span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  <?php endforeach; ?>
</div>