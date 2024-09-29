<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-image: url('7.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 32rem;
        }
        .button, .input {
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.5rem;
            transition: background-color 0.3s;
        }
        .button {
            background-color: #6B7280;
            color: white;
            border: none;
            cursor: pointer;
            margin-bottom: 1rem;
        }
        .button:hover {
            background-color: #4B5563;
        }
        hr {
            border: 0;
            border-top: 1px solid #D1D5DB;
            margin: 1rem 0;
        }
        h1 {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .wifi-code {
            background-color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            margin-bottom: 1rem;
        }
        .input {
            border: 1px solid #D1D5DB;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            margin-bottom: 1rem;
            width: 95%;
        }
        .input:focus {
            outline: none;
            border-color: #93C5FD;
            box-shadow: 0 0 0 3px rgba(147, 197, 253, 0.5);
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 1.125rem;
        }
        .icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 50px;
            color: #333;
        }
        .icon:hover {
            color: #000000;
        }
        .icon-container {
            position: absolute;
            top: 20px;
            left: 20px;
        }
        .icon-container a {
            font-size: 20px;
            color: #eae1e1;
            text-decoration: none;
        }
        .icon-container a i {
            font-size: 50px ; /* Augmentez la taille de l'icône */
        }
        .icon-container a:hover i {
            color: #000000; /* Change la couleur de l'icône au survol */
        }



    </style>
</head>
<body>
<div class="icon-container">
        <a href="index.html"> <i class="fas fa-home"></i> </a>
    </div>
    <div class="container">
        <!-- Button to display members -->
        <form action="showMembres.php" method="GET" class="form">
            <button class="button" type="submit">Show Membres</button>
        </form>

        <hr>

        <!-- Display the current WiFi password -->
        <h1>WiFi Code:</h1>
        <div class="wifi-code">

            <?php
            $conn=mysqli_connect("localhost","root","","formation");
            $sql = "SELECT name FROM motpasse WHERE id=1";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($query);
            echo htmlspecialchars($row['name']);
            ?>
         
        </div>

        <!-- Form to change the WiFi password -->
        <form action="changeWifi.php" method="POST">
            <label for="newWifiCode">New WiFi Code:</label>
            <input type="text" placeholder="New Wi-Fi Code" id="newWifiCode" name="new" class="input" required>
            <button class="button" type="submit">Change WiFi Code</button>
        </form>
    </div>
</body>
</html>
