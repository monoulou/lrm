<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'MA\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ancarebeca_full_calendar_load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AncaRebeca\\FullCalendarBundle\\Controller\\CalendarController::loadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/full-calendar/load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_calendar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::loadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/accueil/calendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_calendar_resize' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::resizeEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/accueil/calendar/resize',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_calendar_drop' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::dropEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/accueil/calendar/drop',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_calendar_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::deleteEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/accueil/calendar/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_calendar_selectUser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::selectUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/accueil/calendar/select/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_calendar_editEvent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\IndexController::editEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/accueil/calendar/edit/title',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_client_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/client/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_client_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_client_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/client/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_client_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_client_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_client_ville' => array (  0 =>   array (    0 => 'cp',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\ClientController::villeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cp',    ),    1 =>     array (      0 => 'text',      1 => '/admin/client/new/ville',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_emploi_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/emploi/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_emploi_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/emploi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_emploi_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/emploi/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_emploi_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/emploi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_emploi_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/emploi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_emploi_ville' => array (  0 =>   array (    0 => 'string',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\EmploiController::villeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'string',    ),    1 =>     array (      0 => 'text',      1 => '/admin/emploi/new/ville',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_candidat_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/candidat/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_candidat_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/candidat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_candidat_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/candidat/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_candidat_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/candidat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_candidat_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/candidat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_candidat_ville' => array (  0 =>   array (    0 => 'cp',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\CandidatController::villeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cp',    ),    1 =>     array (      0 => 'text',      1 => '/admin/candidat/new/ville',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_gestion_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/gestion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_gestion_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/gestion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_gestion_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/gestion/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_gestion_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/gestion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_gestion_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/gestion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_gestion_resume' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::resumeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resume',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/gestion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_gestion_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\GestionController::detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/detail',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/gestion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ma_lrm_test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MA\\LrmBundle\\Controller\\TestController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/test/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
