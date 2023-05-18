<?php

trait Streamable
{
    private $streaming_services = [];

    public function get_streaming_services()
    {
        return $this->streaming_services;
    }

    public function get_streaming_services_as_string()
    {
        return implode(', ', $this->streaming_services);
    }

    public function set_streaming_services(String $service)
    {

        if (!in_array($service, $this->streaming_services)) {
            array_push($this->streaming_services, $service);
        }
    }
}
