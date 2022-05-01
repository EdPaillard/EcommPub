<?php

namespace ContainerXVyMlxY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5ee01 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer84de3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties884b7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getConnection', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getMetadataFactory', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getExpressionBuilder', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'beginTransaction', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getCache', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getCache();
    }

    public function transactional($func)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'transactional', array('func' => $func), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'wrapInTransaction', array('func' => $func), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'commit', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->commit();
    }

    public function rollback()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'rollback', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getClassMetadata', array('className' => $className), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'createQuery', array('dql' => $dql), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'createNamedQuery', array('name' => $name), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'createQueryBuilder', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'flush', array('entity' => $entity), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'clear', array('entityName' => $entityName), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->clear($entityName);
    }

    public function close()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'close', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->close();
    }

    public function persist($entity)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'persist', array('entity' => $entity), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'remove', array('entity' => $entity), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'refresh', array('entity' => $entity), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'detach', array('entity' => $entity), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'merge', array('entity' => $entity), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getRepository', array('entityName' => $entityName), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'contains', array('entity' => $entity), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getEventManager', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getConfiguration', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'isOpen', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getUnitOfWork', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getProxyFactory', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'initializeObject', array('obj' => $obj), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'getFilters', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'isFiltersStateClean', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'hasFilters', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return $this->valueHolder5ee01->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer84de3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5ee01) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5ee01 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5ee01->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, '__get', ['name' => $name], $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        if (isset(self::$publicProperties884b7[$name])) {
            return $this->valueHolder5ee01->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee01;

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

        $targetObject = $this->valueHolder5ee01;
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
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee01;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5ee01;
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
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, '__isset', array('name' => $name), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee01;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5ee01;
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
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, '__unset', array('name' => $name), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee01;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5ee01;
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
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, '__clone', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        $this->valueHolder5ee01 = clone $this->valueHolder5ee01;
    }

    public function __sleep()
    {
        $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, '__sleep', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;

        return array('valueHolder5ee01');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer84de3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer84de3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer84de3 && ($this->initializer84de3->__invoke($valueHolder5ee01, $this, 'initializeProxy', array(), $this->initializer84de3) || 1) && $this->valueHolder5ee01 = $valueHolder5ee01;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5ee01;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5ee01;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
