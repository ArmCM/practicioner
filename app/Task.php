<?php


class Task {

    protected $results;

    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }



    /**
     * Define las tareas completas
     *
     * @return bool
     */
    public function setComplete()
    {
        return $this->completed = true;
    }

    /**
     * Obtiene las tareas completas
     *
     * @return bool
     */
    public function getCompleted()
    {
        return $this->completed;
    }
}
