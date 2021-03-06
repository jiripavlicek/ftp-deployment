<?php

return array(
	'my site' => array(
		'remote' => 'ftp://user:secretpassword@ftp.example.com/directory',
		'local' => '.',
		'test' => FALSE,
		'ignore' => '
			.git*
			project.pp[jx]
			/deployment.*
			/log
			temp/*
			!temp/.htaccess
		',
		'allowdelete' => TRUE,
		'before' => array(
			function (Deployment\Server $server, Deployment\Logger $logger, Deployment\Deployer $deployer) {
				$logger->log('Hello!');
			},
		),
		'after' => array(
			'http://example.com/deployment.php?after'
		),
		'purge' => array(
			'temp/cache',
		),
		'preprocess' => FALSE,
	),

	'tempdir' => __DIR__ . '/temp',
	'colors' => TRUE,
);
