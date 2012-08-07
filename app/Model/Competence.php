<?php

class Competence extends AppModel {

    public $name = 'Competence';
    
    public $actsAs = array('Tree');

    public $belongsTo = array('Discipline');

    public $recursive = -1;

    public $validate = array(
    	'name' => array(
	        'rule'       => 'notEmpty',
	        'required'   => true,
	        'allowEmpty' => false,
	        'message'    => 'Ce champ ne peut pas rester vide'
	    ),
    	'discipline_id' => array(
	        'rule'       => 'notEmpty',
	        'required'   => true,
	        'allowEmpty' => false,
	        'message'    => 'Ce champ ne peut pas rester vide'
	    )	    
    );

}