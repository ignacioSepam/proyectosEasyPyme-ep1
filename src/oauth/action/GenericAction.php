<?php

namespace oauth\action;

abstract class GenericAction {

    protected $serviceDao;
    protected $serviceValidation;

    /**
     * Constructor
     */
    public function __construct() {
        
    }

    /**
     * Obtiene una entidad o listas de entidades segun el parametro proporcionado
     * 
     * @param mixed $id optional default null
     * @param string $getFunc optional default getData
     * metodos recogida, recoge lo que quieras
     * 
     * @return array<Entity>
     */
    public function get($id = null, string $getFunc = 'getData') {
        //interesante el $getFunc='getData' llama al método entity getData para que recupere los valores
        //lo llama por defecto, pero si el día de mañana queremos llamar a otro metodo especifico en  otro lugar solo deberemos 
        //poner la funcion a llamr
        
        // Obtiene la entidad o entidades
        $result = $this->serviceDao->get($id);

        // Devuelve todos los datos de entidad
        return $result->$getFunc;
    }
    
    /**
     * Guarda una entidad
     * 
     * @param Entity $entity
     * @param string $getFunc optional default getData
     * 
     * @return Entity
     * 
     * @throws Exception Cuando no cumple con la validación
     */
    public function insert($entity, string $getFunc = 'getData') {

        // Comprueba que la entidad cumple con la validacion
        //serviceValidation almacena el objeto proyectoValidation
        $this->serviceValidation->checkToInsert($entity);
        
        // Guarda la entidad
        $result = $this->serviceDao->save($entity);

        // Comprueba que ha de devolver las entidades
        if ($getFunc === null) {
            return $result;
        }

        // Devuelve los datos procesados
        return $result -> $getFunc;
    }
    
    
    
    /**
     * Elimina una entidad por id
     * 
     * @param mixed $id
     * 
     * @return boolean
     * 
     * @throws Exception Cuando no cumple con la validación
     */
    public function delete($id) {

        // Obtiene la entidad a eliminar
        $entity = $this->serviceDao->get($id);

        // Comprueba que la entidad cumple con la validacion
        $this->serviceValidation->checkToDelete($entity);

        // Elimina la entidad
        $result = $this->serviceDao->delete($entity);

        // Devuelve el resultado
        return $result;
    }

    private function process(string $getFunc) {
        
        $result = array();

        // Comprueba si es una lista
        if (is_array($entityOrList) === true) {

            // Recorre los elementos
            foreach ($entityOrList as $entity) {
                
                // Recoge los datos de la entidad mediante el metodo get a llamar
                //getFunc=getdata= recoge los datos
                $result[] = $entity->$getFunc();
                //getFunc el método que entra por defecto
            }
        } else {
            
            // Comprueba que la entidad no sea null
            if($entityOrList !== null) {
                // Recoge los datos de la entidad mediante el metodo get a llamar
                $result = $entityOrList->$getFunc();
            }
        }

        // Devuelve los datos ya procesados
        return $result;
    }
}
