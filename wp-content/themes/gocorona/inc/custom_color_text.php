<?php
function highlight_braces($text)
{
    $text = html_entity_decode($text);
    return preg_replace('/\{([^}]+)\}/', '<span>$1</span>', $text);
}
