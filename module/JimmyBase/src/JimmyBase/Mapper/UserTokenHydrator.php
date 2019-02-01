<?php

namespace JimmyBase\Mapper;

use Zend\Stdlib\Hydrator\ClassMethods;
use JimmyBase\Entity\UserTokenInterface as UserTokenEntityInterface;

class UserTokenHydrator extends ClassMethods
{
    /**
     * Extract values from an object
     *
     * @param  object $object
     * @return array
     * @throws Exception\InvalidArgumentException
     */
    public function extract($object)
    {
		
         if (!$object instanceof UserTokenEntityInterface) {
            throw new Exception\InvalidArgumentException('$object must be an instance of JimmyBase\Entity\UserTokenEntityInterface');
        }

        /* @var $object WidgetInterface*/
        $data = parent::extract($object);
        return $data;
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  object $object
     * @return UserInterface
     * @throws Exception\InvalidArgumentException
     */
    public function hydrate(array $data, $object)
    {		
	
        if (!$object instanceof UserTokenEntityInterface) {
            throw new Exception\InvalidArgumentException('$object must be an instance of JimmyBase\Entity\UserTokenEntityInterface');
        }
		//print_r($data);
		//print_r($object);

        return parent::hydrate($data, $object);
    }

    protected function mapField($keyFrom, $keyTo, array $array)
    {
        $array[$keyTo] = $array[$keyFrom];
        unset($array[$keyFrom]);
        return $array;
    }
	
	
}
