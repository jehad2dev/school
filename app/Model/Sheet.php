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
            ),
        'Competence' =>
            array(
                'className'              => 'Competence',
                'joinTable'              => 'competences_sheets',
                'foreignKey'             => 'sheet_id',
                'associationForeignKey'  => 'competence_id',
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

    public $belongsTo = array(
        'Project',
        'Discipline',
        'Evaluation',
        'LearningAxis',
        'TargetCompetence' => array(
            'className'     => 'Competence',
            'foreignKey'    => 'competence_id'),
        );

    public $recursive = -1;

    public $validate = array(
    	'name' => array(
	        'rule'       => 'notEmpty',
	        'required'   => true,
	        'allowEmpty' => false,
	        'message'    => 'Ce champ ne peut pas rester vide'
	    ),   
    );

    public function beforeSave() {
        $this->data['Sheet']['date_last_modified'] = date('Y-m-d H:i:s');
        return true;
    }

}