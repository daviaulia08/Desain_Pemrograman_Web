<!DOCTYPE html>
<html>
<head>
  <title>Form Validasi dengan Password (AJAX)</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h1>Form Input dengan Validasi Password (AJAX)</h1>

  <form id="myForm">
    <label>Nama:</label><br>
    <input type="text" name="nama" id="nama"><br>

    <label>Email:</label><br>
    <input type="text" name="email" id="email"><br>

    <label>Password:</label><br>
    <input type="password" name="password" id="password"><br><br>

    <input type="submit" value="Kirim">
  </form>

  <div id="hasil"></div>

  <script>
    $(document).ready(function () {
      $("#myForm").submit(function (e) {
        e.preventDefault(); // Mencegah pengiriman form default

        var nama = $("#nama").val().trim();
        var email = $("#email").val().trim();
        var password = $("#password").val().trim();
        var valid = true;
        var pesan = "";

        // Validasi jQuery sebelum dikirim
        if (nama === "") {
          pesan += "Nama harus diisi.<br>";
          valid = false;
        }
        if (email === "") {
          pesan += "Email harus diisi.<br>";
          valid = false;
        }
        if (password.length < 8) {
          pesan += "Password minimal 8 karakter.<br>";
          valid = false;
        }

        if (!valid) {
          $("#hasil").html("<span style='color:red;'>" + pesan + "</span>");
          return;
        }

        // Jika lolos validasi, kirim ke PHP
        var formData = $("#myForm").serialize();

        $.ajax({
          url: "12.proses_validasi.php",
          type: "POST",
          data: formData,
          success: function (response) {
            $("#hasil").html(response);
          }
        });
      });
    });
  </script>
</body>
</html>
