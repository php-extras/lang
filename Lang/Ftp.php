<?php
namespace Php\Lang\StreamContext;

class Ftp extends AbstractContext
{
	protected $keys = array(
		'overwrite',
		'resume_pos',
		'proxy'
	);
}