$(function () {
  $('#upload-form').on('submit', function (e) {
    e.preventDefault();

    var fd = new FormData();
    var files = $('#files')[0].files;
    for (var i = 0; i < files.length; i++) {
      fd.append('files[]', files[i]);
    }

    $.ajax({
      type: 'POST',
      url: '12.upload_ajax.php',
      data: fd,
      processData: false,
      contentType: false,
      success: function (res) {
        $('#status').html(res);
      },
      error: function () {
        $('#status').html('Terjadi kesalahan saat mengunggah.');
      }
    });
  });
});
