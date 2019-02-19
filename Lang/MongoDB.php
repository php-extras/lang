<?php
namespace Php\Lang\StreamContext;

class MongoDB extends AbstractContext
{
	protected $keys = array(
		'log_cmd_insert',
		'log_cmd_delete',
		'log_cmd_update',
		'log_write_batch',
		'log_reply',
		'log_getmore', 
		'log_killcursor'
	);
}