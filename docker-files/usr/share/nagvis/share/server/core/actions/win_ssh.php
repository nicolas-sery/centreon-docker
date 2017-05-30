<?php
/*****************************************************************************
 *
 * win_ssh.php - Custom action module for connecting to hosts via RDP. This
 *               implements the handler function which generates a file to be
 *               downloaded and used to connect to the target hosts.
 *
 * Copyright (c) 2004-2015 NagVis Project (Contact: info@nagvis.org)
 *
 * License:
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2 as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
 *
 *****************************************************************************/

// Config variables to be registered for custom actions of this name
global $configVars;
$configVars = array();

if (!function_exists('handle_action_win_ssh')) {
    function handle_action_win_ssh($MAPCFG, $objId) {
        $host_name = $MAPCFG->getValue($objId, 'host_name');
    
        // Get the host address! erm ... looks a little complicated...
        global $_BACKEND;
        $backendIds = $MAPCFG->getValue($objId, 'backend_id');
        $OBJ = new NagVisHost($backendIds, $host_name);
        $OBJ->setConfiguration($MAPCFG->getMapObject($objId));
        $OBJ->queueState(GET_STATE, DONT_GET_SINGLE_MEMBER_STATES);
        $_BACKEND->execute();
        $OBJ->applyState();
        $host_address = $OBJ->getStateAttr(ADDRESS);
    
        // Now generate the .cmd file for the user which is then (hopefully) handled
        // correctly by the users browser.
        header('Content-Type: application/cmd; charset=utf-8');
        header('Content-Disposition: attachment; filename='.$host_name.'.cmd');
    
        echo "@echo off\n";
        echo "REM # This file has been generated by NagVis.\n";
        echo "REM # \n";
        echo "REM # Simply execute the file to connect to the host via SSH. We assume\n";
        echo "REM # that you have putty installed and in your system path.\n";
        echo "putty -ssh ".$host_address." 22\n";
    }
}

?>
