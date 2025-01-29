<?php

namespace Zerotoprod\ValidateSemverCli\ValidateSemver;

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

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Args = ValidateSemverArguments::from($input->getArguments());
        $output->writeln(
            ValidateSemVer::isValid($Args->semver)
                ? $Args->semver
                : ''
        );

        return Command::SUCCESS;
    }

    public function configure(): void
    {
        $this->addArgument(ValidateSemverArguments::semver, InputArgument::REQUIRED, 'The Semantic Version string to validate');
    }
}