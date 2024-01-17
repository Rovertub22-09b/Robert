
<?php

class Remarks
{
    public $remarksItems;

    /**
     * Tours constructor.
     */
    public function __construct()
    {
        $this->remarkItems = $this->getRemarks();
    }

    /**
     * @param $id
     * @return array|mixed
     */
    public function getRemarkById($id)
    {
        $remarkItem = [];

        if (array_key_exists($id, $this->remarkItems))
        {
            $remarkItem = $this->remarkItems[$id];
        }

        return $remarkItem;
    }

    /**
     * @return array
     */
    private function getRemarks()
    {
        $remarkItems = [];

        $result = Database::$db->query('SELECT * FROM remarks');
        while ($row = $result->fetch_assoc()) {
            $remarkItems[$row['id']] = $row;
        }

        return $remarkItems;
    }
}