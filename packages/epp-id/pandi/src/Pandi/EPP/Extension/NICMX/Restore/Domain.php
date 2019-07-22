<?php

/**
 * This file is part of the php-epp2 library.
 *
 * (c) Julien Barbedette <barbedette.julien@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace Pandi\EPP\Extension\NICMX\Restore;

use Pandi\EPP\ExtensionInterface as Extension;
use Pandi\EPP\Frame\Command\Renew;

/**
 * @see https://www.registry.mx
 */
class Domain extends Renew implements Extension
{
    protected $extension = 'nicmx-domrst';
    protected $extension_xmlns = 'http://www.nic.mx/nicmx-domrst-1.0';

    public function setDomain($domain)
    {
        $this->set('//epp:epp/epp:command/epp:renew/nicmx-domrst:restore/nicmx-domrst:name', $domain);
    }

    public function getExtensionNamespace()
    {
        return $this->extension_xmlns;
    }
}
