<?php


/*$file = "dataTest.json";*/
/*$test = ["123" => 14 , "1" => false];
$test2["test"] = $test;

$json_string = json_encode($test2, JSON_PRETTY_PRINT);
file_put_contents($file,$json_string,FILE_APPEND);*/

/*$a = json_decode(file_get_contents($file));

foreach($a as $row){
    var_dump($row->{123});
}*/

///////////////////// XML



   $file = "data.xml";
   $node = 'product';

   $doc = new DOMDocument('1.0');
   $doc->preserveWhiteSpace = false;
   $doc->load($file);
   $doc->formatOutput = true;

   $root = $doc->documentElement;

   $prod = $doc->createElement($node);
   $prod = $root->appendChild($prod);

   $value = $doc->createElement('name', 'pralka');
   $prod->appendChild($value);
   $doc->save($file);


?>


<html>
<script src="../../vendor/components/jquery/jquery.min.js"></script>
<script src="../javascript/scripts.js"></script>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Your Website</title>
</head>

<body>

<header>
    <nav>
        <ul>
            <li>Your menu</li>
        </ul>
    </nav>
</header>

<div id="products">Loader</div>

<footer>
    <p>Copyright TEST</p>
</footer>

</body>

</html>