<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Application</title>
</head>
<body>
    <nav>
        Test de polymorphisme
    </nav>

    <div class="container">
        @yield('content') <!-- Cette ligne va inclure le contenu spécifique de chaque vue -->
    </div>

    <footer>
        2024@Abdessalam FARSAL
    </footer>
</body>
</html>
