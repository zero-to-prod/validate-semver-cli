<?php

namespace Zerotoprod\ValidateSemverCli;

use Symfony\Component\Console\Application;
use Zerotoprod\ValidateSemverCli\Src\SrcCommand;
use Zerotoprod\ValidateSemverCli\ValidateSemver\ValidateSemverCommand;

class ValidateSemverCli
{
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ValidateSemverCommand());
    }
}