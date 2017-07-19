<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'MA\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'MA\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'MA\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'MA\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            // ma_lrm_accueil
            if ($pathinfo === '/admin/accueil') {
                return array (  '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::indexAction',  '_route' => 'ma_lrm_accueil',);
            }

            // ma_lrm_register
            if ($pathinfo === '/admin/register') {
                return array (  '_controller' => 'MA\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'ma_lrm_register',);
            }

            // ma_lrm_add_candidat
            if ($pathinfo === '/admin/ajout_candidat') {
                return array (  '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::addAction',  '_route' => 'ma_lrm_add_candidat',);
            }

            if (0 === strpos($pathinfo, '/admin/client')) {
                // ma_lrm_client_index
                if (rtrim($pathinfo, '/') === '/admin/client') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ma_lrm_client_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ma_lrm_client_index');
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::indexAction',  '_route' => 'ma_lrm_client_index',);
                }
                not_ma_lrm_client_index:

                // ma_lrm_client_show
                if (preg_match('#^/admin/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ma_lrm_client_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_client_show')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::showAction',));
                }
                not_ma_lrm_client_show:

                // ma_lrm_client_new
                if ($pathinfo === '/admin/client/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_client_new;
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::newAction',  '_route' => 'ma_lrm_client_new',);
                }
                not_ma_lrm_client_new:

                // ma_lrm_client_edit
                if (preg_match('#^/admin/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_client_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_client_edit')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::editAction',));
                }
                not_ma_lrm_client_edit:

                // ma_lrm_client_delete
                if (preg_match('#^/admin/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_ma_lrm_client_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_client_delete')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::deleteAction',));
                }
                not_ma_lrm_client_delete:

                // ma_lrm_client_ville
                if (0 === strpos($pathinfo, '/admin/client/new/ville') && preg_match('#^/admin/client/new/ville/(?P<cp>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_client_ville;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_client_ville')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::VilleAction',));
                }
                not_ma_lrm_client_ville:

            }

            if (0 === strpos($pathinfo, '/admin/emploi')) {
                // ma_lrm_emploi_index
                if (rtrim($pathinfo, '/') === '/admin/emploi') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ma_lrm_emploi_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ma_lrm_emploi_index');
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::indexAction',  '_route' => 'ma_lrm_emploi_index',);
                }
                not_ma_lrm_emploi_index:

                // ma_lrm_emploi_show
                if (preg_match('#^/admin/emploi/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ma_lrm_emploi_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_emploi_show')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::showAction',));
                }
                not_ma_lrm_emploi_show:

                // ma_lrm_emploi_new
                if ($pathinfo === '/admin/emploi/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_emploi_new;
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::newAction',  '_route' => 'ma_lrm_emploi_new',);
                }
                not_ma_lrm_emploi_new:

                // ma_lrm_emploi_edit
                if (preg_match('#^/admin/emploi/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_emploi_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_emploi_edit')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::editAction',));
                }
                not_ma_lrm_emploi_edit:

                // ma_lrm_emploi_delete
                if (preg_match('#^/admin/emploi/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_ma_lrm_emploi_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_emploi_delete')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::deleteAction',));
                }
                not_ma_lrm_emploi_delete:

                // ma_lrm_emploi_ville
                if (0 === strpos($pathinfo, '/admin/emploi/new/ville') && preg_match('#^/admin/emploi/new/ville/(?P<string>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_emploi_ville;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_emploi_ville')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::VilleAction',));
                }
                not_ma_lrm_emploi_ville:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
