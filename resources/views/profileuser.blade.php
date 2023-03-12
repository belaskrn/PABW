<!DOCTYPE html>
<html>
<head>
    <title>Profile User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        h1 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 24px;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
            display: block;
            margin-bottom: 20px;
        }
        .info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .info div {
            flex-basis: 45%;
            margin-bottom: 20px;
        }
        .info div span {
            font-weight: bold;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil Pengguna</h1>
        <img class="profile-pic" src="https://via.placeholder.com/150" alt="Foto Profil">
        <div class="info">
            <div>
                <h2>Informasi Pribadi</h2>
                <p><span>Nama:</span> John Doe</p>
                <p><span>Tanggal Lahir:</span> 1 Januari 1990</p>
                <p><span>Alamat:</span> Jalan Raya 123, Jakarta</p>
                <p><span>No. Telepon:</span> 081234567890</p>
            </div>
            <div>
                <h2>Informasi Akun</h2>
                <p><span>Email:</span> johndoe@example.com</p>
                <p><span>Username:</span> johndoe123</p>
                <p><span>Tanggal Bergabung:</span> 1 Januari 2020</p>
            </div>
        </div>
    </div>
</body>
</html>