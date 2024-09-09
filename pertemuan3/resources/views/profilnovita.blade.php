<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, #ff9a9e, #fad0c4); /* Gradient background */
            color: #333;
            font-family: 'Arial', sans-serif;
        }
        .profile-box {
            border: 2px solid #ffffff;
            padding: 30px;
            border-radius: 15px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: inline-block;
            margin-top: 30px;
            width: 80%;
            max-width: 500px;
        }
        h1 {
            font-size: 2.5rem;
            color: #ff6f61; /* Coral color */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
        h3 {
            margin: 10px 0;
            font-size: 1.2rem;
        }
        .btn-back {
            margin-top: 20px;
            background-color: #6c757d;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-back:hover {
            background-color: #5a6268;
            transform: scale(1.05);
        }
        .btn-back:focus {
            outline: none;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Halaman Profil</h1>
        <div class="profile-box">
            <h3>Nama: Novita</h3>
            <h3>Jurusan: Sistem Informasi</h3>
            <h3>Fakultas: Ilmu Komputer</h3>
            <h3>Hobi: Makeup</h3>
        </div>
    </div>
    <center>
        <a href="javascript:history.back()" class="btn btn-back">Back</a>
        
    </center>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
