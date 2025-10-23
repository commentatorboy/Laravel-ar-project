<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'we3d');

// Project repository
set('repository', 'git@gitlab.com:commentatorbot/we3darjs.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('linux57.unoeuro.com')
    ->set('deploy_path', '~/we3d')
    ->user('internet-guiden.dk', 'frE4apey')
    ->identityFile('~/.ssh/UE');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');

