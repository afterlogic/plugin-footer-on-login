<?php

/*
 * Copyright (C) 2002-2015 AfterLogic Corp. (www.afterlogic.com)
 * Distributed under the terms of the license described in LICENSE
 *
 */

class_exists('CApi') or die();

class CFooterOnLoginPlugin extends AApiPlugin
{
	/**
	 * @param CApiPluginManager $oPluginManager
	 */
	public function __construct(CApiPluginManager $oPluginManager)
	{
		parent::__construct('1.0', $oPluginManager);
	}

	public function Init()
	{
		parent::Init();

		$this->SetI18N(true);

		$this->IncludeTemplate('Login_WrapLoginViewModel', 'Login-Footer', 'templates/footer.html');
	}

}

return new CFooterOnLoginPlugin($this);
