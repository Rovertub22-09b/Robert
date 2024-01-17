<?php

class Psys
{
    public $psysItems;

    /**
     * Tours constructor.
     */
    public function __construct()
    {
        $this->psyItems = $this->getPsys();
    }

    /**
     * @param $id
     * @return array|mixed
     */
    public function getPsyById($id)
    {
        $psyItem = [];

        if (array_key_exists($id, $this->psyItems))
        {
            $psyItem = $this->psyItems[$id];
        }

        return $psyItem;
    }

    /**
     * @return array
     */
    private function getPsys()
    {
        $psyItems = [];

        $result = Database::$db->query('SELECT * FROM Psy');
        while ($row = $result->fetch_assoc()) {
            $psyItems[$row['id']] = $row;
        }

        return $psyItems;
    }
}