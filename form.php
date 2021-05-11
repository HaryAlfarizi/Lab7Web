<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 7</title>
</head>
<body style="">
    <h1>Masukan Data</h1>
    <form style="" action="database.php" method="post">
        Nama: 
        <input type="text" name="nama" id="nama">
        <br>
        <br>
        Tanggal lahir: 
        <input type="date" name="tgl_lahir" id="tgl_lahir">
        <br>
        <br>
        Pekerjaan: 
        <select name="pekerjaan" id="pekerjaan">
            <option value="karyawan">Karyawan</option>
            <option value="barista">Barista</option>

        </select>
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>