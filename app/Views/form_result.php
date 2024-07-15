<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <th>mata kuliah</th>
                    <th>Dosen</th>
                    <th>Asisten</th>
                </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td><?= $nama ?></td>
                <td><?= $nim ?></td>
                <td><?= $kelas ?></td>
                <td><?= $matakuliah ?></td>
                <td><?=$dosen ?></td>
                <td><?=$asisten ?></td>
            </tbody>
       </table>
    
    </div> 
</body>
</html>