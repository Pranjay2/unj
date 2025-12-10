<?php

function getFirstImage($html)
{
    preg_match('/<img[^>]+src=[\'"]([^\'"]+)[\'"]/i', $html, $matches);
    return $matches[1] ?? null;
}