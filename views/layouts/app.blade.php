<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir</title>

    <style>
        * {
            box-sizing: border-box;
}

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f5f7;
            color: #333;
        }

        header {
            background: #0066cc;
            color: white;
            padding: 20px;
        }

        header h1 {
            margin: 0 0 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #0066cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            text-align: center;
            background: #333;
            color: white;
            padding: 15px;
            margin-top: 40px;
        }

        .alert {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .waspada {
            color: #d39e00;
        }

        .siaga {
            color: #e67e22;
        }

        .awas {
            color: #d00000;
        }
    </style>
</head>

<body>

<header>
    <h1>LaporBanjir</h1>

    <nav>
        <a href="{{ route('lapor.form') }}">Form Pelaporan</a>
        <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    &copy; 2026 BPBD Kabupaten Bandung
</footer>

</body>
</html>