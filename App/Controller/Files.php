<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 19.09.2018
 * Time: 16:45
 */

namespace App\Controller;

class Files
{
    /**
     * read
     *
     * @access public
     * @param  string $sFile
     * @return mixed string content if success or boolean false if file does not exist
     */
    public static function read($sFile, $sMode = "r")
    {
        $id_file = @ fopen($sFile, $sMode);

        if (!$id_file) {
            return false;
        }

        $st_content = "";
        while (!feof($id_file)) {
            $st_content .= fread($id_file, 4096);
        }

        if (!$st_content) {
            return false;
        }

        fclose($id_file);

        return $st_content;
    }
}