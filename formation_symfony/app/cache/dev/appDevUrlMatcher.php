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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // projet_gestion_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_gestion_homepage')), array (  '_controller' => 'Projet\\GestionBundle\\Controller\\DefaultController::indexAction',));
        }

        // projet_gestion_home
        if (0 === strpos($pathinfo, '/bye') && preg_match('#^/bye/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_gestion_home')), array (  '_controller' => 'Projet\\GestionBundle\\Controller\\DefaultController::byeAction',));
        }

        // projet_gestion_view
        if (0 === strpos($pathinfo, '/view') && preg_match('#^/view/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_gestion_view')), array (  '_controller' => 'Projet\\GestionBundle\\Controller\\DefaultController::viewAction',));
        }

        // farah
        if ($pathinfo === '/TT') {
            return array (  '_controller' => 'Projet\\GestionBundle\\Controller\\DefaultController::TTAction',  '_route' => 'farah',);
        }

        if (0 === strpos($pathinfo, '/candidature')) {
            // condidature
            if (rtrim($pathinfo, '/') === '/candidature') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'condidature');
                }

                return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::indexAction',  '_route' => 'condidature',);
            }

            // condidature_show
            if (preg_match('#^/candidature/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'condidature_show')), array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::showAction',));
            }

            // condidature_new
            if ($pathinfo === '/candidature/new') {
                return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::newAction',  '_route' => 'condidature_new',);
            }

            // condidature_create
            if ($pathinfo === '/candidature/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_condidature_create;
                }

                return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::createAction',  '_route' => 'condidature_create',);
            }
            not_condidature_create:

            // condidature_edit
            if (preg_match('#^/candidature/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'condidature_edit')), array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::editAction',));
            }

            // condidature_update
            if (preg_match('#^/candidature/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_condidature_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'condidature_update')), array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::updateAction',));
            }
            not_condidature_update:

            // condidature_delete
            if (preg_match('#^/candidature/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_condidature_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'condidature_delete')), array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::deleteAction',));
            }
            not_condidature_delete:

        }

        // formation_annonce_homepage
        if (0 === strpos($pathinfo, '/somme') && preg_match('#^/somme/(?P<entier1>[^/]++)/(?P<entier2>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_annonce_homepage')), array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\AnnonceController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/annonce')) {
            // formation_annonce_ajout
            if ($pathinfo === '/annonce/ajouter') {
                return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\AnnonceController::ajoutAction',  '_route' => 'formation_annonce_ajout',);
            }

            // formation_annonce_lister
            if ($pathinfo === '/annonce/lister') {
                return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\AnnonceController::listerAction',  '_route' => 'formation_annonce_lister',);
            }

            // formation_annonce_form
            if ($pathinfo === '/annonce/form') {
                return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\AnnonceController::ajouterAction',  '_route' => 'formation_annonce_form',);
            }

            // formation_annonce_listeAnnonce
            if ($pathinfo === '/annonce/listeAnnonce') {
                return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\AnnonceController::listeAnnonceAction',  '_route' => 'formation_annonce_listeAnnonce',);
            }

            // formation_annonce_editer
            if (0 === strpos($pathinfo, '/annonce/edit') && preg_match('#^/annonce/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_annonce_editer')), array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\AnnonceController::editerAction',));
            }

            // formation_annonce_supprimer
            if (0 === strpos($pathinfo, '/annonce/supprimer') && preg_match('#^/annonce/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_annonce_supprimer')), array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\AnnonceController::supprimerAction',));
            }

            // formation_annonce_AnnonceTri
            if ($pathinfo === '/annonce/AnnonceTri') {
                return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\AnnonceController::TopAction',  '_route' => 'formation_annonce_AnnonceTri',);
            }

            if (0 === strpos($pathinfo, '/annonce/text')) {
                // formation_annonce_text
                if ($pathinfo === '/annonce/text') {
                    return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\AnnonceController::TextAction',  '_route' => 'formation_annonce_text',);
                }

                // formation_annonce_verif
                if ($pathinfo === '/annonce/texts') {
                    return array (  '_controller' => 'formationAnnonceBundle:verifer:Text',  '_route' => 'formation_annonce_verif',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
