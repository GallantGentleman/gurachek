<?php

for($i = 1; $i <= 100; $i++) {

    $ch = curl_init('http://eightbitavatar.herokuapp.com/?id='.$i.'&s=male&size=80');
    $fp = fopen('src/img/project_icon/'.$i.'.png', 'wb');

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_exec($ch);

    echo "<pre>Succes with #".$i."</pre>";

}

curl_close($ch);

fclose($fp);
