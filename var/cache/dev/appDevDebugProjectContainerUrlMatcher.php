<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // ma_lrm_index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ma_lrm_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ma_lrm_index');
            }

            return array (  '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::redirectToLogAction',  '_route' => 'ma_lrm_index',);
        }
        not_ma_lrm_index:

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

        // ancarebeca_full_calendar_load
        if ($pathinfo === '/full-calendar/load') {
            return array (  '_controller' => 'AncaRebeca\\FullCalendarBundle\\Controller\\CalendarController::loadAction',  '_route' => 'ancarebeca_full_calendar_load',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // ma_lrm_accueil
            if ($pathinfo === '/admin/accueil') {
                return array (  '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::indexAction',  '_route' => 'ma_lrm_accueil',);
            }

            // ma_lrm_register
            if ($pathinfo === '/admin/register') {
                return array (  '_controller' => 'MA\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'ma_lrm_register',);
            }

            if (0 === strpos($pathinfo, '/admin/accueil/calendar')) {
                // ma_lrm_calendar
                if ($pathinfo === '/admin/accueil/calendar') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_calendar;
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::loadAction',  '_route' => 'ma_lrm_calendar',);
                }
                not_ma_lrm_calendar:

                // ma_lrm_calendar_resize
                if ($pathinfo === '/admin/accueil/calendar/resize') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_calendar_resize;
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::resizeEventAction',  '_route' => 'ma_lrm_calendar_resize',);
                }
                not_ma_lrm_calendar_resize:

                if (0 === strpos($pathinfo, '/admin/accueil/calendar/d')) {
                    // ma_lrm_calendar_drop
                    if ($pathinfo === '/admin/accueil/calendar/drop') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_ma_lrm_calendar_drop;
                        }

                        return array (  '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::dropEventAction',  '_route' => 'ma_lrm_calendar_drop',);
                    }
                    not_ma_lrm_calendar_drop:

                    // ma_lrm_calendar_delete
                    if ($pathinfo === '/admin/accueil/calendar/delete') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_ma_lrm_calendar_delete;
                        }

                        return array (  '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::deleteEventAction',  '_route' => 'ma_lrm_calendar_delete',);
                    }
                    not_ma_lrm_calendar_delete:

                }

                // ma_lrm_calendar_selectUser
                if ($pathinfo === '/admin/accueil/calendar/select/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_calendar_selectUser;
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::selectUserAction',  '_route' => 'ma_lrm_calendar_selectUser',);
                }
                not_ma_lrm_calendar_selectUser:

                // ma_lrm_calendar_editEvent
                if ($pathinfo === '/admin/accueil/calendar/edit/title') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_calendar_editEvent;
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::editEventAction',  '_route' => 'ma_lrm_calendar_editEvent',);
                }
                not_ma_lrm_calendar_editEvent:

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
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
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

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_client_ville')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::villeAction',));
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
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
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

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_emploi_ville')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::villeAction',));
                }
                not_ma_lrm_emploi_ville:

            }

            if (0 === strpos($pathinfo, '/admin/candidat')) {
                // ma_lrm_candidat_index
                if (rtrim($pathinfo, '/') === '/admin/candidat') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ma_lrm_candidat_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ma_lrm_candidat_index');
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::indexAction',  '_route' => 'ma_lrm_candidat_index',);
                }
                not_ma_lrm_candidat_index:

                // ma_lrm_candidat_show
                if (preg_match('#^/admin/candidat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ma_lrm_candidat_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_candidat_show')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::showAction',));
                }
                not_ma_lrm_candidat_show:

                // ma_lrm_candidat_new
                if ($pathinfo === '/admin/candidat/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_candidat_new;
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::newAction',  '_route' => 'ma_lrm_candidat_new',);
                }
                not_ma_lrm_candidat_new:

                // ma_lrm_candidat_edit
                if (preg_match('#^/admin/candidat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_candidat_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_candidat_edit')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::editAction',));
                }
                not_ma_lrm_candidat_edit:

                // ma_lrm_candidat_delete
                if (preg_match('#^/admin/candidat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                        goto not_ma_lrm_candidat_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_candidat_delete')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::deleteAction',));
                }
                not_ma_lrm_candidat_delete:

                // ma_lrm_candidat_ville
                if (0 === strpos($pathinfo, '/admin/candidat/new/ville') && preg_match('#^/admin/candidat/new/ville/(?P<cp>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_candidat_ville;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_candidat_ville')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::villeAction',));
                }
                not_ma_lrm_candidat_ville:

            }

            if (0 === strpos($pathinfo, '/admin/gestion')) {
                // ma_lrm_gestion_index
                if (rtrim($pathinfo, '/') === '/admin/gestion') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ma_lrm_gestion_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ma_lrm_gestion_index');
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::indexAction',  '_route' => 'ma_lrm_gestion_index',);
                }
                not_ma_lrm_gestion_index:

                // ma_lrm_gestion_show
                if (preg_match('#^/admin/gestion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ma_lrm_gestion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_gestion_show')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::showAction',));
                }
                not_ma_lrm_gestion_show:

                // ma_lrm_gestion_new
                if ($pathinfo === '/admin/gestion/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_gestion_new;
                    }

                    return array (  '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::newAction',  '_route' => 'ma_lrm_gestion_new',);
                }
                not_ma_lrm_gestion_new:

                // ma_lrm_gestion_edit
                if (preg_match('#^/admin/gestion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_gestion_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_gestion_edit')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::editAction',));
                }
                not_ma_lrm_gestion_edit:

                // ma_lrm_gestion_delete
                if (preg_match('#^/admin/gestion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                        goto not_ma_lrm_gestion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_gestion_delete')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::deleteAction',));
                }
                not_ma_lrm_gestion_delete:

                // ma_lrm_gestion_resume
                if (preg_match('#^/admin/gestion/(?P<id>[^/]++)/resume$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_gestion_resume;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_gestion_resume')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::resumeAction',));
                }
                not_ma_lrm_gestion_resume:

                // ma_lrm_gestion_detail
                if (preg_match('#^/admin/gestion/(?P<id>[^/]++)/detail$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ma_lrm_gestion_detail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ma_lrm_gestion_detail')), array (  '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::detailAction',));
                }
                not_ma_lrm_gestion_detail:

            }

            // ma_lrm_test
            if (rtrim($pathinfo, '/') === '/admin/test') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ma_lrm_test;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ma_lrm_test');
                }

                return array (  '_controller' => 'MA\\LrmBundle\\Controller\\TestController::indexAction',  '_route' => 'ma_lrm_test',);
            }
            not_ma_lrm_test:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
