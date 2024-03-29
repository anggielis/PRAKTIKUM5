<?php
$nama = $_POST['nama'];
$berat_badan = $_POST['berat_badan'];
$tinggi_badan = $_POST['tinggi_badan'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$bmi = $berat_badan / (($tinggi_badan / 100) ** 2);

$keterangan = '';
if ($bmi < 18.5) {
    $keterangan = 'Kurus';
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $keterangan = 'Normal (ideal)';
} elseif ($bmi >= 25 && $bmi < 29.9) {
    $keterangan = 'Gemuk';
} else {
    $keterangan = 'Obesitas';
}

echo " <!DOCTYPE html>
<html>
<head>
    <title>Hasil Evaluasi BMI</title>
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
    <table>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Berat Badan</th>
            <th>Tinggi Badan</th>
            <th>BMI</th>
            <th>Keterangan</th>
        </tr>
        <tr>
            <td>$nama</td>
            <td>$jenis_kelamin</td>
            <td>$umur</td>
            <td>$berat_badan</td>
            <td>$tinggi_badan</td>
            <td>$bmi</td>
            <td>$keterangan</td>
        </tr>";
