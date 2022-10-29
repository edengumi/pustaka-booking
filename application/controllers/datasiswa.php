
<html>
<head>
        <title> form data mahasiswa </title>
</style>
</head>
<body>
<h1> Form Input Data Mahasiswa </h1>
<table>
<tr><td>Isi Data Dibawah Ini: </td></tr>
<tr><td>Nama Lengkap: </td><td><input type = "text" name = "nama" size = "25" maxlength = "50"></td></tr>
<tr><td>NIM: </td><td><input type = "text" name = "nama" size = "25" maxlength = "50"></td></tr>
<tr><td>Kelas: </td><td><input type = "text" name = "nama" size = "25" maxlength = "50"></td></tr>
<tr><td>Tanggal Lahir: </td><td><input type = "text" name = "ttl" size = "25" maxlength = "50"></td></tr>
<tr><td>Tempat Lahir: </td><td><input type = "text" name = "tmptlahir" size = "25" maxlength = "50"></td></tr>
<tr><td>Alamat: </td><td><textarea name = "alamat" rows = "5" cols = "31"></textarea></td></tr>
<tr>
<td>Jenis Kelamin: </td>
<td>
<input type = "radio" name = "jeniskel" value = "Laki-laki"> Laki-laki
<input type = "radio" name = "jeniskel" value = "Perempuan"> Perempuan 
</td>
</tr>
<p>
<tr>
<td>Agama </td>
<td>
<select name = "Agama">
<option value = "-Pilih-">
<option value = "Islam"> Islam
<option value = "Kristen"> Kristen
<option value = "Katholik"> Katholik
<option value = "Hindu"> Hindu
<option value = "Budha"> Budha
<option value = "Protestan"> Protestan
<option value = "Konghuchu"> Konghuchu
</select>
</td>
</tr>

<pre>
<br>
<tr><td></td><td><input type = "submit" value = "Submit"> <input type = "reset" value = "Cancel"></td></tr>
</table>
</br>
</form>
</body>
</html>