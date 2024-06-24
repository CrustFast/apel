<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            text-align: center;
        }
        .error-message {
            font-size: 24px;
            margin-top: 20px;
        }
        .error-link {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <lottie-player src="{{ asset('img/Animation - 1719230834033.json') }}"
                      background="transparent"
                      speed="1"
                      style="width: 300px; height: 300px;"
                      loop
                      autoplay>
        </lottie-player>
        <div class="error-message">Oops! Page Not Found</div>
        <a href="/" class="error-link">Go back to Home</a>
    </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>
