<?php
/**
 * Dev configuration values.
 *
 * @var \User\Application $app
 */

$app['debug'] = true;
$app['cache.dir'] = dirname(__DIR__).'/var/cache';
$app['logger.dir'] = dirname(__DIR__).'/var/log';

$app['security.encoder.bcrypt.cost'] = 13;

$app['graylog.options'] = [
    'host' => getenv('GRAYLOG_HOST'),
    'port' => getenv('GRAYLOG_PORT'),
];

$app['db.postgres_options'] = [
    'driver' => 'pdo_pgsql',
    'dbname' => getenv('POSTGRES_DB'),
    'user' => getenv('POSTGRES_USER'),
    'password' => getenv('POSTGRES_PASSWORD'),
    'host' => getenv('POSTGRES_HOST'),
    'port' => getenv('POSTGRES_PORT'),
];

$app['redis.options'] = [
    'host' => getenv('REDIS_HOST'),
    'port' => getenv('REDIS_PORT'),
    'db' => getenv('REDIS_DB'),
];
