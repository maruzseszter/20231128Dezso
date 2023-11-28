<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <?php
        echo "(c) Szőllősi-Maruzs Eszter, 2023.";
        print  '<hr />';
        ?>
        <form action="fogado.php" method="post">
            <label for="ipv4">IPv4 cím:</label>
                <input id="ipv4" type="text" name="ipv4" />
                <label for=domain">Doman név:</label>
                <input id="ipv4" type="text" name="domain" />
                <div id="gomb"><button> Domain regisztráció </button></div>
        </form>
        <?php
        print '<hr />';
        echo "PHP OOP összefoglaló: ";
        //include 'VeletlenDolgok.php';
        require 'VeletlenDolgok.php';
        //echo VeletlenDolgok::VeletlenNev();
        //echo VeletlenDolgok::VeletlenKor();
        //echo VeletlenDolgok::VeletlenNyelv();
        $szemelyek=[];
        require 'Szemely.php';
        for($db=1;$db<=10;$db++) {
            $szemelyek[]=new Szemely (
              VeletlenDolgok::VeletlenNev(),
              VeletlenDolgok::VeletlenKor(),
              VeletlenDolgok::VeletlenNyelv()
        );
        }
        //var_dump($szemelyek);
       ?>
        <table>
            <tr>
            <thead>
            <th>Név</th>
            <th>Kor</th>
            <th>Nyelv</th>
            </tr>
            </thead>
            <tbody>
                <?php
                       foreach ($szemelyek as $sz){
                           echo $sz;
                       }
                       ?>
            </tbody>
        </table>
    </body>
</html>
