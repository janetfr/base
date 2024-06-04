<?php

namespace ContainerHkxDorE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcMyCoon_Apps_Backoffice_Backend_KernelTestDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'behat.service_container' => true,
            'kernel' => true,
        ];
        $this->methodMap = [
            'Doctrine\\ODM\\MongoDB\\DocumentManager' => 'getDocumentManagerService',
            'MyCoon\\Apps\\Backoffice\\Backend\\Controller\\BaseController' => 'getBaseControllerService',
            'MyCoon\\Apps\\Backoffice\\Backend\\Controller\\User\\UserAuthenticatePostController' => 'getUserAuthenticatePostControllerService',
            'MyCoon\\Apps\\Backoffice\\Backend\\Controller\\User\\UserCreatePostController' => 'getUserCreatePostControllerService',
            'MyCoon\\Apps\\Backoffice\\Backend\\Controller\\User\\UserCurrentGetController' => 'getUserCurrentGetControllerService',
            'MyCoon\\Shared\\Infrastructure\\Symfony\\BasicHttpAuthMiddleware' => 'getBasicHttpAuthMiddlewareService',
            'MyCoon\\Tests\\Shared\\Infrastructure\\Behat\\ApiContext' => 'getApiContextService',
            'MyCoon\\Tests\\Shared\\Infrastructure\\Behat\\ApplicationFeatureContext' => 'getApplicationFeatureContextService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'behat.driver.service_container' => 'getBehat_Driver_ServiceContainerService',
            'behat.mink' => 'getBehat_MinkService',
            'behat.mink.default_session' => 'getBehat_Mink_DefaultSessionService',
            'behat.mink.parameters' => 'getBehat_Mink_ParametersService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'http_kernel' => 'getHttpKernelService',
            'knp_snappy.image' => 'getKnpSnappy_ImageService',
            'knp_snappy.pdf' => 'getKnpSnappy_PdfService',
            'message_bus' => 'getMessageBusService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'serializer' => 'getSerializerService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService',
            'test.client' => 'getTest_ClientService',
            'test.private_services_locator' => 'getTest_PrivateServicesLocatorService',
            'test.service_container' => 'getTest_ServiceContainerService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
        ];
        $this->aliases = [
            'mailer' => 'swiftmailer.mailer.default',
            'messenger.default_bus' => 'message_bus',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'/src/Kernel.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || class_alias(__NAMESPACE__."\\$class", $class, false);

        return $factory();
    }

    /**
     * Gets the public 'Doctrine\ODM\MongoDB\DocumentManager' shared service.
     *
     * @return \Doctrine\ODM\MongoDB\DocumentManager
     */
    protected function getDocumentManagerService()
    {
        return $this->services['Doctrine\\ODM\\MongoDB\\DocumentManager'] = \MyCoon\Backoffice\Shared\Infrastructure\Doctrine\BackofficeDocumentManagerFactory::create(['driver' => $this->getEnv('BACKOFFICE_DATABASE_DRIVER'), 'host' => $this->getEnv('BACKOFFICE_DATABASE_HOST'), 'port' => $this->getEnv('BACKOFFICE_DATABASE_PORT'), 'dbname' => $this->getEnv('BACKOFFICE_DATABASE_NAME'), 'user' => $this->getEnv('BACKOFFICE_DATABASE_USER'), 'password' => $this->getEnv('BACKOFFICE_DATABASE_PASSWORD')], $this->getEnv('APP_ENV'));
    }

    /**
     * Gets the public 'MyCoon\Apps\Backoffice\Backend\Controller\BaseController' shared autowired service.
     *
     * @return \MyCoon\Apps\Backoffice\Backend\Controller\BaseController
     */
    protected function getBaseControllerService()
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';

        return $this->services['MyCoon\\Apps\\Backoffice\\Backend\\Controller\\BaseController'] = new \MyCoon\Apps\Backoffice\Backend\Controller\BaseController(($this->services['serializer'] ?? $this->getSerializerService()));
    }

    /**
     * Gets the public 'MyCoon\Apps\Backoffice\Backend\Controller\User\UserAuthenticatePostController' shared autowired service.
     *
     * @return \MyCoon\Apps\Backoffice\Backend\Controller\User\UserAuthenticatePostController
     */
    protected function getUserAuthenticatePostControllerService()
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/User/UserAuthenticatePostController.php';

        return $this->services['MyCoon\\Apps\\Backoffice\\Backend\\Controller\\User\\UserAuthenticatePostController'] = new \MyCoon\Apps\Backoffice\Backend\Controller\User\UserAuthenticatePostController(($this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Query\\InMemorySymfonyQueryBus'] ?? $this->getInMemorySymfonyQueryBusService()), ($this->services['serializer'] ?? $this->getSerializerService()));
    }

    /**
     * Gets the public 'MyCoon\Apps\Backoffice\Backend\Controller\User\UserCreatePostController' shared autowired service.
     *
     * @return \MyCoon\Apps\Backoffice\Backend\Controller\User\UserCreatePostController
     */
    protected function getUserCreatePostControllerService()
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/User/UserCreatePostController.php';

        return $this->services['MyCoon\\Apps\\Backoffice\\Backend\\Controller\\User\\UserCreatePostController'] = new \MyCoon\Apps\Backoffice\Backend\Controller\User\UserCreatePostController(($this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Command\\InMemorySymfonyCommandBus'] ?? $this->getInMemorySymfonyCommandBusService()), ($this->services['serializer'] ?? $this->getSerializerService()));
    }

    /**
     * Gets the public 'MyCoon\Apps\Backoffice\Backend\Controller\User\UserCurrentGetController' shared autowired service.
     *
     * @return \MyCoon\Apps\Backoffice\Backend\Controller\User\UserCurrentGetController
     */
    protected function getUserCurrentGetControllerService()
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/User/UserCurrentGetController.php';

        return $this->services['MyCoon\\Apps\\Backoffice\\Backend\\Controller\\User\\UserCurrentGetController'] = new \MyCoon\Apps\Backoffice\Backend\Controller\User\UserCurrentGetController(($this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Query\\InMemorySymfonyQueryBus'] ?? $this->getInMemorySymfonyQueryBusService()), ($this->services['serializer'] ?? $this->getSerializerService()));
    }

    /**
     * Gets the public 'MyCoon\Shared\Infrastructure\Symfony\BasicHttpAuthMiddleware' shared autowired service.
     *
     * @return \MyCoon\Shared\Infrastructure\Symfony\BasicHttpAuthMiddleware
     */
    protected function getBasicHttpAuthMiddlewareService()
    {
        $this->services['MyCoon\\Shared\\Infrastructure\\Symfony\\BasicHttpAuthMiddleware'] = $instance = new \MyCoon\Shared\Infrastructure\Symfony\BasicHttpAuthMiddleware(($this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Query\\InMemorySymfonyQueryBus'] ?? $this->getInMemorySymfonyQueryBusService()));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'message_bus' => ['services', 'message_bus', 'getMessageBusService', false],
            'messenger.default_bus' => ['services', 'message_bus', 'getMessageBusService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'http_kernel' => '?',
            'message_bus' => '?',
            'messenger.default_bus' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]))->withContext('MyCoon\\Shared\\Infrastructure\\Symfony\\BasicHttpAuthMiddleware', $this));

        return $instance;
    }

    /**
     * Gets the public 'MyCoon\Tests\Shared\Infrastructure\Behat\ApiContext' shared autowired service.
     *
     * @return \MyCoon\Tests\Shared\Infrastructure\Behat\ApiContext
     */
    protected function getApiContextService()
    {
        return $this->services['MyCoon\\Tests\\Shared\\Infrastructure\\Behat\\ApiContext'] = new \MyCoon\Tests\Shared\Infrastructure\Behat\ApiContext(($this->services['behat.mink.default_session'] ?? $this->getBehat_Mink_DefaultSessionService()));
    }

    /**
     * Gets the public 'MyCoon\Tests\Shared\Infrastructure\Behat\ApplicationFeatureContext' shared autowired service.
     *
     * @return \MyCoon\Tests\Shared\Infrastructure\Behat\ApplicationFeatureContext
     */
    protected function getApplicationFeatureContextService()
    {
        return $this->services['MyCoon\\Tests\\Shared\\Infrastructure\\Behat\\ApplicationFeatureContext'] = new \MyCoon\Tests\Shared\Infrastructure\Behat\ApplicationFeatureContext(($this->privates['MyCoon\\Shared\\Infrastructure\\Doctrine\\DatabaseConnections'] ?? $this->getDatabaseConnectionsService()), ($this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus'] ?? $this->getInMemorySymfonyEventBusService()), ($this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Event\\DomainEventJsonDeserializer'] ?? $this->getDomainEventJsonDeserializerService()));
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()), NULL);
    }

    /**
     * Gets the public 'behat.driver.service_container' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected function getBehat_Driver_ServiceContainerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['behat.driver.service_container'] = $this->createProxy('ContainerInterface_7a5418d', function () {
                return \ContainerInterface_7a5418d::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getBehat_Driver_ServiceContainerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return [[($this->services['behat.service_container'] ?? $this->get('behat.service_container', 1))->get('fob_symfony.driver_kernel'), 'getContainer'](), 'get']('test.service_container');
    }

    /**
     * Gets the public 'behat.mink' shared service.
     *
     * @return \Behat\Mink\Mink
     */
    protected function getBehat_MinkService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['behat.mink'] = $this->createProxy('Mink_ecc9ff5', function () {
                return \Mink_ecc9ff5::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getBehat_MinkService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return ($this->services['behat.service_container'] ?? $this->get('behat.service_container', 1))->get('fob_symfony.mink');
    }

    /**
     * Gets the public 'behat.mink.default_session' shared service.
     *
     * @return \Behat\Mink\Session
     */
    protected function getBehat_Mink_DefaultSessionService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['behat.mink.default_session'] = $this->createProxy('Session_4e1eb92', function () {
                return \Session_4e1eb92::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getBehat_Mink_DefaultSessionService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return ($this->services['behat.mink'] ?? $this->getBehat_MinkService())->getSession();
    }

    /**
     * Gets the public 'behat.mink.parameters' shared service.
     *
     * @return \FriendsOfBehat\SymfonyExtension\Mink\MinkParameters
     */
    protected function getBehat_Mink_ParametersService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['behat.mink.parameters'] = $this->createProxy('MinkParameters_4b72c85', function () {
                return \MinkParameters_4b72c85::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getBehat_Mink_ParametersService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return ($this->services['behat.service_container'] ?? $this->get('behat.service_container', 1))->get('fob_symfony.mink.parameters');
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('eLfG8oTH65', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService())]);
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService())]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('kS4S1-Q4nk', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 1 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 2 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 3 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->getSerializer_Mapping_CacheWarmerService());
        }, 4), true, ($this->targetDir.''.'/srcMyCoon_Apps_Backoffice_Backend_KernelTestDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchDuplicatePersonCommand' => ['privates', 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchDuplicatePersonCommand', 'getPatchDuplicatePersonCommandService', false],
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchMeetingCommand' => ['privates', 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchMeetingCommand', 'getPatchMeetingCommandService', false],
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchSchoolTypeCommand' => ['privates', 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchSchoolTypeCommand', 'getPatchSchoolTypeCommandService', false],
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSMSToUserCommand' => ['privates', 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSMSToUserCommand', 'getSendSMSToUserCommandService', false],
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSoundNotificationCommand' => ['privates', 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSoundNotificationCommand', 'getSendSoundNotificationCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.messenger_consume_messages' => ['privates', 'console.command.messenger_consume_messages', 'getConsole_Command_MessengerConsumeMessagesService', false],
            'console.command.messenger_debug' => ['privates', 'console.command.messenger_debug', 'getConsole_Command_MessengerDebugService', false],
            'console.command.messenger_setup_transports' => ['privates', 'console.command.messenger_setup_transports', 'getConsole_Command_MessengerSetupTransportsService', false],
            'console.command.messenger_stop_workers' => ['privates', 'console.command.messenger_stop_workers', 'getConsole_Command_MessengerStopWorkersService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'swiftmailer.command.debug' => ['privates', 'swiftmailer.command.debug', 'getSwiftmailer_Command_DebugService', false],
            'swiftmailer.command.new_email' => ['privates', 'swiftmailer.command.new_email', 'getSwiftmailer_Command_NewEmailService', false],
            'swiftmailer.command.send_email' => ['privates', 'swiftmailer.command.send_email', 'getSwiftmailer_Command_SendEmailService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
        ], [
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchDuplicatePersonCommand' => 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchDuplicatePersonCommand',
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchMeetingCommand' => 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchMeetingCommand',
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchSchoolTypeCommand' => 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchSchoolTypeCommand',
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSMSToUserCommand' => 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSMSToUserCommand',
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSoundNotificationCommand' => 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSoundNotificationCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.messenger_consume_messages' => 'Symfony\\Component\\Messenger\\Command\\ConsumeMessagesCommand',
            'console.command.messenger_debug' => 'Symfony\\Component\\Messenger\\Command\\DebugCommand',
            'console.command.messenger_setup_transports' => 'Symfony\\Component\\Messenger\\Command\\SetupTransportsCommand',
            'console.command.messenger_stop_workers' => 'Symfony\\Component\\Messenger\\Command\\StopWorkersCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'swiftmailer.command.debug' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\DebugCommand',
            'swiftmailer.command.new_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand',
            'swiftmailer.command.send_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
        ]), ['app:send-sound-notification' => 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSoundNotificationCommand', 'app:send-sms-to-user' => 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSMSToUserCommand', 'app:patch-meeting' => 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchMeetingCommand', 'app:patch-duplicate-person' => 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchDuplicatePersonCommand', 'app:patch-school-type' => 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchSchoolTypeCommand', 'about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'messenger:consume' => 'console.command.messenger_consume_messages', 'messenger:consume-messages' => 'console.command.messenger_consume_messages', 'messenger:setup-transports' => 'console.command.messenger_setup_transports', 'debug:messenger' => 'console.command.messenger_debug', 'messenger:stop-workers' => 'console.command.messenger_stop_workers', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'debug:swiftmailer' => 'swiftmailer.command.debug', 'swiftmailer:email:send' => 'swiftmailer.command.new_email', 'swiftmailer:spool:send' => 'swiftmailer.command.send_email', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', ($this->privates['error_handler.error_renderer.serializer'] ?? $this->getErrorHandler_ErrorRenderer_SerializerService()));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['MyCoon\\Shared\\Infrastructure\\Symfony\\AddJsonBodyToRequestListener'] ?? ($this->privates['MyCoon\\Shared\\Infrastructure\\Symfony\\AddJsonBodyToRequestListener'] = new \MyCoon\Shared\Infrastructure\Symfony\AddJsonBodyToRequestListener()));
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['MyCoon\\Shared\\Infrastructure\\Symfony\\BasicHttpAuthMiddleware'] ?? $this->getBasicHttpAuthMiddlewareService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelRequest'], 250);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_cors.cacheable_response_vary_listener'] ?? ($this->privates['nelmio_cors.cacheable_response_vary_listener'] = new \Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener()));
        }, 1 => 'onResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelRequest'], 192);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerMessageFailedEvent', [0 => function () {
            return ($this->privates['messenger.retry.send_failed_message_for_retry_listener'] ?? $this->getMessenger_Retry_SendFailedMessageForRetryListenerService());
        }, 1 => 'onMessageFailed'], 100);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerStartedEvent', [0 => function () {
            return ($this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] ?? $this->getMessenger_Listener_StopWorkerOnRestartSignalListenerService());
        }, 1 => 'onWorkerStarted'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerRunningEvent', [0 => function () {
            return ($this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] ?? $this->getMessenger_Listener_StopWorkerOnRestartSignalListenerService());
        }, 1 => 'onWorkerRunning'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['controller_resolver'] ?? $this->getControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['argument_resolver'] ?? $this->getArgumentResolverService()));
    }

    /**
     * Gets the public 'knp_snappy.image' shared service.
     *
     * @return \Knp\Snappy\Image
     */
    protected function getKnpSnappy_ImageService()
    {
        $this->services['knp_snappy.image'] = $instance = new \Knp\Snappy\Image($this->getEnv('WKHTMLTOIMAGE_PATH'), [], []);

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the public 'knp_snappy.pdf' shared service.
     *
     * @return \Knp\Snappy\Pdf
     */
    protected function getKnpSnappy_PdfService()
    {
        $this->services['knp_snappy.pdf'] = $instance = new \Knp\Snappy\Pdf('/usr/bin/wkhtmltopdf', $this->parameters['knp_snappy.pdf.options'], []);

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the public 'message_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\MessageBus
     */
    protected function getMessageBusService()
    {
        return $this->services['message_bus'] = new \Symfony\Component\Messenger\MessageBus(new RewindableGenerator(function () {
            yield 0 => ($this->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] ?? ($this->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] = new \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware('messenger.bus.default')));
            yield 1 => ($this->privates['messenger.middleware.reject_redelivered_message_middleware'] ?? ($this->privates['messenger.middleware.reject_redelivered_message_middleware'] = new \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware()));
            yield 2 => ($this->privates['messenger.middleware.dispatch_after_current_bus'] ?? ($this->privates['messenger.middleware.dispatch_after_current_bus'] = new \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware()));
            yield 3 => ($this->privates['messenger.middleware.failed_message_processing_middleware'] ?? ($this->privates['messenger.middleware.failed_message_processing_middleware'] = new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware()));
            yield 4 => ($this->privates['messenger.middleware.send_message'] ?? $this->getMessenger_Middleware_SendMessageService());
            yield 5 => ($this->privates['messenger.bus.default.middleware.handle_message'] ?? $this->getMessenger_Bus_Default_Middleware_HandleMessageService());
        }, 6));
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['routing.resolver'] ?? $this->getRouting_ResolverService()), [], ['utf8' => true]);
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => ($this->privates['serializer.normalizer.problem'] ?? ($this->privates['serializer.normalizer.problem'] = new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true))), 1 => ($this->privates['serializer.normalizer.json_serializable'] ?? ($this->privates['serializer.normalizer.json_serializable'] = new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer())), 2 => ($this->privates['serializer.normalizer.datetime'] ?? ($this->privates['serializer.normalizer.datetime'] = new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer())), 3 => ($this->privates['serializer.normalizer.constraint_violation_list'] ?? $this->getSerializer_Normalizer_ConstraintViolationListService()), 4 => ($this->privates['serializer.normalizer.datetimezone'] ?? ($this->privates['serializer.normalizer.datetimezone'] = new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer())), 5 => ($this->privates['serializer.normalizer.dateinterval'] ?? ($this->privates['serializer.normalizer.dateinterval'] = new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer())), 6 => ($this->privates['serializer.normalizer.data_uri'] ?? $this->getSerializer_Normalizer_DataUriService()), 7 => ($this->privates['serializer.denormalizer.array'] ?? ($this->privates['serializer.denormalizer.array'] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer()))], [0 => ($this->privates['serializer.encoder.xml'] ?? ($this->privates['serializer.encoder.xml'] = new \Symfony\Component\Serializer\Encoder\XmlEncoder())), 1 => ($this->privates['serializer.encoder.json'] ?? ($this->privates['serializer.encoder.json'] = new \Symfony\Component\Serializer\Encoder\JsonEncoder())), 2 => ($this->privates['serializer.encoder.yaml'] ?? ($this->privates['serializer.encoder.yaml'] = new \Symfony\Component\Serializer\Encoder\YamlEncoder())), 3 => ($this->privates['serializer.encoder.csv'] ?? ($this->privates['serializer.encoder.csv'] = new \Symfony\Component\Serializer\Encoder\CsvEncoder()))]);
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (false) {
                yield 'cache.validator' => null;
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (false) {
                yield 'cache.property_info' => null;
            }
            if (isset($this->privates['cache.messenger.restart_workers_signal'])) {
                yield 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? null);
            }
            if (false) {
                yield 'messenger.transport.in_memory.factory' => null;
            }
            if (isset($this->privates['swiftmailer.email_sender.listener'])) {
                yield 'swiftmailer.email_sender.listener' => ($this->privates['swiftmailer.email_sender.listener'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (false) + (int) (false) + (int) (isset($this->privates['cache.annotations'])) + (int) (false) + (int) (isset($this->privates['cache.messenger.restart_workers_signal'])) + (int) (false) + (int) (isset($this->privates['swiftmailer.email_sender.listener']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'cache.messenger.restart_workers_signal' => [0 => 'reset'], 'messenger.transport.in_memory.factory' => [0 => 'reset'], 'swiftmailer.email_sender.listener' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.mock_file'] ?? $this->getSession_Storage_MockFileService()));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(($this->services['swiftmailer.transport'] ?? $this->getSwiftmailer_TransportService()));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_NullTransport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        return $this->services['swiftmailer.mailer.default.transport.real'] = new \Swift_Transport_NullTransport(($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())));
    }

    /**
     * Gets the public 'swiftmailer.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_TransportService()
    {
        $this->services['swiftmailer.transport'] = $instance = new \Swift_Transport_SpoolTransport(($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())), ($this->privates['swiftmailer.mailer.default.spool.memory'] ?? ($this->privates['swiftmailer.mailer.default.spool.memory'] = new \Swift_MemorySpool())));

        $instance->registerPlugin(($this->services['swiftmailer.mailer.default.plugin.messagelogger'] ?? ($this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger())));

        return $instance;
    }

    /**
     * Gets the public 'test.client' service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\KernelBrowser
     */
    protected function getTest_ClientService()
    {
        return new \Symfony\Bundle\FrameworkBundle\KernelBrowser(($this->services['kernel'] ?? $this->get('kernel', 1)), [], (new \Symfony\Component\BrowserKit\History()), (new \Symfony\Component\BrowserKit\CookieJar()));
    }

    /**
     * Gets the public 'test.private_services_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getTest_PrivateServicesLocatorService()
    {
        return $this->services['test.private_services_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Behat\\Mink\\Mink' => ['services', 'behat.mink', 'getBehat_MinkService', false],
            'Behat\\Mink\\Session' => ['services', 'behat.mink.default_session', 'getBehat_Mink_DefaultSessionService', false],
            'Doctrine\\Common\\Annotations\\Reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters' => ['services', 'behat.mink.parameters', 'getBehat_Mink_ParametersService', false],
            'Knp\\Snappy\\Image' => ['services', 'knp_snappy.image', 'getKnpSnappy_ImageService', false],
            'Knp\\Snappy\\Pdf' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', false],
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchDuplicatePersonCommand' => ['privates', 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchDuplicatePersonCommand', 'getPatchDuplicatePersonCommandService', false],
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchMeetingCommand' => ['privates', 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchMeetingCommand', 'getPatchMeetingCommandService', false],
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchSchoolTypeCommand' => ['privates', 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchSchoolTypeCommand', 'getPatchSchoolTypeCommandService', false],
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSMSToUserCommand' => ['privates', 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSMSToUserCommand', 'getSendSMSToUserCommandService', false],
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSoundNotificationCommand' => ['privates', 'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSoundNotificationCommand', 'getSendSoundNotificationCommandService', false],
            'MyCoon\\Backoffice\\User\\Application\\Authentication\\AuthenticateUserCommandHandler' => ['privates', 'MyCoon\\Backoffice\\User\\Application\\Authentication\\AuthenticateUserCommandHandler', 'getAuthenticateUserCommandHandlerService', false],
            'MyCoon\\Backoffice\\User\\Application\\Create\\CreateUserCommandHandler' => ['privates', 'MyCoon\\Backoffice\\User\\Application\\Create\\CreateUserCommandHandler', 'getCreateUserCommandHandlerService', false],
            'MyCoon\\Backoffice\\User\\Application\\Find\\FindUserQueryHandler' => ['privates', 'MyCoon\\Backoffice\\User\\Application\\Find\\FindUserQueryHandler', 'getFindUserQueryHandlerService', false],
            'MyCoon\\Backoffice\\User\\Application\\GetUserByToken\\GetUserByTokenQueryHandler' => ['privates', 'MyCoon\\Backoffice\\User\\Application\\GetUserByToken\\GetUserByTokenQueryHandler', 'getGetUserByTokenQueryHandlerService', false],
            'MyCoon\\Backoffice\\User\\Application\\Search\\SearchUserQueryHandler' => ['privates', 'MyCoon\\Backoffice\\User\\Application\\Search\\SearchUserQueryHandler', 'getSearchUserQueryHandlerService', false],
            'MyCoon\\Backoffice\\User\\Domain\\UserRepository' => ['privates', 'MyCoon\\Backoffice\\User\\Infrastructure\\DoctrineUserRepository', 'getDoctrineUserRepositoryService', false],
            'MyCoon\\Backoffice\\User\\Infrastructure\\DoctrineUserRepository' => ['privates', 'MyCoon\\Backoffice\\User\\Infrastructure\\DoctrineUserRepository', 'getDoctrineUserRepositoryService', false],
            'MyCoon\\Shared\\Domain\\Bus\\Command\\CommandBus' => ['privates', 'MyCoon\\Shared\\Infrastructure\\Bus\\Command\\InMemorySymfonyCommandBus', 'getInMemorySymfonyCommandBusService', false],
            'MyCoon\\Shared\\Domain\\Bus\\Event\\EventBus' => ['privates', 'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus', 'getInMemorySymfonyEventBusService', false],
            'MyCoon\\Shared\\Domain\\Bus\\Query\\QueryBus' => ['privates', 'MyCoon\\Shared\\Infrastructure\\Bus\\Query\\InMemorySymfonyQueryBus', 'getInMemorySymfonyQueryBusService', false],
            'MyCoon\\Shared\\Infrastructure\\Bus\\Command\\InMemorySymfonyCommandBus' => ['privates', 'MyCoon\\Shared\\Infrastructure\\Bus\\Command\\InMemorySymfonyCommandBus', 'getInMemorySymfonyCommandBusService', false],
            'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\DomainEventJsonDeserializer' => ['privates', 'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\DomainEventJsonDeserializer', 'getDomainEventJsonDeserializerService', false],
            'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\DomainEventMapping' => ['privates', 'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\DomainEventMapping', 'getDomainEventMappingService', false],
            'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus' => ['privates', 'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus', 'getInMemorySymfonyEventBusService', false],
            'MyCoon\\Shared\\Infrastructure\\Bus\\Query\\InMemorySymfonyQueryBus' => ['privates', 'MyCoon\\Shared\\Infrastructure\\Bus\\Query\\InMemorySymfonyQueryBus', 'getInMemorySymfonyQueryBusService', false],
            'MyCoon\\Shared\\Infrastructure\\Doctrine\\DatabaseConnections' => ['privates', 'MyCoon\\Shared\\Infrastructure\\Doctrine\\DatabaseConnections', 'getDatabaseConnectionsService', false],
            'MyCoon\\Shared\\Infrastructure\\Symfony\\AddJsonBodyToRequestListener' => ['privates', 'MyCoon\\Shared\\Infrastructure\\Symfony\\AddJsonBodyToRequestListener', 'getAddJsonBodyToRequestListenerService', false],
            'Psr\\Cache\\CacheItemPoolInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Psr\\Container\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Psr\\Container\\ContainerInterface $parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Psr\\Log\\LoggerInterface' => ['privates', 'logger', 'getLoggerService', false],
            'Swift_Mailer' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService', false],
            'Swift_Spool' => ['privates', 'swiftmailer.mailer.default.spool.memory', 'getSwiftmailer_Mailer_Default_Spool_MemoryService', false],
            'Swift_Transport' => ['services', 'swiftmailer.transport', 'getSwiftmailer_TransportService', false],
            'Symfony\\Bundle\\FrameworkBundle\\KernelBrowser' => [false, 'test.client', 'getTest_ClientService', false],
            'Symfony\\Component\\BrowserKit\\Client' => [false, 'test.client', 'getTest_ClientService', false],
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Symfony\\Component\\DependencyInjection\\ContainerInterface $driverContainer' => ['services', 'behat.driver.service_container', 'getBehat_Driver_ServiceContainerService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Component\\Filesystem\\Filesystem' => ['services', 'filesystem', 'getFilesystemService', false],
            'Symfony\\Component\\HttpFoundation\\RequestStack' => ['services', 'request_stack', 'getRequestStackService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => ['services', 'session', 'getSessionService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'Symfony\\Component\\HttpFoundation\\UrlHelper' => ['privates', 'url_helper', 'getUrlHelperService', false],
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'Symfony\\Component\\HttpKernel\\HttpKernelBrowser' => [false, 'test.client', 'getTest_ClientService', false],
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'Symfony\\Component\\HttpKernel\\KernelInterface' => ['services', 'kernel', 'getKernelService', false],
            'Symfony\\Component\\Messenger\\MessageBusInterface' => ['services', 'message_bus', 'getMessageBusService', false],
            'Symfony\\Component\\Mime\\MimeTypeGuesserInterface' => ['privates', 'mime_types', 'getMimeTypesService', false],
            'Symfony\\Component\\Mime\\MimeTypesInterface' => ['privates', 'mime_types', 'getMimeTypesService', false],
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RequestContext' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RouterInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface' => ['privates', 'serializer.mapping.class_metadata_factory', 'getSerializer_Mapping_ClassMetadataFactoryService', false],
            'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\SerializerInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => ['privates', 'translation.extractor', 'getTranslation_ExtractorService', false],
            'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => ['privates', 'translation.reader', 'getTranslation_ReaderService', false],
            'Symfony\\Component\\Translation\\TranslatorInterface' => ['services', 'translator', 'getTranslatorService', false],
            'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => ['privates', 'translation.writer', 'getTranslation_WriterService', false],
            'Symfony\\Contracts\\Cache\\CacheInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Contracts\\Translation\\TranslatorInterface' => ['services', 'translator', 'getTranslatorService', false],
            'Twig\\Environment' => ['services', 'twig', 'getTwigService', false],
            'Twig_Environment' => ['services', 'twig', 'getTwigService', false],
            'annotation_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'annotations.cache_adapter' => ['privates', 'annotations.cache_adapter', 'getAnnotations_CacheAdapterService', false],
            'annotations.cache_warmer' => ['privates', 'annotations.cache_warmer', 'getAnnotations_CacheWarmerService', false],
            'annotations.cached_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'annotations.dummy_registry' => ['privates', 'annotations.dummy_registry', 'getAnnotations_DummyRegistryService', false],
            'annotations.reader' => ['privates', 'annotations.reader', 'getAnnotations_ReaderService', false],
            'argument_metadata_factory' => ['privates', 'argument_metadata_factory', 'getArgumentMetadataFactoryService', false],
            'argument_resolver' => ['privates', 'argument_resolver', 'getArgumentResolverService', false],
            'argument_resolver.controller_locator' => ['privates', '.service_locator.lu7FCdF', 'get_ServiceLocator_Lu7FCdFService', false],
            'argument_resolver.default' => ['privates', 'argument_resolver.default', 'getArgumentResolver_DefaultService', false],
            'argument_resolver.request' => ['privates', 'argument_resolver.request', 'getArgumentResolver_RequestService', false],
            'argument_resolver.request_attribute' => ['privates', 'argument_resolver.request_attribute', 'getArgumentResolver_RequestAttributeService', false],
            'argument_resolver.service' => ['privates', 'argument_resolver.service', 'getArgumentResolver_ServiceService', false],
            'argument_resolver.session' => ['privates', 'argument_resolver.session', 'getArgumentResolver_SessionService', false],
            'argument_resolver.variadic' => ['privates', 'argument_resolver.variadic', 'getArgumentResolver_VariadicService', false],
            'cache.annotations' => ['privates', 'cache.annotations', 'getCache_AnnotationsService', false],
            'cache.default_clearer' => ['services', 'cache.app_clearer', 'getCache_AppClearerService', false],
            'cache.default_marshaller' => ['privates', 'cache.default_marshaller', 'getCache_DefaultMarshallerService', false],
            'cache.messenger.restart_workers_signal' => ['privates', 'cache.messenger.restart_workers_signal', 'getCache_Messenger_RestartWorkersSignalService', false],
            'config.resource.self_checking_resource_checker' => ['privates', 'config.resource.self_checking_resource_checker', 'getConfig_Resource_SelfCheckingResourceCheckerService', false],
            'config_cache_factory' => ['privates', 'config_cache_factory', 'getConfigCacheFactoryService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.messenger_consume_messages' => ['privates', 'console.command.messenger_consume_messages', 'getConsole_Command_MessengerConsumeMessagesService', false],
            'console.command.messenger_debug' => ['privates', 'console.command.messenger_debug', 'getConsole_Command_MessengerDebugService', false],
            'console.command.messenger_setup_transports' => ['privates', 'console.command.messenger_setup_transports', 'getConsole_Command_MessengerSetupTransportsService', false],
            'console.command.messenger_stop_workers' => ['privates', 'console.command.messenger_stop_workers', 'getConsole_Command_MessengerStopWorkersService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'console.error_listener' => ['privates', 'console.error_listener', 'getConsole_ErrorListenerService', false],
            'console.suggest_missing_package_subscriber' => ['privates', 'console.suggest_missing_package_subscriber', 'getConsole_SuggestMissingPackageSubscriberService', false],
            'container.env_var_processor' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'controller_name_converter' => ['privates', '.legacy_controller_name_converter', 'get_LegacyControllerNameConverterService', false],
            'controller_resolver' => ['privates', 'controller_resolver', 'getControllerResolverService', false],
            'debug.debug_handlers_listener' => ['privates', 'debug.debug_handlers_listener', 'getDebug_DebugHandlersListenerService', false],
            'debug.file_link_formatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'dependency_injection.config.container_parameters_resource_checker' => ['privates', 'dependency_injection.config.container_parameters_resource_checker', 'getDependencyInjection_Config_ContainerParametersResourceCheckerService', false],
            'disallow_search_engine_index_response_listener' => ['privates', 'disallow_search_engine_index_response_listener', 'getDisallowSearchEngineIndexResponseListenerService', false],
            'error_handler.error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'error_handler.error_renderer.serializer' => ['privates', 'error_handler.error_renderer.serializer', 'getErrorHandler_ErrorRenderer_SerializerService', false],
            'error_renderer' => ['privates', 'error_handler.error_renderer.serializer', 'getErrorHandler_ErrorRenderer_SerializerService', false],
            'error_renderer.html' => ['privates', 'twig.error_renderer.html', 'getTwig_ErrorRenderer_HtmlService', false],
            'error_renderer.serializer' => ['privates', 'error_handler.error_renderer.serializer', 'getErrorHandler_ErrorRenderer_SerializerService', false],
            'exception_listener' => ['privates', 'exception_listener', 'getExceptionListenerService', false],
            'file_locator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'fragment.handler' => ['privates', 'fragment.handler', 'getFragment_HandlerService', false],
            'fragment.renderer.inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
            'identity_translator' => ['privates', 'identity_translator', 'getIdentityTranslatorService', false],
            'locale_aware_listener' => ['privates', 'locale_aware_listener', 'getLocaleAwareListenerService', false],
            'locale_listener' => ['privates', 'locale_listener', 'getLocaleListenerService', false],
            'logger' => ['privates', 'logger', 'getLoggerService', false],
            'messenger.bus.default' => ['services', 'message_bus', 'getMessageBusService', false],
            'messenger.bus.default.messenger.handlers_locator' => ['privates', 'messenger.bus.default.messenger.handlers_locator', 'getMessenger_Bus_Default_Messenger_HandlersLocatorService', false],
            'messenger.bus.default.middleware.add_bus_name_stamp_middleware' => ['privates', 'messenger.bus.default.middleware.add_bus_name_stamp_middleware', 'getMessenger_Bus_Default_Middleware_AddBusNameStampMiddlewareService', false],
            'messenger.bus.default.middleware.handle_message' => ['privates', 'messenger.bus.default.middleware.handle_message', 'getMessenger_Bus_Default_Middleware_HandleMessageService', false],
            'messenger.listener.stop_worker_on_restart_signal_listener' => ['privates', 'messenger.listener.stop_worker_on_restart_signal_listener', 'getMessenger_Listener_StopWorkerOnRestartSignalListenerService', false],
            'messenger.middleware.dispatch_after_current_bus' => ['privates', 'messenger.middleware.dispatch_after_current_bus', 'getMessenger_Middleware_DispatchAfterCurrentBusService', false],
            'messenger.middleware.failed_message_processing_middleware' => ['privates', 'messenger.middleware.failed_message_processing_middleware', 'getMessenger_Middleware_FailedMessageProcessingMiddlewareService', false],
            'messenger.middleware.reject_redelivered_message_middleware' => ['privates', 'messenger.middleware.reject_redelivered_message_middleware', 'getMessenger_Middleware_RejectRedeliveredMessageMiddlewareService', false],
            'messenger.middleware.send_message' => ['privates', 'messenger.middleware.send_message', 'getMessenger_Middleware_SendMessageService', false],
            'messenger.receiver_locator' => ['privates', 'messenger.receiver_locator', 'getMessenger_ReceiverLocatorService', false],
            'messenger.retry.send_failed_message_for_retry_listener' => ['privates', 'messenger.retry.send_failed_message_for_retry_listener', 'getMessenger_Retry_SendFailedMessageForRetryListenerService', false],
            'messenger.retry_strategy_locator' => ['privates', 'messenger.retry_strategy_locator', 'getMessenger_RetryStrategyLocatorService', false],
            'messenger.routable_message_bus' => ['privates', 'messenger.routable_message_bus', 'getMessenger_RoutableMessageBusService', false],
            'messenger.senders_locator' => ['privates', 'messenger.senders_locator', 'getMessenger_SendersLocatorService', false],
            'mime_types' => ['privates', 'mime_types', 'getMimeTypesService', false],
            'nelmio_cors.cacheable_response_vary_listener' => ['privates', 'nelmio_cors.cacheable_response_vary_listener', 'getNelmioCors_CacheableResponseVaryListenerService', false],
            'nelmio_cors.cors_listener' => ['privates', 'nelmio_cors.cors_listener', 'getNelmioCors_CorsListenerService', false],
            'nelmio_cors.options_provider.config' => ['privates', 'nelmio_cors.options_provider.config', 'getNelmioCors_OptionsProvider_ConfigService', false],
            'nelmio_cors.options_resolver' => ['privates', 'nelmio_cors.options_resolver', 'getNelmioCors_OptionsResolverService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'resolve_controller_name_subscriber' => ['privates', '.legacy_resolve_controller_name_subscriber', 'get_LegacyResolveControllerNameSubscriberService', false],
            'response_listener' => ['privates', 'response_listener', 'getResponseListenerService', false],
            'router.cache_warmer' => ['privates', 'router.cache_warmer', 'getRouter_CacheWarmerService', false],
            'router.default' => ['services', 'router', 'getRouterService', false],
            'router.request_context' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'router_listener' => ['privates', 'router_listener', 'getRouterListenerService', false],
            'routing.loader.annotation' => ['privates', 'routing.loader.annotation', 'getRouting_Loader_AnnotationService', false],
            'routing.loader.annotation.directory' => ['privates', 'routing.loader.annotation.directory', 'getRouting_Loader_Annotation_DirectoryService', false],
            'routing.loader.annotation.file' => ['privates', 'routing.loader.annotation.file', 'getRouting_Loader_Annotation_FileService', false],
            'routing.loader.container' => ['privates', 'routing.loader.container', 'getRouting_Loader_ContainerService', false],
            'routing.loader.directory' => ['privates', 'routing.loader.directory', 'getRouting_Loader_DirectoryService', false],
            'routing.loader.glob' => ['privates', 'routing.loader.glob', 'getRouting_Loader_GlobService', false],
            'routing.loader.php' => ['privates', 'routing.loader.php', 'getRouting_Loader_PhpService', false],
            'routing.loader.xml' => ['privates', 'routing.loader.xml', 'getRouting_Loader_XmlService', false],
            'routing.loader.yml' => ['privates', 'routing.loader.yml', 'getRouting_Loader_YmlService', false],
            'routing.resolver' => ['privates', 'routing.resolver', 'getRouting_ResolverService', false],
            'secrets.local_vault' => ['privates', 'secrets.local_vault', 'getSecrets_LocalVaultService', false],
            'secrets.vault' => ['privates', 'secrets.vault', 'getSecrets_VaultService', false],
            'serializer.denormalizer.array' => ['privates', 'serializer.denormalizer.array', 'getSerializer_Denormalizer_ArrayService', false],
            'serializer.encoder.csv' => ['privates', 'serializer.encoder.csv', 'getSerializer_Encoder_CsvService', false],
            'serializer.encoder.json' => ['privates', 'serializer.encoder.json', 'getSerializer_Encoder_JsonService', false],
            'serializer.encoder.xml' => ['privates', 'serializer.encoder.xml', 'getSerializer_Encoder_XmlService', false],
            'serializer.encoder.yaml' => ['privates', 'serializer.encoder.yaml', 'getSerializer_Encoder_YamlService', false],
            'serializer.mapping.cache_warmer' => ['privates', 'serializer.mapping.cache_warmer', 'getSerializer_Mapping_CacheWarmerService', false],
            'serializer.mapping.chain_loader' => ['privates', 'serializer.mapping.chain_loader', 'getSerializer_Mapping_ChainLoaderService', false],
            'serializer.mapping.class_metadata_factory' => ['privates', 'serializer.mapping.class_metadata_factory', 'getSerializer_Mapping_ClassMetadataFactoryService', false],
            'serializer.name_converter.metadata_aware' => ['privates', 'serializer.name_converter.metadata_aware', 'getSerializer_NameConverter_MetadataAwareService', false],
            'serializer.normalizer.constraint_violation_list' => ['privates', 'serializer.normalizer.constraint_violation_list', 'getSerializer_Normalizer_ConstraintViolationListService', false],
            'serializer.normalizer.data_uri' => ['privates', 'serializer.normalizer.data_uri', 'getSerializer_Normalizer_DataUriService', false],
            'serializer.normalizer.dateinterval' => ['privates', 'serializer.normalizer.dateinterval', 'getSerializer_Normalizer_DateintervalService', false],
            'serializer.normalizer.datetime' => ['privates', 'serializer.normalizer.datetime', 'getSerializer_Normalizer_DatetimeService', false],
            'serializer.normalizer.datetimezone' => ['privates', 'serializer.normalizer.datetimezone', 'getSerializer_Normalizer_DatetimezoneService', false],
            'serializer.normalizer.json_serializable' => ['privates', 'serializer.normalizer.json_serializable', 'getSerializer_Normalizer_JsonSerializableService', false],
            'serializer.normalizer.problem' => ['privates', 'serializer.normalizer.problem', 'getSerializer_Normalizer_ProblemService', false],
            'session.storage' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session.storage.filesystem' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session.storage.metadata_bag' => ['privates', 'session.storage.metadata_bag', 'getSession_Storage_MetadataBagService', false],
            'session.storage.mock_file' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session_listener' => ['privates', 'session_listener', 'getSessionListenerService', false],
            'streamed_response_listener' => ['privates', 'streamed_response_listener', 'getStreamedResponseListenerService', false],
            'swiftmailer.command.debug' => ['privates', 'swiftmailer.command.debug', 'getSwiftmailer_Command_DebugService', false],
            'swiftmailer.command.new_email' => ['privates', 'swiftmailer.command.new_email', 'getSwiftmailer_Command_NewEmailService', false],
            'swiftmailer.command.send_email' => ['privates', 'swiftmailer.command.send_email', 'getSwiftmailer_Command_SendEmailService', false],
            'swiftmailer.email_sender.listener' => ['privates', 'swiftmailer.email_sender.listener', 'getSwiftmailer_EmailSender_ListenerService', false],
            'swiftmailer.mailer' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService', false],
            'swiftmailer.mailer.default.spool' => ['privates', 'swiftmailer.mailer.default.spool.memory', 'getSwiftmailer_Mailer_Default_Spool_MemoryService', false],
            'swiftmailer.mailer.default.spool.memory' => ['privates', 'swiftmailer.mailer.default.spool.memory', 'getSwiftmailer_Mailer_Default_Spool_MemoryService', false],
            'swiftmailer.mailer.default.transport' => ['services', 'swiftmailer.transport', 'getSwiftmailer_TransportService', false],
            'swiftmailer.mailer.default.transport.eventdispatcher' => ['privates', 'swiftmailer.mailer.default.transport.eventdispatcher', 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService', false],
            'swiftmailer.mailer.default.transport.null' => ['services', 'swiftmailer.mailer.default.transport.real', 'getSwiftmailer_Mailer_Default_Transport_RealService', false],
            'swiftmailer.mailer.default.transport.spool' => ['services', 'swiftmailer.transport', 'getSwiftmailer_TransportService', false],
            'swiftmailer.plugin.messagelogger' => ['services', 'swiftmailer.mailer.default.plugin.messagelogger', 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService', false],
            'swiftmailer.spool' => ['privates', 'swiftmailer.mailer.default.spool.memory', 'getSwiftmailer_Mailer_Default_Spool_MemoryService', false],
            'swiftmailer.transport.real' => ['services', 'swiftmailer.mailer.default.transport.real', 'getSwiftmailer_Mailer_Default_Transport_RealService', false],
            'test.client.cookiejar' => [false, 'test.client.cookiejar', 'getTest_Client_CookiejarService', false],
            'test.client.history' => [false, 'test.client.history', 'getTest_Client_HistoryService', false],
            'test.session.listener' => ['privates', 'test.session.listener', 'getTest_Session_ListenerService', false],
            'translation.dumper.csv' => ['privates', 'translation.dumper.csv', 'getTranslation_Dumper_CsvService', false],
            'translation.dumper.ini' => ['privates', 'translation.dumper.ini', 'getTranslation_Dumper_IniService', false],
            'translation.dumper.json' => ['privates', 'translation.dumper.json', 'getTranslation_Dumper_JsonService', false],
            'translation.dumper.mo' => ['privates', 'translation.dumper.mo', 'getTranslation_Dumper_MoService', false],
            'translation.dumper.php' => ['privates', 'translation.dumper.php', 'getTranslation_Dumper_PhpService', false],
            'translation.dumper.po' => ['privates', 'translation.dumper.po', 'getTranslation_Dumper_PoService', false],
            'translation.dumper.qt' => ['privates', 'translation.dumper.qt', 'getTranslation_Dumper_QtService', false],
            'translation.dumper.res' => ['privates', 'translation.dumper.res', 'getTranslation_Dumper_ResService', false],
            'translation.dumper.xliff' => ['privates', 'translation.dumper.xliff', 'getTranslation_Dumper_XliffService', false],
            'translation.dumper.yaml' => ['privates', 'translation.dumper.yaml', 'getTranslation_Dumper_YamlService', false],
            'translation.dumper.yml' => ['privates', 'translation.dumper.yml', 'getTranslation_Dumper_YmlService', false],
            'translation.extractor' => ['privates', 'translation.extractor', 'getTranslation_ExtractorService', false],
            'translation.extractor.php' => ['privates', 'translation.extractor.php', 'getTranslation_Extractor_PhpService', false],
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
            'translation.reader' => ['privates', 'translation.reader', 'getTranslation_ReaderService', false],
            'translation.warmer' => ['privates', 'translation.warmer', 'getTranslation_WarmerService', false],
            'translation.writer' => ['privates', 'translation.writer', 'getTranslation_WriterService', false],
            'translator.default' => ['services', 'translator', 'getTranslatorService', false],
            'translator.formatter' => ['privates', 'translator.formatter.default', 'getTranslator_Formatter_DefaultService', false],
            'translator.formatter.default' => ['privates', 'translator.formatter.default', 'getTranslator_Formatter_DefaultService', false],
            'twig.app_variable' => ['privates', 'twig.app_variable', 'getTwig_AppVariableService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
            'twig.configurator.environment' => ['privates', 'twig.configurator.environment', 'getTwig_Configurator_EnvironmentService', false],
            'twig.error_renderer.html' => ['privates', 'twig.error_renderer.html', 'getTwig_ErrorRenderer_HtmlService', false],
            'twig.error_renderer.html.inner' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'twig.extension.code' => ['privates', 'twig.extension.code', 'getTwig_Extension_CodeService', false],
            'twig.extension.debug' => ['privates', 'twig.extension.debug', 'getTwig_Extension_DebugService', false],
            'twig.extension.httpfoundation' => ['privates', 'twig.extension.httpfoundation', 'getTwig_Extension_HttpfoundationService', false],
            'twig.extension.httpkernel' => ['privates', 'twig.extension.httpkernel', 'getTwig_Extension_HttpkernelService', false],
            'twig.extension.profiler' => ['privates', 'twig.extension.profiler', 'getTwig_Extension_ProfilerService', false],
            'twig.extension.routing' => ['privates', 'twig.extension.routing', 'getTwig_Extension_RoutingService', false],
            'twig.extension.trans' => ['privates', 'twig.extension.trans', 'getTwig_Extension_TransService', false],
            'twig.extension.yaml' => ['privates', 'twig.extension.yaml', 'getTwig_Extension_YamlService', false],
            'twig.loader' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.loader.filesystem' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.loader.native_filesystem' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.profile' => ['privates', 'twig.profile', 'getTwig_ProfileService', false],
            'twig.runtime.httpkernel' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'twig.runtime_loader' => ['privates', 'twig.runtime_loader', 'getTwig_RuntimeLoaderService', false],
            'twig.translation.extractor' => ['privates', 'twig.translation.extractor', 'getTwig_Translation_ExtractorService', false],
            'url_helper' => ['privates', 'url_helper', 'getUrlHelperService', false],
            'validate_request_listener' => ['privates', 'validate_request_listener', 'getValidateRequestListenerService', false],
        ], [
            'Behat\\Mink\\Mink' => '?',
            'Behat\\Mink\\Session' => '?',
            'Doctrine\\Common\\Annotations\\Reader' => '?',
            'FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters' => '?',
            'Knp\\Snappy\\Image' => '?',
            'Knp\\Snappy\\Pdf' => '?',
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchDuplicatePersonCommand' => '?',
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchMeetingCommand' => '?',
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchSchoolTypeCommand' => '?',
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSMSToUserCommand' => '?',
            'MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSoundNotificationCommand' => '?',
            'MyCoon\\Backoffice\\User\\Application\\Authentication\\AuthenticateUserCommandHandler' => '?',
            'MyCoon\\Backoffice\\User\\Application\\Create\\CreateUserCommandHandler' => '?',
            'MyCoon\\Backoffice\\User\\Application\\Find\\FindUserQueryHandler' => '?',
            'MyCoon\\Backoffice\\User\\Application\\GetUserByToken\\GetUserByTokenQueryHandler' => '?',
            'MyCoon\\Backoffice\\User\\Application\\Search\\SearchUserQueryHandler' => '?',
            'MyCoon\\Backoffice\\User\\Domain\\UserRepository' => '?',
            'MyCoon\\Backoffice\\User\\Infrastructure\\DoctrineUserRepository' => '?',
            'MyCoon\\Shared\\Domain\\Bus\\Command\\CommandBus' => '?',
            'MyCoon\\Shared\\Domain\\Bus\\Event\\EventBus' => '?',
            'MyCoon\\Shared\\Domain\\Bus\\Query\\QueryBus' => '?',
            'MyCoon\\Shared\\Infrastructure\\Bus\\Command\\InMemorySymfonyCommandBus' => '?',
            'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\DomainEventJsonDeserializer' => '?',
            'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\DomainEventMapping' => '?',
            'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus' => '?',
            'MyCoon\\Shared\\Infrastructure\\Bus\\Query\\InMemorySymfonyQueryBus' => '?',
            'MyCoon\\Shared\\Infrastructure\\Doctrine\\DatabaseConnections' => '?',
            'MyCoon\\Shared\\Infrastructure\\Symfony\\AddJsonBodyToRequestListener' => '?',
            'Psr\\Cache\\CacheItemPoolInterface' => '?',
            'Psr\\Container\\ContainerInterface' => '?',
            'Psr\\Container\\ContainerInterface $parameterBag' => '?',
            'Psr\\Log\\LoggerInterface' => '?',
            'Swift_Mailer' => '?',
            'Swift_Spool' => '?',
            'Swift_Transport' => '?',
            'Symfony\\Bundle\\FrameworkBundle\\KernelBrowser' => '?',
            'Symfony\\Component\\BrowserKit\\Client' => '?',
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ContainerInterface $driverContainer' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => '?',
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Component\\Filesystem\\Filesystem' => '?',
            'Symfony\\Component\\HttpFoundation\\RequestStack' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\UrlHelper' => '?',
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => '?',
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => '?',
            'Symfony\\Component\\HttpKernel\\HttpKernelBrowser' => '?',
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => '?',
            'Symfony\\Component\\HttpKernel\\KernelInterface' => '?',
            'Symfony\\Component\\Messenger\\MessageBusInterface' => '?',
            'Symfony\\Component\\Mime\\MimeTypeGuesserInterface' => '?',
            'Symfony\\Component\\Mime\\MimeTypesInterface' => '?',
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => '?',
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => '?',
            'Symfony\\Component\\Routing\\RequestContext' => '?',
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => '?',
            'Symfony\\Component\\Routing\\RouterInterface' => '?',
            'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface' => '?',
            'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface' => '?',
            'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface' => '?',
            'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface' => '?',
            'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface' => '?',
            'Symfony\\Component\\Serializer\\SerializerInterface' => '?',
            'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => '?',
            'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => '?',
            'Symfony\\Component\\Translation\\TranslatorInterface' => '?',
            'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => '?',
            'Symfony\\Contracts\\Cache\\CacheInterface' => '?',
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Contracts\\Translation\\TranslatorInterface' => '?',
            'Twig\\Environment' => '?',
            'Twig_Environment' => '?',
            'annotation_reader' => '?',
            'annotations.cache_adapter' => '?',
            'annotations.cache_warmer' => '?',
            'annotations.cached_reader' => '?',
            'annotations.dummy_registry' => '?',
            'annotations.reader' => '?',
            'argument_metadata_factory' => '?',
            'argument_resolver' => '?',
            'argument_resolver.controller_locator' => '?',
            'argument_resolver.default' => '?',
            'argument_resolver.request' => '?',
            'argument_resolver.request_attribute' => '?',
            'argument_resolver.service' => '?',
            'argument_resolver.session' => '?',
            'argument_resolver.variadic' => '?',
            'cache.annotations' => '?',
            'cache.default_clearer' => '?',
            'cache.default_marshaller' => '?',
            'cache.messenger.restart_workers_signal' => '?',
            'config.resource.self_checking_resource_checker' => '?',
            'config_cache_factory' => '?',
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.messenger_consume_messages' => '?',
            'console.command.messenger_debug' => '?',
            'console.command.messenger_setup_transports' => '?',
            'console.command.messenger_stop_workers' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_set' => '?',
            'console.command.translation_debug' => '?',
            'console.command.translation_update' => '?',
            'console.command.xliff_lint' => '?',
            'console.command.yaml_lint' => '?',
            'console.error_listener' => '?',
            'console.suggest_missing_package_subscriber' => '?',
            'container.env_var_processor' => '?',
            'controller_name_converter' => '?',
            'controller_resolver' => '?',
            'debug.debug_handlers_listener' => '?',
            'debug.file_link_formatter' => '?',
            'dependency_injection.config.container_parameters_resource_checker' => '?',
            'disallow_search_engine_index_response_listener' => '?',
            'error_handler.error_renderer.html' => '?',
            'error_handler.error_renderer.serializer' => '?',
            'error_renderer' => '?',
            'error_renderer.html' => '?',
            'error_renderer.serializer' => '?',
            'exception_listener' => '?',
            'file_locator' => '?',
            'fragment.handler' => '?',
            'fragment.renderer.inline' => '?',
            'identity_translator' => '?',
            'locale_aware_listener' => '?',
            'locale_listener' => '?',
            'logger' => '?',
            'messenger.bus.default' => '?',
            'messenger.bus.default.messenger.handlers_locator' => '?',
            'messenger.bus.default.middleware.add_bus_name_stamp_middleware' => '?',
            'messenger.bus.default.middleware.handle_message' => '?',
            'messenger.listener.stop_worker_on_restart_signal_listener' => '?',
            'messenger.middleware.dispatch_after_current_bus' => '?',
            'messenger.middleware.failed_message_processing_middleware' => '?',
            'messenger.middleware.reject_redelivered_message_middleware' => '?',
            'messenger.middleware.send_message' => '?',
            'messenger.receiver_locator' => '?',
            'messenger.retry.send_failed_message_for_retry_listener' => '?',
            'messenger.retry_strategy_locator' => '?',
            'messenger.routable_message_bus' => '?',
            'messenger.senders_locator' => '?',
            'mime_types' => '?',
            'nelmio_cors.cacheable_response_vary_listener' => '?',
            'nelmio_cors.cors_listener' => '?',
            'nelmio_cors.options_provider.config' => '?',
            'nelmio_cors.options_resolver' => '?',
            'parameter_bag' => '?',
            'resolve_controller_name_subscriber' => '?',
            'response_listener' => '?',
            'router.cache_warmer' => '?',
            'router.default' => '?',
            'router.request_context' => '?',
            'router_listener' => '?',
            'routing.loader.annotation' => '?',
            'routing.loader.annotation.directory' => '?',
            'routing.loader.annotation.file' => '?',
            'routing.loader.container' => '?',
            'routing.loader.directory' => '?',
            'routing.loader.glob' => '?',
            'routing.loader.php' => '?',
            'routing.loader.xml' => '?',
            'routing.loader.yml' => '?',
            'routing.resolver' => '?',
            'secrets.local_vault' => '?',
            'secrets.vault' => '?',
            'serializer.denormalizer.array' => '?',
            'serializer.encoder.csv' => '?',
            'serializer.encoder.json' => '?',
            'serializer.encoder.xml' => '?',
            'serializer.encoder.yaml' => '?',
            'serializer.mapping.cache_warmer' => '?',
            'serializer.mapping.chain_loader' => '?',
            'serializer.mapping.class_metadata_factory' => '?',
            'serializer.name_converter.metadata_aware' => '?',
            'serializer.normalizer.constraint_violation_list' => '?',
            'serializer.normalizer.data_uri' => '?',
            'serializer.normalizer.dateinterval' => '?',
            'serializer.normalizer.datetime' => '?',
            'serializer.normalizer.datetimezone' => '?',
            'serializer.normalizer.json_serializable' => '?',
            'serializer.normalizer.problem' => '?',
            'session.storage' => '?',
            'session.storage.filesystem' => '?',
            'session.storage.metadata_bag' => '?',
            'session.storage.mock_file' => '?',
            'session_listener' => '?',
            'streamed_response_listener' => '?',
            'swiftmailer.command.debug' => '?',
            'swiftmailer.command.new_email' => '?',
            'swiftmailer.command.send_email' => '?',
            'swiftmailer.email_sender.listener' => '?',
            'swiftmailer.mailer' => '?',
            'swiftmailer.mailer.default.spool' => '?',
            'swiftmailer.mailer.default.spool.memory' => '?',
            'swiftmailer.mailer.default.transport' => '?',
            'swiftmailer.mailer.default.transport.eventdispatcher' => '?',
            'swiftmailer.mailer.default.transport.null' => '?',
            'swiftmailer.mailer.default.transport.spool' => '?',
            'swiftmailer.plugin.messagelogger' => '?',
            'swiftmailer.spool' => '?',
            'swiftmailer.transport.real' => '?',
            'test.client.cookiejar' => '?',
            'test.client.history' => '?',
            'test.session.listener' => '?',
            'translation.dumper.csv' => '?',
            'translation.dumper.ini' => '?',
            'translation.dumper.json' => '?',
            'translation.dumper.mo' => '?',
            'translation.dumper.php' => '?',
            'translation.dumper.po' => '?',
            'translation.dumper.qt' => '?',
            'translation.dumper.res' => '?',
            'translation.dumper.xliff' => '?',
            'translation.dumper.yaml' => '?',
            'translation.dumper.yml' => '?',
            'translation.extractor' => '?',
            'translation.extractor.php' => '?',
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
            'translation.reader' => '?',
            'translation.warmer' => '?',
            'translation.writer' => '?',
            'translator.default' => '?',
            'translator.formatter' => '?',
            'translator.formatter.default' => '?',
            'twig.app_variable' => '?',
            'twig.command.debug' => '?',
            'twig.command.lint' => '?',
            'twig.configurator.environment' => '?',
            'twig.error_renderer.html' => '?',
            'twig.error_renderer.html.inner' => '?',
            'twig.extension.code' => '?',
            'twig.extension.debug' => '?',
            'twig.extension.httpfoundation' => '?',
            'twig.extension.httpkernel' => '?',
            'twig.extension.profiler' => '?',
            'twig.extension.routing' => '?',
            'twig.extension.trans' => '?',
            'twig.extension.yaml' => '?',
            'twig.loader' => '?',
            'twig.loader.filesystem' => '?',
            'twig.loader.native_filesystem' => '?',
            'twig.profile' => '?',
            'twig.runtime.httpkernel' => '?',
            'twig.runtime_loader' => '?',
            'twig.translation.extractor' => '?',
            'url_helper' => '?',
            'validate_request_listener' => '?',
        ]);
    }

    /**
     * Gets the public 'test.service_container' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Test\TestContainer
     */
    protected function getTest_ServiceContainerService()
    {
        return $this->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($this->services['kernel'] ?? $this->get('kernel', 1)), 'test.private_services_locator');
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), ($this->privates['translator.formatter.default'] ?? $this->getTranslator_Formatter_DefaultService()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => true]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(($this->privates['twig.loader.native_filesystem'] ?? $this->getTwig_Loader_NativeFilesystemService()), ['debug' => true, 'strict_variables' => true, 'cache' => false, 'autoescape' => 'name', 'charset' => 'UTF-8']);

        $instance->addExtension(($this->privates['twig.extension.profiler'] ?? $this->getTwig_Extension_ProfilerService()));
        $instance->addExtension(($this->privates['twig.extension.trans'] ?? $this->getTwig_Extension_TransService()));
        $instance->addExtension(($this->privates['twig.extension.code'] ?? $this->getTwig_Extension_CodeService()));
        $instance->addExtension(($this->privates['twig.extension.routing'] ?? $this->getTwig_Extension_RoutingService()));
        $instance->addExtension(($this->privates['twig.extension.yaml'] ?? ($this->privates['twig.extension.yaml'] = new \Symfony\Bridge\Twig\Extension\YamlExtension())));
        $instance->addExtension(($this->privates['twig.extension.httpkernel'] ?? ($this->privates['twig.extension.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension())));
        $instance->addExtension(($this->privates['twig.extension.httpfoundation'] ?? $this->getTwig_Extension_HttpfoundationService()));
        $instance->addExtension(($this->privates['twig.extension.debug'] ?? ($this->privates['twig.extension.debug'] = new \Twig\Extension\DebugExtension())));
        $instance->addGlobal('app', ($this->privates['twig.app_variable'] ?? $this->getTwig_AppVariableService()));
        $instance->addRuntimeLoader(($this->privates['twig.runtime_loader'] ?? $this->getTwig_RuntimeLoaderService()));
        ($this->privates['twig.configurator.environment'] ?? $this->getTwig_Configurator_EnvironmentService())->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     *
     * @deprecated The "twig.controller.exception" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        @trigger_error('The "twig.controller.exception" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(($this->services['twig'] ?? $this->getTwigService()), true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     *
     * @deprecated The "twig.controller.preview_error" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        @trigger_error('The "twig.controller.preview_error" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), NULL);
    }

    /**
     * Gets the private '.errored..service_locator.OHd.zOp.Symfony\Component\HttpKernel\Event\RequestEvent' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Event\RequestEvent
     */
    protected function getRequestEventService()
    {
        $this->throw('Cannot autowire service ".service_locator.OHd.zOp": it references class "Symfony\\Component\\HttpKernel\\Event\\RequestEvent" but no such service exists.');
    }

    /**
     * Gets the private '.legacy_controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function get_LegacyControllerNameConverterService()
    {
        return $this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false);
    }

    /**
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /**
     * Gets the private '.service_locator.OHd.zOp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_OHd_ZOpService()
    {
        return $this->privates['.service_locator.OHd.zOp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'event' => ['privates', '.errored..service_locator.OHd.zOp.Symfony\\Component\\HttpKernel\\Event\\RequestEvent', NULL, 'Cannot autowire service ".service_locator.OHd.zOp": it references class "Symfony\\Component\\HttpKernel\\Event\\RequestEvent" but no such service exists.'],
        ], [
            'event' => 'Symfony\\Component\\HttpKernel\\Event\\RequestEvent',
        ]);
    }

    /**
     * Gets the private '.service_locator.lu7FCdF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Lu7FCdFService()
    {
        return $this->privates['.service_locator.lu7FCdF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'MyCoon\\Shared\\Infrastructure\\Symfony\\BasicHttpAuthMiddleware::onKernelRequest' => ['privates', '.service_locator.OHd.zOp', 'get_ServiceLocator_OHd_ZOpService', false],
            'MyCoon\\Shared\\Infrastructure\\Symfony\\BasicHttpAuthMiddleware:onKernelRequest' => ['privates', '.service_locator.OHd.zOp', 'get_ServiceLocator_OHd_ZOpService', false],
        ], [
            'MyCoon\\Shared\\Infrastructure\\Symfony\\BasicHttpAuthMiddleware::onKernelRequest' => '?',
            'MyCoon\\Shared\\Infrastructure\\Symfony\\BasicHttpAuthMiddleware:onKernelRequest' => '?',
        ]);
    }

    /**
     * Gets the private 'MyCoon\Apps\Backoffice\Backend\Command\PatchDuplicatePersonCommand' shared autowired service.
     *
     * @return \MyCoon\Apps\Backoffice\Backend\Command\PatchDuplicatePersonCommand
     */
    protected function getPatchDuplicatePersonCommandService()
    {
        $this->privates['MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchDuplicatePersonCommand'] = $instance = new \MyCoon\Apps\Backoffice\Backend\Command\PatchDuplicatePersonCommand();

        $instance->setName('app:patch-duplicate-person');

        return $instance;
    }

    /**
     * Gets the private 'MyCoon\Apps\Backoffice\Backend\Command\PatchMeetingCommand' shared autowired service.
     *
     * @return \MyCoon\Apps\Backoffice\Backend\Command\PatchMeetingCommand
     */
    protected function getPatchMeetingCommandService()
    {
        $this->privates['MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchMeetingCommand'] = $instance = new \MyCoon\Apps\Backoffice\Backend\Command\PatchMeetingCommand();

        $instance->setName('app:patch-meeting');

        return $instance;
    }

    /**
     * Gets the private 'MyCoon\Apps\Backoffice\Backend\Command\PatchSchoolTypeCommand' shared autowired service.
     *
     * @return \MyCoon\Apps\Backoffice\Backend\Command\PatchSchoolTypeCommand
     */
    protected function getPatchSchoolTypeCommandService()
    {
        $this->privates['MyCoon\\Apps\\Backoffice\\Backend\\Command\\PatchSchoolTypeCommand'] = $instance = new \MyCoon\Apps\Backoffice\Backend\Command\PatchSchoolTypeCommand();

        $instance->setName('app:patch-school-type');

        return $instance;
    }

    /**
     * Gets the private 'MyCoon\Apps\Backoffice\Backend\Command\SendSMSToUserCommand' shared autowired service.
     *
     * @return \MyCoon\Apps\Backoffice\Backend\Command\SendSMSToUserCommand
     */
    protected function getSendSMSToUserCommandService()
    {
        $this->privates['MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSMSToUserCommand'] = $instance = new \MyCoon\Apps\Backoffice\Backend\Command\SendSMSToUserCommand();

        $instance->setName('app:send-sms-to-user');

        return $instance;
    }

    /**
     * Gets the private 'MyCoon\Apps\Backoffice\Backend\Command\SendSoundNotificationCommand' shared autowired service.
     *
     * @return \MyCoon\Apps\Backoffice\Backend\Command\SendSoundNotificationCommand
     */
    protected function getSendSoundNotificationCommandService()
    {
        $this->privates['MyCoon\\Apps\\Backoffice\\Backend\\Command\\SendSoundNotificationCommand'] = $instance = new \MyCoon\Apps\Backoffice\Backend\Command\SendSoundNotificationCommand();

        $instance->setName('app:send-sound-notification');

        return $instance;
    }

    /**
     * Gets the private 'MyCoon\Backoffice\User\Application\Authentication\AuthenticateUserCommandHandler' shared autowired service.
     *
     * @return \MyCoon\Backoffice\User\Application\Authentication\AuthenticateUserCommandHandler
     */
    protected function getAuthenticateUserCommandHandlerService()
    {
        return $this->privates['MyCoon\\Backoffice\\User\\Application\\Authentication\\AuthenticateUserCommandHandler'] = new \MyCoon\Backoffice\User\Application\Authentication\AuthenticateUserCommandHandler(($this->privates['MyCoon\\Backoffice\\User\\Infrastructure\\DoctrineUserRepository'] ?? $this->getDoctrineUserRepositoryService()));
    }

    /**
     * Gets the private 'MyCoon\Backoffice\User\Application\Create\CreateUserCommandHandler' shared autowired service.
     *
     * @return \MyCoon\Backoffice\User\Application\Create\CreateUserCommandHandler
     */
    protected function getCreateUserCommandHandlerService()
    {
        return $this->privates['MyCoon\\Backoffice\\User\\Application\\Create\\CreateUserCommandHandler'] = new \MyCoon\Backoffice\User\Application\Create\CreateUserCommandHandler(($this->privates['MyCoon\\Backoffice\\User\\Infrastructure\\DoctrineUserRepository'] ?? $this->getDoctrineUserRepositoryService()), ($this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus'] ?? $this->getInMemorySymfonyEventBusService()));
    }

    /**
     * Gets the private 'MyCoon\Backoffice\User\Application\Find\FindUserQueryHandler' shared autowired service.
     *
     * @return \MyCoon\Backoffice\User\Application\Find\FindUserQueryHandler
     */
    protected function getFindUserQueryHandlerService()
    {
        return $this->privates['MyCoon\\Backoffice\\User\\Application\\Find\\FindUserQueryHandler'] = new \MyCoon\Backoffice\User\Application\Find\FindUserQueryHandler(($this->privates['MyCoon\\Backoffice\\User\\Infrastructure\\DoctrineUserRepository'] ?? $this->getDoctrineUserRepositoryService()));
    }

    /**
     * Gets the private 'MyCoon\Backoffice\User\Application\GetUserByToken\GetUserByTokenQueryHandler' shared autowired service.
     *
     * @return \MyCoon\Backoffice\User\Application\GetUserByToken\GetUserByTokenQueryHandler
     */
    protected function getGetUserByTokenQueryHandlerService()
    {
        return $this->privates['MyCoon\\Backoffice\\User\\Application\\GetUserByToken\\GetUserByTokenQueryHandler'] = new \MyCoon\Backoffice\User\Application\GetUserByToken\GetUserByTokenQueryHandler(($this->privates['MyCoon\\Backoffice\\User\\Infrastructure\\DoctrineUserRepository'] ?? $this->getDoctrineUserRepositoryService()));
    }

    /**
     * Gets the private 'MyCoon\Backoffice\User\Application\Search\SearchUserQueryHandler' shared autowired service.
     *
     * @return \MyCoon\Backoffice\User\Application\Search\SearchUserQueryHandler
     */
    protected function getSearchUserQueryHandlerService()
    {
        return $this->privates['MyCoon\\Backoffice\\User\\Application\\Search\\SearchUserQueryHandler'] = new \MyCoon\Backoffice\User\Application\Search\SearchUserQueryHandler(($this->privates['MyCoon\\Backoffice\\User\\Infrastructure\\DoctrineUserRepository'] ?? $this->getDoctrineUserRepositoryService()));
    }

    /**
     * Gets the private 'MyCoon\Backoffice\User\Infrastructure\DoctrineUserRepository' shared autowired service.
     *
     * @return \MyCoon\Backoffice\User\Infrastructure\DoctrineUserRepository
     */
    protected function getDoctrineUserRepositoryService()
    {
        return $this->privates['MyCoon\\Backoffice\\User\\Infrastructure\\DoctrineUserRepository'] = new \MyCoon\Backoffice\User\Infrastructure\DoctrineUserRepository(($this->services['Doctrine\\ODM\\MongoDB\\DocumentManager'] ?? $this->getDocumentManagerService()));
    }

    /**
     * Gets the private 'MyCoon\Shared\Infrastructure\Bus\Command\InMemorySymfonyCommandBus' shared autowired service.
     *
     * @return \MyCoon\Shared\Infrastructure\Bus\Command\InMemorySymfonyCommandBus
     */
    protected function getInMemorySymfonyCommandBusService()
    {
        return $this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Command\\InMemorySymfonyCommandBus'] = new \MyCoon\Shared\Infrastructure\Bus\Command\InMemorySymfonyCommandBus(new RewindableGenerator(function () {
            yield 0 => ($this->privates['MyCoon\\Backoffice\\User\\Application\\Authentication\\AuthenticateUserCommandHandler'] ?? $this->getAuthenticateUserCommandHandlerService());
            yield 1 => ($this->privates['MyCoon\\Backoffice\\User\\Application\\Create\\CreateUserCommandHandler'] ?? $this->getCreateUserCommandHandlerService());
        }, 2));
    }

    /**
     * Gets the private 'MyCoon\Shared\Infrastructure\Bus\Event\DomainEventJsonDeserializer' shared autowired service.
     *
     * @return \MyCoon\Shared\Infrastructure\Bus\Event\DomainEventJsonDeserializer
     */
    protected function getDomainEventJsonDeserializerService()
    {
        return $this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Event\\DomainEventJsonDeserializer'] = new \MyCoon\Shared\Infrastructure\Bus\Event\DomainEventJsonDeserializer(($this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Event\\DomainEventMapping'] ?? $this->getDomainEventMappingService()));
    }

    /**
     * Gets the private 'MyCoon\Shared\Infrastructure\Bus\Event\DomainEventMapping' shared autowired service.
     *
     * @return \MyCoon\Shared\Infrastructure\Bus\Event\DomainEventMapping
     */
    protected function getDomainEventMappingService()
    {
        return $this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Event\\DomainEventMapping'] = new \MyCoon\Shared\Infrastructure\Bus\Event\DomainEventMapping(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0));
    }

    /**
     * Gets the private 'MyCoon\Shared\Infrastructure\Bus\Event\InMemory\InMemorySymfonyEventBus' shared autowired service.
     *
     * @return \MyCoon\Shared\Infrastructure\Bus\Event\InMemory\InMemorySymfonyEventBus
     */
    protected function getInMemorySymfonyEventBusService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus'] = $this->createProxy('InMemorySymfonyEventBus_cfdd715', function () {
                return \InMemorySymfonyEventBus_cfdd715::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getInMemorySymfonyEventBusService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \MyCoon\Shared\Infrastructure\Bus\Event\InMemory\InMemorySymfonyEventBus(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0));
    }

    /**
     * Gets the private 'MyCoon\Shared\Infrastructure\Bus\Query\InMemorySymfonyQueryBus' shared autowired service.
     *
     * @return \MyCoon\Shared\Infrastructure\Bus\Query\InMemorySymfonyQueryBus
     */
    protected function getInMemorySymfonyQueryBusService()
    {
        return $this->privates['MyCoon\\Shared\\Infrastructure\\Bus\\Query\\InMemorySymfonyQueryBus'] = new \MyCoon\Shared\Infrastructure\Bus\Query\InMemorySymfonyQueryBus(new RewindableGenerator(function () {
            yield 0 => ($this->privates['MyCoon\\Backoffice\\User\\Application\\Find\\FindUserQueryHandler'] ?? $this->getFindUserQueryHandlerService());
            yield 1 => ($this->privates['MyCoon\\Backoffice\\User\\Application\\GetUserByToken\\GetUserByTokenQueryHandler'] ?? $this->getGetUserByTokenQueryHandlerService());
            yield 2 => ($this->privates['MyCoon\\Backoffice\\User\\Application\\Search\\SearchUserQueryHandler'] ?? $this->getSearchUserQueryHandlerService());
        }, 3));
    }

    /**
     * Gets the private 'MyCoon\Shared\Infrastructure\Doctrine\DatabaseConnections' shared autowired service.
     *
     * @return \MyCoon\Shared\Infrastructure\Doctrine\DatabaseConnections
     */
    protected function getDatabaseConnectionsService()
    {
        return $this->privates['MyCoon\\Shared\\Infrastructure\\Doctrine\\DatabaseConnections'] = new \MyCoon\Shared\Infrastructure\Doctrine\DatabaseConnections(new RewindableGenerator(function () {
            yield 0 => ($this->services['Doctrine\\ODM\\MongoDB\\DocumentManager'] ?? $this->getDocumentManagerService());
        }, 1));
    }

    /**
     * Gets the private 'MyCoon\Shared\Infrastructure\Symfony\AddJsonBodyToRequestListener' shared autowired service.
     *
     * @return \MyCoon\Shared\Infrastructure\Symfony\AddJsonBodyToRequestListener
     */
    protected function getAddJsonBodyToRequestListenerService()
    {
        return $this->privates['MyCoon\\Shared\\Infrastructure\\Symfony\\AddJsonBodyToRequestListener'] = new \MyCoon\Shared\Infrastructure\Symfony\AddJsonBodyToRequestListener();
    }

    /**
     * Gets the private 'annotations.cache_adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter
     */
    protected function getAnnotations_CacheAdapterService()
    {
        return $this->privates['annotations.cache_adapter'] = \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
    }

    /**
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', true);
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\PsrCachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\PsrCachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->privates['annotations.cache_adapter'] ?? $this->getAnnotations_CacheAdapterService()), true);
    }

    /**
     * Gets the private 'annotations.dummy_registry' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationRegistry
     */
    protected function getAnnotations_DummyRegistryService()
    {
        $this->privates['annotations.dummy_registry'] = $instance = new \Doctrine\Common\Annotations\AnnotationRegistry();

        $instance->registerUniqueLoader('class_exists');

        return $instance;
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', ($this->privates['annotations.dummy_registry'] ?? $this->getAnnotations_DummyRegistryService()));

        return $instance;
    }

    /**
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /**
     * Gets the private 'argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver
     */
    protected function getArgumentResolverService()
    {
        return $this->privates['argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['argument_resolver.service'] ?? $this->getArgumentResolver_ServiceService());
            yield 4 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 5 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 6));
    }

    /**
     * Gets the private 'argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getArgumentResolver_DefaultService()
    {
        return $this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getArgumentResolver_RequestService()
    {
        return $this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getArgumentResolver_RequestAttributeService()
    {
        return $this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(($this->privates['.service_locator.lu7FCdF'] ?? $this->get_ServiceLocator_Lu7FCdFService()));
    }

    /**
     * Gets the private 'argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getArgumentResolver_SessionService()
    {
        return $this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getArgumentResolver_VariadicService()
    {
        return $this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('CdgmHmQFtC', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'cache.default_marshaller' shared service.
     *
     * @return \Symfony\Component\Cache\Marshaller\DefaultMarshaller
     */
    protected function getCache_DefaultMarshallerService()
    {
        return $this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL);
    }

    /**
     * Gets the private 'cache.messenger.restart_workers_signal' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_Messenger_RestartWorkersSignalService()
    {
        $this->privates['cache.messenger.restart_workers_signal'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('KE6OhNVMKb', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the private 'config.resource.self_checking_resource_checker' shared service.
     *
     * @return \Symfony\Component\Config\Resource\SelfCheckingResourceChecker
     */
    protected function getConfig_Resource_SelfCheckingResourceCheckerService()
    {
        return $this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.messenger.restart_workers_signal']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService());
        }, 2));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_consume_messages' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\ConsumeMessagesCommand
     */
    protected function getConsole_Command_MessengerConsumeMessagesService()
    {
        $this->privates['console.command.messenger_consume_messages'] = $instance = new \Symfony\Component\Messenger\Command\ConsumeMessagesCommand(($this->privates['messenger.routable_message_bus'] ?? $this->getMessenger_RoutableMessageBusService()), ($this->privates['messenger.receiver_locator'] ?? ($this->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), []);

        $instance->setName('messenger:consume');
        $instance->setAliases([0 => 'messenger:consume-messages']);

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    protected function getConsole_Command_MessengerDebugService()
    {
        $this->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['messenger.bus.default' => []]);

        $instance->setName('debug:messenger');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_setup_transports' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\SetupTransportsCommand
     */
    protected function getConsole_Command_MessengerSetupTransportsService()
    {
        $this->privates['console.command.messenger_setup_transports'] = $instance = new \Symfony\Component\Messenger\Command\SetupTransportsCommand(($this->privates['messenger.receiver_locator'] ?? ($this->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), []);

        $instance->setName('messenger:setup-transports');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_stop_workers' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\StopWorkersCommand
     */
    protected function getConsole_Command_MessengerStopWorkersService()
    {
        $this->privates['console.command.messenger_stop_workers'] = $instance = new \Symfony\Component\Messenger\Command\StopWorkersCommand(($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()));

        $instance->setName('messenger:stop-workers');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [], [0 => '/var/www/html/vendor/symfony/twig-bridge/Resources/views/Email', 1 => '/var/www/html/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php', 2 => '/var/www/html/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php', 3 => '/var/www/html/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php', 4 => '/var/www/html/vendor/symfony/twig-bridge/Extension/TranslationExtension.php']);

        $instance->setName('debug:translation');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($this->privates['translation.writer'] ?? $this->getTranslation_WriterService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'en', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [], [0 => '/var/www/html/vendor/symfony/twig-bridge/Resources/views/Email', 1 => '/var/www/html/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php', 2 => '/var/www/html/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php', 3 => '/var/www/html/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php', 4 => '/var/www/html/vendor/symfony/twig-bridge/Extension/TranslationExtension.php']);

        $instance->setName('translation:update');

        return $instance;
    }

    /**
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'console.suggest_missing_package_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber
     */
    protected function getConsole_SuggestMissingPackageSubscriberService()
    {
        return $this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber();
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /**
     * Gets the private 'controller_resolver' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getControllerResolverService()
    {
        return $this->privates['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /**
     * Gets the private 'dependency_injection.config.container_parameters_resource_checker' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    protected function getDependencyInjection_Config_ContainerParametersResourceCheckerService()
    {
        return $this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);
    }

    /**
     * Gets the private 'disallow_search_engine_index_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener
     */
    protected function getDisallowSearchEngineIndexResponseListenerService()
    {
        return $this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener();
    }

    /**
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_HtmlService()
    {
        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'error_handler.error_renderer.serializer' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_SerializerService()
    {
        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.serializer'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($this->services['serializer'] ?? $this->getSerializerService()), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), ($this->privates['twig.error_renderer.html'] ?? $this->getTwig_ErrorRenderer_HtmlService()), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true);
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/src/Resources'), [0 => (\dirname(__DIR__, 4).'/src')], false);
    }

    /**
     * Gets the private 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        return $this->privates['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true);
    }

    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the private 'identity_translator' shared service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator
     */
    protected function getIdentityTranslatorService()
    {
        return $this->privates['identity_translator'] = new \Symfony\Component\Translation\IdentityTranslator();
    }

    /**
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->services['translator'] ?? $this->getTranslatorService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Log\Logger
     */
    protected function getLoggerService()
    {
        return $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger();
    }

    /**
     * Gets the private 'messenger.bus.default.messenger.handlers_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlersLocator
     */
    protected function getMessenger_Bus_Default_Messenger_HandlersLocatorService()
    {
        return $this->privates['messenger.bus.default.messenger.handlers_locator'] = new \Symfony\Component\Messenger\Handler\HandlersLocator([]);
    }

    /**
     * Gets the private 'messenger.bus.default.middleware.add_bus_name_stamp_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware
     */
    protected function getMessenger_Bus_Default_Middleware_AddBusNameStampMiddlewareService()
    {
        return $this->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] = new \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware('messenger.bus.default');
    }

    /**
     * Gets the private 'messenger.bus.default.middleware.handle_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware
     */
    protected function getMessenger_Bus_Default_Middleware_HandleMessageService()
    {
        $this->privates['messenger.bus.default.middleware.handle_message'] = $instance = new \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware(($this->privates['messenger.bus.default.messenger.handlers_locator'] ?? ($this->privates['messenger.bus.default.messenger.handlers_locator'] = new \Symfony\Component\Messenger\Handler\HandlersLocator([]))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the private 'messenger.listener.stop_worker_on_restart_signal_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener
     */
    protected function getMessenger_Listener_StopWorkerOnRestartSignalListenerService()
    {
        return $this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] = new \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener(($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'messenger.middleware.dispatch_after_current_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware
     */
    protected function getMessenger_Middleware_DispatchAfterCurrentBusService()
    {
        return $this->privates['messenger.middleware.dispatch_after_current_bus'] = new \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware();
    }

    /**
     * Gets the private 'messenger.middleware.failed_message_processing_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware
     */
    protected function getMessenger_Middleware_FailedMessageProcessingMiddlewareService()
    {
        return $this->privates['messenger.middleware.failed_message_processing_middleware'] = new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware();
    }

    /**
     * Gets the private 'messenger.middleware.reject_redelivered_message_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware
     */
    protected function getMessenger_Middleware_RejectRedeliveredMessageMiddlewareService()
    {
        return $this->privates['messenger.middleware.reject_redelivered_message_middleware'] = new \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware();
    }

    /**
     * Gets the private 'messenger.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    protected function getMessenger_Middleware_SendMessageService()
    {
        $this->privates['messenger.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(($this->privates['messenger.senders_locator'] ?? $this->getMessenger_SendersLocatorService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the private 'messenger.receiver_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getMessenger_ReceiverLocatorService()
    {
        return $this->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []);
    }

    /**
     * Gets the private 'messenger.retry.send_failed_message_for_retry_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener
     */
    protected function getMessenger_Retry_SendFailedMessageForRetryListenerService()
    {
        return $this->privates['messenger.retry.send_failed_message_for_retry_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener(($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), ($this->privates['messenger.retry_strategy_locator'] ?? ($this->privates['messenger.retry_strategy_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'messenger.retry_strategy_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getMessenger_RetryStrategyLocatorService()
    {
        return $this->privates['messenger.retry_strategy_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []);
    }

    /**
     * Gets the private 'messenger.routable_message_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\RoutableMessageBus
     */
    protected function getMessenger_RoutableMessageBusService()
    {
        return $this->privates['messenger.routable_message_bus'] = new \Symfony\Component\Messenger\RoutableMessageBus(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'messenger.bus.default' => ['services', 'message_bus', 'getMessageBusService', false],
        ], [
            'messenger.bus.default' => '?',
        ]), ($this->services['message_bus'] ?? $this->getMessageBusService()));
    }

    /**
     * Gets the private 'messenger.senders_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Sender\SendersLocator
     */
    protected function getMessenger_SendersLocatorService()
    {
        return $this->privates['messenger.senders_locator'] = new \Symfony\Component\Messenger\Transport\Sender\SendersLocator([], ($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))));
    }

    /**
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        $this->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }

    /**
     * Gets the private 'nelmio_cors.cacheable_response_vary_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener
     */
    protected function getNelmioCors_CacheableResponseVaryListenerService()
    {
        return $this->privates['nelmio_cors.cacheable_response_vary_listener'] = new \Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener();
    }

    /**
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->privates['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(($this->privates['nelmio_cors.options_resolver'] ?? $this->getNelmioCors_OptionsResolverService()));
    }

    /**
     * Gets the private 'nelmio_cors.options_provider.config' shared service.
     *
     * @return \Nelmio\CorsBundle\Options\ConfigProvider
     */
    protected function getNelmioCors_OptionsProvider_ConfigService()
    {
        return $this->privates['nelmio_cors.options_provider.config'] = new \Nelmio\CorsBundle\Options\ConfigProvider([], $this->parameters['nelmio_cors.defaults']);
    }

    /**
     * Gets the private 'nelmio_cors.options_resolver' shared service.
     *
     * @return \Nelmio\CorsBundle\Options\Resolver
     */
    protected function getNelmioCors_OptionsResolverService()
    {
        return $this->privates['nelmio_cors.options_resolver'] = new \Nelmio\CorsBundle\Options\Resolver([0 => ($this->privates['nelmio_cors.options_provider.config'] ?? $this->getNelmioCors_OptionsProvider_ConfigService())]);
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'routing.loader.annotation' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader
     */
    protected function getRouting_Loader_AnnotationService()
    {
        return $this->privates['routing.loader.annotation'] = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'routing.loader.annotation.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader
     */
    protected function getRouting_Loader_Annotation_DirectoryService()
    {
        return $this->privates['routing.loader.annotation.directory'] = new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()), ($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
    }

    /**
     * Gets the private 'routing.loader.annotation.file' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AnnotationFileLoader
     */
    protected function getRouting_Loader_Annotation_FileService()
    {
        return $this->privates['routing.loader.annotation.file'] = new \Symfony\Component\Routing\Loader\AnnotationFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()), ($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
    }

    /**
     * Gets the private 'routing.loader.container' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\ContainerLoader
     */
    protected function getRouting_Loader_ContainerService()
    {
        return $this->privates['routing.loader.container'] = new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'MyCoon\\Apps\\Backoffice\\Backend\\Kernel',
        ])));
    }

    /**
     * Gets the private 'routing.loader.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\DirectoryLoader
     */
    protected function getRouting_Loader_DirectoryService()
    {
        return $this->privates['routing.loader.directory'] = new \Symfony\Component\Routing\Loader\DirectoryLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.glob' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\GlobFileLoader
     */
    protected function getRouting_Loader_GlobService()
    {
        return $this->privates['routing.loader.glob'] = new \Symfony\Component\Routing\Loader\GlobFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.php' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\PhpFileLoader
     */
    protected function getRouting_Loader_PhpService()
    {
        return $this->privates['routing.loader.php'] = new \Symfony\Component\Routing\Loader\PhpFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.xml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\XmlFileLoader
     */
    protected function getRouting_Loader_XmlService()
    {
        return $this->privates['routing.loader.xml'] = new \Symfony\Component\Routing\Loader\XmlFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.loader.yml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\YamlFileLoader
     */
    protected function getRouting_Loader_YmlService()
    {
        return $this->privates['routing.loader.yml'] = new \Symfony\Component\Routing\Loader\YamlFileLoader(($this->privates['file_locator'] ?? $this->getFileLocatorService()));
    }

    /**
     * Gets the private 'routing.resolver' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver
     */
    protected function getRouting_ResolverService()
    {
        $this->privates['routing.resolver'] = $instance = new \Symfony\Component\Config\Loader\LoaderResolver();

        $instance->addLoader(($this->privates['routing.loader.xml'] ?? $this->getRouting_Loader_XmlService()));
        $instance->addLoader(($this->privates['routing.loader.yml'] ?? $this->getRouting_Loader_YmlService()));
        $instance->addLoader(($this->privates['routing.loader.php'] ?? $this->getRouting_Loader_PhpService()));
        $instance->addLoader(($this->privates['routing.loader.glob'] ?? $this->getRouting_Loader_GlobService()));
        $instance->addLoader(($this->privates['routing.loader.directory'] ?? $this->getRouting_Loader_DirectoryService()));
        $instance->addLoader(($this->privates['routing.loader.container'] ?? $this->getRouting_Loader_ContainerService()));
        $instance->addLoader(($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
        $instance->addLoader(($this->privates['routing.loader.annotation.directory'] ?? $this->getRouting_Loader_Annotation_DirectoryService()));
        $instance->addLoader(($this->privates['routing.loader.annotation.file'] ?? $this->getRouting_Loader_Annotation_FileService()));

        return $instance;
    }

    /**
     * Gets the private 'secrets.local_vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault
     */
    protected function getSecrets_LocalVaultService()
    {
        return $this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local'));
    }

    /**
     * Gets the private 'secrets.vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault
     */
    protected function getSecrets_VaultService()
    {
        return $this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'));
    }

    /**
     * Gets the private 'serializer.denormalizer.array' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer
     */
    protected function getSerializer_Denormalizer_ArrayService()
    {
        return $this->privates['serializer.denormalizer.array'] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
    }

    /**
     * Gets the private 'serializer.encoder.csv' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\CsvEncoder
     */
    protected function getSerializer_Encoder_CsvService()
    {
        return $this->privates['serializer.encoder.csv'] = new \Symfony\Component\Serializer\Encoder\CsvEncoder();
    }

    /**
     * Gets the private 'serializer.encoder.json' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\JsonEncoder
     */
    protected function getSerializer_Encoder_JsonService()
    {
        return $this->privates['serializer.encoder.json'] = new \Symfony\Component\Serializer\Encoder\JsonEncoder();
    }

    /**
     * Gets the private 'serializer.encoder.xml' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\XmlEncoder
     */
    protected function getSerializer_Encoder_XmlService()
    {
        return $this->privates['serializer.encoder.xml'] = new \Symfony\Component\Serializer\Encoder\XmlEncoder();
    }

    /**
     * Gets the private 'serializer.encoder.yaml' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\YamlEncoder
     */
    protected function getSerializer_Encoder_YamlService()
    {
        return $this->privates['serializer.encoder.yaml'] = new \Symfony\Component\Serializer\Encoder\YamlEncoder();
    }

    /**
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    protected function getSerializer_Mapping_CacheWarmerService()
    {
        return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDir.''.'/serialization.php'));
    }

    /**
     * Gets the private 'serializer.mapping.chain_loader' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Loader\LoaderChain
     */
    protected function getSerializer_Mapping_ChainLoaderService()
    {
        return $this->privates['serializer.mapping.chain_loader'] = new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))]);
    }

    /**
     * Gets the private 'serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getSerializer_Mapping_ClassMetadataFactoryService()
    {
        return $this->privates['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(($this->privates['serializer.mapping.chain_loader'] ?? $this->getSerializer_Mapping_ChainLoaderService()));
    }

    /**
     * Gets the private 'serializer.name_converter.metadata_aware' shared service.
     *
     * @return \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter
     */
    protected function getSerializer_NameConverter_MetadataAwareService()
    {
        return $this->privates['serializer.name_converter.metadata_aware'] = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'serializer.normalizer.constraint_violation_list' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer
     */
    protected function getSerializer_Normalizer_ConstraintViolationListService()
    {
        return $this->privates['serializer.normalizer.constraint_violation_list'] = new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService()));
    }

    /**
     * Gets the private 'serializer.normalizer.data_uri' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DataUriNormalizer
     */
    protected function getSerializer_Normalizer_DataUriService()
    {
        return $this->privates['serializer.normalizer.data_uri'] = new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->getMimeTypesService()));
    }

    /**
     * Gets the private 'serializer.normalizer.dateinterval' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer
     */
    protected function getSerializer_Normalizer_DateintervalService()
    {
        return $this->privates['serializer.normalizer.dateinterval'] = new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.datetime' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer
     */
    protected function getSerializer_Normalizer_DatetimeService()
    {
        return $this->privates['serializer.normalizer.datetime'] = new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.datetimezone' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer
     */
    protected function getSerializer_Normalizer_DatetimezoneService()
    {
        return $this->privates['serializer.normalizer.datetimezone'] = new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.json_serializable' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer
     */
    protected function getSerializer_Normalizer_JsonSerializableService()
    {
        return $this->privates['serializer.normalizer.json_serializable'] = new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.problem' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ProblemNormalizer
     */
    protected function getSerializer_Normalizer_ProblemService()
    {
        return $this->privates['serializer.normalizer.problem'] = new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true);
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0);
    }

    /**
     * Gets the private 'session.storage.mock_file' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_MockFileService()
    {
        return $this->privates['session.storage.mock_file'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage(($this->targetDir.''.'/sessions'), 'MOCKSESSID', ($this->privates['session.storage.metadata_bag'] ?? ($this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0))));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'swiftmailer.command.debug' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand
     */
    protected function getSwiftmailer_Command_DebugService()
    {
        $this->privates['swiftmailer.command.debug'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand();

        $instance->setName('debug:swiftmailer');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.command.new_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand
     */
    protected function getSwiftmailer_Command_NewEmailService()
    {
        $this->privates['swiftmailer.command.new_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand();

        $instance->setName('swiftmailer:email:send');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.command.send_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand
     */
    protected function getSwiftmailer_Command_SendEmailService()
    {
        $this->privates['swiftmailer.command.send_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand();

        $instance->setName('swiftmailer:spool:send');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->privates['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'swiftmailer.mailer.default.spool.memory' shared service.
     *
     * @return \Swift_MemorySpool
     */
    protected function getSwiftmailer_Mailer_Default_Spool_MemoryService()
    {
        return $this->privates['swiftmailer.mailer.default.spool.memory'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.
     *
     * @return \Swift_Events_SimpleEventDispatcher
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the private 'test.client.cookiejar' service.
     *
     * @return \Symfony\Component\BrowserKit\CookieJar
     */
    protected function getTest_Client_CookiejarService()
    {
        return new \Symfony\Component\BrowserKit\CookieJar();
    }

    /**
     * Gets the private 'test.client.history' service.
     *
     * @return \Symfony\Component\BrowserKit\History
     */
    protected function getTest_Client_HistoryService()
    {
        return new \Symfony\Component\BrowserKit\History();
    }

    /**
     * Gets the private 'test.session.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TestSessionListener
     */
    protected function getTest_Session_ListenerService()
    {
        return $this->privates['test.session.listener'] = new \Symfony\Component\HttpKernel\EventListener\TestSessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]), $this->parameters['session.storage.options']);
    }

    /**
     * Gets the private 'translation.dumper.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->privates['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->privates['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.json' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->privates['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->privates['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->privates['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->privates['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->privates['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->privates['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->privates['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the private 'translation.dumper.yaml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YamlService()
    {
        return $this->privates['translation.dumper.yaml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml');
    }

    /**
     * Gets the private 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->privates['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', ($this->privates['translation.extractor.php'] ?? ($this->privates['translation.extractor.php'] = new \Symfony\Component\Translation\Extractor\PhpExtractor())));
        $instance->addExtractor('twig', ($this->privates['twig.translation.extractor'] ?? $this->getTwig_Translation_ExtractorService()));

        return $instance;
    }

    /**
     * Gets the private 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\PhpExtractor
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->privates['translation.extractor.php'] = new \Symfony\Component\Translation\Extractor\PhpExtractor();
    }

    /**
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /**
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /**
     * Gets the private 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        $this->privates['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', ($this->privates['translation.dumper.php'] ?? ($this->privates['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper())));
        $instance->addDumper('xlf', ($this->privates['translation.dumper.xliff'] ?? ($this->privates['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper())));
        $instance->addDumper('po', ($this->privates['translation.dumper.po'] ?? ($this->privates['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper())));
        $instance->addDumper('mo', ($this->privates['translation.dumper.mo'] ?? ($this->privates['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper())));
        $instance->addDumper('yml', ($this->privates['translation.dumper.yml'] ?? ($this->privates['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper())));
        $instance->addDumper('yaml', ($this->privates['translation.dumper.yaml'] ?? ($this->privates['translation.dumper.yaml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'))));
        $instance->addDumper('ts', ($this->privates['translation.dumper.qt'] ?? ($this->privates['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper())));
        $instance->addDumper('csv', ($this->privates['translation.dumper.csv'] ?? ($this->privates['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper())));
        $instance->addDumper('ini', ($this->privates['translation.dumper.ini'] ?? ($this->privates['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper())));
        $instance->addDumper('json', ($this->privates['translation.dumper.json'] ?? ($this->privates['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper())));
        $instance->addDumper('res', ($this->privates['translation.dumper.res'] ?? ($this->privates['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper())));

        return $instance;
    }

    /**
     * Gets the private 'translator.formatter.default' shared service.
     *
     * @return \Symfony\Component\Translation\Formatter\MessageFormatter
     */
    protected function getTranslator_Formatter_DefaultService()
    {
        return $this->privates['translator.formatter.default'] = new \Symfony\Component\Translation\Formatter\MessageFormatter(($this->privates['identity_translator'] ?? ($this->privates['identity_translator'] = new \Symfony\Component\Translation\IdentityTranslator())));
    }

    /**
     * Gets the private 'twig.app_variable' shared service.
     *
     * @return \Symfony\Bridge\Twig\AppVariable
     */
    protected function getTwig_AppVariableService()
    {
        $this->privates['twig.app_variable'] = $instance = new \Symfony\Bridge\Twig\AppVariable();

        $instance->setEnvironment('test');
        $instance->setDebug(true);
        if ($this->has('request_stack')) {
            $instance->setRequestStack(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
        }

        return $instance;
    }

    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), (\dirname(__DIR__, 4).'/src'));

        $instance->setName('debug:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.configurator.environment' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator
     */
    protected function getTwig_Configurator_EnvironmentService()
    {
        return $this->privates['twig.configurator.environment'] = new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ',');
    }

    /**
     * Gets the private 'twig.error_renderer.html' shared service.
     *
     * @return \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer
     */
    protected function getTwig_ErrorRenderer_HtmlService()
    {
        return $this->privates['twig.error_renderer.html'] = new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true));
    }

    /**
     * Gets the private 'twig.extension.code' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CodeExtension
     */
    protected function getTwig_Extension_CodeService()
    {
        return $this->privates['twig.extension.code'] = new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8');
    }

    /**
     * Gets the private 'twig.extension.debug' shared service.
     *
     * @return \Twig\Extension\DebugExtension
     */
    protected function getTwig_Extension_DebugService()
    {
        return $this->privates['twig.extension.debug'] = new \Twig\Extension\DebugExtension();
    }

    /**
     * Gets the private 'twig.extension.httpfoundation' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpFoundationExtension
     */
    protected function getTwig_Extension_HttpfoundationService()
    {
        return $this->privates['twig.extension.httpfoundation'] = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(($this->privates['url_helper'] ?? $this->getUrlHelperService()));
    }

    /**
     * Gets the private 'twig.extension.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelExtension
     */
    protected function getTwig_Extension_HttpkernelService()
    {
        return $this->privates['twig.extension.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension();
    }

    /**
     * Gets the private 'twig.extension.profiler' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\ProfilerExtension
     */
    protected function getTwig_Extension_ProfilerService()
    {
        return $this->privates['twig.extension.profiler'] = new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), NULL);
    }

    /**
     * Gets the private 'twig.extension.routing' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\RoutingExtension
     */
    protected function getTwig_Extension_RoutingService()
    {
        return $this->privates['twig.extension.routing'] = new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'twig.extension.trans' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\TranslationExtension
     */
    protected function getTwig_Extension_TransService()
    {
        return $this->privates['twig.extension.trans'] = new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'twig.extension.yaml' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\YamlExtension
     */
    protected function getTwig_Extension_YamlService()
    {
        return $this->privates['twig.extension.yaml'] = new \Symfony\Bridge\Twig\Extension\YamlExtension();
    }

    /**
     * Gets the private 'twig.loader.native_filesystem' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader
     */
    protected function getTwig_Loader_NativeFilesystemService()
    {
        $this->privates['twig.loader.native_filesystem'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader([], \dirname(__DIR__, 4));

        $instance->addPath('/var/www/html/vendor/symfony/framework-bundle/Resources/views', 'Framework');
        $instance->addPath('/var/www/html/vendor/symfony/framework-bundle/Resources/views', '!Framework');
        $instance->addPath('/var/www/html/vendor/symfony/swiftmailer-bundle/Resources/views', 'Swiftmailer');
        $instance->addPath('/var/www/html/vendor/symfony/swiftmailer-bundle/Resources/views', '!Swiftmailer');
        $instance->addPath('/var/www/html/vendor/symfony/twig-bundle/Resources/views', 'Twig');
        $instance->addPath('/var/www/html/vendor/symfony/twig-bundle/Resources/views', '!Twig');
        $instance->addPath('/var/www/html/vendor/symfony/twig-bridge/Resources/views/Email', 'email');
        $instance->addPath('/var/www/html/vendor/symfony/twig-bridge/Resources/views/Email', '!email');

        return $instance;
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->privates['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(($this->privates['fragment.handler'] ?? $this->getFragment_HandlerService()));
    }

    /**
     * Gets the private 'twig.runtime_loader' shared service.
     *
     * @return \Twig\RuntimeLoader\ContainerRuntimeLoader
     */
    protected function getTwig_RuntimeLoaderService()
    {
        return $this->privates['twig.runtime_loader'] = new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
        ]));
    }

    /**
     * Gets the private 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->privates['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'url_helper' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\UrlHelper
     */
    protected function getUrlHelperService()
    {
        return $this->privates['url_helper'] = new \Symfony\Component\HttpFoundation\UrlHelper(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'domain' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'knp_snappy.image.binary' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'domain': $value = $this->getEnv('DOMAIN'); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/srcMyCoon_Apps_Backoffice_Backend_KernelTestDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDir.''.'/swiftmailer/spool/default'); break;
            case 'knp_snappy.image.binary': $value = $this->getEnv('WKHTMLTOIMAGE_PATH'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'/src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'test',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'FriendsOfBehatSymfonyExtensionBundle' => 'FriendsOfBehat\\SymfonyExtension\\Bundle\\FriendsOfBehatSymfonyExtensionBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AwsBundle' => 'Aws\\Symfony\\AwsBundle',
                'KnpSnappyBundle' => 'Knp\\Bundle\\SnappyBundle\\KnpSnappyBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
            ],
            'kernel.bundles_metadata' => [
                'NelmioCorsBundle' => [
                    'path' => '/var/www/html/vendor/nelmio/cors-bundle',
                    'namespace' => 'Nelmio\\CorsBundle',
                ],
                'FrameworkBundle' => [
                    'path' => '/var/www/html/vendor/symfony/framework-bundle',
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'FriendsOfBehatSymfonyExtensionBundle' => [
                    'path' => '/var/www/html/vendor/friends-of-behat/symfony-extension/src/Bundle',
                    'namespace' => 'FriendsOfBehat\\SymfonyExtension\\Bundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => '/var/www/html/vendor/symfony/swiftmailer-bundle',
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'AwsBundle' => [
                    'path' => '/var/www/html/vendor/aws/aws-sdk-php-symfony/src',
                    'namespace' => 'Aws\\Symfony',
                ],
                'KnpSnappyBundle' => [
                    'path' => '/var/www/html/vendor/knplabs/knp-snappy-bundle/src',
                    'namespace' => 'Knp\\Bundle\\SnappyBundle',
                ],
                'TwigBundle' => [
                    'path' => '/var/www/html/vendor/symfony/twig-bundle',
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcMyCoon_Apps_Backoffice_Backend_KernelTestDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'nelmio_cors.map' => [

            ],
            'nelmio_cors.defaults' => [
                'allow_origin' => [
                    0 => 'aasdasdsas',
                ],
                'allow_credentials' => false,
                'allow_headers' => [
                    0 => 'content-type',
                    1 => 'authorization',
                ],
                'expose_headers' => [
                    0 => 'Link',
                ],
                'allow_methods' => [
                    0 => 'GET',
                    1 => 'OPTIONS',
                    2 => 'POST',
                    3 => 'PUT',
                    4 => 'PATCH',
                    5 => 'DELETE',
                ],
                'max_age' => 3600,
                'hosts' => [

                ],
                'origin_regex' => true,
                'forced_allow_origin_value' => NULL,
            ],
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
            ],
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'test.client.parameters' => [

            ],
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcMyCoon_Apps_Backoffice_Backend_KernelTestDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'swiftmailer.mailer.default.transport.name' => 'null',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'localhost',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.transport.smtp.stream_options' => [

            ],
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => false,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => false,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'aws_sdk.class' => 'Aws\\Sdk',
            'knp_snappy.pdf.binary' => '/usr/bin/wkhtmltopdf',
            'knp_snappy.pdf.options' => [
                'viewport-size' => '1024x768',
                'page-size' => 'A4',
            ],
            'knp_snappy.pdf.env' => [

            ],
            'knp_snappy.image.options' => [

            ],
            'knp_snappy.image.env' => [

            ],
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'console.command.ids' => [

            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}

class InMemorySymfonyEventBus_cfdd715 extends \MyCoon\Shared\Infrastructure\Bus\Event\InMemory\InMemorySymfonyEventBus implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \MyCoon\Shared\Infrastructure\Bus\Event\InMemory\InMemorySymfonyEventBus|null wrapped object, if the proxy is initialized
     */
    private $valueHolder26381 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb806e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties16d86 = [
        
    ];

    public function publish(\MyCoon\Shared\Domain\Bus\Event\DomainEvent ... $events) : void
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'publish', array('events' => $events), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $this->valueHolder26381->publish(...$events);
return;
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

        \Closure::bind(function (\MyCoon\Shared\Infrastructure\Bus\Event\InMemory\InMemorySymfonyEventBus $instance) {
            unset($instance->bus);
        }, $instance, 'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus')->__invoke($instance);

        $instance->initializerb806e = $initializer;

        return $instance;
    }

    public function __construct(iterable $subscribers)
    {
        static $reflection;

        if (! $this->valueHolder26381) {
            $reflection = $reflection ?? new \ReflectionClass('MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus');
            $this->valueHolder26381 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\MyCoon\Shared\Infrastructure\Bus\Event\InMemory\InMemorySymfonyEventBus $instance) {
            unset($instance->bus);
        }, $this, 'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus')->__invoke($this);

        }

        $this->valueHolder26381->__construct($subscribers);
    }

    public function & __get($name)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__get', ['name' => $name], $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        if (isset(self::$publicProperties16d86[$name])) {
            return $this->valueHolder26381->$name;
        }

        $realInstanceReflection = new \ReflectionClass('MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

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

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__isset', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__unset', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__clone', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $this->valueHolder26381 = clone $this->valueHolder26381;
    }

    public function __sleep()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__sleep', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return array('valueHolder26381');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\MyCoon\Shared\Infrastructure\Bus\Event\InMemory\InMemorySymfonyEventBus $instance) {
            unset($instance->bus);
        }, $this, 'MyCoon\\Shared\\Infrastructure\\Bus\\Event\\InMemory\\InMemorySymfonyEventBus')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb806e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb806e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'initializeProxy', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder26381;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder26381;
    }
}

class ContainerInterface_7a5418d implements \ProxyManager\Proxy\VirtualProxyInterface, \Symfony\Component\DependencyInjection\ContainerInterface
{
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder26381 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb806e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties16d86 = [
        
    ];

    public function set($id, $service)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'set', array('id' => $id, 'service' => $service), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->set($id, $service);
    }

    public function get($id, $invalidBehavior = 1)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'get', array('id' => $id, 'invalidBehavior' => $invalidBehavior), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->get($id, $invalidBehavior);
    }

    public function has($id)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'has', array('id' => $id), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->has($id);
    }

    public function initialized($id)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'initialized', array('id' => $id), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->initialized($id);
    }

    public function getParameter($name)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getParameter', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getParameter($name);
    }

    public function hasParameter($name)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'hasParameter', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->hasParameter($name);
    }

    public function setParameter($name, $value)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'setParameter', array('name' => $name, 'value' => $value), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->setParameter($name, $value);
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

        $instance->initializerb806e = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder26381) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');
            $this->valueHolder26381 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__get', ['name' => $name], $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        if (isset(self::$publicProperties16d86[$name])) {
            return $this->valueHolder26381->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

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

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__isset', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__unset', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__clone', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $this->valueHolder26381 = clone $this->valueHolder26381;
    }

    public function __sleep()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__sleep', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return array('valueHolder26381');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb806e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb806e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'initializeProxy', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder26381;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder26381;
    }
}

class Mink_ecc9ff5 extends \Behat\Mink\Mink implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Behat\Mink\Mink|null wrapped object, if the proxy is initialized
     */
    private $valueHolder26381 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb806e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties16d86 = [
        
    ];

    public function registerSession($name, \Behat\Mink\Session $session)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'registerSession', array('name' => $name, 'session' => $session), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->registerSession($name, $session);
    }

    public function hasSession($name)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'hasSession', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->hasSession($name);
    }

    public function setDefaultSessionName($name)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'setDefaultSessionName', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->setDefaultSessionName($name);
    }

    public function getDefaultSessionName()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getDefaultSessionName', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getDefaultSessionName();
    }

    public function getSession($name = null)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getSession', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getSession($name);
    }

    public function isSessionStarted($name = null)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'isSessionStarted', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->isSessionStarted($name);
    }

    public function assertSession($session = null)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'assertSession', array('session' => $session), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->assertSession($session);
    }

    public function resetSessions()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'resetSessions', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->resetSessions();
    }

    public function restartSessions()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'restartSessions', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->restartSessions();
    }

    public function stopSessions()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'stopSessions', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->stopSessions();
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

        \Closure::bind(function (\Behat\Mink\Mink $instance) {
            unset($instance->defaultSessionName, $instance->sessions);
        }, $instance, 'Behat\\Mink\\Mink')->__invoke($instance);

        $instance->initializerb806e = $initializer;

        return $instance;
    }

    public function __construct(array $sessions = [])
    {
        static $reflection;

        if (! $this->valueHolder26381) {
            $reflection = $reflection ?? new \ReflectionClass('Behat\\Mink\\Mink');
            $this->valueHolder26381 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Behat\Mink\Mink $instance) {
            unset($instance->defaultSessionName, $instance->sessions);
        }, $this, 'Behat\\Mink\\Mink')->__invoke($this);

        }

        $this->valueHolder26381->__construct($sessions);
    }

    public function & __get($name)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__get', ['name' => $name], $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        if (isset(self::$publicProperties16d86[$name])) {
            return $this->valueHolder26381->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Mink');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

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

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Mink');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__isset', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Mink');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__unset', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Mink');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__clone', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $this->valueHolder26381 = clone $this->valueHolder26381;
    }

    public function __sleep()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__sleep', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return array('valueHolder26381');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Behat\Mink\Mink $instance) {
            unset($instance->defaultSessionName, $instance->sessions);
        }, $this, 'Behat\\Mink\\Mink')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb806e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb806e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'initializeProxy', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder26381;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder26381;
    }

    public function __destruct()
    {
        $this->initializerb806e || $this->valueHolder26381->__destruct();
    }
}

class Session_4e1eb92 extends \Behat\Mink\Session implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Behat\Mink\Session|null wrapped object, if the proxy is initialized
     */
    private $valueHolder26381 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb806e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties16d86 = [
        
    ];

    public function isStarted()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'isStarted', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->isStarted();
    }

    public function start()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'start', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->start();
    }

    public function stop()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'stop', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->stop();
    }

    public function restart()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'restart', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->restart();
    }

    public function reset()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'reset', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->reset();
    }

    public function getDriver()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getDriver', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getDriver();
    }

    public function getPage()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getPage', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getPage();
    }

    public function getSelectorsHandler()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getSelectorsHandler', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getSelectorsHandler();
    }

    public function visit($url)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'visit', array('url' => $url), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->visit($url);
    }

    public function setBasicAuth($user, $password = '')
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'setBasicAuth', array('user' => $user, 'password' => $password), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->setBasicAuth($user, $password);
    }

    public function setRequestHeader($name, $value)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'setRequestHeader', array('name' => $name, 'value' => $value), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->setRequestHeader($name, $value);
    }

    public function getResponseHeaders()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getResponseHeaders', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getResponseHeaders();
    }

    public function getResponseHeader($name)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getResponseHeader', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getResponseHeader($name);
    }

    public function setCookie($name, $value = null)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'setCookie', array('name' => $name, 'value' => $value), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->setCookie($name, $value);
    }

    public function getCookie($name)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getCookie', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getCookie($name);
    }

    public function getStatusCode()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getStatusCode', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getStatusCode();
    }

    public function getCurrentUrl()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getCurrentUrl', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getCurrentUrl();
    }

    public function getScreenshot()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getScreenshot', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getScreenshot();
    }

    public function getWindowNames()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getWindowNames', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getWindowNames();
    }

    public function getWindowName()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getWindowName', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getWindowName();
    }

    public function reload()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'reload', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->reload();
    }

    public function back()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'back', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->back();
    }

    public function forward()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'forward', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->forward();
    }

    public function switchToWindow($name = null)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'switchToWindow', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->switchToWindow($name);
    }

    public function switchToIFrame($name = null)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'switchToIFrame', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->switchToIFrame($name);
    }

    public function executeScript($script)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'executeScript', array('script' => $script), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->executeScript($script);
    }

    public function evaluateScript($script)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'evaluateScript', array('script' => $script), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->evaluateScript($script);
    }

    public function wait($time, $condition = 'false')
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'wait', array('time' => $time, 'condition' => $condition), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->wait($time, $condition);
    }

    public function resizeWindow($width, $height, $name = null)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'resizeWindow', array('width' => $width, 'height' => $height, 'name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->resizeWindow($width, $height, $name);
    }

    public function maximizeWindow($name = null)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'maximizeWindow', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->maximizeWindow($name);
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

        \Closure::bind(function (\Behat\Mink\Session $instance) {
            unset($instance->driver, $instance->page, $instance->selectorsHandler);
        }, $instance, 'Behat\\Mink\\Session')->__invoke($instance);

        $instance->initializerb806e = $initializer;

        return $instance;
    }

    public function __construct(\Behat\Mink\Driver\DriverInterface $driver, ?\Behat\Mink\Selector\SelectorsHandler $selectorsHandler = null)
    {
        static $reflection;

        if (! $this->valueHolder26381) {
            $reflection = $reflection ?? new \ReflectionClass('Behat\\Mink\\Session');
            $this->valueHolder26381 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Behat\Mink\Session $instance) {
            unset($instance->driver, $instance->page, $instance->selectorsHandler);
        }, $this, 'Behat\\Mink\\Session')->__invoke($this);

        }

        $this->valueHolder26381->__construct($driver, $selectorsHandler);
    }

    public function & __get($name)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__get', ['name' => $name], $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        if (isset(self::$publicProperties16d86[$name])) {
            return $this->valueHolder26381->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Session');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

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

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Session');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__isset', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Session');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__unset', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('Behat\\Mink\\Session');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__clone', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $this->valueHolder26381 = clone $this->valueHolder26381;
    }

    public function __sleep()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__sleep', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return array('valueHolder26381');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Behat\Mink\Session $instance) {
            unset($instance->driver, $instance->page, $instance->selectorsHandler);
        }, $this, 'Behat\\Mink\\Session')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb806e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb806e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'initializeProxy', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder26381;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder26381;
    }
}

class MinkParameters_4b72c85 extends \FriendsOfBehat\SymfonyExtension\Mink\MinkParameters implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \FriendsOfBehat\SymfonyExtension\Mink\MinkParameters|null wrapped object, if the proxy is initialized
     */
    private $valueHolder26381 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb806e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties16d86 = [
        
    ];

    public function getIterator() : \Traversable
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'getIterator', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->getIterator();
    }

    public function offsetExists($offset) : bool
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'offsetExists', array('offset' => $offset), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->offsetExists($offset);
    }

    public function offsetGet($offset)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'offsetGet', array('offset' => $offset), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->offsetGet($offset);
    }

    public function offsetSet($offset, $value) : void
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'offsetSet', array('offset' => $offset, 'value' => $value), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $this->valueHolder26381->offsetSet($offset, $value);
return;
    }

    public function offsetUnset($offset) : void
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'offsetUnset', array('offset' => $offset), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $this->valueHolder26381->offsetUnset($offset);
return;
    }

    public function count() : int
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'count', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return $this->valueHolder26381->count();
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

        \Closure::bind(function (\FriendsOfBehat\SymfonyExtension\Mink\MinkParameters $instance) {
            unset($instance->minkParameters);
        }, $instance, 'FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters')->__invoke($instance);

        $instance->initializerb806e = $initializer;

        return $instance;
    }

    public function __construct(array $minkParameters)
    {
        static $reflection;

        if (! $this->valueHolder26381) {
            $reflection = $reflection ?? new \ReflectionClass('FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters');
            $this->valueHolder26381 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FriendsOfBehat\SymfonyExtension\Mink\MinkParameters $instance) {
            unset($instance->minkParameters);
        }, $this, 'FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters')->__invoke($this);

        }

        $this->valueHolder26381->__construct($minkParameters);
    }

    public function & __get($name)
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__get', ['name' => $name], $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        if (isset(self::$publicProperties16d86[$name])) {
            return $this->valueHolder26381->$name;
        }

        $realInstanceReflection = new \ReflectionClass('FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

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

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__isset', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__unset', array('name' => $name), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $realInstanceReflection = new \ReflectionClass('FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26381;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder26381;
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
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__clone', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        $this->valueHolder26381 = clone $this->valueHolder26381;
    }

    public function __sleep()
    {
        $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, '__sleep', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;

        return array('valueHolder26381');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\FriendsOfBehat\SymfonyExtension\Mink\MinkParameters $instance) {
            unset($instance->minkParameters);
        }, $this, 'FriendsOfBehat\\SymfonyExtension\\Mink\\MinkParameters')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb806e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb806e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb806e && ($this->initializerb806e->__invoke($valueHolder26381, $this, 'initializeProxy', array(), $this->initializerb806e) || 1) && $this->valueHolder26381 = $valueHolder26381;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder26381;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder26381;
    }
}
