<?php
/**
 * DASBiT
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @version $Id$
 */

/**
 * Plugin to handle user authentication
 */
class DASBiT_Plugin_User implements DASBiT_Plugin
{
    /**
     * Defined by DASBiT_Plugin
     *
     * @param DASBiT_Irc_Controller $controller
     */
    public function __construct(DASBiT_Irc_Controller $controller)
    {
        $controller->registerCommand($this, 'login', 'login');
    }
    
    /**
     * Authenticate a user
     *
     * @param DASBiT_Irc_Request  $request
     */
    public function login(DASBiT_Irc_Request $request)
    {
        
    }
}