
<?php
namespace Ejercicio\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="UserToken")
 */

class UserToken {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="idUser",type="integer",length=11)
     */
    protected $idUser;
    
    
    /**
     * @ORM\Column(name="idPlataform",type="integer",length=11)
     */
    protected $idPlataform;
    
    
    /**
     * @ORM\Column(name="idClient",type="integer",length=11)
     */
    protected $idClient;
    
     /**
     * @ORM\Column(name="idAccessToken",type="integer",length=11)
     */
    protected $idAccessToken; 
    
    /**
     * @ORM\Column(name="idRefreshToken",type="integer",length=11)
     */
    protected $idRefreshToken;
    
    /**
     * @ORM\Column(name="pubK",type="integer",length=11)
     */
    protected $pubK; 
    
    /**
     * @ORM\Column(name="lastActivity",type="string",length=12)
     */
    protected $lastActivity;
    
    /**
     * @ORM\Column(name="ip",type="string",length=50)
     */
    protected $ip;



    public function getData(){
        return array(
            'id' => $this->id,
            'idUser' => $this->idUser,
            'idPlataform' => $this->idPlataform,
            'idClient'=> $this->idClient,
            'idAccessToken' => $this->idAccessToken,
            'idRefreshToken' => $this->idRefreshToken,
            'pubK' => $this->pubK,
            'lastActivity'=> $this->lastActivity,
            'ip'=> $this->ip,
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->idUser       = $data['idUser'] ?? null;
        $this->idPlataform    = $data['idPlataform'] ?? null;
        $this->idClient        = $data['idClient'] ?? null;
        $this->idAccessToken           = $data['idAccessToken'] ?? null;
        $this->idRefreshToken       = $data['idRefreshToken'] ?? null;
        $this->pubK    = $data['pubK'] ?? null;
        $this->lastActivity        = $data['lastActivity'] ?? null;
        $this->ip        = $data['ip'] ?? null;
    }

    

}
