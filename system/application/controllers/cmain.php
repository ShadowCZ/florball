<?php  if ( ! defined('BASEPATH')) {exit('No direct script access allowed');}
/**
 * Controller for main page
 * 
 * @author Radim Res
 * @package floorball
 * @version 0.1.1.0
 */

class CMain extends MY_Controller{

    public function __construct($_internal_call = false) {
        parent::__construct($_internal_call);
    }

	// tato metoda se provede pokud je request cmain/
    public function index() {
        if( $this->session->userdata('login') == 1) {
            $this->showBlank();
        } else {
            $this->showLogin();
        }
    }

	// prázdný formulář po přihlášení
	// TODO: dle role zobrazit příslušné menu
    public function showBlank() {
        $this->s->displayWithHeader('dsp_blank.php', $this->aJavascriptFiles, $this->aCssFiles );
    }
    
	// zobrazí formulář pro přihlášení
    public function showLogin() {
        $this->s->displayWithHeader('dsp_login.php', $this->aJavascriptFiles, $this->aCssFiles );
    }

	// submit přihlášení
    public function doLogin() {
        $this->load->model(array('mplayer'));
        $this->mplayer->login = $this->input->post('login');
        $this->mplayer->pass = $this->input->post('pass');

        if ($this->mplayer->authentication() && $this->mplayer->isActive()) {
            $this->mplayer->lastIp = $_SERVER['REMOTE_ADDR'];
            $this->mplayer->update();

            $aSession = array(
                'login' => 1,
                'player_id' => $this->mplayer->ID,
                'user_rights' => $this->mplayer->rights,
            );
			// nastaví session
            $this->session->set_userdata($aSession);
            redirect('cmain/', 'location');
        } else {
            // TODO: chybová hláška
            $this->showLogin();
        }
    }
    
	// odhlášení ze systému
    public function logout() {
        $this->session->set_userdata(array ('login' => 0));
        // TODO: hláška odhlášení
        $this->showLogin();
    }
}
