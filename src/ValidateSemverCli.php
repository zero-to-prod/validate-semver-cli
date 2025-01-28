<?php

namespace Zerotoprod\ValidateSemverCli;

use Symfony\Component\Console\Application;

class ValidateSemverCli
{
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ValidateSemverCommand());
    }
}