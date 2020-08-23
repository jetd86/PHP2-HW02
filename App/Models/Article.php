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


}