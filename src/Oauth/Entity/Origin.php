<?php
namespace Oauth\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="Origin")
 */

class Origin {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="name",type="string",length=50)
     */
    protected $name;
    
    
    /**
     * @ORM\Column(name="enabled",type="boolean",length=1)
     */
    protected $enabled;
    
  

    public function getData(){
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'enabled' => $this->enabled,

        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->name       = $data['name'] ?? null;
        $this->enabled    = $data['enabled'] ?? null;
    }

    

}
