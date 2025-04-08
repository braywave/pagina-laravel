<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #eaeaea;
            line-height: 1.6;
            transition: background-color 0.4s ease, color 0.4s ease;
        }

        header, footer {
            background-color: #1e1e1e;
            color: #ffffff;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        main {
            padding: 3rem 2rem;
            animation: fadeIn 0.8s ease-in;
        }

        h1, h2 {
            color: #cba6f7;
            margin-bottom: 0.5rem;
        }

        p {
            color: #ccc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 2rem;
            background-color: #1c1c1c;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            animation: fadeInUp 0.8s ease-in-out;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #2a2a2a;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        th {
            background-color: #2e0854;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #191919;
        }

        tr:hover {
            background-color: #3a005f;
            color: #ffffff;
        }

        td {
            color: #d0d0d0;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        footer {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            main {
                padding: 2rem 1rem;
            }

            table, th, td {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Mi Aplicación Laravel</h1>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>&copy; 2025 Todos los derechos reservados</p>
    </footer>
</body>
</html>
