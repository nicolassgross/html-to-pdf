<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPUniAcervoDigital;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ItemPersonalizado1 extends AbstractTag
{

    protected $Id = 'ItemPersonalizado1';

    protected $Name = 'ItemPersonalizado1';

    protected $FullName = 'XMP::uniAcervoDigital';

    protected $GroupName = 'XMP-uniAcervoDigital';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-uniAcervoDigital';

    protected $g2 = 'Other';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'ItemPersonalizado1';

}
