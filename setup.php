<?php

define('MYEXAMPLE_VERSION', '1.0');

/**
 * Init the hooks of the plugins - Needed
 *
 * @return void
 */
function plugin_init_RemoverCampo() {
   global $PLUGIN_HOOKS;

   //required!
   $PLUGIN_HOOKS['csrf_compliant']['RemoverCampo'] = true;
   $PLUGIN_HOOKS['add_javascript']['RemoverCampo']="js/js.js";
   /**
      * Plugin::registerClass('RemoverCampoconfig', [
    *     'addtabon' => ['Entity']
     * ]);
      *
     * 
     */
   //some code here, like call to Plugin::registerClass(), populating PLUGIN_HOOKS, ...
}

/**
 * Get the name and the version of the plugin - Needed
 *
 * @return array
 */
function plugin_version_RemoverCampo() {
   return [
      'name'           => 'RemoverCampo',
      'version'        => MYEXAMPLE_VERSION,
      'author'         => 'Carlos Rosa',
      'license'        => 'GLPv3',
      'homepage'       => 'https://github.com/dowriqrosa',
      'requirements'   => [
         'glpi'   => [
            'min' => '10.0'
         ]
      ]
   ];
}

/**
 * Optional : check prerequisites before install : may print errors or add to message after redirect
 *
 * @return boolean
 */
function plugin_RemoverCampo_check_prerequisites() {
   //do what the checks you want
   return true;
}

/**
 * Check configuration process for plugin : need to return true if succeeded
 * Can display a message only if failure and $verbose is true
 *
 * @param boolean $verbose Enable verbosity. Default to false
 *
 * @return boolean
 */
function plugin_RemoverCampo_check_config($verbose = false) {
   if (true) { // Your configuration check
      return true;
   }

   if ($verbose) {
      echo "Installed, but not configured";
   }
   return false;
}
