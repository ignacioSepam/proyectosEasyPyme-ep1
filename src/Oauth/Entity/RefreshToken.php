
<?php
namespace Ejercicio\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="RefreshToken")
 */

class RefreshToken {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="token",type="string",length=100)
     */
    protected $token;
    
    
    /**
     * @ORM\Column(name="expire",type="string",length=12)
     */
    protected $expire;
    


    public function getData(){
        return array(
            'id' => $this->id,
            'token' => $this->token,
            'expire' => $this->expire,
            
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->token       = $data['token'] ?? null;
        $this->expire    = $data['expire'] ?? null;
       
    }

    

}
