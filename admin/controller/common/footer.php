<?php namespace Controller\Common;

use Engine\Controller;
use Engine\iController;

class Footer implements iController {
    use Controller;

    public function index() {
		$this->load->language('common/footer');
		
		$this->data['text_footer'] = sprintf($this->language->get('text_footer'), VERSION);
		
		if (file_exists(DIR_SYSTEM . 'config/svn/svn.ver')) {
			$this->data['text_footer'] .= '.r' . trim(file_get_contents(DIR_SYSTEM . 'config/svn/svn.ver'));
		}
		
		$this->template = 'common/footer.tpl';
	
    	$this->render();
  	}
}
?>