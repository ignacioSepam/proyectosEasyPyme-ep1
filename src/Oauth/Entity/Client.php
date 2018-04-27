
<?php
namespace Oauth\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="Client")
 */

class Client {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="key",type="string",length=100)
     */
    protected $key;
    
    
    /**
     * @ORM\Column(name="expire",type="string",length=12)
     */
    protected $expire;
    
    
    /**
     * @ORM\Column(name="pubK",type="integer",length=11)
     */
    protected $pubK;
    
    /**
     * 
     * @ORM\Column(name="prvK",type="integer",length=11)
     */
    protected $prvK;


    public function getData(){
        return array(
            'id' => $this->id,
            'key' => $this->key,
            'expire' => $this->$expire,
            'pubK'=> $this->pubK,
            'prvK'=> $this->prvK
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->key       = $data['key'] ?? null;
        $this->expire    = $data['expire'] ?? null;
        $this->pubK        = $data['pubK'] ?? null;
        $this->prvK        = $data['prvK'] ?? null;
        
    }

    

}
