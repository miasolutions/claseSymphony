<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\Query\Query;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class AppBundleDocumentUserHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id']) || (! empty($this->class->fieldMappings['id']['nullable']) && array_key_exists('_id', $data))) {
            $value = $data['_id'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['id']['type'];
                $return = $value instanceof \MongoId ? (string) $value : $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['username']) || (! empty($this->class->fieldMappings['username']['nullable']) && array_key_exists('username', $data))) {
            $value = $data['username'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['username']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['username']->setValue($document, $return);
            $hydratedData['username'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['password']) || (! empty($this->class->fieldMappings['password']['nullable']) && array_key_exists('password', $data))) {
            $value = $data['password'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['password']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['password']->setValue($document, $return);
            $hydratedData['password'] = $return;
        }

        /** @Field(type="collection") */
        if (isset($data['roles']) || (! empty($this->class->fieldMappings['roles']['nullable']) && array_key_exists('roles', $data))) {
            $value = $data['roles'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['roles']['type'];
                $return = $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['roles']->setValue($document, $return);
            $hydratedData['roles'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['salt']) || (! empty($this->class->fieldMappings['salt']['nullable']) && array_key_exists('salt', $data))) {
            $value = $data['salt'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['salt']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['salt']->setValue($document, $return);
            $hydratedData['salt'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['isActive']) || (! empty($this->class->fieldMappings['isActive']['nullable']) && array_key_exists('isActive', $data))) {
            $value = $data['isActive'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['isActive']['type'];
                $return = (bool) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['isActive']->setValue($document, $return);
            $hydratedData['isActive'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['isLoggedIn']) || (! empty($this->class->fieldMappings['isLoggedIn']['nullable']) && array_key_exists('isLoggedIn', $data))) {
            $value = $data['isLoggedIn'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['isLoggedIn']['type'];
                $return = (bool) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['isLoggedIn']->setValue($document, $return);
            $hydratedData['isLoggedIn'] = $return;
        }
        return $hydratedData;
    }
}