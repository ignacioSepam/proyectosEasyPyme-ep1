<?php
namespace Oauth\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="AuthToken")
 */

class AuthToken {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="idAuthTokenType",type="integer",length=11)
     */
    protected $idAuthTokenType;
    
    
    /**
     * @ORM\Column(name="idUser",type="integer",length=11)
     */
    protected $idUser;
    
    /**
     * @ORM\Column(name="token",type="string",length=20)
     */
    protected $token;
    
    /**
     * @ORM\Column(name="expire",type="string",length=12)
     */
    protected $expire;
    
   

    public function getData(){
        return array(
            'id' => $this->id,
            'idAuthTokenType' => $this->idAuthTokenType,
            'idUser' => $this->idUser,
            'token' => $this->token,
            'expire' => $this->expire,
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->idAuthTokenType       = $data['idAuthTokenType'] ?? null;
        $this->idUser    = $data['idUser'] ?? null;
        $this->token    = $data['token'] ?? null;
        $this->expire    = $data['expire'] ?? null;
        
    }

    

}
