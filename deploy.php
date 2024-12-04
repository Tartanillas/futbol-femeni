<?php
namespace Deployer;

require 'recipe/laravel.php';

// Configuración general
set('application', 'futbol-femeni');
set('repository', 'git@github.com:cipfpbatoi/projectes-laravel-Tartanillas.git');
set('git_tty', true);
set('php_fpm_service', 'php8.3-fpm');

add('shared_files', ['.env']);
add('shared_dirs', ['storage']);
add('writable_dirs', ['storage', 'bootstrap/cache']);

host('54.146.156.5')
    ->set('remote_user', 'sa04-deployer')
    ->set('deploy_path', '/var/www/es-cipfpbatoi-deployer/html');

task('reload:php-fpm', function () {
    run('sudo /etc/init.d/php8.3-fpm restart');
});

task('deploy:move_to_root', function () {
    run('mv {{release_path}}/futbol-femeni/* {{release_path}}');
    run('rm -rf {{release_path}}/futbol-femeni');
});

after('deploy:update_code', 'deploy:move_to_root');

after('deploy', 'reload:php-fpm');
