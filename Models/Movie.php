<?php

require_once __DIR__ . '/Media.php';
require_once __DIR__ . '/../Traits/Streamable.php';

class Movie extends Media
{

    use Streamable;

    public $duration;
    private $cast = [];

    public function __construct(Int $_filesize, String $_filesize_unit, String $_extension, String $_title, String $_author, Int $_duration, array $_cast)
    {
        parent::__construct($_filesize, $_filesize_unit, $_extension, $_title, $_author);
        $this->duration = $_duration;
        $this->set_cast($_cast);
    }

    public function set_cast(array $cast)
    {
        if (count($cast) < 1) {
            // Eccezione
            throw new Exception("Il cast deve contenere almeno un elemento");
        }
        $this->cast = $cast;
    }

    public function get_cast_as_string()
    {
        return implode(', ', $this->cast);
    }

    public function get_details()
    {
        return "Title: {$this->title} - Directed by: {$this->author} - Duration: {$this->duration} min. - Cast: {$this->get_cast_as_string()} - Watch on: {$this->get_streaming_services_as_string()}";
    }
}
