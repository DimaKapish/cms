<?php

namespace Admin\Model\Setting;

use Engine\Core\Database\ActiveRecord;

class Setting
{
    use ActiveRecord;

    protected $table = 'setting';

    public $id;

    public $title;

    public $content;

    public $date;

    public $key_field;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getKeyField()
    {
        return $this->key_field;
    }

    /**
     * @param mixed $key_field
     */
    public function setKeyField($key_field)
    {
        $this->key_field = $key_field;
    }
}