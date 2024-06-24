<?php
include 'function.php';
include 'templates/header.php';
include 'templates/navbar.php';
?>

<div class="row">
    <div class="col-md-3">
        <label for="jenis-tagihan" class="form-label">Jenis Tagihan</label>
        <select class="form-select" id="jenis-tagihan">
            <option selected>Pilih Jenis Tagihan</option>
            <option value="SPP">SPP</option>
            <option value="Bangunan">Bangunan</option>
            <option value="Activity">Activity</option>
            <option value="Ekstur">Ekstur</option>
            <option value="Graduation">Graduation</option>
        </select>
    </div>
</div>
<div id="content-spp" style="display: none;">
    <div class="row">
        <div class="col-md-3">
            <label for="unit" class="form-label">Pilih Unit</label>
            <select class="form-select" id="unit">
                <option selected>Pilih Unit</option>
                <option value="Unit A">Unit A</option>
                <option value="Unit B">Unit B</option>
                <option value="Unit C">Unit C</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="tahun-ajar" class="form-label">Pilih Tahun Ajar</label>
            <select class="form-select" id="tahun-ajar">
                <option selected>Pilih Tahun Ajar</option>
                <option value="2022/2023">2022/2023</option>
                <option value="2023/2024">2023/2024</option>
                <option value="2024/2025">2024/2025</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="kelas" class="form-label">Pilih Kelas</label>
            <select class="form-select" id="kelas">
                <option selected>Pilih Kelas</option>
                <option value="Kelas 1">Kelas 1</option>
                <option value="Kelas 2">Kelas 2</option>
                <option value="Kelas 3">Kelas 3</option>
            </select>
        </div>
        <div class="col-md-3">
            <button onclick="createNewSPP()" class="btn btn-primary">Buat SPP Baru</button>
        </div>
    </div>
</div>

<script>
// Tambahkan event listener untuk memantau perubahan pada select element
document.getElementById('jenis-tagihan').addEventListener('change', function() {
    var selectedValue = this.value;
    
    // Cek nilai yang dipilih dan tampilkan konten yang sesuai
    if (selectedValue === 'SPP') {
        // Tampilkan konten SPP di sini
        document.getElementById('content-spp').style.display = 'block';
    } else {
        document.getElementById('content-spp').style.display = 'none';
    }
});
</script>

<?php
include 'templates/footer.php';
?>