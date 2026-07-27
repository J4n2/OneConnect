<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OneConnect</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #e2e8f0;
        }
        .container {
            text-align: center;
            padding: 2rem;
        }
        h1 {
            font-size: 3.5rem;
            font-weight: 800;
            background: linear-gradient(to right, #60a5fa, #a78bfa, #f472b6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }
        p {
            font-size: 1.25rem;
            color: #94a3b8;
            margin-bottom: 2rem;
        }
        .links {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        .links a {
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s;
        }
        .links a.primary {
            background: #3b82f6;
            color: white;
        }
        .links a.primary:hover {
            background: #2563eb;
        }
        .links a.secondary {
            background: rgba(255,255,255,0.1);
            color: #e2e8f0;
        }
        .links a.secondary:hover {
            background: rgba(255,255,255,0.15);
        }
        .laravel-info {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.875rem;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>OneConnect</h1>
        <p>Welcome to your Laravel application.</p>
        <div class="links">
            <a href="{{ route('login') }}" class="primary">Get Started</a>
            <a href="https://laravel.com/docs" class="secondary" target="_blank">Documentation</a>
        </div>
        <div class="laravel-info">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>
</body>
</html>

