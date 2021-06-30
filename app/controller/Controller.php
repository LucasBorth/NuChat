<?php

abstract class Controller
{
    /**
    * Este método é chama uma determinada view (página).
    *
    * @param  string  $view   A view que será chamada (ou requerida)
    */
    public function view(string $view)
    {
      require 'app/view/' . $view . '.php';
    }
}

?>