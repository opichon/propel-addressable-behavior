<?php

use \Behavior;

class AddressableBehavior extends Behavior
{
    protected $parameters = array(
        'address1_column' => 'address',
        'address2_column' => 'address2',
        'locality_column' => 'locality',
        'region_column' => 'region',
        'postal_code_column' => 'postal_code',
        'country_id_column' => 'country_id'
    );

    public function modifyTable()
    {
        $table = $this->getTable();

        $columnName = $this->getParameter('address1_column');
        // add the column if not present
        if (!$this->getTable()->containsColumn($columnName)) {
            $column = $this->getTable()->addColumn(array(
                'name' => $columnName,
                'type' => 'VARCHAR',
                'size' => 30
            ));
        }

        $columnName = $this->getParameter('address2_column');
        // add the column if not present
        if (!$this->getTable()->containsColumn($columnName)) {
            $column = $this->getTable()->addColumn(array(
                'name' => $columnName,
                'type' => 'VARCHAR',
                'size' => 30
            ));
        }

        $columnName = $this->getParameter('locality_column');
        // add the column if not present
        if (!$this->getTable()->containsColumn($columnName)) {
            $column = $this->getTable()->addColumn(array(
                'name' => $columnName,
                'type' => 'VARCHAR',
                'size' => 100
            ));
        }

        $columnName = $this->getParameter('region_column');
        // add the column if not present
        if (!$this->getTable()->containsColumn($columnName)) {
            $column = $this->getTable()->addColumn(array(
                'name' => $columnName,
                'type' => 'VARCHAR',
                'size' => 30
            ));
        }

        $columnName = $this->getParameter('postal_code_column');
        // add the column if not present
        if (!$this->getTable()->containsColumn($columnName)) {
            $column = $this->getTable()->addColumn(array(
                'name' => $columnName,
                'type' => 'VARCHAR',
                'size' => 20
            ));
        }

        $columnName = $this->getParameter('country_id_column');
        // add the column if not present
        if (!$this->getTable()->containsColumn($columnName)) {
            $column = $this->getTable()->addColumn(array(
                'name' => $columnName,
                'type' => 'VARCHAR',
                'size' => 2
            ));
        }
    }
}
