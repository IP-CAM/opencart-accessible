<?php
class controllerExtensionEventAccessible extends Controller {
	public function language(&$route, &$data, &$output = null) {
		if($this->config->get('module_accessible_status')) {
			$data = array_merge($data, $this->language->load('extension/module/accessible'));
			$page = isset($this->request->get['route'])?$this->request->get['route']:'';
			$params = $this->request->get;
			unset($params['_route_']);
			unset($params['route']);
			$data['current_page'] = $this->url->link($page, $params);
		}
	}
}
