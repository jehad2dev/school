<?php
class LearningAxesController extends AppController{

	function index(){
		$this->paginate = array(
			'recursive'	=> -1,
			'order'		=> 'LearningAxis.name ASC' 
			);
		$d['learningAxes'] = $this->Paginate('LearningAxis');
		$this->set($d);
	}

	function edit ( $id = null ) {
		if ($this->request->is('put') || $this->request->is('post')) {
			if ($this->LearningAxis->save ( $this->request->data )) {
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
			$this->LearningAxis->id = $id;
			$this->request->data = $this->LearningAxis->read();
			if (empty($this->request->data)) {
				throw new NotFoundException('BadRequestException');
			}
		}

	}
	function delete($id){
        $this->LearningAxis->delete( $id );
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