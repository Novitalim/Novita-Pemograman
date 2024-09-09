<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MataKuliah</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {
            background-color: pink;
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <div class="row mt-4">
        <div class="col-12 text-center">
            <a href="{{ url('/Home') }}" class="btn btn-primary">Back to Home</a> 
        </div>
    </div>
    <div class="container mt-4">
        <div class="row"> 
            <div class="col-12 mb-4"> 
                <h1 class="text-center">Nama Mahasiswa: Novita</h1> 
                <h2 class="text-center">Student ID: 03081220007</h2> 
            </div>
        </div>

        <table class="table table-bordered table-hover"> 
            <thead class="table-dark">
                <tr>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>JARINGAN DAN KEAMANAN KOMPUTER</td>
                            <td>3.00</td>
                            <td>A-</td>
                        </tr>
                        <tr>
                            <td>ARSITEKTUR PERUSAHAAN</td>
                            <td>3.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>MULTIMEDIA AND THE WEB</td>
                            <td>3.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>KEWARGANEGARAAN</td>
                            <td>2.00</td>
                            <td>A-</td>
                        </tr>
                        <tr>
                            <td>SISTEM OPERASI</td>
                            <td>3.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>PENULISAN KARYA ILMIAH</td>
                            <td>2.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>E-BUSINESS & E-COMMERCE</td>
                            <td>4.00</td>
                            <td>A-</td>
                        </tr>
                        <tr>
                            <td>PERANCANGAN & PEMROGRAMAN WEB</td>
                            <td>3.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>PEMODELAN & ANALISI PROSES BIS</td>
                            <td>3.00</td>
                            <td>A-</td>
                        </tr>
                        <tr>
                            <td>TATA KELOLA TI</td>
                            <td>3.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>KEAMANAN TI & MANAJEMEN RESIKO</td>
                            <td>3.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>ETIKA</td>
                            <td>4.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>PANCASILA</td>
                            <td>2.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>LEADERSHIP AND ENTREPREUNERSHIP</td>
                            <td>2.00</td>
                            <td>A-</td>
                        </tr>
                        <tr>
                            <td>TECH SKILLS</td>
                            <td>2.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>MANAJEMEN SISTEM INFORMASI</td>
                            <td>3.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>ANALISIS DAN DESAIN SISTEM</td>
                            <td>3.00</td>
                            <td>A-</td>
                        </tr>
                        <tr>
                            <td>MANAJEMEN PROYEK SIS INFO</td>
                            <td>3.00</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>DASAR TEKNOLOGI WEB</td>
                            <td>2.00</td>
                            <td>A-</td>
                        </tr>
                    </tbody>
                </table>

            </tbody>
        </table>
    </div>
</body>
</html>
