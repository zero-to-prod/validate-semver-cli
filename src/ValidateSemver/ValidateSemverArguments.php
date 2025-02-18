<?php

namespace Zerotoprod\ValidateSemverCli\ValidateSemver;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/validate-semver-cli
 */
class ValidateSemverArguments
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/validate-semver-cli
     */
    public const semver = 'semver';
    /**
     * @link https://github.com/zero-to-prod/validate-semver-cli
     */
    public string $semver;
}