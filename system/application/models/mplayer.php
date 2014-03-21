<?php  if ( ! defined('BASEPATH')) {exit('No direct script access allowed');}

/**
 * Model for table player
 * 
 * @author    Radim Res
 * @package   banka
 * @version   0.1.1.0
 */
class MPlayer extends MY_Model
{

    /**
     * Array of class attributes corresponding to columns in a table
     *
     * @access protected
     * @var    array
     */
    protected $_cols = array(
        'ID' => array(
            'column_name' => 'id_player',
        ),
		/* Pro vazbu 1:N - príklad
        'role' => array(
            'column_name' => 'id_role',
            'relationship' => array(
                'type' => 'has_one',
                'table' => 'role',
                'class' => 'MRole'
            )
        ),
		*/
        'login' => array(
            'column_name' => 'login',
        ),
        'pass' => array(
            'column_name' => 'password',
        ),
        'active' => array(
            'column_name' => 'active',
        ),
        'lastIp' => array(
            'column_name' => 'last_ip',
        ),
    );
    
    /**
     * Table name
     *
     * @access protected
     * @var    string
     */
    protected $_base_table = 'player';

    /**
     * Returns ID of player
     *
     * @access public
     * @return int
     */
    public function  __toString() {
        return $this->ID;
    }

    public function loginExist() {
    // TODO: šlo by použít active record
		$sql = "SELECT login
               FROM player
               WHERE login='" . $this->login . "'";

        $resources = $this->db->query( $sql );
        if ($resources->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

	public function authentication() {
	// TODO: šlo by použít active record
         $sql = "SELECT *
               FROM player
               WHERE login='" . $this->login . "' AND password='" . $this->pass . "'";

        $resources = $this->db->query( $sql );

        if (($row = current($resources->result())) == false) return false;
		
		$map = $this->getMap();
        foreach ($row as $key => $att) {
            $this->$map[$key] = $att;
        }
		
        return true;
    }
	
    public function isActive () {
        return $this->active == 1 ? true : false;
    }
}