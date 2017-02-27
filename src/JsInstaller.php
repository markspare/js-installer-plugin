<?php
/**
 * Created by PhpStorm.
 * User: mark.spare
 * Date: 27/02/2017
 * Time: 11:04
 */

namespace IntouchGames\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class JsInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $prefix = substr($package->getPrettyName(), 0, 17);
        if ('intouch-games/js-' !== $prefix) {
            throw new \InvalidArgumentException(
                'Unable to install js, intouch js packages '
                .'should always start their package name with '
                .'"intouch-games/js-" ('.$prefix.' given)'
            );
        }

        return 'application/core/js/'.substr($package->getPrettyName(), 23);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'intouch-games-js' === $packageType;
    }
}