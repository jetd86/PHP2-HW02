<?php

namespace App\Models;

class Item
{

    public  static $table = '`php2`.items';
    public $title;
    public $price;

    /**
     * Item constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(!empty($data)){
            $this->id = $data['id'];
            $this->title = $data['title'];
            $this->price  = $data['price'];

        }
    }

}