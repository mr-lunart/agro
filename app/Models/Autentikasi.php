<?php

namespace App\Models;

class Autentikasi extends DB_HANDLER
{
    protected $database = [
        "tabelUser" => '`client`',
        "tabelConsultant" => 'consultant',
        "dataUser"  => ' `uid`, `nama`, `user`, `pass` ',
        "dataConsultant" => ' `uid`, `nama`, `user`, `pass` '
    ];

    public function getAkunKlien($where){
        
        $data = $this -> database;
        $query = $this->DB_READ($data['tabelUser'],$data['dataUser'],$where);
        return $query;
    }

    public function getAkunKonsultan($where){
        
        $data = $this -> database;
        $query = $this->DB_READ($data['tabelConsultant'],$data['dataConsultant'],$where);
        return $query;
    }

}

?>