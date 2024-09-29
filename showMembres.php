<?php
    $conn=mysqli_connect("localhost","root","","formation");
    $sql = "SELECT * FROM membre";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    echo "<div  style=\" --tw-bg-opacity: 1;
    background-image: url(7.jpg); display: flex; margin: 0; height: 100vh ; padding: 0;background-size: cover;background-repeat: no-repeat;  justify-content: center; align-items: center;\">";
    echo '<table style="background-color: transparent;backdrop-filter: blur(80px) brightness(1) contrast(1) grayscale(0) hue-rotate(0deg) invert(0) opacity(1) saturate(1) sepia(0); padding: 2rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);">';

     echo "<tr><th>ID</th><th>Username</th><th>Email</th></tr>";
     // Afficher les données de chaque utilisateur dans un tableau HTML
     while ($row = mysqli_fetch_assoc($result)) {
     echo "<tr>";
     echo "<td>" . $row['Numero_Identite'] . "</td>";
     echo "<td>" . $row['usename'] . "</td>";
     echo "<td>" . $row['email'] . "</td>";
         }
         echo "</table>";
         echo "</div>";
        } else {
         echo "Aucun utilisateur trouvé.";
        }
        mysqli_close($conn);
        ?>    




































































</body>
</html>