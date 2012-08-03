<?php
class EvaluationsController extends AppController{

	function index(){
		$this->paginate = array(
			'recursive'	=> -1,
			'order'		=> 'Evaluation.name ASC' 
			);
		$d['evaluations'] = $this->Paginate('Evaluation');
		$this->set($d);
	}

	function edit ( $id = null ) {
		if ($this->request->is('put') || $this->request->is('post')) {
			if ($this->Evaluation->save ( $this->request->data )) {
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
			$this->Evaluation->id = $id;
			$this->request->data = $this->Evaluation->read();
			if (empty($this->request->data)) {
				throw new NotFoundException('BadRequestException');
			}
		}

	}
	function delete($id){
        $this->Evaluation->delete( $id );
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