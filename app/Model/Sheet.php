<?php

class Sheet extends AppModel {

    public $name = 'Sheet';
    
    public $hasAndBelongsToMany = array(
        'Material' =>
            array(
                'className'              => 'Material',
                'joinTable'              => 'materials_sheets',
                'foreignKey'             => 'sheet_id',
                'associationForeignKey'  => 'material_id',
                'unique'                 => true,
                'conditions'             => '',
                'fields'                 => '',
                'order'                  => '',
                'limit'                  => '',
                'offset'                 => '',
                'finderQuery'            => '',
                'deleteQuery'            => '',
                'insertQuery'            => ''
            )
    );

    //public $recursive = -1;

    public $validate = array(
    	'name' => array(
	        'rule'       => 'notEmpty',
	        'required'   => true,
	        'allowEmpty' => false,
	        'message'    => 'Ce champ ne peut pas rester vide'
	    ),   
    );

}