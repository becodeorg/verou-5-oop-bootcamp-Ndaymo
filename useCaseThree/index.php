<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class content
{
    protected $title;
    protected $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }
}

$contentArray =
    array(
        array("Customer support vacancy" => "Become our cheerleader"),
        array("Toyota sale" => "50% discount on tyres if you buy")
    );

echo $contentArray[0];