<?php
namespace entity\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="Oauth_user")
 */

class Oauth_user {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="email",type="string",length=100)
     */
    protected $email;
    
    
    /**
     * @ORM\Column(name="hash",type="string",length=100)
     */
    protected $hash;
    
    
    /**
     * @ORM\Column(name="password",type="string")
     */
    protected $password;
    
    /**
     * @ORM\Column(name="nombre",type="string")
     */
    protected $nombre;
    
    
    /**
     * @ORM\Column(name="apellido1",type="string")
     */
    protected $apellido1;
    
    /**
     * @ORM\Column(name="apellido2",type="string")
     */
    protected $apellido2;
    
    
    
    
    


    public function getData(){
        return array(
            'id' => $this->id,
            'email' => $this->email,
            'hash' => $this->hash,
            'password'=> $this->password,
            'nombre'=> $this->nombre,
            'apellido1'=> $this->apellido1,
            'apellido2'=> $this->apellido2
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->email       = $data['email'] ?? null;
        $this->hash         = $data['hash'] ?? null;
        $this->password     = $data['password'] ?? null;
        $this->nombre       = $data['nombre'] ?? null;
        $this->apellido1    = $data['apellido1'] ?? null;
        $this->apellido2    = $data['apellido2'] ?? null;
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
     * Set email.
     *
     * @param string $email
     *
     * @return Oauth_user
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
     * Set hash.
     *
     * @param string $hash
     *
     * @return Oauth_user
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return Oauth_user
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Oauth_user
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
     * Set apellido1.
     *
     * @param string $apellido1
     *
     * @return Oauth_user
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get apellido1.
     *
     * @return string
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set apellido2.
     *
     * @param string $apellido2
     *
     * @return Oauth_user
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get apellido2.
     *
     * @return string
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }
}
