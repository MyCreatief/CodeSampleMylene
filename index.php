<?php
include 'includes/header.php';
?>

<section >
    <div class="amazing_buttons home ">
       <b> Zie deze code in <a class="btn btn_2" data-hover="button two" href="/snippets">actie<span></span> </a>bij de snippets.</b>
        <br/>
        <br/>
    </div>
</section >

<section >

    De class/code die een Json file gaat uitlezen.

    <pre ><code >
    &lt;?php
    class json_oop {

        public function __construct($json_cat) {
        $this -> mc_json($json_cat);
        }

        public function mc_json($json_cat) {
        $jsondata = file_get_contents("json/elements.json");
        $json = json_decode($jsondata, true);
        $output = " &lt;ul &gt";

        foreach ($json["$json_cat"] as $links) {
        $output .= " &lt;li &gt";
        $output .= "&lt;a href'javascript:void(0)' class='" . $links["effect"] . "' data-hover='" . $links["Name"] . "'&gt" . $links["Name"];
        $output .= "&lt;span &gt" . $links["subtext"] . "&lt;/span &gt";
        $output .= "&lt;/a&gt";
        $output .= "&lt;/li &gt
        ";
        }

        $output .= " &lt;/ul &gt ";
        echo $output;
        }
    }
    ?&gt;
    </code ></pre >


</section >
<section >
    De json file die wordt uitgelezen.
    <pre ><code >
    {
    "buttons":[
        {"Name":"button one", "effect":"btn btn_1","subtext":""},
        {"Name":"button two", "effect":"btn btn_2","subtext":""},
        {"Name":"button three", "effect":"btn btn_3","subtext":""},
        {"Name":"button four", "effect":"btn btn_4","subtext":""}
    ],
    "links":[
        {"Name":"brackets", "effect":"link_effect_1","subtext":""},
        {"Name":"border_up", "effect":"link_effect_2","subtext":""},
        {"Name":"border down", "effect":"link_effect_3","subtext":""},
        {"Name":"filling", "effect":"link_effect_5","subtext":""},
        {"Name":"Dots", "effect":"link_effect_6","subtext":""},
        {"Name":"border and subtext", "effect":"link_effect_4","subtext":"this one has subtext"}
    ]
    }
        </code ></pre >
</section >

<section >
    Hoe de class wordt aangeroepen.
    <pre ><code >
    &lt;?php
    $buttons = new json_oop('buttons');
    ?&gt;

    of

    &lt;?php
    $buttons = new json_oop('links');
    ?&gt;
        </code ></pre >
</section >

<section >
    <div class="amazing_buttons home ">
        <b> Zie deze code in <a class="btn btn_2" data-hover="button two" href="/snippets">actie<span></span> </a>bij de snippets.</b>
        <br/>
        <br/>
    </div>
</section >
<?php
include 'includes/footer.php';
?>

