<?php

namespace AppBundle\BoardAssets;


class Board implements \JsonSerializable
{
    private $boardName;
    private $columns = array();

    public function __contruct()
    {
        // Create the Card board and Columns

    }

    public function addColumn()
    {
        // Add a column to the board
    }

    public function deleteColumn()
    {
        // Delete a column
    }

    /**
     * Set the board name
     *
     * @param string $boardName
     */
    public function setBoardName($boardName)
    {
        $this->boardName = $boardName;
    }


    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    public function jsonSerialize()
    {
        return ['jsonVersionOfOject' => 'customize me', 'name' => $this->boardName];
    }
}
