<?php

class Controller_Welcome extends Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		echo html::anchor('aclDemo','ACL Demos (and comparison to Zend ACL)'),'<br>';
		echo html::anchor('a2Demo','Authorization demo');
	}

} 