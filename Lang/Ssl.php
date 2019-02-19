<?php
namespace Php\Lang\StreamContext;

class Ssl extends AbstractContext
{
	protected $keys = array(
		'peer_name string',
		'verify_peer',
		'verify_peer_name',
		'allow_self_signed',
		'cafile',
		'capath',
		'local_cert', 
		'local_pk',
		'passphrase', 
		'CN_match', 
		'verify_depth', 
		'ciphers',
		'capture_peer_cert',
		'capture_peer_cert_chain',
		'SNI_enabled',
		'SNI_server_name', 
		'disable_compression',
		'peer_fingerprint'
	);
}