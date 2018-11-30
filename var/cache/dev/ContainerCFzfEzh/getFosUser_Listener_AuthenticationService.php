<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.listener.authentication' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\EventListener\\AuthenticationListener.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Security\\LoginManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Security\\LoginManager.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\User\\UserCheckerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\User\\UserChecker.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Session\\SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Session\\SessionAuthenticationStrategy.php';

return $this->privates['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener(new \FOS\UserBundle\Security\LoginManager(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['security.user_checker'] ?? $this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker()), ($this->privates['security.authentication.session_strategy'] ?? $this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate')), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), NULL), 'main');
