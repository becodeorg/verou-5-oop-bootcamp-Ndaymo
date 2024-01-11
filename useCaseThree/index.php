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
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getText(): string
    {
        return $this->text;
    }

}

class Article extends Content
{
    protected $breakingNewsTitle;
    public function __construct(string $title, string $text, bool $breakingNewsTitle)
    {
        parent::__construct($title, $text);
        $this->breakingNewsTitle = $breakingNewsTitle;
        $this->makeBreaking();
    }
    public function makeBreaking()
    {
        $this->title = "Breaking News " . $this->title;
    }
}

class Ad extends Content
{
    private $AdTitle;

    public function __construct(string $title, string $text, bool $AdTitle)
    {
        parent::__construct(strtoupper($title), $text);
        $this->AdTitle = $title . "Buy now";
    }

}

class Vacancy extends Content
{
    private $vacancyTitle;
    public function __construct(string $title, string $text, bool $vacancyTitle)
    {
        parent::__construct($title, $text);
        $this->vacancyTitle = $vacancyTitle;
        $this->$title . "Apply now";

    }

}


$contents = [

    new Article("Exciting Discovery", "Scientists make a groundbreaking discovery.", true)
];

foreach ($contents as $array) {
    echo "<h2>" . $array->getTitle() . "</h2>";
    echo "<h2>" . $array->getText() . "</h2>";
}

require "pageView.php";