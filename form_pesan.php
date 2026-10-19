<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="body" style="background-color: #d5daf0; font-family: Arial, sans-serif; margin: 0;
            padding: 40px;"> 
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow-sm p-4" style="border-radius: 12px;">
            <h2 class="mb-4">Form Pesan Mahasiswa</h2>
            
            <form action="hasil_pesan.php" method="POST" style="border-radius: 10px;padding: 12px;margin-bottom: 10px; ">
                <div class="mb-3" style="background-color: #c6c8d2; border-radius: 10px;padding: 12px;margin-bottom: 10px;">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                
                <div class="mb-3" style="background-color: #c6c8d2; border-radius: 10px;padding: 12px;margin-bottom: 10px;">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas" required>
                </div>
                
                <div class="mb-3" style="background-color: #c6c8d2; border-radius: 10px;padding: 12px;margin-bottom: 10px;">
                    <label for="pesan" class="form-label">Pesan / Kesan</label>
                    <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
                </div>
                
                <div class="d-flex justify-content-between">
                    <button type="submit" name="tombol_kirim" class="btn btn-success">Kirim Pesan</button>
                    <a href="index.php" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>