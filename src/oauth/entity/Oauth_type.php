<?php
namespace oauth\entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="Oauth_type")
 */

class Oauth_type {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="name",type="string",length=100)
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
     * Set name.
     *
     * @param string $name
     *
     * @return Oauth_type
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

    

