<?php

require_once("model/builder/AbstractBuilder.php");
require_once("model/Utilisateur.php");
require_once("model/Role.php");

class BuilderLogin extends AbstractBuilder {

    const FIELD_LOGIN = "LOGIN";
    const FIELD_PASSWORD = "PASSWORD";
    const FIELD_STAY_CONNECTED = "STAY_CONNECTED";

    public function __construct($data, $error = null) {
        parent::__construct($data, $error);
    }

	public static function buildFromUtilisateur(Utilisateur $Utilisateur) {
		return new BuilderUtilisateur(array(
			BuilderUtilisateur::FIELD_LOGIN => $Utilisateur->getLogin(),
			BuilderUtilisateur::FIELD_PASSWORD => $Utilisateur->getPassword()
		));
	}

    public function createModel() {
        $u = new Utilisateur();

        $u->setLogin($this->data[BuilderUtilisateur::FIELD_LOGIN]);
        $u->setPassword($this->data[BuilderUtilisateur::FIELD_LOGIN]);

        return $u;
    }

    public function isValid() {
        $this->error = array();

        if(empty($this->data[BuilderUtilisateur::FIELD_LOGIN])) {
            $this->error[BuilderUtilisateur::FIELD_LOGIN] = "Le login est obligatoire";
        }

        if(empty($this->data[BuilderUtilisateur::FIELD_PASSWORD])) {
            $this->error[BuilderUtilisateur::FIELD_PASSWORD] = "Le mot de passe est obligatoire";
        }

        return count($this->error) == 0;
    }

}
