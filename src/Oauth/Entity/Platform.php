
<?php
namespace Ejercicio\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="Platform")
 */

class Platform {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="info",type="string",length=100)
     */
    protected $info;
    
    


    public function getData(){
        return array(
            'id' => $this->id,
            'info' => $this->info,
            
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->info       = $data['info'] ?? null;
        
    }

    

}
