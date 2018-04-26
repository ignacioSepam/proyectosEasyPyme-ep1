<?php
namespace oauth\entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="Oauth_clients")
 */

class Oauth_clients {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="secret",type="string",length=100)
     */
    protected $secret;
    
    


    public function getData(){
        return array(
            'id' => $this->id,
            'secret' => $this->secret,
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->secret       = $data['secret'] ?? null;
        
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
     * Set secret.
     *
     * @param string $secret
     *
     * @return Oauth_clients
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret.
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }
}

    

   