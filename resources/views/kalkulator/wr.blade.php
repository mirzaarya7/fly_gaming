{{-- 1. Panggil kerangka utama (asumsi namanya app.blade.php di folder layouts) --}}
@extends('layout.app')

{{-- 2. Isi title halaman --}}
@section('title', 'Cek Win Rate')

{{-- 3. Isi Konten Utama --}}
@section('content')
<div class="wr-wrapper">
  <div class="wr-card text-center">
    <i class="lni lni-bar-chart" style="font-size:60px; color:#0d6efd;"></i>
    <h2 class="mt-3">Hitung Target Win Rate MLBB</h2>
    <p>Hitung berapa match yang harus dimainkan untuk mencapai WR impian</p>

    <div class="mb-3 text-start">
      <label>Total Match Saat Ini</label>
      <input type="number" id="match" class="form-control" placeholder="Contoh: 700">
    </div>

    <div class="mb-3 text-start">
      <label>Win Rate Saat Ini (%)</label>
      <input type="number" id="wr_now" class="form-control" placeholder="Contoh: 70">
    </div>

    <div class="mb-3 text-start">
      <label>Target Win Rate (%)</label>
      <input type="number" id="wr_target" class="form-control" placeholder="Contoh: 75">
    </div>

    <button class="btn btn-primary w-100" onclick="hitungWR()">
      <i class="lni lni-calculator"></i> Hitung
    </button>
  </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function hitungWR() {
  let match = parseInt(document.getElementById("match").value);
  let wrNow = parseFloat(document.getElementById("wr_now").value);
  let wrTarget = parseFloat(document.getElementById("wr_target").value);

  if (
    isNaN(match) || isNaN(wrNow) || isNaN(wrTarget) ||
    match <= 0 || wrNow <= 0 || wrTarget <= 0 ||
    wrTarget <= wrNow || wrTarget >= 100
  ) {
    Swal.fire({
      icon: "error",
      title: "Input Tidak Valid",
      text: "Pastikan semua data diisi dengan benar",
      confirmButtonColor: "#0d6efd"
    });
    return;
  }

  let win = (wrNow / 100) * match;
  let target = wrTarget / 100;
  let x = Math.ceil((target * match - win) / (1 - target));

  Swal.fire({
    icon: "success",
    title: "Hasil Perhitungan",
    html: `
      <b>Total Match Saat Ini:</b> ${match}<br>
      <b>WR Sekarang:</b> ${wrNow}%<br>
      <b>Target WR:</b> ${wrTarget}%<br><br>
      Kamu perlu <b>${x} kemenangan berturut-turut</b><br>
      untuk mencapai <b>${wrTarget}% WR</b>
    `,
    confirmButtonText: "Siap Push Rank 💪",
    confirmButtonColor: "#0d6efd"
  });
}
</script>
@endsection