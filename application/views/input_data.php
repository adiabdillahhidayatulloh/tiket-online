<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Input Data</title>
    </head>
    <body>
        <form action="<?= base_url(). 'index.php/tiket/tambah_aksi'; ?>"
        method="post"
        enctype="multipart/form-data">
        <pre>
        ====================================================
                <b>TIKET ONLINE JAKARTA - SINGAPURA</b>
        ====================================================

            <label for="username">Nama                  : <input type="text" name="nama" id="username" placeholder="Masukkan Nama"></label>

            <label>Pilih Kode Pesawat    : <select name="pesawat">
                <option value="Garuda">GRD (GARUDA)</option>
                <option value="Merpati">MPT (MERPATI)</option>
                <option value="Lion">LNA (LION AIR)</option>
            </select>
        </label>
            <label>Pilih Kelas           : </label><label for="kelas"><input type="radio" name="kelas" id="kelas" value="Eksekutif"> Eksekutif </label>
                                    <label for="kelas"><input type="radio" name="kelas" id="kelas" value="Bisnis"> Bisnis </label>
                                    <label for="kelas"><input type="radio" name="kelas" id="kelas" value="Ekonomi"> Ekonomi </label>

            <label>Pilih Banyak Tiket    : <select name="jumlah">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <input type="submit" name="submit" value="Simpan" /> <input type="reset" value="Batal" /> <?= anchor('tiket/index', '<input type="button" value="Kembali" />');?><br>
        ====================================================
        </pre>
    </form>
    </body>
</html>