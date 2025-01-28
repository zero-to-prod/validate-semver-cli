# Zerotoprod\ValidateSemverCli

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/validate-semver-cli)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-semver-cli/test.yml?label=test)](https://github.com/zero-to-prod/validate-semver-cli/actions)
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
- [Usage](#usage)
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

This will add the package to your project’s dependencies and create an autoloader entry for it.

## Usage

Run this command to see the available commands:

```shell
vendor/bin/validate-semver-cli list
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