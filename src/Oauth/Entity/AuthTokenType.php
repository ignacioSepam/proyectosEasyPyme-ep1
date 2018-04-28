<?php
namespace Oauth\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="SecureCodeType")
 */

class SecureCodeType {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="name",type="string",length=20)
     */
    protected $name;
    
    
   

    public function getData(){
        return array(
            'id' => $this->id,
            'name' => $this->name,
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->name       = $data['name'] ?? null;
      
        
    }

    

}
