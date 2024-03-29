<!DOCTYPE html>
<html>
<head>
    <title>Form Cek BMI</title>
    <style>
        table {
  border-collapse: collapse;
  width: 100%;
  margin: 0 auto;
}

th, td {
  border: 1px solid black;
  padding: 15px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

td:last-child {
  text-align: right;
}

h2 {
  text-align: center;
  margin: 15px 0;
}

    </style>
</head>
<body>
    <form method="post" action="class_bmi.php">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="berat_badan">Berat Badan (kg):</label><br>
        <input type="number" id="berat_badan" name="berat_badan" step="0.01" required><br>
        <label for="tinggi_badan">Tinggi Badan (cm):</label><br>
        <input type="number" id="tinggi_badan" name="tinggi_badan" required><br>
        <label for="umur">Umur (tahun):</label><br>
        <input type="number" id="umur" name="umur" required><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>