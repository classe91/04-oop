<?php

require_once __DIR__ . '/Media.php';
require_once __DIR__ . '/../Traits/Streamable.php';

class Song extends Media
{
    use Streamable;

    public $duration;
    public $bitrate;

    public function __construct(Int $_filesize, String $_filesize_unit, String $_extension, String $_title, String $_author, Int $_duration, String $_bitrate)
    {
        parent::__construct($_filesize, $_filesize_unit, $_extension, $_title, $_author);
        $this->duration = $_duration;
        $this->bitrate = $_bitrate;
    }

    public function get_details()
    {
        return "Title: {$this->title} - Created by: {$this->author} - Duration: {$this->duration} min. - Listen on: {$this->get_streaming_services_as_string()}";
    }
}
