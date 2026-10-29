

<div class="wr-wrapper">
  <div class="wr-card text-center">
    <i class="lni lni-star" style="font-size:60px; color:#0d6efd;"></i>
    <h2 class="mt-3">Hitung Zodiak MLBB</h2>
    <p>Hitung sisa draw & estimasi diamond Zodiak</p>

    <div class="mb-3 text-start">
      <label>Jumlah Draw Saat Ini</label>
      <input type="number" id="zodiak_draw" class="form-control" placeholder="Contoh: 45">
    </div>

    <button class="btn btn-primary w-100" onclick="hitungZodiak()">
      <i class="lni lni-calculator"></i> Hitung
    </button>
  </div>
</div>



<script>
function hitungZodiak() {
  let draw = parseInt(document.getElementById("zodiak_draw").value);

  if (isNaN(draw) || draw < 0 || draw >= 100) {
    Swal.fire({
      icon: "error",
      title: "Input Tidak Valid",
      text: "Jumlah draw harus antara 0 - 99",
      confirmButtonColor: "#0d6efd"
    });
    return;
  }

  let sisaDraw = 100 - draw;
  let diamond = sisaDraw * 20;

  Swal.fire({
    icon: "success",
    title: "Hasil Perhitungan Zodiak",
    html: `
      <b>Draw Saat Ini:</b> ${draw}<br>
      <b>Sisa Draw:</b> ${sisaDraw}<br>
      <b>Estimasi Diamond:</b> ${diamond}
    `,
    confirmButtonText: "Gas Draw 🌟",
    confirmButtonColor: "#0d6efd"
  });
}
</script>