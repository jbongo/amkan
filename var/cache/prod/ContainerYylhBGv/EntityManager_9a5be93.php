<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder72951 = null;
    private $initializer898b0 = null;
    private static $publicProperties98681 = [
        
    ];
    public function getConnection()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getConnection', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getMetadataFactory', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getExpressionBuilder', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'beginTransaction', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getCache', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getCache();
    }
    public function transactional($func)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'transactional', array('func' => $func), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'wrapInTransaction', array('func' => $func), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'commit', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->commit();
    }
    public function rollback()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'rollback', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getClassMetadata', array('className' => $className), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'createQuery', array('dql' => $dql), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'createNamedQuery', array('name' => $name), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'createQueryBuilder', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'flush', array('entity' => $entity), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'clear', array('entityName' => $entityName), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->clear($entityName);
    }
    public function close()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'close', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->close();
    }
    public function persist($entity)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'persist', array('entity' => $entity), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'remove', array('entity' => $entity), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'refresh', array('entity' => $entity), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'detach', array('entity' => $entity), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'merge', array('entity' => $entity), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getRepository', array('entityName' => $entityName), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'contains', array('entity' => $entity), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getEventManager', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getConfiguration', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'isOpen', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getUnitOfWork', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getProxyFactory', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'initializeObject', array('obj' => $obj), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'getFilters', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'isFiltersStateClean', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'hasFilters', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return $this->valueHolder72951->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer898b0 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder72951) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder72951 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder72951->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, '__get', ['name' => $name], $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        if (isset(self::$publicProperties98681[$name])) {
            return $this->valueHolder72951->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72951;
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
        $targetObject = $this->valueHolder72951;
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
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72951;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder72951;
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
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, '__isset', array('name' => $name), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72951;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder72951;
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
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, '__unset', array('name' => $name), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72951;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder72951;
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
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, '__clone', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        $this->valueHolder72951 = clone $this->valueHolder72951;
    }
    public function __sleep()
    {
        $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, '__sleep', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
        return array('valueHolder72951');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer898b0 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer898b0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer898b0 && ($this->initializer898b0->__invoke($valueHolder72951, $this, 'initializeProxy', array(), $this->initializer898b0) || 1) && $this->valueHolder72951 = $valueHolder72951;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder72951;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder72951;
    }
}
