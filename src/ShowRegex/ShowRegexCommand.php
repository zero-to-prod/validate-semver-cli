<?php

namespace Zerotoprod\ValidateSemverCli\ShowRegex;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\RegexSemver\RegexSemver;

/**
 * @link https://github.com/zero-to-prod/validate-semver-cli
 */
#[AsCommand(
    name: ShowRegexCommand::signature,
    description: 'Shows the regular expression to validate a semver string.'
)]
class ShowRegexCommand extends Command
{
    /**
     * @link https://github.com/zero-to-prod/validate-semver-cli
     */
    public const signature = 'validate-semver-cli:show-regex';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(RegexSemver::pattern);

        return Command::SUCCESS;
    }
}