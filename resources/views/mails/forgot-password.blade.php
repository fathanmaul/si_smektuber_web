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
              Anda menerima email ini karena kami menerima permintaan untuk mereset kata sandi Anda.
              Jika Anda tidak meminta reset kata sandi, abaikan email ini.
            </p>
            <p class="card-text">
              Gunakan kode OTP berikut untuk mereset kata sandi Anda. Kode OTP ini berlaku selama 5 menit.
            </p>
            <div class="text-center bg-primary text-white p-3 rounded mb-3">
              <h2>{{ $otp }}</h2>
            </div>
            <p class="card-text">
              Jika Anda tidak meminta reset kata sandi, tidak ada tindakan lebih lanjut yang diperlukan dari Anda.
            </p>
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
  