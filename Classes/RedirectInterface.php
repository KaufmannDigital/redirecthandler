<?php
namespace Neos\RedirectHandler;

/*
 * This file is part of the Neos.RedirectHandler package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use DateTime;

/**
 * Redirect Interface
 */
interface RedirectInterface
{
    const REDIRECT_TYPE_MANUAL = 'manual';
    const REDIRECT_TYPE_GENERATED = 'generated';

    /**
     * @return string
     */
    public function getSourceUriPath();

    /**
     * @return string
     */
    public function getTargetUriPath();

    /**
     * @return integer
     */
    public function getStatusCode();

    /**
     * @return string
     */
    public function getHost();

    /**
     * @return string
     */
    public function getCreator();

    /**
     * @return string
     */
    public function getComment();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return DateTime
     */
    public function getStartDateTime();

    /**
     * @return DateTime
     */
    public function getEndDateTime();
}
