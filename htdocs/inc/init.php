<?php
error_reporting(E_STRICT | E_ALL);

$template = new Template();
$template->set('header', $_SERVER['DOCUMENT_ROOT'] . '/inc/templates/header.php');
$template->set('footer', $_SERVER['DOCUMENT_ROOT'] . '/inc/templates/footer.php');

class Template
{
	private $config = array();

	public function __construct()
	{
	}

	public function set($key, $val)
	{
		$this->config[$key] = $val;
	}

	public function get($key)
	{
		return (isset($this->config[$key])) ? $this->config[$key] : '';
	}

	public function place($template)
	{
		if (file_exists($this->get($template))) {
			include $this->get($template);
		} else {
			//echo $this->get($template);
		}
	}
}
