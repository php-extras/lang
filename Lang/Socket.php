<?php
namespace Php\Lang\StreamContext;

class Socket extends AbstractContext
{
	protected $keys = array(
		'bindto',
		'backlog',
		'ipv6_v6only',
		'so_reuseport',
		'so_broadcast',
		'tcp_nodelay'
	);
}