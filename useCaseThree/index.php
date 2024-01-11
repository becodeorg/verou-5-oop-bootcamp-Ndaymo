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
        if ($this->breakingNewsTitle) {
            $this->title = "Breaking News " . $this->title;
        }
    }
}

class Ad extends Content
{
    private $adTitle;

    public function __construct(string $title, string $text)
    {
        parent::__construct(strtoupper($title), $text);

    }

}

class Vacancy extends Content
{
    private $vacancyTitle;
    public function __construct(string $title, string $text, bool $vacancyTitle)
    {
        parent::__construct($title, $text);
        $this->vacancyTitle = $vacancyTitle;
        $this->addApplyNow();
    }
    public function addApplyNow()
    {
        if ($this->vacancyTitle) {
            $this->title = $this->title . "- Apply now";
        }
    }

}


$contents = [
    new Article("Backend dev gets out", "A missing web dev has been in basement for 4 years", false),

    new Article("Exciting Discovery", "Scientists make a groundbreaking discovery.", true),

    new Ad("Salesforce developer intern", "Do you have a bachelors degree in CS? We need you"),

    new Vacancy("Customer care intern", "Do you have empathy? We need you", true),

];



require "pageView.php";