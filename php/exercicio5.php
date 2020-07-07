<html>
<body>
  <form action="exercicio5.php" method="GET">
  <!-- <input class=\"form-check-input\" type=\"checkbox\" name=\"vetor[]\" value=\"".$row['id']."\"> -->
   <label for="city1">Choose a  city:</label>
   <select id="city1" name="city1">
     <option value='Americana'>Americana</option>
     <option value='Araraquara'>Araraquara	</option>
     <option value='Barretos'>Barretos</option>
     <option value='Bauru'>Bauru	</option>
     <option value='Brasília'>Brasília</option>
     <option value='Curitiba'>Curitiba</option>
     <option value='Franca'>Franca</option>
     <option value='Rib.Preto'>Rib.Preto</option>
     <option value='S.Carlos'>S.Carlos</option>
     <option value='S.Paulo'>S.Paulo</option>
   </select>

   <label for="city2">Choose a another city:</label>
   <select id="city2" name="city2">
     <option value='B.Horizonte'>	B.Horizonte	</option>
     <option value='Brasília'> Brasília	</option>
     <option value='Campinhas'> Campinhas</option>
     <option value='Curitiba'> Curitiba</option>
     <option value='Florianópolis'> Florianópolis	</option>
     <option value='Juiz de Fora'> Juiz de Fora</option>
     <option value='Londrina'>Londrina</option>
     <option value='Rib.Preto'>Rib.Preto</option>
     <option value='Salvador'>Salvador</option>
     <option value='S.Paulo'>S.Paulo</option>
   </select>
   <br>
   Preço do Combustivel: <input type="text" name="preco"><br>
   Rendimento: <input type="text" name="rendimento"><br>
   <input type="submit">
 </form>

<?php

$array = [
    "Americanas" => [

      "B.Horizonte" => 595,
      "Brasília" => 887,
      "Campinhas" => 42,
      "Curitiba" => 510,
      "Florianópolis" => 807,
      "Juiz de Fora" => 562,
      "Londrina" => 514,
      "Ribeirão Preto" => 95,
      "Salvador" => 1971,
      "S.Paulo" => 133,
    ],

    "Araraquara" => [

      "B.Horizonte" => 606,
      "Brasília" => 788,
      "Campinhas" => 191,
      "Curitiba" => 584,
      "Florianópolis" => 891,
      "Juiz de Fora" => 667,
      "Londrina" => 410,
      "Ribeirão Preto" => 89,
      "Salvador" => 1983,
      "S.Paulo" => 282,
    ],

    "Barretos" => [

      "B.Horizonte" => 630,
      "Brasília" => 693,
      "Campinhas" => 344,
      "Curitiba" => 768,
      "Florianópolis" => 1075,
      "Juiz de Fora" => 803,
      "Londrina" => 466,
      "Ribeirão Preto" => 127,
      "Salvador" => 1879,
      "S.Paulo" => 438,
    ],

    "Bauru" => [

    "B.Horizonte" => 731,
    "Brasília" => 919,
    "Campinhas" => 269,
    "Curitiba" => 535,
    "Florianópolis" => 842,
    "Juiz de Fora" => 745,
    "Londrina" => 287,
    "Ribeirão Preto" => 228,
    "Salvador" => 2108,
    "S.Paulo" => 345,
  ],

    "Brasília" => [

    "B.Horizonte" => 741,
    "Brasília" => 0,
    "Campinhas" => 921,
    "Curitiba" => 1366,
    "Florianópolis" => 1673,
    "Juiz de Fora" => 992,
    "Londrina" => 1083,
    "Ribeirão Preto" => 706,
    "Salvador" => 1446,
    "S.Paulo" => 1015,
  ],

    "Curitiba" => [

    "B.Horizonte" => 1004,
    "Brasília" => 1366,
    "Campinhas" => 476,
    "Curitiba" => 0,
    "Florianópolis" => 300,
    "Juiz de Fora" => 914,
    "Londrina" => 379,
    "Ribeirão Preto" => 681,
    "Salvador" => 2385,
    "S.Paulo" => 408,
  ],

    "Franca" => [

    "B.Horizonte" => 460,
    "Brasília" => 676,
    "Campinhas" => 810,
    "Curitiba" => 753,
    "Florianópolis" => 1080,
    "Juiz de Fora" => 656,
    "Londrina" => 570,
    "Ribeirão Preto" => 92,
    "Salvador" => 1836,
    "S.Paulo" => 401,
  ],

    "Ribeirão Preto" => [

    "B.Horizonte" => 523,
    "Brasília" => 706,
    "Campinhas" => 219,
    "Curitiba" => 681,
    "Florianópolis" => 988,
    "Juiz de Fora" => 645,
    "Londrina" => 530,
    "Ribeirão Preto" => 0,
    "Salvador" => 1900,
    "S.Paulo" => 319,
  ],

    "S.Carlos" => [

    "B.Horizonte" => 619,
    "Brasília" => 801,
    "Campinhas" => 153,
    "Curitiba" => 622,
    "Florianópolis" => 929,
    "Juiz de Fora" => 629,
    "Londrina" => 448,
    "Ribeirão Preto" => 116,
    "Salvador" => 1996,
    "S.Paulo" => 244,
  ],

   "S.Paulo'" => [

  "B.Horizonte" => 586,
  "Brasília" => 1015,
  "Campinhas" => 99,
  "Curitiba" => 408,
  "Florianópolis" => 705,
  "Juiz de Fora" => 506,
  "Londrina" => 528,
  "Ribeirão Preto" => 319,
  "Salvador" => 1962,
  "S.Paulo" => 0,
  ]
];

if (!empty($_GET)) {

  $preco = $_GET["preco"];
  $rendimento = $_GET["rendimento"];

  $distancia = $array[$_GET["city1"]][$_GET["city2"]];
  $total = $preco * $distancia / $rendimento;

  echo "Preco: <b>$preco</b><br>";
  echo "Rendimento: <b>$rendimento</b><br>";
  }
 ?>

 <p>Distância: <?php echo $distancia ?></p><br>
 <p>Valor da viagem: <?php echo $total ?></p><br>

</body>
</html>
