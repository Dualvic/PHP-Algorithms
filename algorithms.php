<html>
<head>
<style>

label {
    margin: 70px auto;
    color: red;
}

div {
    text-align: center;
    border: 2px solid black;
    margin-top: 70px;
    }

.success {
    color: green;
}

.faiure {
    color: red;
}

</style>
</head>
<body>
<div id="burbuja">

<h1>Método de ordenación: burbuja</h1>

<h2>Lista Desordenada: </h2>

<label id="failure">
    <?php

    $bubbleArray = array();

    for ($i=0; $i < 10; $i++) {
        $bubbleArray[$i] = rand(1,30);
    };

    echo implode(" // ", $bubbleArray);
    ?>
</label>

<h2>Lista ordenada: </h2>
<label class="success">
    <?php

    for ($j=1; $j < count($bubbleArray); $j++){
        for ($i=0; $i < count($bubbleArray)-1; $i++) {
            if ($bubbleArray[$i] > $bubbleArray[$i+1]) {
                $controler = $bubbleArray[$i];
                $bubbleArray[$i] = $bubbleArray[$i+1];
                $bubbleArray[$i+1] = $controler;
            }
        }
    }
    echo implode(" // ",$bubbleArray)
    ?>
</label>
</div>

<div id="seleccionDirecta">

<h1>Método de ordenación: Selección Directa</h1>
    
<h2>Lista Desordenada</h2>

<label class="failure">
<?php
$arrayDirect = array();

for ($i=0; $i < 10; $i++) {
    $arrayDirect[$i] = rand(1,30);
}

echo implode(" // ", $arrayDirect);
?>
</label>

<h2>Lista Ordenada: </h2>
<label class="success">
<?php
for ($i=0; $i < count($arrayDirect); $i++){
    for ($j= $i+1; $j < count($arrayDirect); $j++){
        if ($arrayDirect[$i] > $arrayDirect[$j]) {
            $controler = $arrayDirect[$i];
            $arrayDirect[$i] = $arrayDirect[$j];
            $arrayDirect[$j] = $controler;
        }
    }
};
echo implode(" // ", $arrayDirect);
?>
</label>
</div>

</body>
</html>