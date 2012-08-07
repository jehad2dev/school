<?php
class SheetsController extends AppController{

	function index(){
		$this->paginate = array(
			'recursive'	=> -1,
			'order'		=> 'Sheet.name ASC' 
			);
		$d['sheets'] = $this->Paginate('Sheet');
		$this->set($d);
	}

	function edit ( $id = null ) {
		if ($this->request->is('put') || $this->request->is('post')) {
			if ($this->Sheet->save ( $this->request->data )) {
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
			$this->Sheet->id = $id;
			$this->request->data = $this->Sheet->read();
			if (empty($this->request->data)) {
				throw new NotFoundException('BadRequestException');
			}
		}
		$this->LoadModel('Competence');
		$d['treelist'] = $this->Competence->generateTreeList();
		$this->LoadModel('Discipline');
		$d['disciplines'] = $this->Discipline->find('list', 
			array( 'order'=> 'Discipline.name ASC' )
			);
		$this->LoadModel('LearningAxis');
		$d['learningAxes'] = $this->LearningAxis->find('list', 
			array( 'order'=> 'LearningAxis.name ASC' )
			);
		$this->LoadModel('Material');
		$d['materials'] = $this->Material->find('list', 
			array( 'order'=> 'Material.name ASC' )
			);
		$this->LoadModel('Evaluation');
		$d['evaluations'] = $this->Evaluation->find('list', 
			array( 'order'=> 'Evaluation.name ASC' )
			);
		$this->set($d);
	}
	function delete($id){
        $this->Sheet->delete( $id );
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