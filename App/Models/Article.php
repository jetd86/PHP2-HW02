<?php

namespace App\Models;


class Article extends Model
{
    public static $table = "news";

    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $contents;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}