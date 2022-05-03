<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css" type="text/css">
    <title>Prognoza pogody Wrocław</title>
</head>
<body>
    <div class="baner_lewy">
        <img src="logo.png" alt="meteo">
    </div>
    <div class="baner_srodkowy">
        <h1>Prognoza dla Wrocławia</h1>
    </div>
    <div class="baner_prawy">
       <p>maj, 2019r</p>
    </div>
    <div class="blok_glowny">
    <table>
           <tr>
               <th>Data</th>
               <th>Temperatura w nocy</th>
               <th>Temperatura w dzien</th>
               <th>Opady [mm/h]</th>
               <th>ciśnienie [hPa]</th>
           </tr>

    <?php
    $connect = mysqli_connect('localhost', 'root', '', 'prognoza');
    $query = "SELECT * FROM pogoda WHERE miasta_id = 1 order by data_prognozy";
    $wynik = mysqli_query($connect,$query);

    while($row = mysqli_fetch_array($wynik)){
        echo '<tr>';
        echo '<td>'.$row['data_prognozy'].'</td>';
        echo '<td>'.$row['temperatura_noc'].'</td>';
        echo '<td>'.$row['temperatura_dzien'].'</td>';
        echo '<td>'.$row['opady'].'</td>';
        echo '<td>'.$row['cisnienie'].'</td>';
    }

        mysqli_close($connect);
    ?>



    
</table>
    </div>
    <div class="blok_lewy">
        <img src="obraz.png" alt="Polska, Wrocław">
    </div>
    <div class="blok_prawy">
        <a href="zapytania/zapytania.txt">Pobierz Kwerendy</a>
    </div>
    <div class="blok_stopki">
        <p>Strone wykonał: Krzysztof Król</p>
    </div>
    
</body>
</html>