<?php

/*
 * (c) Jean-François Lépine <https://twitter.com/Halleck45>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hal\Application\Extension\Reporter;

interface ReporterHtmlSummary {

    /**
     * @return string
     */
    public function renderJs();

    /**
     * @return string
     */
    public function renderHtml();

    /**
     * @return array
     */
    public function getMenus();

}