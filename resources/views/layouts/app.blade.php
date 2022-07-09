<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Sistem Informasi Akademik Sekolah</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="shrotcut icon" href="img/favicon.ico">
</head>

<style>
  #logo {
    background-image: url('img/bglogin.jpg');
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<body id="logo" class="hold-transition login-page" background-size: cover; background-attachment: fixed;">
  <div class="login-box">
    <div class="login-logo">
      <img src="{{ asset('img/sdit.png') }}" width="100%" alt="">
    </div>

    <div class="login-logo" style="color: white;">
      @yield('page')
    </div>

    <div class="card">
      @yield('content')
    </div>

    <footer style="color: white;">
      <marquee>
        <strong>Copyright &copy; <script>
            document.write(new Date().getFullYear());
          </script> &diams; <a href="#" style="color: white;">SDIT INSAN QUR'ANI SUMBAWA</a>. </strong>
      </marquee>
    </footer>
  </div>
  S
  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
  <!-- page script -->
  <script>
    $(document).ready(function() {
      $('#role').change(function() {
        var kel = $('#role option:selected').val();
        if (kel == "Guru") {
          $("#noId").addClass("mb-3");
          $("#noId").html(`
              <input id="nomer" type="text" maxlength="5" onkeypress="return inputAngka(event)" placeholder="No Id Card" class="form-control @error('nomer') is-invalid @enderror" name="nomer" autocomplete="nomer">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-id-card"></span>
                </div>
              </div>
              `);
          $("#pesan").html(`
              @error('nomer')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            `);
        } else if (kel == "Siswa") {
          $("#noId").addClass("mb-3");
          $("#noId").html(`
              <input id="nomer" type="text" placeholder="No Induk Siswa" class="form-control" name="nomer" autocomplete="nomer">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-id-card"></span>
                </div>
              </div>
            `);
          $("#pesan").html(`
              @error('nomer')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            `);
        } else {
          $('#noId').removeClass("mb-3");
          $('#noId').html('');
        }
      });
    });

    function inputAngka(e) {
      var charCode = (e.which) ? e.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
      }
      return true;
    }
  </script>
  @yield('script')

  @error('id_card')
  <script>
    toastr.error("Maaf User ini tidak terdaftar sebagai Guru SDIT INSAN QUR'ANI SUMBAWA!");
  </script>
  @enderror
  @error('guru')
  <script>
    toastr.error("Maaf Guru ini sudah terdaftar sebagai User!");
  </script>
  @enderror
  @error('no_induk')
  <script>
    toastr.error("Maaf User ini tidak terdaftar sebagai Siswa SDIT INSAN QUR'ANI SUMBAWA!");
  </script>
  @enderror
  @error('siswa')
  <script>
    toastr.error("Maaf Siswa ini sudah terdaftar sebagai User!");
  </script>
  @enderror
  @if (session('status'))
  <script>
    toastr.success("{{ Session('success') }}");
  </script>
  @endif
  @if (Session::has('error'))
  <script>
    toastr.error("{{ Session('error') }}");
  </script>
  @endif

</body>

</html>