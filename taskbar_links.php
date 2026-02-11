<?php

class taskbar_links extends rcube_plugin{

	private $conf;
	private $user;
	private $rc;

	function init(){

		$this->load_config();
	
		$this->rc = rcube::get_instance();

		$this->conf = $this->rc->config->get('taskbar_links', '');

		if (!empty ($this->conf)){

			$this->user = $this->rc->user;

			$this->include_stylesheet($this->local_skin_path() . '/taskbar_links.css');

			$this->add_texts('localization/');

			foreach ($this->conf as $link){

				$show = true;

				if (!empty ($link['user_ids'])){

					$link['user_ids'] = array_filter(explode(',', $link['user_ids']));

					if (!in_array($this->user->data['user_id'], $link['user_ids'])){
						$show = false;
					}
				}
				
				if ($show == true){
					$this->add_button(array(
						'type'       => 'link',
						'label'      => 'taskbar_links.'.$link['label'],
						'href'       => $link['url'],
						'target'     => $link['target'],
						'class'      => 'button-taskbar-links-'.$link['icon'],
						'classsel'   => 'button-taskbar-links-'.$link['icon'].' button-selected',
						'innerclass' => 'button-inner'
					), 'taskbar');
				}
			}
		}
	}
}
?>