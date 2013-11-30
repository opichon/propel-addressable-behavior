<?php

use \Behavior;

class AddressableBehavior extends Behavior
{
    protected $parameters = array(
        'address1_column' => 'address',
        'address2_column' => 'address2',
        'city_column' => 'city',
        'postal_code_column' => 'zip',
        'state_column' => 'state',
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

        $columnName = $this->getParameter('city_column');
        // add the column if not present
        if (!$this->getTable()->containsColumn($columnName)) {
            $column = $this->getTable()->addColumn(array(
                'name' => $columnName,
                'type' => 'VARCHAR',
                'size' => 100
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

        $columnName = $this->getParameter('state_column');
        // add the column if not present
        if (!$this->getTable()->containsColumn($columnName)) {
            $column = $this->getTable()->addColumn(array(
                'name' => $columnName,
                'type' => 'VARCHAR',
                'size' => 30
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
