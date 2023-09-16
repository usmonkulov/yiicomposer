<?php
echo "<pre>";

foreach ($model as $mod){

    foreach ($mod->orders as $order){
        echo $order->id."/".$order->ordered_at."<br>";
    }
}
