<?php

class Media
{
    public $filesize;
    public $filesize_unit;
    public $extension;
    public $title;
    public $author;

    public function __construct(Int $_filesize, String $_filesize_unit, String $_extension, String $_title, String $_author)
    {
        $this->filesize = $_filesize;
        $this->filesize_unit = $_filesize_unit;
        $this->extension = $_extension;
        $this->title = $_title;
        $this->author = $_author;
    }

    public function get_author()
    {
        return $this->author;
    }

    public function get_full_filesize()
    {
        return $this->filesize . $this->filesize_unit;
    }

    public function get_details()
    {
        return "Title: {$this->title} - Made by: {$this->author} - Filesize: {$this->get_full_filesize()}";
    }

    public function get_details_as_array()
    {
        return [
            $this->title,
            $this->author,
            $this->get_full_filesize()
        ];
    }

    public function print_details()
    {
        echo $this->get_details() . '<br />';
    }
}
