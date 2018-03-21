<?php

namespace App;

/**
 * Console output decorator
 *
 * @author David Holovii <mirage.present@gmail.com>
 */
class Decorator
{

    /**
     *  Add ANSI color code to text
     *
     * @param string $text
     * @return string
     */
    public static function blueText(string $text) : string
    {
        return sprintf("\033[0;34m%s\033[0m", $text);
    }

    /**
     *  Add ANSI color code to text
     *
     * @param string $text
     * @return string
     */
    public static function greenText(string $text) : string
    {
        return sprintf("\033[0;32m%s\033[0m", $text);
    }
}