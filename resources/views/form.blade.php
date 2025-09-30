<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
    <style>
        /* Menggunakan font yang lebih modern */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6; /* Warna latar belakang halaman */
            display: flex;
            justify-content: center; /* Pusatkan form secara horizontal */
            align-items: center; /* Pusatkan form secara vertikal */
            min-height: 100vh; /* Pastikan mengambil seluruh tinggi viewport */
            margin: 0;
        }

        /* Styling untuk kontainer form */
        form {
            background-color: #ffffff; /* Latar belakang form putih */
            padding: 40px;
            border-radius: 12px; /* Sudut membulat */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
            width: 100%;
            max-width: 400px; /* Batasi lebar form */
            display: flex;
            flex-direction: column;
            gap: 20px; /* Jarak antara elemen form */
        }

        /* Styling untuk judul form */
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        /* Styling untuk input teks dan password */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc; /* Batas abu-abu */
            border-radius: 8px; /* Sudut membulat */
            box-sizing: border-box; /* Pastikan padding tidak menambah lebar total */
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        /* Efek saat input difokuskan */
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff; /* Batas biru */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            outline: none; /* Hilangkan garis fokus default browser */
        }

        /* Styling untuk tombol Submit */
        button[type="submit"] {
            background-color: #007bff; /* Latar belakang biru */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        /* Efek saat tombol di-hover */
        button[type="submit"]:hover {
            background-color: #0056b3; /* Biru yang sedikit lebih gelap */
        }
    </style>
</head>
<body>
    <form action="auth/login" method="POST">
        <h2>Login ke Akun Anda</h2>

        <input type="text" name="username" placeholder="Nama Pengguna atau Email" required>

        <input type="password" name="password" placeholder="Kata Sandi" required>

        <button type="submit">Masuk</button>
    </form>
</body>
</html>
