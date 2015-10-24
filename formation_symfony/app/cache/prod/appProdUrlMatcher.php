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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/condidature')) {
            // condidature
            if (rtrim($pathinfo, '/') === '/condidature') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'condidature');
                }

                return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::indexAction',  '_route' => 'condidature',);
            }

            // condidature_show
            if (preg_match('#^/condidature/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'condidature_show')), array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::showAction',));
            }

            // condidature_new
            if ($pathinfo === '/condidature/new') {
                return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::newAction',  '_route' => 'condidature_new',);
            }

            // condidature_create
            if ($pathinfo === '/condidature/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_condidature_create;
                }

                return array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::createAction',  '_route' => 'condidature_create',);
            }
            not_condidature_create:

            // condidature_edit
            if (preg_match('#^/condidature/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'condidature_edit')), array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::editAction',));
            }

            // condidature_update
            if (preg_match('#^/condidature/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_condidature_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'condidature_update')), array (  '_controller' => 'formation\\AnnonceBundle\\Controller\\CondidatureController::updateAction',));
            }
            not_condidature_update:

            // condidature_delete
            if (preg_match('#^/condidature/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
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
