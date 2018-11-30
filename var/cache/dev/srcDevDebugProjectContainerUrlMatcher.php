<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo) ?: '/';
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($trimmedPathinfo = '/' !== $pathinfo && '/' === $pathinfo[-1] ? substr($pathinfo, 0, -1) : $pathinfo) {
            case '/':
                // main
                return array('_route' => 'main', '_controller' => 'App\\Controller\\MainController::index');
                // index
                return array('_route' => 'index', '_controller' => 'App\\Controller\\MainController::index');
                break;
            case '/logout':
                // fos_user_security_logout
                if ('/' !== $pathinfo && '/' === $pathinfo[-1]) {
                    return null;
                }
                $ret = array('_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction');
                if (!isset(($a = array('GET' => 0, 'POST' => 1))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_fos_user_security_logout;
                }

                return $ret;
                not_fos_user_security_logout:
                // logout
                if ('/' !== $pathinfo && '/' === $pathinfo[-1]) {
                    return null;
                }
                return array('_route' => 'logout');
                break;
            case '/profile':
                // fos_user_profile_show
                if ('/' !== $pathinfo && '/' !== $pathinfo[-1]) {
                    return null;
                }
                $ret = array('_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_fos_user_profile_show;
                }

                return $ret;
                not_fos_user_profile_show:
                // login
                if ('/' !== $pathinfo && '/' !== $pathinfo[-1]) {
                    return null;
                }
                return array('_route' => 'login');
                break;
            case '/register':
                // fos_user_registration_register
                if ('/' !== $pathinfo && '/' !== $pathinfo[-1]) {
                    return null;
                }
                $ret = array('_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction');
                if (!isset(($a = array('GET' => 0, 'POST' => 1))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_fos_user_registration_register;
                }

                return $ret;
                not_fos_user_registration_register:
                // register
                if ('/' !== $pathinfo && '/' !== $pathinfo[-1]) {
                    return null;
                }
                return array('_route' => 'register');
                break;
            default:
                $routes = array(
                    '/add/anime' => array(array('_route' => 'add_anime', '_controller' => 'App\\Controller\\AddController::AddAnime'), null, null, null, false),
                    '/add/episode' => array(array('_route' => 'add_episode', '_controller' => 'App\\Controller\\AddController::AddEpisode'), null, null, null, false),
                    '/add/video' => array(array('_route' => 'add_video', '_controller' => 'App\\Controller\\AddController::AddVideo'), null, null, null, false),
                    '/dbfeed' => array(array('_route' => 'db feed', '_controller' => 'App\\Controller\\FeedController::dbFeed'), null, null, null, false),
                    '/feed' => array(array('_route' => 'feed', '_controller' => 'App\\Controller\\FeedController::index'), null, null, null, false),
                    '/group' => array(array('_route' => 'group', '_controller' => 'App\\Controller\\GroupeController::Group'), null, null, null, false),
                    '/group/create' => array(array('_route' => 'group_create', '_controller' => 'App\\Controller\\GroupeController::CreateGroup'), null, null, null, false),
                    '/group/apply' => array(array('_route' => 'group_apply', '_controller' => 'App\\Controller\\GroupeController::GroupMember'), null, null, null, false),
                    '/group/accept' => array(array('_route' => 'group_accept', '_controller' => 'App\\Controller\\GroupeController::GroupAccept'), null, null, null, false),
                    '/historique/stream' => array(array('_route' => 'historique-streaming', '_controller' => 'App\\Controller\\HistoriqueController::showStream'), null, null, null, false),
                    '/game' => array(array('_route' => 'game', '_controller' => 'App\\Controller\\LevelController::game'), null, null, null, false),
                    '/level' => array(array('_route' => 'level', '_controller' => 'App\\Controller\\LevelController::level'), null, null, null, false),
                    '/tchat' => array(array('_route' => 'ma', '_controller' => 'App\\Controller\\MainController::dkd'), null, null, null, false),
                    '/carousel' => array(array('_route' => 'carousel', '_controller' => 'App\\Controller\\MainController::carousel'), null, null, null, false),
                    '/dbtchat' => array(array('_route' => 'db tchat', '_controller' => 'App\\Controller\\MainController::dbTchat'), null, null, null, false),
                    '/Anime' => array(array('_route' => 'anime', '_controller' => 'App\\Controller\\MainController::Anime'), null, null, null, false),
                    '/messenger' => array(array('_route' => 'messenger', '_controller' => 'App\\Controller\\MessengerController::index'), null, null, null, false),
                    '/profile/gallery' => array(array('_route' => 'gallery', '_controller' => 'App\\Controller\\UserController::showImage'), null, null, null, false),
                    '/profile/add-image' => array(array('_route' => 'profile-add-image', '_controller' => 'App\\Controller\\UserController::addImage'), null, null, null, false),
                    '/login' => array(array('_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'), null, array('GET' => 0, 'POST' => 1), null, false),
                    '/login_check' => array(array('_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'), null, array('POST' => 0), null, false),
                    '/profile/edit' => array(array('_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'), null, array('GET' => 0, 'POST' => 1), null, false),
                    '/register/check-email' => array(array('_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'), null, array('GET' => 0), null, false),
                    '/register/confirmed' => array(array('_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'), null, array('GET' => 0), null, false),
                    '/resetting/request' => array(array('_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'), null, array('GET' => 0), null, false),
                    '/resetting/send-email' => array(array('_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'), null, array('POST' => 0), null, false),
                    '/resetting/check-email' => array(array('_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'), null, array('GET' => 0), null, false),
                    '/profile/change-password' => array(array('_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'), null, array('GET' => 0, 'POST' => 1), null, false),
                    '/_profiler' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false),
                    '/menu' => array(array('_route' => 'menu', '_controller' => 'App\\Controller\\BuilderController::mainMenu'), null, null, null, false),
                    '/recherche' => array(array('_route' => 'recherche', '_controller' => 'App\\Controller\\MainController::recherche'), null, null, null, true),
                );

                if (!isset($routes[$trimmedPathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$trimmedPathinfo];

                if ('/' !== $pathinfo && $hasTrailingSlash !== ('/' === $pathinfo[-1])) {
                    return null;
                }

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/A(?'
                        .'|nime(?'
                            .'|s/([^/]++)(*:29)'
                            .'|/(\\d+)/([^/]++)(*:51)'
                        .')'
                        .'|rticle/([^/]++)(*:74)'
                    .')'
                    .'|/user/([^/]++)(*:96)'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:132)'
                        .'|setting/reset/([^/]++)(*:162)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:202)'
                        .'|wdt/([^/]++)(*:222)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:268)'
                                .'|router(*:282)'
                                .'|exception(?'
                                    .'|(*:302)'
                                    .'|\\.css(*:315)'
                                .')'
                            .')'
                            .'|(*:325)'
                        .')'
                    .')'
                .')(?:/?)$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            29 => array(array('_route' => 'animes', '_controller' => 'App\\Controller\\MainController::HomeAnime'), array('letter'), null, null, false),
                            51 => array(array('_route' => 'Anime', '_controller' => 'App\\Controller\\MainController::Anime', 'id' => 1), array('id', 'ep'), null, null, false),
                            74 => array(array('_route' => 'Article', '_controller' => 'App\\Controller\\MainController::Article'), array('page'), null, null, false),
                            96 => array(array('_route' => 'user', '_controller' => 'App\\Controller\\UserController::Profile'), array('id'), null, null, false),
                            132 => array(array('_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'), array('token'), array('GET' => 0), null, false),
                            162 => array(array('_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null, false),
                            202 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false),
                            222 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false),
                            268 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false),
                            282 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false),
                            302 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false),
                            315 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false),
                            325 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$m];

                        if ('/' !== $pathinfo && $hasTrailingSlash !== ('/' === $pathinfo[-1])) {
                            return null;
                        }

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (325 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
