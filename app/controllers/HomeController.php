<?php

class HomeController {

    /**
     * Methode pour affiché la page d'acceuil
     */
    public function index() {
        return view("acceuil");
    }
}