<?php

if (!defined('FW')) {
    die('Forbidden');
}

$manifest = array();

$manifest['name'] = __('SoftTech', 'fw');
$manifest['uri'] = 'http://themeforest.com/user/XpeedStudio';
$manifest['description'] = __('SoftTech landing page wordpress theme', 'fw');
$manifest['version'] = '1.0';
$manifest['author'] = 'XpeedStuio';
$manifest['author_uri'] = 'http://themeforest.com/user/XpeedStudio';
$manifest['requirements'] = array(
    'wordpress' => array(
        'min_version' => '4.1',
    /* 'max_version' => '4.99.9' */
    ),
);

$manifest['id'] = 'scratch';

$manifest['supported_extensions'] = array(
    'page-builder' => array(),
    'backups' => array(),
    'forms' => array(),
    'mailer' => array(),
    'woffice-updater' => array(),

);
