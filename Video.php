<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video on Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
    <div id="Lewo">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div id="Prawo">
        <table>
            <tr>
                <td>Kryminał</td>
                <td>Horror</td>
                <td>Przygodowy</td>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </div>
    </header>
    <div id="Polecamy">
        <h3>Polecamy</h3>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "dane3");
            $sql = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id = 18 OR id = 22 OR id = 23 OR id = 25";
            $result = mysqli_query($conn, $sql);
            while($w = mysqli_fetch_row($result)){
              echo  '<div style="float: left;
              padding: 5px;
              width: 226px;
              height: 280px;">';
              echo  "<h4>".$w[0].". ".$w[1]."</h4>";
              echo  "<img src=".$w[3].' alt="film">';
              echo  "<p>".$w[2]."</p>";
              echo "</div>";
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="Filmyfantastyczne">
        <h3>Filmy fantastyczne</h3>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "dane3");
            $sql = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id=12";
            $result = mysqli_query($conn, $sql);
            while($w = mysqli_fetch_row($result)){
              echo  '<div style="float: left;
              padding: 5px;
              width: 226px;
              height: 280px;">';
              echo  "<h4>".$w[0].". ".$w[1]."</h4>";
              echo  "<img src=".$w[3].' alt="film">';
              echo  "<p>".$w[2]."</p>";
              echo "</div>";
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="Stopka">
        <footer>
        <form method="POST">
        Usuń film nr.:<input type="number" value="0" id="nr_filmu"></input>
        <button id="przycisk" onclick="film">Usun film</button><br>
        </form>
        <p>Stronę wykonał:<a href="mailto:ja@poczta.com"> Joszczyk Hubert</a></p>
        </footer>
    </div>
</body>
</html>