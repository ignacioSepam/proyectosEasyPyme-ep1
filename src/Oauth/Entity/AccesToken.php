<?php
namespace Oauth\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="AccesToken")
 */

class AccesToken {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="AccesToken",type="string",length=250)
     */
    protected $AccesToken;
    
    
    /**
     * @ORM\Column(name="expire",type="string",length=12)
     */
    protected $expire;
    
   

    public function getData(){
        return array(
            'id' => $this->id,
            'AccesToken' => $this->AccesToken,
            'expire' => $this->expire,
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->AccesToken       = $data['AccesToken'] ?? null;
        $this->expire    = $data['expire'] ?? null;
        
    }

    

}
