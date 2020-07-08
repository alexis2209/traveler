<?php

namespace App\Form\PageParts;

use Kunstmaan\MediaBundle\Validator\Constraints as Assert;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class testPagePartAdminType extends \Symfony\Component\Form\AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => '\App\Entity\PageParts\testPagePart',
        ]);
    }
}
