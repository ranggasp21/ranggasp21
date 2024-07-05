<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form registrasi</h1>
    <?php
        echo"isi data dibawah ini :"
    ?>
</body>
    <form action="<?php echo$_SERVER['PHP_SELF'];?>"method="post">
    <pre>
        Nama     :<input type="text" name="nama">
        No Telp  :<input type="text" name="notelp">
        alamat   :<textarea name="alamat" rows="5" cols="40"></textarea>
        Tempat  lahir   : <input type="text" value="tempat_lahir">
        Tanggal Lahir   : <input type="date" value="Tanggal_lahir">
        Jenis Kelamin   : <input type="radio" name="jenis_kelamin"value=laki-laki>laki-laki 
                          <input type="radio" name="jenis_kelamin"value=Perempuan>Perempuan
                          <input type="submit" value="submit">
        Pendidikan      : <select name="Pendidikan">
                          <option value="pilih">
                          <option value="S1">S1
                          <option value="SMA">SMA
                          <option value="SMP">SMP
                          <option value="SD">SD
</select>
        <button type="simpan" name="simpan"><button>
<from>
    