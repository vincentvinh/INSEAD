<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 23/05/17
 * Time: 14:54
 */
namespace PLATFORMBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)

    {

        $builder->add('firstName');
        $builder->remove('username');
        $builder->add('lastName');
        $builder->add('company');
        $builder->add('position');
        $builder->add('insead');
    }

    public function getParent()

    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()

    {
        return 'FOS\UserBundle\Form\Type\RegistrationType';
    }

    public function getName()

    {
        return $this->getBlockPrefix();
    }

}