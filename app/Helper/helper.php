<?php
namespace App;

class Helper
{

    /**
     * Filter post data
     * @param $input
     * @return string
     */
    public static function filterPostdata ($input): string
    {
       return trim(self::noSpecialCharacters(filter_var($input, FILTER_SANITIZE_STRING)));
    }


    /**
     * Encode special characters
     * Prevent special characters & " ' < >, this way we can protect against XSS attack
     * @param $input
     * @param string $encoding
     * @return string
     */
    public static function noSpecialCharacters($input, $encoding = 'UTF-8'): string
    {
        return htmlspecialchars($input, ENT_QUOTES, $encoding);
    }

    /**
     * check and Validate email
     * @param $input
     * @return string
     */

    public static function validateEmail($input ): bool
    {
        return filter_var($input, FILTER_VALIDATE_EMAIL);
    }

}