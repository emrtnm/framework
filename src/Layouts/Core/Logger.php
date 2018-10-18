<?php

namespace Ataworks\Layouts\Core;

interface Logger 
{
    /**
     * New error log.
     *
     * @param  mixed  $code
     * @param  string $msg
     * @param  string $file
     * @param  int    $line
     * @return void
     */
    public static function addErrorLog($code, String $msg, String $file, Int $line);

    /**
     * Add new database log.
     *
     * @param  string $type
     * @param  string $table
     * @param  mixed  $where
     * @param  mixed  $vals
     * @return void
     */
    public static function addDbLog(String $type, String $table, $where, $vals);

    /**
     * File puts contents.
     *
     * @param  string $file
     * @param  mixed  $data
     * @return void
     */
    public static function filePuts(String $file, $data);

    /**
     * File write.
     *
     * @param  string $file
     * @param  mixed  $data
     * @return void
     */
    public static function fileWrite(String $file, $data);
}
