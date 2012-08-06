<?php
App::uses('CakeEmail', 'Network/Email');
class HomeController extends AppController{
	
	public $helper = array('Html', 'Form');
	
	public function index(){
		
	}
	
	public function contact(){
		if($this->request->is('post')){
			
			$email = new CakeEmail();
			$email->from($this->data['Contact']['email'])
				  ->to('jonathan@jnjweb.net')
				  ->subject('Contact From Site')
				  ->send($this->data['Contact']['message']);
			$this->Session->setFlash('Your email has been sent.  We will contact you shortly.');
			$this->redirect(array('action' => 'index'));
		}
	}
}
