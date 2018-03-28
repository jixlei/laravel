<?php

function getfile_name($file)
{
    $randNum = rand(1, 10000000000) . rand(1, 10000000000);
    $num = substr($randNum, 0, 6);
    $filename = time() . $num . '.' . $file->guessExtension();
    return $filename;
}

function display_image($image)
{
  $path = config('app.url') . '/uploads/'. $image;
  return "<img src='$path' width='50' height='30'>";
}

function getimage_path($image)
{
  $path = config('app.url') . '/uploads/'. $image;
  return $path;
}
