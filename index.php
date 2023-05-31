<html>
    <head>
        <title> Perkalian Bilangan Genap </title>
    </head>
<body>
    <h2> Perkalian Bilangan Genap</h2>
<style>
table, th, td 
    {
        border:1px solid black;
    }
</style>        
<table style="width:30%">
        <tr>
            <td>Nilai</td>
            <td>Perkalian</td>
        </tr>
        <?php
         for($i = 2; $i <= 100; $i+=2)
         {
            $hasil = $i*$i;
            echo "</tr>";
            echo "<td> $i x $i </td>";
            echo "<td> $hasil </td>";
            echo"</tr>";
         }
         ?>
        </table>  
</body>
</html>