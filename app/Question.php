<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * @param string $name
     */
    public function setTitle($title)
    {
        $this->setAttribute('title', $title);
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->setAttribute('description', $description);
    }
    
    public function getTitle()
    {
        $this->getAttribute('title');
    }
    
    public function getDescription()
    {
        $this->getAttribute('description');
    }
}