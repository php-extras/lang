<?php
namespace Php\Lang\StreamContext;

class Curl extends AbstractContext
{
	protected $keys = array(
		'method',
		'header',
		'user_agent', 
		'content', 
		'proxy',
		'max_redirects',
		'curl_verify_ssl_host',
		'curl_verify_ssl_peer'
	);
}