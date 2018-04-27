
<?php
namespace Oauth\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="SecureCode")
 * 
 * @ORM\ManyToOne(targetEntity="\Oauth\Entity\SecureCodeType")
 * @ORM\JoinColumn(name="idSecureCodeType", referencedColumnName="id", nullable=false)
 * 
 * @ORM\ManyToOne(targetEntity="\Oauth\Entity\User")
 * @ORM\JoinColumn(name="idUser", referencedColumnName="id", nullable=false)
 */

class SecureCode {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="idSecureCodeType",type="integer",length=11)
     */
    protected $idSecureCodeType;
    
    
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
            'idSecureCodeType' => $this->dSecureCodeType,
            'idUser' => $this->idUser,
            'token' => $this->token,
            'expire' => $this->expire,
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->idSecureCodeType       = $data['idSecureCodeType'] ?? null;
        $this->idUser    = $data['idUser'] ?? null;
        $this->token    = $data['token'] ?? null;
        $this->expire    = $data['expire'] ?? null;
        
    }

    

}
