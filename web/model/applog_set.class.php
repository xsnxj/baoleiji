<?php
if(!defined('CAN_RUN')) {
	exit('Access Denied');
}

class applog_set extends base_set {
	protected $table_name = 'applog';
	protected $id_name = 'id';

	
}