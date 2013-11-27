<?php
#the db class for my website
class MyDB extends SQLite3 {
    function __construct()
    {
        $this->open('test.db');
        }
}
?>
