<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Arbutus Slab' rel='stylesheet'>
        </head>



        
<style>
        body{
            background-image:url(https://static.cdprojektred.com/thewitcher.com/media/wallpapers/witcher3/full/witcher3_pl_wallpaper_wiedzmin_3_dziki_gon_geralt_i_trofea_1920x1080_1449484775.png);          
            background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;

        }
                </style>




            <div class="nav">
        <a class="link a" href="https://yma.herokuapp.com/"><img class="obrazek" src="igni.png">Strona główna<img class="obrazek" src="igni.png"></a>  
        <a class="link b" href="https://github.com/SK-2019/php-sql-wprowadzenie-kaiser-emilia"><img class="obrazek" src="aksji.png">GITHUB<img class="obrazek" src="aksji.png"></a>  
        <a class="link c" href="pracownicy.php"><img class="obrazek" src="aard.png"> Pracownicy <img class="obrazek" src="aard.png"></a>  
        <a class="link d" href="pracownicyiorganizacja.php"><img class="obrazek" src="quen.png">Prac i Org<img class="obrazek" src="quen.png"></a>  
        <a class="link e" href="agregat.php"><img class="obrazek" src="yrden.png">Funkcje Agregujace<img class="obrazek" src="yrden.png"></a>  
        <a class="link f" href="dataiczas.php"><img class="obrazek" src="igni.png">Data i Czas<img class="obrazek" src="igni.png"></a>  
        <a class="link g" href="formularz.html"><img class="obrazek" src="aksji.png">Formularz<img class="obrazek" src="aksji.png"></a>  
        <a class="link h" href="daneDoBazy.php"><img class="obrazek" src="aard.png">Dane do bazy<img class="obrazek" src="aard.png"></a>
        <a class="link i" href="ksiazki.php"><img class="obrazek" src="quen.png">Książki<img class="obrazek" src="quen.png"></a>


        </div>





        <?php
                echo("<h1>Emilia Kaiser</h1>");
                echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT id_pracownicy, imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
        
        
                echo("<h2>Zadanie 2</h2>");
                $sql = ("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a')");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                       echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
        
        
                echo("<h2>Zadanie 3</h2>");
                $sql = ("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a') and (dzial = 2)");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                       echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
        
        
                echo("<h2>Zadanie 4</h2>");
                $sql = ("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a') and (dzial = 2 or dzial =3)");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                       echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
        
        
                echo("<h2>Zadanie 5</h2>");
                $sql = ("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a') and (dzial = 1)");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                       echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
        
                  echo("<h2>Zadanie 6</h2>");
                  $sql = ("SELECT avg(zarobki) as srednia_zarobkow FROM pracownicy, organizacja where dzial=id_org");
                  echo("<h2>".$sql."</h2>");
                  $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                  $result=$conn->query($sql);
                         echo("<table border=1>");
                         echo("<th>srednia_zarobkow</th>");
                        
                         while($row=$result->fetch_assoc()) {
                                  echo("<tr>");
                                        echo("<td>".$row["srednia_zarobkow"]."</td>");
                                   echo("</tr>");
                                    }
                         echo("</table>");
        
                   echo("<h2>Zadanie 7</h2>");
                  $sql = ("SELECT count(imie) as liczba_kobiet FROM pracownicy, organizacja where dzial=id_org and imie like '%a'");
                  echo("<h2>".$sql."</h2>");
                  $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                  $result=$conn->query($sql);
                         echo("<table border=1>");
                         echo("<th>liczba_kobiet</th>");
                        
                         while($row=$result->fetch_assoc()) {
                                  echo("<tr>");
                                        echo("<td>".$row["liczba_kobiet"]."</td>");
                                   echo("</tr>");
                                    }
                         echo("</table>");      
        
                  echo("<h2>Zadanie 8</h2>");
                  $sql = ("SELECT sum(zarobki) as suma_zarobkow FROM pracownicy, organizacja where dzial=id_org");
                  echo("<h2>".$sql."</h2>");
                  $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                  $result=$conn->query($sql);
                         echo("<table border=1>");
                         echo("<th>suma_zarobkow</th>");
                        
                         while($row=$result->fetch_assoc()) {
                                  echo("<tr>");
                                        echo("<td>".$row["suma_zarobkow"]."</td>");
                                   echo("</tr>");
                                    }
                         echo("</table>");

        ?>
</html>
