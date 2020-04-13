<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;

class Utilisateur extends Model implements Authenticatable{
	use BasicAuthenticatable;
	protected $fillable = ['email','mot_de_passe'];

	public function getAuthPassword() {
		return $this->mot_de_passe;
	}

	public function getRememberTokenName() {
		return '';
	}
}