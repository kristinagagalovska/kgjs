<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function setDescription($description)
    {
        $this->setAttribute('description', $description);
    }

    public function setImage($image)
    {
        $this->setAttribute('image', $image);
    }

    public function getDescription()
    {
        $this->getAttribute('description');
    }

    public function getImage()
    {
        $this->getAttribute('image');
    }

}