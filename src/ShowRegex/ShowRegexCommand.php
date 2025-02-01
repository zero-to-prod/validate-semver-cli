<?php

namespace Zerotoprod\ValidateSemverCli\ShowRegex;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\RegexSemver\RegexSemver;

#[AsCommand(
    name: ShowRegexCommand::signature,
    description: 'Shows the regular expression to validate a semver string.'
)]
class ShowRegexCommand extends Command
{
    public const signature = 'validate-semver-cli:show-regex';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(RegexSemver::pattern);

        return Command::SUCCESS;
    }
}