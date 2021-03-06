<?php defined('_JEXEC') or die;

/**
 * @package    Revars
 *
 * @author     Cymbal <cymbal@delo-design.ru> and Progreccor
 * @copyright  Copyright © 2022 Delo Design. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://delo-design.ru
 */

use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Plugin\CMSPlugin;


/**
 * RevarsExtra plugin.
 *
 * @package   revars
 * @since     1.0
 */
class plgRevarsRevarsextra extends CMSPlugin
{

    /**
     * Application object
     *
     * @var    CMSApplication
     * @since  1.0.0
     */
    protected $app;


    /**
     * Affects constructor behavior. If true, language files will be loaded automatically.
     *
     * @var    boolean
     * @since  1.0.0
     */
    protected $autoloadLanguage = true;


    public function onRevarsAddVariables()
    {
        return [
            (object) [
                'variable' => '{VAR_YEAR}',
                'value'    => date ( 'Y' )
            ],
            (object) [
                'variable' => '{VAR_MONTH}',
                'value'    => date ( 'm' )
            ],
            (object) [
                'variable' => '{VAR_DAY}',
                'value'    => date ( 'd' )
            ]
        ];
    }

}