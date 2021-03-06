<?php

namespace App\Models;

class BaseElement implements Printable{
    protected $title;
    public $description;
    public $visible;
    public $months;

    public function __construct($title, $description, $months) {
        $this->setTitle($title);
        $this->description = $description;
        $this->visible = true;
        $this->months = $months;

    }
    public function setTitle($title) {
        if ($title == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $title;
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    //devuelve el tiempo de duracion del trabajo en el formato "x años, y meses"
    public function getFormatDuration() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;

        if($years == 1) {
            return "$years year, $extraMonths months";
        } else {
            return "$years years, $extraMonths months";
        }
    }
}