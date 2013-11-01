<?php

namespace Hetic\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('title', 'text', array('attr' => array("class" => "input-xlarge" ,'placeholder' => 'Titre de la tâches')))
                ->add('category')
                ->add('point')
                ->add('tags')
                ->add('nature','choice', array(
                    'choices'   => array(1 => 'Brouillon', 2 => 'Relus', 3 => 'Final'),
                    'required'  => true,
                    'expanded' => true
                ))
//                ->add('resume', 'text', array(
//                        'constraints' => array(
//                            new NotBlank(),
//                            new Length(array('min' => 5, 'minMessage' => "Le résumé n'est pas valide!!!"))),
//                        'mapped' => false, 'label'  => 'Votre resumé','attr' => array('placeholder' => 'Titre de la tâches')))
                ->add('content', 'textarea', array('attr' => array('style' => 'width: 394px;height: 129px;','rows' => 5, 'cols' => 5,'placeholder' => 'Contenu de la tâche'), "required" => false))
                ->add('isVisible', null, array('required' => false))
                ->add('datePublication', 'date', array('widget' => 'single_text'))
                ->add('Sauvegarder', 'submit', array('attr' => array('class' => 'btn btn-primary')));
    }

    public function getName()
    {
        return '';
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver){

        $resolver->setDefaults(array(
            'data_class' => 'Hetic\SiteBundle\Entity\Article',
            'csrf_protection' => false
        ));
    }
}
