<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/sandims12/Membuat-pipeline.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('Membuat-pipeline')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/Membuat-pipeline');

// Hooks

after('deploy:failed', 'deploy:unlock');
