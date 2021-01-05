</div>
<!-- End of Main Content -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Your Website 2020</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url() ?>assets/js/datatables.js"></script>
<script src="<?= base_url() ?>assets/js/dataTables.bootstrap4.js"></script>
<script src="<?= base_url() ?>assets/js/dataTables.fixedColumns.js"></script>
<script src="<?= base_url() ?>assets/js/fixedColumns.bootstrap4.js"></script>
<script src="<?= base_url() ?>assets/js/fixedColumns.dataTables.js"></script>

<script>
  $(document).on("click", ".browse", function() {
    var file = $(this).parents().find(".file");
    file.trigger("click");
  });
  $('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);

    var reader = new FileReader();
    reader.onload = function(e) {
      // get loaded data and render thumbnail.
      document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable').DataTable({
      scrollX: true,
      scrollCollapse: true,
      fixedColumns: {
        leftColumns: 4
      }
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable1').DataTable({
      scrollX: true,
      scrollCollapse: true,
      fixedColumns: {
        leftColumns: 3
      }
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable2').DataTable({
      scrollX: true,
      scrollCollapse: true,
      fixedColumns: {
        leftColumns: 2
      }
    });
  });
</script>

</body>

</html>