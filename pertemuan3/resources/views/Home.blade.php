<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            background-color: #f0f8ff; /* Light blue background */
            color: #333;
            text-align: center;
            padding-top: 50px;
        }
        .btn-custom {
            margin: 10px;
            padding: 12px 24px;
            font-size: 18px;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.1);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 36px;
            color: #ff6347; /* Tomato color */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        h3 {
            font-size: 24px;
            color: #4682b4; /* Steel blue color */
            margin-bottom: 30px;
        }
        .btn-primary {
            background-color: #ff1493; /* Deep pink */
            border-color: #ff1493;
        }
        .btn-primary:hover {
            background-color: #ff69b4; /* Hot pink */
            border-color: #ff69b4;
        }
        .btn-secondary {
            background-color: #32cd32; /* Lime green */
            border-color: #32cd32;
        }
        .btn-secondary:hover {
            background-color: #00ff00; /* Neon green */
            border-color: #00ff00;
        }
        .container {
            margin-top: 30px;
        }
        .animated-background {
            animation: bgAnimation 5s infinite alternate;
        }
        @keyframes bgAnimation {
            0% {
                background-color: #f0f8ff;
            }
            100% {
                background-color: #ffebcd; /* Blanched almond */
            }
        }
    </style>
</head>
<body class="animated-background">
    <div class="container">
        <h1>Selamat datang di Website</h1>
        <h3>Nov</h3>
        
        <!-- Buttons -->
        <a href="{{ url('/profilnama') }}" class="btn btn-primary btn-custom">Profil Nama</a>
        <a href="{{ url('/matakuliah') }}" class="btn btn-secondary btn-custom">Mata Kuliah</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
