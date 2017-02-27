<?php
/**
 * Created by PhpStorm.
 * User: mark.spare
 * Date: 27/02/2017
 * Time: 10:47
 */

namespace intouch-games\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class InstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new JsInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}