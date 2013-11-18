<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // hetic_site_main
        if (rtrim($pathinfo, '/') === '/backend') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hetic_site_main');
            }

            return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\MainController::indexAction',  '_route' => 'hetic_site_main',);
        }

        // hetic_site_root
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hetic_site_root');
            }

            return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\AdministrateurController::loginAction',  '_route' => 'hetic_site_root',);
        }

        if (0 === strpos($pathinfo, '/backend')) {
            // hetic_site_dashboard
            if ($pathinfo === '/backend/dashboard') {
                return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\MainController::dashboardAction',  '_route' => 'hetic_site_dashboard',);
            }

            if (0 === strpos($pathinfo, '/backend/produit')) {
                // hetic_site_products
                if ($pathinfo === '/backend/produits') {
                    return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\ProductController::productsAction',  '_route' => 'hetic_site_products',);
                }

                // hetic_site_remove_product
                if (0 === strpos($pathinfo, '/backend/produit/suppression') && preg_match('#^/backend/produit/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_remove_product')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\ProductController::removeproductAction',));
                }

                if (0 === strpos($pathinfo, '/backend/produit-image')) {
                    // hetic_site_remove_image_product
                    if (0 === strpos($pathinfo, '/backend/produit-image/suppression') && preg_match('#^/backend/produit\\-image/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_remove_image_product')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\ProductController::removeimageproductAction',));
                    }

                    // hetic_site_cover_image_product
                    if (0 === strpos($pathinfo, '/backend/produit-image/cover') && preg_match('#^/backend/produit\\-image/cover/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_cover_image_product')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\ProductController::coverimageproductAction',));
                    }

                }

                // hetic_site_active_product
                if (0 === strpos($pathinfo, '/backend/produit/activation') && preg_match('#^/backend/produit/activation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_active_product')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\ProductController::activeproductAction',));
                }

                // hetic_site_desactive_product
                if (0 === strpos($pathinfo, '/backend/produit/desactivation') && preg_match('#^/backend/produit/desactivation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_desactive_product')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\ProductController::desactiveproductAction',));
                }

            }

            // hetic_site_create_product
            if ($pathinfo === '/backend/creer-un-produit') {
                return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\ProductController::createproductAction',  '_route' => 'hetic_site_create_product',);
            }

            // hetic_site_edit_product
            if (0 === strpos($pathinfo, '/backend/editer-un-produit') && preg_match('#^/backend/editer\\-un\\-produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_edit_product')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\ProductController::editproductAction',));
            }

            // hetic_site_visualize_product
            if (0 === strpos($pathinfo, '/backend/voir-un-produit') && preg_match('#^/backend/voir\\-un\\-produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_visualize_product')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\ProductController::visualizeproductAction',));
            }

            // hetic_site_edit_pictures_product
            if (0 === strpos($pathinfo, '/backend/photo-du-produit') && preg_match('#^/backend/photo\\-du\\-produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_edit_pictures_product')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\ProductController::pictureproductAction',));
            }

            // hetic_site_commands
            if ($pathinfo === '/backend/commandes') {
                return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\MainController::commandsAction',  '_route' => 'hetic_site_commands',);
            }

            if (0 === strpos($pathinfo, '/backend/famille')) {
                // hetic_site_famille
                if (preg_match('#^/backend/famille/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_famille')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::familleAction',));
                }

                // hetic_site_familles
                if ($pathinfo === '/backend/familles') {
                    return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::famillesAction',  '_route' => 'hetic_site_familles',);
                }

                // hetic_site_add_famille
                if ($pathinfo === '/backend/famille/ajouter') {
                    return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::createfamilleAction',  '_route' => 'hetic_site_add_famille',);
                }

                // hetic_site_remove_famille
                if (0 === strpos($pathinfo, '/backend/famille/supprimer') && preg_match('#^/backend/famille/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_remove_famille')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::removefamilleAction',));
                }

                // hetic_site_edit_famille
                if (0 === strpos($pathinfo, '/backend/famille/editer') && preg_match('#^/backend/famille/editer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_edit_famille')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::editfamilleAction',));
                }

            }

            if (0 === strpos($pathinfo, '/backend/categor')) {
                // hetic_site_categories
                if ($pathinfo === '/backend/categories') {
                    return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::categoriesAction',  '_route' => 'hetic_site_categories',);
                }

                // hetic_site_add_category
                if ($pathinfo === '/backend/category/ajouter') {
                    return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::createcategoryAction',  '_route' => 'hetic_site_add_category',);
                }

            }

            // hetic_site_edit_image_category
            if (0 === strpos($pathinfo, '/backend/photo-de-category') && preg_match('#^/backend/photo\\-de\\-category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_edit_image_category')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::picturecategoryAction',));
            }

            if (0 === strpos($pathinfo, '/backend/category')) {
                // hetic_site_category
                if (preg_match('#^/backend/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_category')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::categoryAction',));
                }

                // hetic_site_cover_image_category
                if (0 === strpos($pathinfo, '/backend/category-image/cover') && preg_match('#^/backend/category\\-image/cover/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_cover_image_category')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::coverimagecategoryAction',));
                }

            }

            // hetic_site_remove_image_category
            if (0 === strpos($pathinfo, '/backend/photo-de-category/suppression') && preg_match('#^/backend/photo\\-de\\-category/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_remove_image_category')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::removeimagecategoryAction',));
            }

            if (0 === strpos($pathinfo, '/backend/category')) {
                // hetic_site_remove_category
                if (0 === strpos($pathinfo, '/backend/category/supprimer') && preg_match('#^/backend/category/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_remove_category')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::removecategoryAction',));
                }

                // hetic_site_edit_category
                if (0 === strpos($pathinfo, '/backend/category/editer') && preg_match('#^/backend/category/editer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_edit_category')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::editcategoryAction',));
                }

                // hetic_site_active_category
                if (0 === strpos($pathinfo, '/backend/category/activation') && preg_match('#^/backend/category/activation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_active_category')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::activecategoryAction',));
                }

                // hetic_site_desactive_category
                if (0 === strpos($pathinfo, '/backend/category/desactivation') && preg_match('#^/backend/category/desactivation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_desactive_category')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\CategoryController::desactivecategoryAction',));
                }

            }

        }

        // hetic_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\MainController::aboutAction',  '_route' => 'hetic_about',);
        }

        // hetic_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\MainController::contactAction',  '_route' => 'hetic_contact',);
        }

        if (0 === strpos($pathinfo, '/recherche')) {
            // hetic_search
            if (rtrim($pathinfo, '/') === '/recherche') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hetic_search');
                }

                return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\MainController::searchAction',  '_route' => 'hetic_search',);
            }

            // hetic_search_avanced
            if (rtrim($pathinfo, '/') === '/recherche-avancee') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hetic_search_avanced');
                }

                return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\MainController::advancedsearchAction',  '_route' => 'hetic_search_avanced',);
            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\AdministrateurController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/backend/log')) {
            // login_check
            if ($pathinfo === '/backend/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/backend/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
