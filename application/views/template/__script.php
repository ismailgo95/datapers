<script>
  $(document).ready(function() {
    tampil_data();

    $('#datatable').DataTable();

    function tampil_data() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/Militer/data_militer',
        async: false,
        dataType: 'json',
        success: function(data) {
          var html = '';
          var no = 1;
          var i;
          for (i = 0; i < data.length; i++) {
            html += '<tr>' +
              '<td>' + no++ + '</td>' +
              '<td>' + data[i].nama + '</td>' +
              '<td>' + data[i].jenis_kelamin + '</td>' +
              '<td>' + data[i].tempat_lahir + '</td>' +
              '<td>' + data[i].tanggal_lahir + '</td>' +
              '<td>' + data[i].golongan_darah + '</td>' +
              '<td>' + data[i].agama + '</td>' +
              '<td>' + data[i].nama_pangkat + '</td>' +
              '<td>' + data[i].tmt_pangkat + '</td>' +
              '<td>' + data[i].nrp + '</td>' +
              '<td>' + data[i].jabatan + '</td>' +
              '<td>' + data[i].tmt_jabatan + '</td>' +
              '<td>' + data[i].pendidikan_umum + '</td>' +
              '<td>' + data[i].pendidikan_militer + '</td>' +
              '<td>' + data[i].tmt_tni + '</td>' +
              '<td>' + data[i].status + '</td>' +
              '<td>' + data[i].status_dinas + '</td>' +
              '<td>' +
              '<button class="btn btn-primary btn-sm item_edit" data="' + data[i].id + '"><i class="fa fa-edit"></i></button>' + ' ' +
              '<button class="btn btn-danger btn-sm item_hapus" data="' + data[i].id + '"><i class="fa fa-trash"></i></button>' +
              '</td>' +
              '</tr>';
          }
          $('#data_militer').html(html);
        }

      });
    }

    // reset FORM TAMBAH
    $(document).on('click', '#btn_tambah', function(event) {
      event.preventDefault();
      $('#form')[0].reset(); // reset form on modals
    });

    //GET UPDATE
    $('#data_barang').on('click', '.item_edit', function() {
      var id = $(this).attr('data');
      $.ajax({
        type: "GET",
        url: "<?php echo base_url('index.php/barang/edit') ?>/" + id,
        dataType: "JSON",
        success: function(data) {
          $('#modal_edit').modal('show');
          $('[name="nama"]').val(data.nama);
          $('[name="jenis_kelamin"]').val(data.jenis_kelamin);
          $('[name="tempat_lahir"]').val(data.tempat_lahir);
          $('[name="tanggal_lahir"]').val(data.tangga_lahir);
          $('[name="golongan_darah"]').val(data.golongan_darah);
          $('[name="agama"]').val(data.agama);
          $('[name="id_pangkat"]').val(data.id_pangkat);
          $('[name="tmt_pangkat"]').val(data.tmt_pangkat);
          $('[name="nrp"]').val(data.nrp);
          $('[name="jabatan"]').val(data.jabatan);
          $('[name="tmt_jabatan"]').val(data.tmt_jabatan);
          $('[name="tmt_tni"]').val(data.tmt_tni);
          $('[name="pendidikan_umum"]').val(data.pendidikan_umum);
          $('[name="pendidikan_militer"]').val(data.pendidikan_militer);
          $('[name="status"]').val(data.status);
          $('[name="status_dinas"]').val(data.status_dinas);
        }
      });
      return false;
    });

    //Simpan Barang
    $('#btn_simpan').on('click', function() {
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('admin/Militer/create') ?>",
        dataType: "JSON",
        data: $('#form').serialize(),
        success: function(data) {
          $('#modal_add').modal('hide');
          tampil_data();
        }
      });
      return false;
    });

    //Update Barang
    $('#btn_update').on('click', function() {
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('index.php/barang/update') ?>",
        dataType: "JSON",
        data: $('#form_edit').serialize(),
        success: function(data) {
          $('#modal_edit').modal('hide');
          tampil_data();
        }
      });
      return false;
    });



    //GET HAPUS
    $('#data_barang').on('click', '.item_hapus', function() {
      if (confirm('Apa anda yakin ingin menghapus data ini')) {
        var id = $(this).attr('data');
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('index.php/barang/delete') ?>/" + id,
          dataType: "JSON",
          success: function(data) {
            tampil_data();
          }
        });
        return false;
      }
    });

  });
</script>