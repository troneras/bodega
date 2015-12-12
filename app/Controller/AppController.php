<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array('DebugKit.Toolbar','Session');


	// Argumento: Model.field
	function getEnumValues($ModelField){

                // split input into Model and Fieldname
                $m = explode('.', $ModelField);
                if ($m[0] == $ModelField) {
                        return false;
                } else {                

                        (! ClassRegistry::isKeySet($m[0])) ? $this->loadModel($m[0]): false;
                        $type = $this->$m[0]->getColumnType($m[1]);
                        preg_match_all("/'(.*?)'/", $type, $enums);
                        foreach ($enums[1] as $value){$enumList[$value] = $value;}
                        return $enumList;
                }                
        }
}
