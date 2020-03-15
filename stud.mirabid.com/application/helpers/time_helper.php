<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('current_time'))
{
    function current_time()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $current_time= $dt->format('F j, Y, g:i a');
        return $current_time;
    }   
}