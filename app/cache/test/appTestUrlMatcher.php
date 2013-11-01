<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/cf7b8d6')) {
                // _assetic_cf7b8d6
                if ($pathinfo === '/js/cf7b8d6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cf7b8d6',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_cf7b8d6',);
                }

                // _assetic_cf7b8d6_0
                if ($pathinfo === '/js/cf7b8d6_index_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cf7b8d6',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_cf7b8d6_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/aee4d46')) {
                // _assetic_aee4d46
                if ($pathinfo === '/js/aee4d46.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aee4d46',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_aee4d46',);
                }

                // _assetic_aee4d46_0
                if ($pathinfo === '/js/aee4d46_index_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aee4d46',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_aee4d46_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/78712cb')) {
                // _assetic_78712cb
                if ($pathinfo === '/css/78712cb.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78712cb',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_78712cb',);
                }

                // _assetic_78712cb_0
                if ($pathinfo === '/css/78712cb_index_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78712cb',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_78712cb_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/4')) {
                if (0 === strpos($pathinfo, '/css/4dbc7ea')) {
                    // _assetic_4dbc7ea
                    if ($pathinfo === '/css/4dbc7ea.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4dbc7ea',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4dbc7ea',);
                    }

                    // _assetic_4dbc7ea_0
                    if ($pathinfo === '/css/4dbc7ea_test_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4dbc7ea',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4dbc7ea_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/446f6d5')) {
                    // _assetic_446f6d5
                    if ($pathinfo === '/css/446f6d5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '446f6d5',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_446f6d5',);
                    }

                    // _assetic_446f6d5_0
                    if ($pathinfo === '/css/446f6d5_main_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '446f6d5',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_446f6d5_0',);
                    }

                }

            }

        }

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

        // hetic_site_hello
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hetic_site_hello');
            }

            return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hetic_site_hello',);
        }

        // hetic_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'hetic_about',);
        }

        // hetic_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::contactAction',  '_route' => 'hetic_contact',);
        }

        // hetic_site_remove
        if (0 === strpos($pathinfo, '/remove/article') && preg_match('#^/remove/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_remove')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::removeArticleAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // hetic_site_add_star
            if (0 === strpos($pathinfo, '/addfavoris/addstar') && preg_match('#^/addfavoris/addstar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_add_star')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::putInStarAction',));
            }

            if (0 === strpos($pathinfo, '/articles')) {
                // hetic_site_remove_star
                if (0 === strpos($pathinfo, '/articles/removestar') && preg_match('#^/articles/removestar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_remove_star')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::pullInStarAction',));
                }

                // hetic_site_articles_by_cat
                if (0 === strpos($pathinfo, '/articles/sortbycategory') && preg_match('#^/articles/sortbycategory/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_articles_by_cat')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::getArticlesByCategoryAction',));
                }

                // hetic_site_articles_by_tags
                if (preg_match('#^/articles/(?P<tag>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_articles_by_tags')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::getArticlesByTagsAction',));
                }

            }

        }

        // hetic_site_visible
        if (0 === strpos($pathinfo, '/visible') && preg_match('#^/visible/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_visible')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::visibleAction',));
        }

        // hetic_site_invisible
        if (0 === strpos($pathinfo, '/invisible') && preg_match('#^/invisible/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_invisible')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::invisibleAction',));
        }

        // hetic_site_edit
        if (0 === strpos($pathinfo, '/editable') && preg_match('#^/editable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_site_edit')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::editableAction',));
        }

        // hetic_article_see
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_article_see')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::seearticleAction',));
        }

        // hetic_article_more
        if (0 === strpos($pathinfo, '/bonus-article') && preg_match('#^/bonus\\-article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_article_more')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::bonusarticleAction',));
        }

        // hetic_article_less
        if (0 === strpos($pathinfo, '/malus-article') && preg_match('#^/malus\\-article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_article_less')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::malusarticleAction',));
        }

        // hetic_category_detail
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_category_detail')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::categorydetailAction',));
        }

        // hetic_category_sorted
        if (0 === strpos($pathinfo, '/sort-by-category') && preg_match('#^/sort\\-by\\-category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_category_sorted')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::categorysortAction',));
        }

        // hetic_article_detail
        if (0 === strpos($pathinfo, '/article-single') && preg_match('#^/article\\-single/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_article_detail')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::articledetailAction',));
        }

        if (0 === strpos($pathinfo, '/category-')) {
            // hetic_category_create
            if (rtrim($pathinfo, '/') === '/category-add') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hetic_category_create');
                }

                return array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::categorycreateAction',  '_route' => 'hetic_category_create',);
            }

            // hetic_category_edit
            if (0 === strpos($pathinfo, '/category-edit') && preg_match('#^/category\\-edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_category_edit')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::categoryeditAction',));
            }

        }

        // hetic_tag_remove
        if (0 === strpos($pathinfo, '/tag-remove') && preg_match('#^/tag\\-remove/(?P<id>[^/]++)/(?P<aid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetic_tag_remove')), array (  '_controller' => 'Hetic\\SiteBundle\\Controller\\DefaultController::tagremoveAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
