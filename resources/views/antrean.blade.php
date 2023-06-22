@extends('layouts.main')
@section('css', '/css/antrean.css')
@section('content')
  <header class="header-antrean">
    <h1>Antrean Puskesmas</h1>
  </header>
  <main>

       @auth
        <!-- Button Modal -->
          <a href="/ambilantrean" class="btn btn-primary my-3 login-ambil">
             <i class="bi bi-file-plus me-1"></i>Ambil Antrian
          </a>
        @else
          <a href="/login" type="button" class="btn btn-primary my-3 login-ambil">
            <i class="bi bi-file-plus me-1"></i>Ambil Antrian
          </a>
        @endauth
    <section id="queue">
      <div class="container">
        <h2>Antrian Sekarang</h2>
        <div class="queue-number">
          <h3>Nomor Antrian:</h3>
          <p>001</p>
        </div>
        <div class="queue-status">
          <h3>Status:</h3>
          <p>Menunggu</p>
        </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
        <h2>Kategori</h2>
        <div class="category">
          <button class="btn-category" onclick="showQueue('Poli Umum')">Poli Umum</button>
          <button class="btn-category" onclick="showQueue('Poli Gigi')">Poli Gigi</button>
          <button class="btn-category" onclick="showQueue('Poli THT')">Poli THT</button>
        </div>
      </div>
    </section>
    <section id="appointment">
      <div class="container">
        <h2 id="appointment-category">Antrean Poli Umum</h2>
        <div class="appointment-list">
          <div class="appointment-item">
            <div class="appointment-number">
              <h3>Nomor Antrian:</h3>
              <p>002</p>
            </div>
            <div class="appointment-status">
              <h3>Status:</h3>
              <p>Menunggu</p>
            </div>
          </div>
          <div class="appointment-item">
            <div class="appointment-number">
              <h3>Nomor Antrian:</h3>
              <p>003</p>
            </div>
            <div class="appointment-status">
              <h3>Status:</h3>
              <p>Menunggu</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<script>
    function showQueue(category) {
  const appointmentSection = document.getElementById("appointment");
  const appointmentCategory = document.getElementById("appointment-category");
  
  // Mengganti judul antrean sesuai dengan kategori yang dipilih
  appointmentCategory.textContent = "Antrean " + category;

  // Menampilkan atau menyembunyikan antrean berdasarkan kategori yang dipilih
  const appointmentItems = appointmentSection.getElementsByClassName("appointment-item");
  for (let i = 0; i < appointmentItems.length; i++) {
    const appointmentItem = appointmentItems[i];
    const itemCategory = appointmentItem.getAttribute("data-category");

    if (itemCategory === category) {
      appointmentItem.style.display = "block";
    } else {
      appointmentItem.style.display = "none";
    }
  }
}
</script>
@endsection
