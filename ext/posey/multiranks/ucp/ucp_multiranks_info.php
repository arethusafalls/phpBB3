<?php

/**
 *
 * @package Multi Ranks
 * @copyright (c) 2015 posey
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace posey\multiranks\ucp;

class ucp_multiranks_info
{
    function module()
    {
        global $user;
        return array(
            'filename'	=> '\posey\multiranks\ucp\ucp_multiranks_module',
            'title'	=> 'UCP_MR',
            'version'	=> '1.0.0',
            'modes'	=> array(
                // HACK: used a literal, non localised string for the title. Can't figure out how to apply the string constant 'UCP_MR'
                'manage'		=> array('title' => 'Manage Multi Ranks', 'auth' => 'ext_posey/multiranks', 'cat' => array('UCP_MR')),
            ),
        );
    }
}
