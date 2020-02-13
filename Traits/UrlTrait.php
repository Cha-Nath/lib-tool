<?php

namespace nlib\Tool\Traits;

trait UrlTrait {

    public function get_current_url() : string {
        return 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }
}