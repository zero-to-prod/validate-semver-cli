<?php

namespace Zerotoprod\ValidateSemverCli;

use Symfony\Component\Console\Application;
use Zerotoprod\ValidateSemverCli\ShowRegex\ShowRegexCommand;
use Zerotoprod\ValidateSemverCli\Src\SrcCommand;
use Zerotoprod\ValidateSemverCli\ValidateSemver\ValidateSemverCommand;

/**
 * A CLI for validating a semantic version string.
 *
 * @link https://github.com/zero-to-prod/validate-semver-cli
 */
class ValidateSemverCli
{
    /**
     * @link https://github.com/zero-to-prod/validate-semver-cli
     */
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ValidateSemverCommand());
        $Application->add(new ShowRegexCommand());
    }
}