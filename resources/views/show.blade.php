<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Tambahkan CSS atau meta tags lainnya di sini -->
</head>
<body>
    <div class="container">
        <h1>Profile</h1>
        <div class="card">
            <div class="card-body">
                <p class="card-title"><strong>Nama:</strong>{{ $profile->nama }}</p>
                <p class="card-text"><strong>NIM:</strong> {{ $profile->nim }}</p>
                <p class="card-text"><strong>Alamat:</strong> {{ $profile->alamat }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $profile->email }}</p>
            </div>
        </div>
    </div>
</body>
</html>
