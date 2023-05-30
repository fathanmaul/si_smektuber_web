<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OTP Email</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="text-center mb-4">
            <a href="{{ route('landing.index') }}" class="navbar-brand font-weight-bold text-primary"
              >Smektuber - SMKN 7 Jember</a
            >
          </div>
          <div class="card">
            <div class="card-body">
              <p class="card-text">
                Gunakan OTP berikut untuk menyelesaikan prosedur. OTP berlaku untuk 5
                menit.
              </p>
              <div class="text-center bg-primary text-white p-3 rounded mb-3">
                <h2>{{ $otp }}</h2>
              </div>
            </div>
            <hr />
            <div class="card-footer text-muted text-center">
              <p>Smektuber-SMKN 7 Jember</p>
              <p>Jember, Jawa Timur</p>
              <p>Indonesia</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
