<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
                html, body { height: 100%; }
                body {
                    background-color: #0a0a0a;
                    color: #ededec;
                    font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 100vh;
                    padding: 2rem;
                }
                .card {
                    width: 100%;
                    max-width: 900px;
                    background-color: #161615;
                    border: 1px solid #2e2e2c;
                    border-radius: 12px;
                    padding: 3rem 3.5rem;
                }
                .card-name {
                    font-size: 0.9375rem;
                    font-weight: 600;
                    color: #ffffff;
                    margin-bottom: 0.25rem;
                    letter-spacing: 0.01em;
                }
                .card-nim {
                    font-size: 0.875rem;
                    color: #6b6b6b;
                    margin-bottom: 1.25rem;
                }
                .btn {
                    display: inline-block;
                    background-color: #ffffff;
                    color: #1b1b18;
                    font-size: 0.875rem;
                    font-weight: 500;
                    padding: 0.45rem 1.1rem;
                    border-radius: 8px;
                    border: none;
                    cursor: pointer;
                    text-decoration: none;
                    transition: background-color 0.15s;
                    font-family: inherit;
                }
                .btn:hover {
                    background-color: #e5e5e5;
                }
            </style>
        @endif
    </head>
    <body>
        <div class="card">
            <p class="card-name">IRZA YAUMIL SYAHRAR</p>
            <p class="card-nim">20230140094</p>
            <button class="btn">Modul Pertemuan 1</button>
        </div>
    </body>
</html>
