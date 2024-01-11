<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class Content
{
    protected $title;
    protected $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }
}

class Article extends Content
{
    function breakingNewsArticle($title)
    {
        $this->title = "BREAKING: " . $title;
    }
}

class Ad extends Content
{
    function allCaps($title)
    {
        $title = strtoupper($title);
    }
}

class Vacancy extends Content
{
    function vacTitle($title)
    {
        $title += "- apply now!";
    }
}


$contentArray =
    array(
        array("Customer support vacancy" => "Become our cheerleader"),
        array("Toyota sale" => "50% discount on tyres if you buy")
    );

foreach ($contentArray as $array) {
    $contentArray[] = array("tile" => "text");
}