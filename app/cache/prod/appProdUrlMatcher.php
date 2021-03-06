<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

<<<<<<< HEAD
        // my_app_rubrique_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_rubrique_homepage')), array (  '_controller' => 'MyApp\\RubriqueBundle\\Controller\\DefaultController::indexAction',));
        }

        // my_app_esprit_top
        if ($pathinfo === '/index.php') {
            return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::topAction',  '_route' => 'my_app_esprit_top',);
        }

=======
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        // my_app_esprit_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_app_esprit_homepage');
            }

            return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_app_esprit_homepage',);
        }

<<<<<<< HEAD
        // my_app_esprit_administration
        if ($pathinfo === '/administration') {
            return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\DefaultController::administrationAction',  '_route' => 'my_app_esprit_administration',);
        }

        if (0 === strpos($pathinfo, '/menu')) {
            // my_app_esprit_menu_new
            if ($pathinfo === '/menu/new') {
                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\MenuController::sendAction',  '_route' => 'my_app_esprit_menu_new',);
            }

            // my_app_esprit_menu_show
            if ($pathinfo === '/menu/show') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_my_app_esprit_menu_show;
                }

                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\MenuController::showAction',  '_route' => 'my_app_esprit_menu_show',);
            }
            not_my_app_esprit_menu_show:

            // my_app_esprit_menu_delete
            if (preg_match('#^/menu/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_menu_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\MenuController::deleteAction',));
            }

            // my_app_esprit_menu_edit
            if (preg_match('#^/menu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_menu_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\MenuController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/article')) {
                // my_app_esprit_article_new
                if ($pathinfo === '/article/new') {
                    return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::sendAction',  '_route' => 'my_app_esprit_article_new',);
                }

                // my_app_esprit_article_show
                if ($pathinfo === '/article/show') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_my_app_esprit_article_show;
                    }

                    return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::showAction',  '_route' => 'my_app_esprit_article_show',);
                }
                not_my_app_esprit_article_show:

                // my_app_esprit_article_delete
                if (preg_match('#^/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_article_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::deleteAction',));
                }

                // my_app_esprit_article_edit
                if (preg_match('#^/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_article_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/actualite')) {
                // my_app_esprit_actualite_new
                if ($pathinfo === '/actualite/new') {
                    return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ActualiteController::sendAction',  '_route' => 'my_app_esprit_actualite_new',);
                }

                // my_app_esprit_actualite_show
                if ($pathinfo === '/actualite/show') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_my_app_esprit_actualite_show;
                    }

                    return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ActualiteController::showAction',  '_route' => 'my_app_esprit_actualite_show',);
                }
                not_my_app_esprit_actualite_show:

                // my_app_esprit_actualite_delete
                if (preg_match('#^/actualite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_actualite_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ActualiteController::deleteAction',));
                }

                // my_app_esprit_actualite_edit
                if (preg_match('#^/actualite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_actualite_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ActualiteController::editAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/rubrique')) {
            // my_app_esprit_rubrique_new
            if ($pathinfo === '/rubrique/new') {
                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RubriqueController::sendAction',  '_route' => 'my_app_esprit_rubrique_new',);
            }

            // my_app_esprit_rubrique_show
            if ($pathinfo === '/rubrique/show') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_my_app_esprit_rubrique_show;
                }

                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RubriqueController::showAction',  '_route' => 'my_app_esprit_rubrique_show',);
            }
            not_my_app_esprit_rubrique_show:

            // my_app_esprit_rubrique_delete
            if (preg_match('#^/rubrique/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_rubrique_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RubriqueController::deleteAction',));
            }

            // my_app_esprit_rubrique_edit
            if (preg_match('#^/rubrique/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_rubrique_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RubriqueController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sousrubrique')) {
            // my_app_esprit_sousrubrique_new
            if ($pathinfo === '/sousrubrique/new') {
                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\SousrubriqueController::sendAction',  '_route' => 'my_app_esprit_sousrubrique_new',);
            }

            // my_app_esprit_sousrubrique_show
            if ($pathinfo === '/sousrubrique/show') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_my_app_esprit_sousrubrique_show;
                }

                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\SousrubriqueController::showAction',  '_route' => 'my_app_esprit_sousrubrique_show',);
            }
            not_my_app_esprit_sousrubrique_show:

            // my_app_esprit_sousrubrique_delete
            if (preg_match('#^/sousrubrique/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_sousrubrique_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\SousrubriqueController::deleteAction',));
            }

            // my_app_esprit_sousrubrique_edit
            if (preg_match('#^/sousrubrique/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_sousrubrique_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\SousrubriqueController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/role')) {
            // my_app_esprit_role_new
            if ($pathinfo === '/role/new') {
                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RoleController::sendAction',  '_route' => 'my_app_esprit_role_new',);
            }

            // my_app_esprit_role_show
            if ($pathinfo === '/role/show') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_my_app_esprit_role_show;
                }

                return array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RoleController::showAction',  '_route' => 'my_app_esprit_role_show',);
            }
            not_my_app_esprit_role_show:

            // my_app_esprit_role_delete
            if (preg_match('#^/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_role_delete')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RoleController::deleteAction',));
            }

            // my_app_esprit_role_edit
            if (preg_match('#^/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_role_edit')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\RoleController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // my_app_esprit_article_voir
            if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>\\d+)/voir$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_esprit_article_voir')), array (  '_controller' => 'MyApp\\EspritBundle\\Controller\\ArticleController::showbyidAction',));
            }

            if (0 === strpos($pathinfo, '/admin')) {
                // sonata_admin_redirect
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                }

                // sonata_admin_dashboard
                if ($pathinfo === '/admin/dashboard') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/core')) {
                    // sonata_admin_retrieve_form_element
                    if ($pathinfo === '/admin/core/get-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_append_form_element
                    if ($pathinfo === '/admin/core/append-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_set_object_field_value
                    if ($pathinfo === '/admin/core/set-object-field-value') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                // sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                if (0 === strpos($pathinfo, '/admin/myapp/rubrique/rubrique')) {
                    // admin_myapp_rubrique_rubrique_list
                    if ($pathinfo === '/admin/myapp/rubrique/rubrique/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_list',  '_route' => 'admin_myapp_rubrique_rubrique_list',);
                    }

                    // admin_myapp_rubrique_rubrique_create
                    if ($pathinfo === '/admin/myapp/rubrique/rubrique/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_create',  '_route' => 'admin_myapp_rubrique_rubrique_create',);
                    }

                    // admin_myapp_rubrique_rubrique_batch
                    if ($pathinfo === '/admin/myapp/rubrique/rubrique/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_batch',  '_route' => 'admin_myapp_rubrique_rubrique_batch',);
                    }

                    // admin_myapp_rubrique_rubrique_edit
                    if (preg_match('#^/admin/myapp/rubrique/rubrique/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myapp_rubrique_rubrique_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_edit',));
                    }

                    // admin_myapp_rubrique_rubrique_delete
                    if (preg_match('#^/admin/myapp/rubrique/rubrique/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myapp_rubrique_rubrique_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_delete',));
                    }

                    // admin_myapp_rubrique_rubrique_show
                    if (preg_match('#^/admin/myapp/rubrique/rubrique/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myapp_rubrique_rubrique_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_show',));
                    }

                    // admin_myapp_rubrique_rubrique_export
                    if ($pathinfo === '/admin/myapp/rubrique/rubrique/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.rubrique',  '_sonata_name' => 'admin_myapp_rubrique_rubrique_export',  '_route' => 'admin_myapp_rubrique_rubrique_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

        if (0 === strpos($pathinfo, '/register/user-')) {
            // user_one_registration
            if ($pathinfo === '/register/user-one') {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationUserOneController::registerAction',  '_route' => 'user_one_registration',);
            }

            // user_two_registration
            if ($pathinfo === '/register/user-two') {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationUserTwoController::registerAction',  '_route' => 'user_two_registration',);
            }

        }

=======
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
