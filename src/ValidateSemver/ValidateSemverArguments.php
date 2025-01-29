<?php

namespace Zerotoprod\ValidateSemverCli\ValidateSemver;

use Zerotoprod\DataModel\DataModel;

class ValidateSemverArguments
{
    use DataModel;

    public const semver = 'semver';
    public string $semver;
}