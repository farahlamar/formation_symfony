<?php

namespace formation\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('contenu')
            ->add('date')
            ->add('auteur')
            ->add('Categorie','entity',array(
                'class'=> 'formationAnnonceBundle:Categorie',
                'property'=>'nom'
            ))
                ->add('condidatures','entity',array(
                'class'=> 'formationAnnonceBundle:Condidature',
                'expanded' => true,
                'multiple' => true,
            ))
                ->add('envoyer','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'formation\AnnonceBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'formation_annoncebundle_annonce';
    }
}
