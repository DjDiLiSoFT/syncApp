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


$TABLE[] = "ALTER TABLE groups ADD syncapp_realm_id TINYINT(1) NOT NULL DEFAULT '-1';";
$TABLE[] = "ALTER TABLE groups ADD syncapp_group_permission_levels TINYINT(1) NOT NULL DEFAULT '0';";
$TABLE[] = "CREATE TABLE `syncapp_members` (`forum_id` INT(100) NOT NULL, `account_id` INT(100) NOT NULL, `deleted` TINYINT(10) NOT NULL DEFAULT '0', PRIMARY KEY (`forum_id`)) DEFAULT CHARSET='utf8' ENGINE='InnoDB';";

?>

