<?php
class MaterialsController extends AppController{

	function index(){
		$this->paginate = array(
			'recursive'	=> -1,
			'order'		=> 'Material.name ASC' 
			);
		$d['materials'] = $this->Paginate('Material');
		$this->set($d);
	}

	function edit ( $id = null ) {
		if ($this->request->is('put') || $this->request->is('post')) {
			if ($this->Material->save ( $this->request->data )) {
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
			$this->Material->id = $id;
			$this->request->data = $this->Material->read();
			if (empty($this->request->data)) {
				throw new NotFoundException('BadRequestException');
			}
		}

	}
	function delete($id){
        $this->Material->delete( $id );
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