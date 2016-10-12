<?php

class Model {
    public $books;

    public function __construct(){
        $this->books = array(
            array(
                0,
                "Hvítsvíta",
                "Athena Farrokhzad",
                "Athena Farrokhzad (f. 1983) er sænskt ljóðskáld af írönskum uppruna. Ljóðabók hennar Hvítsvíta, 
                sem kemur í dag út á íslensku, vakti gríðarmikla athygli í heimalandi hennar, var tilnefnd til 
                Augustpriset og fleiri verðlauna og hefur komið út víða um heim.",
                "http://www.eymundsson.is/library/Myndir/Navision-vorur---myndir/JPV336686.jpg?proc=ProductImg"
            ),
            array(
                1,
                "Samskiptaboðorðin",
                "Aðalbjörg Stefanía Helgadóttir",
                "Áveðnir atburðir og manneskjur sem standa mér nálægt hafa gefið mér 
                merkingu í þjáningu og gleði lífsins og orðið þess óbeint valdandi að 
                Samskiptaboðorðin urðu til. Hugmyndafræðin að baki þeim er ekki flókin
                 en reynir að skilgreina í hverju góð samskipti felast því þannig getum 
                 við aukið vellíðan okkar sjálfra um leið og annarra.",
                "http://www.eymundsson.is/library/Myndir/Navision-vorur---myndir/JPV116611.jpg?proc=ProductImg"
            ),
            array(
                2,
                "Geirmundar saga heljarskinns",
                "Bergsveinn Birgisson",
                "Geirmundur heljarskinn var sagður göfugastur allra landnámsmanna á Íslandi. 
                Þó hefur sögu hans aldrei verið haldið á lofti - fyrr en nú.",
                "http://www.eymundsson.is/library/Myndir/Navision-vorur---myndir/BJ%20BB5.jpg?proc=ProductImg"
            ),
            array(
                3,
                "Stóri skjálfti Innbundin",
                "Auður Jónsdóttir",
                "Blóðbragð í munninunum. Blaut lærin nuddast saman, ég hef migið á mig 
                í krampanum. Þetta er ekki að gerast. Hvar er hann? Verkurinn á enninu ágerist, 
                eitthvað þrýstir á æðarnar, skall ég á höfuðið?",
                "http://www.eymundsson.is/library/Myndir/Navision-vorur---myndir/JPV335948.jpg?proc=ProductImg"
            )
        );
    }
    public function getBook($id){
        return books[$id];
    }
}

class View{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

    public function selectOutput(){
        $output = "";
        $output = '<form method="get">';
        $output .= '<select name="book">';
        for ($i = 0; $i < count($this->model->books); $i++){
            $output .= "<option value=" . $this->model->books[$i][0] . "></a>" . $this->model->books[$i][1] . "</option>
            ";
        }
        $output .= '</select><br><br>';
        $output .= '<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" value="Velja">';
        $output .= '</form>';
        echo $output;
    }

    public function infoOutput($id){
        $output = "";
        $output .= '<h1>'. $this->model->books[$id][1] . '</h1>';
        $output .= '<h3>Höfundur: ' . $this->model->books[$id][2] . '</h3>';
        $output .= '<p>' . $this->model->books[$id][3] . '</p>';
        echo $output;
        echo "<br><button class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored' type=\"button\" onclick=\"history.back();\">Til Baka</button>";
    }

}

class Controller{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function getBooks(){
        return $this->model->books;
    }
}

$model = new Model();

$controller = new Controller($model);

$view = new View($model);


