<?php

namespace ContainerVcfxQQM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere49b8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer66011 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9399e = [
        
    ];

    public function getConnection()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getConnection', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getMetadataFactory', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getExpressionBuilder', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'beginTransaction', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getCache', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'transactional', array('func' => $func), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->transactional($func);
    }

    public function commit()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'commit', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->commit();
    }

    public function rollback()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'rollback', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getClassMetadata', array('className' => $className), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'createQuery', array('dql' => $dql), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'createNamedQuery', array('name' => $name), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'createQueryBuilder', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'flush', array('entity' => $entity), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'clear', array('entityName' => $entityName), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->clear($entityName);
    }

    public function close()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'close', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->close();
    }

    public function persist($entity)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'persist', array('entity' => $entity), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'remove', array('entity' => $entity), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'refresh', array('entity' => $entity), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'detach', array('entity' => $entity), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'merge', array('entity' => $entity), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'contains', array('entity' => $entity), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getEventManager', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getConfiguration', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'isOpen', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getUnitOfWork', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getProxyFactory', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'initializeObject', array('obj' => $obj), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'getFilters', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'isFiltersStateClean', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'hasFilters', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return $this->valueHoldere49b8->hasFilters();
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

        $instance->initializer66011 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere49b8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere49b8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere49b8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, '__get', ['name' => $name], $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        if (isset(self::$publicProperties9399e[$name])) {
            return $this->valueHoldere49b8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere49b8;

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

        $targetObject = $this->valueHoldere49b8;
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
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere49b8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere49b8;
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
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, '__isset', array('name' => $name), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere49b8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere49b8;
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
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, '__unset', array('name' => $name), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere49b8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere49b8;
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
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, '__clone', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        $this->valueHoldere49b8 = clone $this->valueHoldere49b8;
    }

    public function __sleep()
    {
        $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, '__sleep', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;

        return array('valueHoldere49b8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer66011 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer66011;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer66011 && ($this->initializer66011->__invoke($valueHoldere49b8, $this, 'initializeProxy', array(), $this->initializer66011) || 1) && $this->valueHoldere49b8 = $valueHoldere49b8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere49b8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere49b8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
