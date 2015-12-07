<?php
/*
 * PHP SimpleXML
 * Loading a XML from a file, adding new elements and editing elements
 */



        //get author from form
$name = $_POST["name"];
$countrys = $_POST["country"];
$mem = $_POST["mem"];


        if (file_exists('Players.xml')) {
            //loads  xml and returns a simplexml object
            $xml = simplexml_load_file('Players.xml');
            //adding new child to  country.xml
    $newChild = $xml->genre->addChild('Entry');
    $newChild->addChild('name', $name);
    $newChild->addChild('country', $country);
    $newChild->addChild('mem', $mem);
     

  
} else {
    exit('unable to open Players.xml');
}

       
        file_put_contents('/home/ubuntu/Players.xml', $xml->asXML());
        if(isset($_SERVER['HTTP_REFERER'])){
            header("Location: " . $_SERVER['HTTP_REFERER']);    
        } else {
            echo "An Error";
        }

?>