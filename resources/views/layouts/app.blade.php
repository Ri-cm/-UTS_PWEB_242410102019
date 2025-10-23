<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Coffee Website')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { 
            background-color: #f4f1ea; 
            font-family: Arial, sans-serif; 
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .coffee-header { background-color: #8b4513; color: white; padding: 20px; text-align: center; }
        .card { border: 1px solid #8b4513; }
        .btn-coffee { background-color: #8b4513; border-color: #8b4513; color: white; }
        .btn-coffee:hover { background-color: #a0522d; border-color: #a0522d; }
        .content { flex: 1; } 
        footer { margin-top: auto; } 
    </style>
</head>
<body>
    @include('components.navbar')

    <div class="container mt-4 content">
        @yield('content')
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>