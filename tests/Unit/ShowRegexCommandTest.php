<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\ValidateSemverCli\ShowRegex\ShowRegexCommand;

class ShowRegexCommandTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new ShowRegexCommand());
        $Command = $Application->find(ShowRegexCommand::signature);
        $CommandTester = new CommandTester($Command);

        $CommandTester->execute([]);

        $CommandTester->assertCommandIsSuccessful();
    }
}