
<?php
namespace Ejercicio\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="User")
 */

class User {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="userName",type="string",length=50)
     */
    protected $userName;
    
    
    /**
     * @ORM\Column(name="email",type="string",length=50)
     */
    protected $email;
    
    
    /**
     * @ORM\Column(name="phone",type="string",length=50)
     */
    protected $phone;
    
     /**
     * @ORM\Column(name="salt",type="string",length=100)
     */
    protected $salt;
    
     /**
     * @ORM\Column(name="hash",type="string",length=100)
     */
    protected $hash;
    
     /**
     * @ORM\Column(name="isSecureCodeActive",type="boolean",length=1)
     */
    protected $isSecureCodeActive;
    
     /**
     * @ORM\Column(name="isBlocked",type="boolean",length=1)
     */
    protected $isBlocked;
     /**
     * @ORM\Column(name="isVerified",type="boolean",length=1)
     */
    protected $isVerified;
    
     /**
     * @ORM\Column(name="isAcceptedTerms",type="boolean",length=1)
     */
    protected $isAcceptedTerms;
    
     /**
     * @ORM\Column(name="acceptedTermsDatetime",type="string",length=12)
     */
    protected $acceptedTermsDatetime;
    
    /**
     * @ORM\Column(name="lastLogin",type="string",length=12)
     */
    protected $lastLogin;
    
    /**
     * @ORM\Column(name="idOrigin",type="int",length=12)
     */
    protected $idOrigin;
    
    

    public function getData(){
        return array(
            'id' => $this->id,
            'userName' => $this->userName,
            'email' => $this->email,
            'phone'=> $this->phone,
            'salt' => $this->salt,
            'hash' => $this->hash,
            'isSecureCodeActive' => $this->isSecureCodeActive,
            'isBlocked'=> $this->isBlocked,
            'isVerified' => $this->isVerified,
            'isAcceptedTerms' => $this->isAcceptedTerms,
            'acceptedTermsDatetime' => $this->acceptedTermsDatetime,
            'lastLogin'=> $this->lastLogin,
            'idOrigin'=> $this->idOrigin,
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->userName       = $data['userName'] ?? null;
        $this->email    = $data['email'] ?? null;
        $this->phone        = $data['phone'] ?? null;
        $this->salt           = $data['salt'] ?? null;
        $this->hash       = $data['hash'] ?? null;
        $this->isSecureCodeActive    = $data['isSecureCodeActive'] ?? null;
        $this->isBlocked        = $data['isBlocked'] ?? null;
        $this->isVerified           = $data['isVerified'] ?? null;
        $this->isAcceptedTerms       = $data['isAcceptedTerms'] ?? null;
        $this->acceptedTermsDatetime    = $data['acceptedTermsDatetime'] ?? null;
        $this->lastLogin        = $data['lastLogin'] ?? null;
        $this->idOrigin        = $data['idOrigin'] ?? null;
    }

    

}
