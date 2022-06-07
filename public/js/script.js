$(function () {
  // jquery
  $('.tampilModalTambah').on('click', function () {
    $('#judulModal').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');

    $('#nama').val('');
    $('#nim').val('');
    $('#email').val('');
    $('#jurusan').val('');
  });

  $('.tampilModalUbah').on('click', function () {
    $('#judulModal').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost:8080/phpmvc/public/mahasiswa/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost:8080/phpmvc/public/mahasiswa/getUbah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#id').val(data.id);
        $('#nama').val(data.nama);
        $('#nim').val(data.nim);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
      },
    });
  });
});
