<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_admin_controller' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/antcto/maker-bundle/src/Command/MakerCommand.php';
include_once $this->targetDirs[3].'/vendor/antcto/maker-bundle/src/MakerInterface.php';
include_once $this->targetDirs[3].'/vendor/antcto/maker-bundle/src/Maker/AbstractMaker.php';
include_once $this->targetDirs[3].'/vendor/antcto/maker-bundle/src/Maker/MakeAdminController.php';

$a = ($this->privates['maker.file_manager'] ?? $this->load('getMaker_FileManagerService.php'));

$this->privates['maker.auto_command.make_admin_controller'] = $instance = new \AntCTO\Bundle\MakerBundle\Command\MakerCommand(new \AntCTO\Bundle\MakerBundle\Maker\MakeAdminController($a), $a, ($this->privates['maker.generator'] ?? $this->load('getMaker_GeneratorService.php')));

$instance->setName('make:admin:controller');

return $instance;
