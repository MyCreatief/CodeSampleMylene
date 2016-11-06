<?php
class json_oop {

    public function __construct($json_cat) {
        $this -> mc_json($json_cat);
    }

    public function mc_json($json_cat) {
        $jsondata = file_get_contents("json/elements.json");
        $json = json_decode($jsondata, true);
        $output = "<ul>";

        foreach ($json["$json_cat"] as $links) {
            $output .= "<li>";
            $output .= "<a href'javascript:void(0)' class='" . $links["effect"] . "' data-hover='" . $links["Name"] . "'>" . $links["Name"];
            $output .= "<span>" . $links["subtext"] . "</span>";
            $output .= "</a>";
            $output .= "</li>";
        }

        $output .= "</ul>";
        echo $output;
    }
}