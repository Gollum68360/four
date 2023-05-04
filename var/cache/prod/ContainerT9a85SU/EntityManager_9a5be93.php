<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd7d76 = null;
    private $initializerea51a = null;
    private static $publicPropertiese9d69 = [
        
    ];
    public function getConnection()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getConnection', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getMetadataFactory', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getExpressionBuilder', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'beginTransaction', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getCache', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getCache();
    }
    public function transactional($func)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'transactional', array('func' => $func), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'wrapInTransaction', array('func' => $func), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'commit', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->commit();
    }
    public function rollback()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'rollback', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getClassMetadata', array('className' => $className), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'createQuery', array('dql' => $dql), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'createNamedQuery', array('name' => $name), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'createQueryBuilder', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'flush', array('entity' => $entity), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'clear', array('entityName' => $entityName), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->clear($entityName);
    }
    public function close()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'close', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->close();
    }
    public function persist($entity)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'persist', array('entity' => $entity), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'remove', array('entity' => $entity), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'refresh', array('entity' => $entity), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'detach', array('entity' => $entity), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'merge', array('entity' => $entity), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getRepository', array('entityName' => $entityName), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'contains', array('entity' => $entity), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getEventManager', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getConfiguration', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'isOpen', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getUnitOfWork', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getProxyFactory', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'initializeObject', array('obj' => $obj), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'getFilters', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'isFiltersStateClean', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'hasFilters', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return $this->valueHolderd7d76->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerea51a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderd7d76) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd7d76 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderd7d76->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, '__get', ['name' => $name], $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        if (isset(self::$publicPropertiese9d69[$name])) {
            return $this->valueHolderd7d76->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7d76;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderd7d76;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7d76;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderd7d76;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, '__isset', array('name' => $name), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7d76;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderd7d76;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, '__unset', array('name' => $name), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7d76;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd7d76;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, '__clone', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        $this->valueHolderd7d76 = clone $this->valueHolderd7d76;
    }
    public function __sleep()
    {
        $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, '__sleep', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
        return array('valueHolderd7d76');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerea51a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerea51a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerea51a && ($this->initializerea51a->__invoke($valueHolderd7d76, $this, 'initializeProxy', array(), $this->initializerea51a) || 1) && $this->valueHolderd7d76 = $valueHolderd7d76;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd7d76;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd7d76;
    }
}
