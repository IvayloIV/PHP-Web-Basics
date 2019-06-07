<?php

class Smartphone implements CallOther, BrowsingWWW {
    /**
     * @param string $url
     * @return string
     * @throws Exception
     */
    public function browse(string $url)
    {
        if (preg_match('/\d/', $url)) {
            throw new Exception('Invalid URL!');
        }

        return "Browsing: {$url}!";
    }

    /**
     * @param string $phone
     * @return string
     * @throws Exception
     */
    public function callOtherPhone(string $phone)
    {
        if (preg_match('/\D/', $phone)) {
            throw new Exception('Invalid number!');
        }

        return "Calling... {$phone}";
    }
}