<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'add_anime' => array(array(), array('_controller' => 'App\\Controller\\AddController::AddAnime'), array(), array(array('text', '/add/anime')), array(), array()),
        'add_episode' => array(array(), array('_controller' => 'App\\Controller\\AddController::AddEpisode'), array(), array(array('text', '/add/episode')), array(), array()),
        'add_video' => array(array(), array('_controller' => 'App\\Controller\\AddController::AddVideo'), array(), array(array('text', '/add/video')), array(), array()),
        'db feed' => array(array(), array('_controller' => 'App\\Controller\\FeedController::dbFeed'), array(), array(array('text', '/dbfeed')), array(), array()),
        'feed' => array(array(), array('_controller' => 'App\\Controller\\FeedController::index'), array(), array(array('text', '/feed')), array(), array()),
        'group' => array(array(), array('_controller' => 'App\\Controller\\GroupeController::Group'), array(), array(array('text', '/group')), array(), array()),
        'group_create' => array(array(), array('_controller' => 'App\\Controller\\GroupeController::CreateGroup'), array(), array(array('text', '/group/create')), array(), array()),
        'group_apply' => array(array(), array('_controller' => 'App\\Controller\\GroupeController::GroupMember'), array(), array(array('text', '/group/apply')), array(), array()),
        'group_accept' => array(array(), array('_controller' => 'App\\Controller\\GroupeController::GroupAccept'), array(), array(array('text', '/group/accept')), array(), array()),
        'historique-streaming' => array(array(), array('_controller' => 'App\\Controller\\HistoriqueController::showStream'), array(), array(array('text', '/historique/stream')), array(), array()),
        'game' => array(array(), array('_controller' => 'App\\Controller\\LevelController::game'), array(), array(array('text', '/game')), array(), array()),
        'level' => array(array(), array('_controller' => 'App\\Controller\\LevelController::level'), array(), array(array('text', '/level')), array(), array()),
        'ma' => array(array(), array('_controller' => 'App\\Controller\\MainController::dkd'), array(), array(array('text', '/tchat')), array(), array()),
        'carousel' => array(array(), array('_controller' => 'App\\Controller\\MainController::carousel'), array(), array(array('text', '/carousel')), array(), array()),
        'db tchat' => array(array(), array('_controller' => 'App\\Controller\\MainController::dbTchat'), array(), array(array('text', '/dbtchat')), array(), array()),
        'main' => array(array(), array('_controller' => 'App\\Controller\\MainController::index'), array(), array(array('text', '/')), array(), array()),
        'animes' => array(array('letter'), array('_controller' => 'App\\Controller\\MainController::HomeAnime'), array(), array(array('variable', '/', '[^/]++', 'letter'), array('text', '/Animes')), array(), array()),
        'anime' => array(array(), array('_controller' => 'App\\Controller\\MainController::Anime'), array(), array(array('text', '/Anime')), array(), array()),
        'messenger' => array(array(), array('_controller' => 'App\\Controller\\MessengerController::index'), array(), array(array('text', '/messenger')), array(), array()),
        'user' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::Profile'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/user')), array(), array()),
        'gallery' => array(array(), array('_controller' => 'App\\Controller\\UserController::showImage'), array(), array(array('text', '/profile/gallery')), array(), array()),
        'profile-add-image' => array(array(), array('_controller' => 'App\\Controller\\UserController::addImage'), array(), array(array('text', '/profile/add-image')), array(), array()),
        'fos_user_security_login' => array(array(), array('_controller' => 'fos_user.security.controller:loginAction'), array(), array(array('text', '/login')), array(), array()),
        'fos_user_security_check' => array(array(), array('_controller' => 'fos_user.security.controller:checkAction'), array(), array(array('text', '/login_check')), array(), array()),
        'fos_user_security_logout' => array(array(), array('_controller' => 'fos_user.security.controller:logoutAction'), array(), array(array('text', '/logout')), array(), array()),
        'fos_user_profile_show' => array(array(), array('_controller' => 'fos_user.profile.controller:showAction'), array(), array(array('text', '/profile/')), array(), array()),
        'fos_user_profile_edit' => array(array(), array('_controller' => 'fos_user.profile.controller:editAction'), array(), array(array('text', '/profile/edit')), array(), array()),
        'fos_user_registration_register' => array(array(), array('_controller' => 'fos_user.registration.controller:registerAction'), array(), array(array('text', '/register/')), array(), array()),
        'fos_user_registration_check_email' => array(array(), array('_controller' => 'fos_user.registration.controller:checkEmailAction'), array(), array(array('text', '/register/check-email')), array(), array()),
        'fos_user_registration_confirm' => array(array('token'), array('_controller' => 'fos_user.registration.controller:confirmAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/register/confirm')), array(), array()),
        'fos_user_registration_confirmed' => array(array(), array('_controller' => 'fos_user.registration.controller:confirmedAction'), array(), array(array('text', '/register/confirmed')), array(), array()),
        'fos_user_resetting_request' => array(array(), array('_controller' => 'fos_user.resetting.controller:requestAction'), array(), array(array('text', '/resetting/request')), array(), array()),
        'fos_user_resetting_send_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:sendEmailAction'), array(), array(array('text', '/resetting/send-email')), array(), array()),
        'fos_user_resetting_check_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:checkEmailAction'), array(), array(array('text', '/resetting/check-email')), array(), array()),
        'fos_user_resetting_reset' => array(array('token'), array('_controller' => 'fos_user.resetting.controller:resetAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/resetting/reset')), array(), array()),
        'fos_user_change_password' => array(array(), array('_controller' => 'fos_user.change_password.controller:changePasswordAction'), array(), array(array('text', '/profile/change-password')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'index' => array(array(), array('_controller' => 'App\\Controller\\MainController::index'), array(), array(array('text', '/')), array(), array()),
        'menu' => array(array(), array('_controller' => 'App\\Controller\\BuilderController::mainMenu'), array(), array(array('text', '/menu')), array(), array()),
        'Anime' => array(array('id', 'ep'), array('_controller' => 'App\\Controller\\MainController::Anime', 'id' => 1), array('id' => '\\d+'), array(array('variable', '/', '[^/]++', 'ep'), array('variable', '/', '\\d+', 'id'), array('text', '/Anime')), array(), array()),
        'Article' => array(array('page'), array('_controller' => 'App\\Controller\\MainController::Article'), array(), array(array('variable', '/', '[^/]++', 'page'), array('text', '/Article')), array(), array()),
        'login' => array(array(), array(), array(), array(array('text', '/profile/')), array(), array()),
        'register' => array(array(), array(), array(), array(array('text', '/register/')), array(), array()),
        'logout' => array(array(), array(), array(), array(array('text', '/logout')), array(), array()),
        'recherche' => array(array(), array('_controller' => 'App\\Controller\\MainController::recherche'), array(), array(array('text', '/recherche/')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name && null !== $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
