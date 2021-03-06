<?php
namespace EBT\ExtensionBuilder\ViewHelpers\Format;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * View helper which returns a quoted string
 *
 * = Examples =
 *
 * <f:quoteString>{anyString}</f:quoteString>
 *
 */
class QuoteStringViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    /**
     * @param string $value
     */
    public function render($value = null)
    {
        if ($value == null) {
            $value = $this->renderChildren();
        }

        return addslashes($value);
    }
}
