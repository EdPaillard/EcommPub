<?php

namespace ContainerKzWndLt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ArrayTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Serializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/AdvancedMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/LazyLoadingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/GraphNavigatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/DeserializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/HandlerRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/Debug/TraceableHandlerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/HandlerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/LazyHandlerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/ObjectConstructorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/DoctrineObjectConstructor.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/UnserializeObjectConstructor.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Accessor/AccessorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Accessor/DefaultAccessorStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/EventDispatcher/EventDispatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/EventDispatcher/EventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/EventDispatcher/LazyEventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/Debug/TraceableEventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/SerializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/SerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/JsonSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/XmlSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/DeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/JsonDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/XmlDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/Parser.php';

        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'metadata_driver' => ['services', 'jms_serializer.metadata_driver', 'getJmsSerializer_MetadataDriverService', true],
        ], [
            'metadata_driver' => '?',
        ]), 'metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(($container->privates['jms_serializer.metadata.traceable_cache'] ?? $container->load('getJmsSerializer_Metadata_TraceableCacheService')));
        $a->setIncludeInterfaces(false);
        $b = new \JMS\SerializerBundle\Debug\TraceableHandlerRegistry(new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jms_serializer.array_collection_handler' => ['privates', 'jms_serializer.array_collection_handler', 'getJmsSerializer_ArrayCollectionHandlerService', true],
            'jms_serializer.constraint_violation_handler' => ['privates', 'jms_serializer.constraint_violation_handler', 'getJmsSerializer_ConstraintViolationHandlerService', true],
            'jms_serializer.datetime_handler' => ['privates', 'jms_serializer.datetime_handler', 'getJmsSerializer_DatetimeHandlerService', true],
            'jms_serializer.iterator_handler' => ['privates', 'jms_serializer.iterator_handler', 'getJmsSerializer_IteratorHandlerService', true],
            'fos_rest.serializer.form_error_handler' => ['privates', 'fos_rest.serializer.form_error_handler', 'getFosRest_Serializer_FormErrorHandlerService', true],
        ], [
            'jms_serializer.array_collection_handler' => '?',
            'jms_serializer.constraint_violation_handler' => '?',
            'jms_serializer.datetime_handler' => '?',
            'jms_serializer.iterator_handler' => '?',
            'fos_rest.serializer.form_error_handler' => '?',
        ])));
        $b->registerHandler(1, 'ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\Common\\Collections\\ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\Common\\Collections\\ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\Common\\Collections\\ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ORM\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ORM\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ORM\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolationList', 'xml', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolationList', 'json', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolation', 'xml', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolation', 'json', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson']);
        $b->registerHandler(1, 'DateTime', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']);
        $b->registerHandler(1, 'DateTime', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']);
        $b->registerHandler(1, 'DateTimeImmutable', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']);
        $b->registerHandler(1, 'DateTimeImmutable', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']);
        $b->registerHandler(1, 'DateInterval', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']);
        $b->registerHandler(1, 'DateInterval', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']);
        $b->registerHandler(1, 'DateTimeInterface', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeInterface']);
        $b->registerHandler(1, 'DateTimeInterface', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeInterface']);
        $b->registerHandler(1, 'Iterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'Iterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'ArrayIterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'ArrayIterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'Generator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'Generator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\Form', 'xml', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\Form', 'json', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormTojson']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormInterface', 'xml', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormInterfaceToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormInterface', 'json', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormInterfaceTojson']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormError', 'xml', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormError', 'json', [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorTojson']);
        $b->registerHandler(2, 'ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\Common\\Collections\\ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\Common\\Collections\\ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\Common\\Collections\\ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ORM\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ORM\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ORM\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'DateTime', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson']);
        $b->registerHandler(2, 'DateTime', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml']);
        $b->registerHandler(2, 'DateTimeImmutable', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson']);
        $b->registerHandler(2, 'DateTimeImmutable', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml']);
        $b->registerHandler(2, 'DateInterval', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson']);
        $b->registerHandler(2, 'DateInterval', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml']);
        $b->registerHandler(2, 'DateTimeInterface', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromJson']);
        $b->registerHandler(2, 'DateTimeInterface', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromXml']);
        $b->registerHandler(2, 'Iterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'Iterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'ArrayIterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'ArrayIterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'Generator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']);
        $b->registerHandler(2, 'Generator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']);
        $c = new \JMS\Serializer\Accessor\DefaultAccessorStrategy();
        $d = new \JMS\SerializerBundle\Debug\TraceableEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jms_serializer.stopwatch_subscriber' => ['privates', 'jms_serializer.stopwatch_subscriber', 'getJmsSerializer_StopwatchSubscriberService', true],
            'jms_serializer.traceable_runs_listener' => ['privates', 'jms_serializer.traceable_runs_listener', 'getJmsSerializer_TraceableRunsListenerService', true],
            'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService', true],
        ], [
            'jms_serializer.stopwatch_subscriber' => '?',
            'jms_serializer.traceable_runs_listener' => '?',
            'jms_serializer.doctrine_proxy_subscriber' => '?',
        ]));
        $d->addListener('serializer.pre_serialize', [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'], NULL, NULL, NULL);
        $d->addListener('serializer.pre_serialize', [0 => 'jms_serializer.traceable_runs_listener', 1 => 'saveRunInfo'], NULL, NULL, NULL);
        $d->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $d->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $d->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ORM\\PersistentCollection');
        $d->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\MongoDB\\PersistentCollection');
        $d->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\PHPCR\\PersistentCollection');
        $d->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $d->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $d->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'ProxyManager\\Proxy\\LazyLoadingInterface');
        $d->addListener('serializer.post_serialize', [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'], NULL, NULL, NULL);
        $e = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
        $e->setOptions(1216);
        $f = new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory();
        $f->setFormatOutput(true);
        $g = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory();
        $g->setOptions(0);

        return $container->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, new \JMS\Serializer\Construction\DoctrineObjectConstructor(($container->services['doctrine'] ?? $container->load('getDoctrineService')), new \JMS\Serializer\Construction\UnserializeObjectConstructor(), 'null'), $c, $d, NULL), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $c, $d, NULL)], ['json' => $e, 'xml' => $f], ['json' => $g, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ($container->services['jms_serializer.serialization_context_factory'] ?? ($container->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->services['jms_serializer.deserialization_context_factory'] ?? ($container->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }
}
