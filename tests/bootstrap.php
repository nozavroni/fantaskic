<?php
/**
 * Fantaskic: A queue-agnostic task library for PHP.
 *
 * A task/job library meant to be paired with any job queue imaginable.
 *
 * @version   v0.1
 *
 * @copyright Copyright (c) 2016 Luke Visinoni <luke.visinoni@gmail.com>
 * @author    Luke Visinoni <luke.visinoni@gmail.com>
 * @license   https://github.com/nozavroni/fantaskic/blob/master/LICENSE (MIT)
 */
require_once __DIR__.'/../vendor/autoload.php';

if (!function_exists('dd')) {
    /**
     * Dump and Die.
     *
     * @param mixed  $input Value to dump
     * @param bool   $exit  True to exit after dump
     * @param string $label Optional label
     */
    function dd($input, $exit = true, $label = null)
    {
        if ($label) {
            echo $label."\n".implode(
                    array_map(
                        function ($c) {
                            return '-';
                        },
                        str_split($label)
                    )
                )."\n";
        }
        var_dump($input);
        echo "\n";
        if ($exit) {
            exit;
        }
    }
}

/**
 * Show Invisibles.
 *
 * Dump a variable and show invisible characters.
 *
 * @param mixed $in
 * @param bool  $exit
 * @param bool  $dump
 *
 * @return string|void
 */
function si($in, $exit = true, $dump = true)
{
    $out = json_encode($in);
    if ($dump) {
        return var_dump($out);
    } else {
        if ($exit) {
            exit($out);
        }
    }

    return $out;
}
