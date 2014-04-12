<?php

    // http://vnfiles.ign.com/ects/css-tricks/VideoCast-122.mp4
    // http://vnfiles.ign.com/ects/css-tricks/VideoCast-121.mp4
    // http://vnfiles.ign.com/ects/css-tricks/VideoCast-120.mp4

    $url  = '';
    $path = 'com/' . 'Authentication Essentials from Laracasts on Vimeo.MP4';

    $fp = fopen($path, 'w');

    $ch = curl_init($url);
    // curl_setopt($ch, CURLOPT_USERPWD, "m_davaee:3231982");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    //curl_setopt($ch, CURLOPT_HEADER, 1);
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //curl_setopt($ch, CURLOPT_NOBODY, TRUE);

    curl_setopt($ch, CURLOPT_FILE, $fp);

    $data = curl_exec($ch);
    echo $data;
    curl_close($ch);
    fclose($fp);
?>
