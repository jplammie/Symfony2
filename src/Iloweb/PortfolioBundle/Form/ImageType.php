<?php

namespace Iloweb\PortfolioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('url')
            ->add('est_publie')
            ->add('description')
        ;
    }

    public function getName()
    {
        return 'iloweb_portfoliobundle_imagetype';
    }
}
