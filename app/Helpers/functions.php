<?php

function getfile_name($file)
{
    $randNum = rand(1, PHP_INT_SIZE) . rand(1, PHP_INT_SIZE);
    $num = substr($randNum, 0, 6);
    $filename = time() . $num . '.' . $file->guessExtension();
    return $filename;
}

function display_image($image, $trans = 0)
{
    $path = config('app.url') . '/uploads/'. $image;
    $img = '';
    if ($trans) {
        $img = "<img src='$path' width='50' height='30' " . 'style="background-color: #A9A9A9;"' . ">";
    } else {
        $img = "<img src='$path' width='50' height='30'>";
    }
    return $img;
}

function getimage_path($image)
{
    $path = config('app.url') . '/uploads/'. $image;
    return $path;
}

function object_chunk($hotproduct, $size)
{
    $tmp = [];
    $idx = 0;
    foreach ($hotproduct as $value) {
        if (!isset($tmp[$idx])) {
            $tmp[$idx] = [];
        }

        $tmp[$idx][] = $value;

        $c = count($tmp[$idx]);
        if ($c == $size) {
            $idx += 1;
        }
    }
    return $tmp;
}
