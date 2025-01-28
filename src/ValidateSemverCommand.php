<?php

namespace Zerotoprod\ValidateSemverCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\ValidateSemVer\ValidateSemVer;

#[AsCommand(
    name: ValidateSemverCommand::signature,
    description: 'Validates a Semantic Version String. Returns the semver string if it is valid, `null` otherwise.'
)]
class ValidateSemverCommand extends Command
{
    public const signature = 'validate-semver-cli:validate';
    public const semver = 'semver';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $semver = $input->getArgument(self::semver);
        $output->writeln(
            ValidateSemVer::isValid($semver)
                ? $semver
                : ''
        );

        return Command::SUCCESS;
    }

    public function configure(): void
    {
        $this->addArgument(self::semver, InputArgument::REQUIRED, 'The Semantic Version string to validate');
    }
}