<?php

class Competence extends AppModel {

    public $name = 'Competence';
    
    public $actsAs = array('Tree');

    public $belongsTo = array('Discipline');

    public $recursive = -1;

    public $validate = array(

    );

}