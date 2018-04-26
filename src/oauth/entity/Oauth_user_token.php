<?php
namespace entity\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="Oauth_user_token")
 */

class Oauth_user_token {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="idAccesToken",type="string",length=100)
     */
    protected $idAccesToken;
    
    
    /**
     * @ORM\Column(name="idRefreshToken",type="string",length=100)
     */
    protected $idRefreshToken;
    
    
    /**
     * @ORM\Column(name="idType",type="string")
     */
    protected $idType;
    
     /**
     * @ORM\Column(name="idUser",type="string")
     */
    protected $idUser;
    
    


    public function getData(){
        return array(
            'id' => $this->id,
            'idAccesToken' => $this->idAccesToken,
            'idRefreshToken' => $this->idRefreshToken,
            'idType'=> $this->idType,
            'idUser'=> $this->idUser
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->idAccesToken       = $data['idAccesToken'] ?? null;
        $this->idRefreshToken    = $data['idRefreshToken'] ?? null;
        $this->idType        = $data['idType'] ?? null;
        $this->idUser        = $data['idUser'] ?? null;
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
    
    public function setId($id)
    {
        $this->id=$id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Empleado
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos.
     *
     * @param string $apellidos
     *
     * @return Empleado
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos.
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Empleado
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set idAccesToken.
     *
     * @param string $idAccesToken
     *
     * @return Oauth_user_token
     */
    public function setIdAccesToken($idAccesToken)
    {
        $this->idAccesToken = $idAccesToken;

        return $this;
    }

    /**
     * Get idAccesToken.
     *
     * @return string
     */
    public function getIdAccesToken()
    {
        return $this->idAccesToken;
    }

    /**
     * Set idRefreshToken.
     *
     * @param string $idRefreshToken
     *
     * @return Oauth_user_token
     */
    public function setIdRefreshToken($idRefreshToken)
    {
        $this->idRefreshToken = $idRefreshToken;

        return $this;
    }

    /**
     * Get idRefreshToken.
     *
     * @return string
     */
    public function getIdRefreshToken()
    {
        return $this->idRefreshToken;
    }

    /**
     * Set idType.
     *
     * @param string $idType
     *
     * @return Oauth_user_token
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType.
     *
     * @return string
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set idUser.
     *
     * @param string $idUser
     *
     * @return Oauth_user_token
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser.
     *
     * @return string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
