<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    body {
      background-image: url('7.jpg');
      margin: 0;
      padding: 0;
      background-size: cover;
      background-repeat: no-repeat;
      background-color: #f3f4f6; /* bg-gray-100 */
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .container {
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      text-align: center;
      padding: 2rem;
      border-radius: 0.5rem;
      height: 13rem;
      width: 24rem;
      border: 2px solid #065f46; /* border-green-800 */
    }
    .password-text {
      color: black;
      font-size: 1.25rem; /* text-xl */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
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
    <div class="password-text"> <br> Le mot de passe est :
      <?php
      $conn=mysqli_connect("localhost","root","","formation");
      //select all in motpasse where id=1
      $sql = "SELECT * FROM motpasse WHERE id=1";
      $query = mysqli_query($conn, $sql);
      //stocker le resultat de query en row
      $row = mysqli_fetch_assoc($query);
      // selectionne le champ name de row
     
       echo ($row['name']);
      ?>
    </div>
  </div>
</body>
</html>
