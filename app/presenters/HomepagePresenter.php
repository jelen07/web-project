<?php

namespace App\Presenters;

use Nette;


class HomepagePresenter extends Nette\Application\UI\Presenter
{

	public function startup()
	{
		$dev = isset($_COOKIE['debug_please']) && $_COOKIE['debug_please'] == 'idontgiveabuck07';
		// $cli = php_sapi_name() == 'cli';

		if (!$dev) {
			$this->setView('noapp');
		}

		parent::startup();
	}
}
