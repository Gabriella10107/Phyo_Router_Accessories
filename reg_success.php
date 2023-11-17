<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <style>
        body {
            background-image: url('https://example.com/your-anime-background-image.jpg'); /* Replace with your anime-style background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
            text-align: center;
            animation: fadeIn 2s;
        }

        .container {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 100px auto; /* Added margin for centering */
            padding: 20px;
            animation: slideIn 2s;
        }

        h2 {
            color: #333;
            animation: pulse 1s infinite;
        }

        p {
            color: #555;
        }

        .toy {
            display: inline-block;
            animation: spin 2s infinite linear;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
  <div class="container">
    <h2>Registration Successful</h2>
    <p>You have successfully registered. You are now logged in.</p>
    <div class="toy">🚀</div> <!-- Replace with the toy or emoji you want to use -->
    <a href="index.php">Gome To Home Page :)</a>
  </div>

</body>
</html>
