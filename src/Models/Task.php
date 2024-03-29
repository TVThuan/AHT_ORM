<?php
namespace AHT_ORM\Models;

use AHT_ORM\Core\Model;

class Task extends Model
{
    protected $id;
    protected $title;
    protected $description;
    
    public function setID($id)
    {
        $this->id = $id;
    }
    
    public function getID() {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }
   
}
?>