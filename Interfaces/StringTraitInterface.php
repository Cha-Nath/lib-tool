<?php

namespace nlib\Tool\Interfaces;

interface StringTraitInterface {

    /**
     *
     * @param string $string
     * @param string $separator
     * @return string
     */
    public function str_slug(string $string, string $separator = '-') : string;

    /**
     *
     * @param integer $length
     * @param boolean $specialCharacters
     * @return string
     */
    public function str_random(int $length, bool $specialCharacters = false) : string;
}