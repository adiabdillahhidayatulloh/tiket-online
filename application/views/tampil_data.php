<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tampil Data</title>
    </head>
    <body>
        <pre>
        ====================================================
             <b>PEMESANAN TIKET ONLINE JAKARTA - SINGAPURA</b>
        ====================================================

        <?php
        $no = 1;
        foreach ($tiket as $u)  : ?>No Tiket        : <?= $no++; ?></br>
        Nama            : <?= $u->nama ?></br>
        Nama Pesawat    : <?= $u->pesawat ?></br>
        Kelas           : <?= $u->kelas ?></br>
        Harga Tiket     : <?= $u->harga ?></br>
        Jumlah Tiket    : <?= $u->jumlah ?></br>
        Total Bayar     : <?= $u->harga*$u->jumlah ?>


        <?= anchor('tiket/edit/'.$u->id,'<input type="button" name="submit" value="Edit" />'); ?> <?= anchor('tiket/hapus/'.$u->id,'<input type="button" name="submit" value="hapus" />'); ?><br>
        ===============================================
        
        <?php endforeach; ?>
        <?= anchor('tiket/tambah', '<input type="button" value="Tambah Data" />'); ?>
    </pre>
    </body>
</html>