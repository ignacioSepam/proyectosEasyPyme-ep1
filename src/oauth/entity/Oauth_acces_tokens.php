<?php
namespace oauth\entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="Oauth_acces_tokens")
 */

class Oauth_acces_tokens {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="viewId",type="string",length=100)
     */
    protected $userId;
    
    /**
     *@ORM\Column(name="token",type="string",length=100)
     */
    protected $token;
    
    
    /**
     * @ORM\Column(name="expires",type="string",length=100)
     */
    protected $expires;
    
    
    /**
     * @ORM\Column(name="idClient",type="string")
     */
    protected $idClient;


    public function getData(){
        return array(
            'id' => $this->id,
            'userId' => $this->userId,
            'token'=>$this->token,
            'expires' => $this->expires,
            'idClient'=> $this->idClient
        );
    }
    
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->userId       = $data['userId'] ?? null;
        $this->token        = $data['token'] ?? null;
        $this->expires    = $data['expires'] ?? null;
        $this->idClient        = $data['idClient'] ?? null;
    }
 /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set viewId.
     *
     * @param string $viewId
     *
     * @return Oauth_acces_tokens
     */
    public function setuserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get viewId.
     *
     * @return string
     */
    public function getuserId()
    {
        return $this->userId;
    }

    /**
     * Set token.
     *
     * @param string $token
     *
     * @return Oauth_acces_tokens
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set expires.
     *
     * @param string $expires
     *
     * @return Oauth_acces_tokens
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires.
     *
     * @return string
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Set idClient.
     *
     * @param string $idClient
     *
     * @return Oauth_acces_tokens
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient.
     *
     * @return string
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}

    

    

