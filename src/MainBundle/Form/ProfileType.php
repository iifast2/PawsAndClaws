<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/12/18
 * Time: 8:43 AM
 */


namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('address');
        $builder->add('firstname');
        $builder->add('lastname');
        $builder->add('phonenumber');
        $builder->add('banned', HiddenType::class, array(
        'data' => '0',
    ));


    }

    public function getParent()
    {

        return 'FOS\UserBundle\Form\Type\ProfileFormType';

    }

    public function getBlockPrefix()
    {
        return 'main_user_profile';
    }
}