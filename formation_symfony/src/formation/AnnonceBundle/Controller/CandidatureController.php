<?php

namespace formation\AnnonceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use formation\AnnonceBundle\Entity\Candidature;
use formation\AnnonceBundle\Form\candidatureType;

/**
 * Candidature controller.
 *
 */
class CandidatureController extends Controller
{

    /**
     * Lists all Candidature entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('formationAnnonceBundle:Candidature')->findAll();

        return $this->render('formationAnnonceBundle:Candidature:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Candidature entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Candidature();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('candidature_show', array('id' => $entity->getId())));
        }

        return $this->render('formationAnnonceBundle:Candidature:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Candidature entity.
     *
     * @param Candidature $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Candidature $entity)
    {
        $form = $this->createForm(new CandidatureType(), $entity, array(
            'action' => $this->generateUrl('candidature_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Candidature entity.
     *
     */
    public function newAction()
    {
        $entity = new Candidature();
        $form   = $this->createCreateForm($entity);

        return $this->render('formationAnnonceBundle:Candidature:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Candidature entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('formationAnnonceBundle:Candidature')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidature entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('formationAnnonceBundle:Candidature:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Candidature entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('formationAnnonceBundle:Candidature')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidature entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('formationAnnonceBundle:Candidature:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Candidature entity.
    *
    * @param Candidature $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Candidature $entity)
    {
        $form = $this->createForm(new CandidatureType(), $entity, array(
            'action' => $this->generateUrl('candidature_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Candidature entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('formationAnnonceBundle:Candidature')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidature entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('candidature_edit', array('id' => $id)));
        }

        return $this->render('formationAnnonceBundle:Candidature:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Candidature entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('formationAnnonceBundle:Candidature')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Candidature entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('candidature'));
    }

    /**
     * Creates a form to delete a Candidature entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('candidature_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
