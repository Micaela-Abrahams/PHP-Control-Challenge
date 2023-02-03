<?php
// Switch Statement
$traffic_light_color = "Pink";

switch ($traffic_light_color){
    case "Red":
        echo("Stop!");
        break;

    case "Orange":
        echo("Slow Down");
        break;

    case "Green":
        echo("Go!");
        break;

    default:
        echo("Don't Move!!!");
    }
?>