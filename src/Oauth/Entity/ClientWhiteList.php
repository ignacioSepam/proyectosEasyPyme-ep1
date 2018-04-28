<?php
namespace Oauth\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="ClientWhiteList")
 * @ORM\ManyToOne(targetEntity="\Oauth\Entity\Client")
 * @ORM\JoinColumn(name="idClient", referencedColumnName="id", nullable=false)
 */

class ClientWhiteList {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="idClient",type="integer",length=11)
     */
    protected $idClient;
    
    
    /**
     * @ORM\Column(name="uri",type="string",length=250)
     */
    protected $uri;
    
    
    public function getData(){
        return array(
            'id' => $this->id,
            'idClient' => $this->idClient,
            'uri' => $this->uri
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->idClient       = $data['idClient'] ?? null;
        $this->uri    = $data['uri'] ?? null;
        
    }

    

}
