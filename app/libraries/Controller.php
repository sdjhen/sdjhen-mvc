<?php

/**
 * Base Controller
 * Loads the models & views
 */

class Controller
{
    // Load model
    public function model($model)
    {
        // Require model file
        require_once '../app/models/' . $model . '.php';

        // Init model
        return new $model();
    }
}
