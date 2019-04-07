<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AntCTO\Bundle\MakerBundle\Maker;

use AntCTO\Bundle\MakerBundle\ConsoleStyle;
use AntCTO\Bundle\MakerBundle\DependencyBuilder;
use AntCTO\Bundle\MakerBundle\Generator;
use AntCTO\Bundle\MakerBundle\InputConfiguration;
use Symfony\Component\BrowserKit\Client;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\CssSelector\CssSelectorConverter;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
class MakeFunctionalTest extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:functional-test';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConf)
    {
        $command
            ->setDescription('Creates a new functional test class')
            ->addArgument('name', InputArgument::OPTIONAL, 'The name of the functional test class (e.g. <fg=yellow>DefaultControllerTest</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeFunctionalTest.txt'))
        ;
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator)
    {
        $testClassNameDetails = $generator->createClassNameDetails(
            $input->getArgument('name'),
            'Tests\\',
            'Test'
        );

        $generator->generateClass(
            $testClassNameDetails->getFullName(),
            'test/Functional.tpl.php',
            []
        );

        $generator->writeChanges();

        $this->writeSuccessMessage($io);

        $io->text([
            'Next: Open your new test class and start customizing it.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/testing.html#functional-tests</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder $dependencies)
    {
        $dependencies->addClassDependency(
            Client::class,
            'browser-kit',
            true,
            true
        );
        $dependencies->addClassDependency(
            CssSelectorConverter::class,
            'css-selector',
            true,
            true
        );
    }
}