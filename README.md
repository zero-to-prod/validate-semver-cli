# Zerotoprod\ValidateSemverCli

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/validate-semver-cli)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-semver-cli/test.yml?label=test)](https://github.com/zero-to-prod/validate-semver-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-semver-cli/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/validate-semver-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-semver-cli/build_docker_image.yml?label=build_docker_image)](https://github.com/zero-to-prod/validate-semver-cli/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/validate-semver-cli?color=blue)](https://packagist.org/packages/zero-to-prod/validate-semver-cli/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/validate-semver-cli.svg?color=purple)](https://packagist.org/packages/zero-to-prod/validate-semver-cli/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/validate-semver-cli?color=f28d1a)](https://packagist.org/packages/zero-to-prod/validate-semver-cli)
[![License](https://img.shields.io/packagist/l/zero-to-prod/validate-semver-cli?color=pink)](https://github.com/zero-to-prod/validate-semver-cli/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/validate-semver-cli.svg)](https://wakatime.com/badge/github/zero-to-prod/validate-semver-cli)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/validate-semver-cli?branch=main)](https://hitsofcode.com/github/zero-to-prod/validate-semver-cli/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Documentation Publishing](#documentation-publishing)
  - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [Usage](#usage)
  - [Available Commands](#available-commands)
    - [`validate-semver-cli:validate`](#validate-semver-clivalidate)
    - [`validate-semver-cli:show-regex`](#validate-semver-clishow-regex)
    - [`validate-semver-cli:src`](#validate-semver-clisrc)
- [Docker Image](#docker-image)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Image Development](./IMAGE_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

A CLI for validating a semantic version string.

## Requirements

- PHP 8.1 or higher.

## Installation

Install `Zerotoprod\ValidateSemverCli` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/validate-semver-cli
```

This will add the package to your project's dependencies and create an autoloader entry for it.

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/validate-semver-cli)
vendor/bin/zero-to-prod-validate-semver-cli

# Publish to custom directory
vendor/bin/zero-to-prod-validate-semver-cli /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-validate-semver-cli"
        ],
        "post-update-cmd": [
            "zero-to-prod-validate-semver-cli"
        ]
    }
}
```

## Usage

Run this command to see the available commands:

```shell
vendor/bin/validate-semver-cli list
```

### Available Commands

The CLI provides three main commands for working with semantic version validation:

#### `validate-semver-cli:validate`

Validates a semantic version string and returns the string if valid, or empty output if invalid.

**Usage:**
```shell
vendor/bin/validate-semver-cli validate-semver-cli:validate <semver>
```

**Arguments:**
- `semver` (required) - The semantic version string to validate

**Examples:**

Valid semantic version:
```shell
vendor/bin/validate-semver-cli validate-semver-cli:validate "1.2.3"
```
**Output:**
```
1.2.3
```

Valid semantic version with pre-release:
```shell
vendor/bin/validate-semver-cli validate-semver-cli:validate "2.0.0-alpha.1"
```
**Output:**
```
2.0.0-alpha.1
```

Valid semantic version with build metadata:
```shell
vendor/bin/validate-semver-cli validate-semver-cli:validate "1.0.0+20230101"
```
**Output:**
```
1.0.0+20230101
```

Invalid semantic version:
```shell
vendor/bin/validate-semver-cli validate-semver-cli:validate "1.2"
```
**Output:**
```

```

#### `validate-semver-cli:show-regex`

Displays the regular expression pattern used to validate semantic version strings.

**Usage:**
```shell
vendor/bin/validate-semver-cli validate-semver-cli:show-regex
```

**Arguments:** None

**Example:**
```shell
vendor/bin/validate-semver-cli validate-semver-cli:show-regex
```
**Output:**
```
^(?P<major>0|[1-9]\d*)\.(?P<minor>0|[1-9]\d*)\.(?P<patch>0|[1-9]\d*)(?:-(?P<prerelease>(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*)(?:\.(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*))*))?(?:\+(?P<buildmetadata>[0-9a-zA-Z-]+(?:\.[0-9a-zA-Z-]+)*))?$
```

#### `validate-semver-cli:src`

Displays the project's source repository URL.

**Usage:**
```shell
vendor/bin/validate-semver-cli validate-semver-cli:src
```

**Arguments:** None

**Example:**
```shell
vendor/bin/validate-semver-cli validate-semver-cli:src
```
**Output:**
```
https://github.com/zero-to-prod/validate-semver-cli
```

## Docker Image

You can also run the cli using the [docker image](https://hub.docker.com/repository/docker/davidsmith3/validate-semver-cli/general):

```shell
docker run --rm davidsmith3/validate-semver-cli
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/validate-semver-cli/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
