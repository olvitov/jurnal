<?php

class DB {
    public function __construct()
    {
        mysql_connect('localhost', 'olvit', '34vit');
        mysql_select_db('jurnal');
    }

    public function query($sql) {

        $res = mysql_query($sql);
        if (false === $res) {
            return false;
        }
        $ret = [];
        while ($row = mysql_fetch_object($res)) {
            $ret[] = $row;
        }

        return $ret;

    }
}
