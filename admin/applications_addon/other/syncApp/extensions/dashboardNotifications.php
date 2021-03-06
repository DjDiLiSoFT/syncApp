<?php
/*
 * Copyright (C) syncApp Zze jz3731@gmail.com
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the
 * Free Software Foundation; either version 3 of the License, or (at your
 * option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program. If not, see <http://www.gnu.org/licenses/>.
 */

class dashboardNotifications__syncApp
{

    public function __construct()
    {
        $this->registry = ipsRegistry::instance();
        $this->settings = ipsRegistry::fetchSettings();
        $this->lang     =  $this->registry->getClass('class_localization');
        ipsRegistry::getClass('class_localization')->loadLanguageFile( array( 'public_lang' ), 'syncApp' );
    }

    public function get()
    {
        $warnings = array();

        if ($this->settings['syncapp_enabled_soap'] == 1)
        {
            if( !$this->settings['syncapp_soap_user'] || !$this->settings['syncapp_soap_password'])
            {
                $warnings[] = array( $this->lang->words['soap_connection_info_missing'], $this->lang->words['system_settings_syncapp_general'] );
            }
        }

        else
        {
            $warnings[] = array( $this->lang->words['soap_disabled'], $this->lang->words['system_settings_syncapp_general'] );
        }

        if (!$this->settings['syncapp_mysql_user'])
        {
            $warnings[] = array( $this->lang->words['sql_connection_info_missing'], $this->lang->words['system_settings_syncapp_general'] );
        }

        return $warnings;
    }

}