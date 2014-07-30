<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('MOODLE_INTERNAL') || die;

/*$page = new admin_externalpage('courseattendance', new lang_string('pluginname','local_courseattendancesilex'), "{$CFG->wwwroot}/local/courseattendancesilex/index.php");
$ADMIN->add('root', $page);*/
if ($hassiteconfig) {
    // Needs this condition or there is error on login page.
    $ADMIN->add('root', new admin_category('local', new lang_string('local')));
    $ADMIN->add('local', new admin_externalpage('ucl_customreports',get_string('pluginname', 'local_ucl_customreports'),
                                        new moodle_url('/local/ucl_customreports/index.php')));
}
