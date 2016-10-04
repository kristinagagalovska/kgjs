<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function setDescription($description)
    {
        $this->setAttribute('description', $description);
    }

    public function setImage($image)
    {
        $this->setAttribute('image', $image);
    }
    
    public function setTitle($title)
    {
        $this->setAttribute('title', $title);
    }
    
    public function setNum($num)
    {
        $this->setAttribute('num', $num);
    }
    
    public function setBool($bool)
    {
        $this->setAttribute('bool', $bool);
    }

    public function getDescription()
    {
        $this->getAttribute('description');
    }

    public function getImage()
    {
        $this->getAttribute('image');
    }
    
   public function getTitle()
   {
       $this->getAttribute('title');
   }
    
    public function getNum()
    {
        $this->getAttribute('num');
    }
    
    public function getBool()
    {
        $this->getAttribute('bool');
    }

}