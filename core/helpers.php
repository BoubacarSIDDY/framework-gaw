<?php

if (! function_exists('singleton')) {
    function singleton($abstract)
    {
        if (is_null($abstract)) {
            echo 'Variable $abstract cannot be null.';
        }

        return $abstract::getInstance();
    }
}

if (! function_exists('view')) {
    function view($view = null, $data = [])
    {
        $singleton = singleton(View::class);
        if (func_num_args() === 0) {
            return $singleton;
        }

        return $singleton->render($view, $data);
    }
}