<!DOCTYPE html>
<html>
<head>
  <title>Form Validasi Sederhana (AJAX)</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h1>Form Input dengan Validasi (AJAX)</h1>

  <form id="myForm">
    <label>Nama:</label><br>
    <input type="text" name="nama" id="nama"><br>

    <label>Email:</label><br>
    <input type="text" name="email" id="email"><br><br>

    <input type="submit" value="Kirim">
  </form>

  <div id="hasil"></div>

  <script>
    $(document).ready(function () {
      $("#myForm").submit(function (e) {
        e.preventDefault(); // Mencegah pengiriman form secara default

        // Mengumpulkan data form
        var formData = $("#myForm").serialize();

        // Kirim data ke server PHP
        $.ajax({
          url: "12.proses_validasi.php", // Ganti dengan file PHP yang sesuai
          type: "POST",
          data: formData,
          success: function (response) {
            // Tampilkan hasil dari server di div "hasil"
            $("#hasil").html(response);
          }
        });
      });
    });
  </script>
</body>
</html>
