<!DOCTYPE html>
<html>
<head>
    <title>Form Data (POST)</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validasiForm() {
            // Validasi Nama
            var nama = document.getElementsByName("nama")[0].value.trim();
            
            // Cek apakah Nama kosong
            if (nama === "") {
                alert("Isian kosong");
                document.getElementsByName("nama")[0].focus();
                return false;
            }
            
            // Cek apakah Nama mengandung angka
            if (/\d/.test(nama)) {
                alert("Isian tidak boleh mengandung angka");
                document.getElementsByName("nama")[0].focus();
                return false;
            }
            
            // Validasi Umur
            var umur = document.getElementsByName("umur")[0].value.trim();
            
            // Cek apakah Umur kosong
            if (umur === "") {
                alert("Isian kosong");
                document.getElementsByName("nama")[0].focus();
                return false;
            }
            
            // Cek apakah Umur mengandung huruf
            if (/[a-zA-Z]/.test(umur)) {
                alert("Isian tidak boleh mengandung huruf");
                document.getElementsByName("nama")[0].focus();
                return false;
            }
            
            return true;
        }
    </script>
</head>
<body>
<div class="container">
    <h2>Form Input Data Mahasiswa - POST</h2>
    <form action="proses_post_sanitasi.php" method="POST" onsubmit="return validasiForm();">
        <div class="form-group">
            <label>NIM :</label>
            <input type="text" name="nim">
        </div>

        <div class="form-group">
            <label>Nama :</label>
            <input type="text" name="nama">
        </div>

        <div class="form-group">
            <label>Tempat Lahir :</label>
            <input type="text" name="tempat_lahir">
        </div>

        <div class="form-group">
            <label>Tanggal Lahir :</label>
            <input type="date" name="tanggal_lahir">
        </div>

        <div class="form-group">
            <label>Alamat :</label>
            <textarea name="alamat" rows="4" cols="30"></textarea>
        </div>

        <div class="form-group">
            <label>Kota :</label>
            <select name="kota">
                <option>Semarang</option>
                <option>Solo</option>
                <option>Salatiga</option>
                <option>Kudus</option>
                <option>Pekalongan</option>
            </select>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin :</label>
            <div class="radio-group">
                <input type="radio" name="jk" value="Laki-laki" id="jk_laki">
                <label for="jk_laki" class="radio-label">Laki-laki</label>
                <input type="radio" name="jk" value="Perempuan" id="jk_perempuan">
                <label for="jk_perempuan" class="radio-label">Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label>No HP :</label>
            <input type="text" name="nohp">
        </div>

        <div class="form-group">
            <label>Umur :</label>
            <input type="number" name="umur">
        </div>

        <div class="form-group">
            <label>Status :</label>
            <div class="radio-group">
                <input type="radio" name="status" value="Kawin" id="status_kawin">
                <label for="status_kawin" class="radio-label">Kawin</label>
                <input type="radio" name="status" value="Belum Kawin" id="status_belum">
                <label for="status_belum" class="radio-label">Belum Kawin</label>
            </div>
        </div>

        <div class="form-group">
            <label>Hobi :</label>
            <div class="checkbox-group">
                <input type="checkbox" name="hobi[]" value="Membaca" id="hobi1">
                <label for="hobi1" class="checkbox-label">Membaca</label><br>
                <input type="checkbox" name="hobi[]" value="Olah Raga" id="hobi2">
                <label for="hobi2" class="checkbox-label">Olah Raga</label><br>
                <input type="checkbox" name="hobi[]" value="Musik" id="hobi3">
                <label for="hobi3" class="checkbox-label">Musik</label><br>
                <input type="checkbox" name="hobi[]" value="Traveling" id="hobi4">
                <label for="hobi4" class="checkbox-label">Traveling</label>
            </div>
        </div>

        <div class="form-group">
            <label>Email :</label>
            <input type="email" name="email">
        </div>

        <input type="submit" value="Kirim">
    </form>
</div>

</body>
</html>
