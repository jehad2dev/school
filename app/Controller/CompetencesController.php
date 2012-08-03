<?php
class CompetencesController extends AppController{

	function index(){
		$this->paginate = array(
			'recursive'	=> -1,
			'order'		=> 'Competence.name ASC' 
			);
		$d['competences'] = $this->Paginate('Competence');
		$this->set($d);
	}

	function edit ( $id = null ) {
		if ($this->request->is('put') || $this->request->is('post')) {
			if ($this->Competence->save ( $this->request->data )) {
				$this->Session->setFlash(
					__("L'élément à bien été sauvegarder"), 
					'alert', 
					array(
					    'plugin' => 'TwitterBootstrap',
					    'class' => 'alert-success'
					));
				$this->redirect(array('action' => 'index'));
			}	
		} elseif ($id) {
			$this->Competence->id = $id;
			$this->request->data = $this->Competence->read();
			if (empty($this->request->data)) {
				throw new NotFoundException('BadRequestException');
			}
		}

		$d['treelist'] = $this->Competence->generateTreeList();
		array_unshift($d['treelist'], '');
		$this->LoadModel('Discipline');
		$d['disciplines'] = $this->Discipline->find('list', 
			array( 'order'=> 'Discipline.name ASC' )
			);
		$this->set($d);
	}
	function delete($id){
        $this->Competence->delete( $id );
        $this->Session->setFlash(
			__("L'élément a bien été supprimé"), 
			'alert', 
			array(
			    'plugin' => 'TwitterBootstrap',
			    'class' => 'alert-success'
			));
        $this->redirect($this->referer());
    }


}