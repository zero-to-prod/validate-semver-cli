<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\ValidateSemverCli\ValidateSemverCommand;

class ValidateSemverCommandTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new ValidateSemverCommand());
        $Command = $Application->find(ValidateSemverCommand::signature);
        $CommandTester = new CommandTester($Command);

        $CommandTester->execute([ValidateSemverCommand::semver =>'1.0.0']);

        $CommandTester->assertCommandIsSuccessful();
    }
}