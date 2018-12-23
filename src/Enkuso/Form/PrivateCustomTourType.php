<?php
/*
 * This file is part of the TravelMongolia.us package.
 *
 * (c) Enkhbayasgalan Galsandorj (g.enkhbayasgalan@gmail.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Enkuso\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;

class PrivateCustomTourType extends AbstractType
{
    public function getName()
    {
        return 'private_custom_tour';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('first_name', 'text', array('label'=>'First name'));
        $builder->add('last_name', 'text', array('label'=>'Last name'));
//        $builder->add('title', 'text', array('label'=>'Title'));
//        $builder->add('organization', 'text', array('label'=>'Organization'));
        $builder->add('country', 'text', array('label'=>'Country'));
        $builder->add('city', 'text', array('label'=>'City'));
        $builder->add('address_line_1', 'text', array('label'=>'Address'));
        $builder->add('address_line_2', 'text', array('label'=>'Address line 2'));
        $builder->add('zip_code', 'text', array('label'=>'Zip code'));
        $builder->add('home_phone', 'text', array('label'=>'Home phone'));
        $builder->add('mobile_phone', 'text', array('label'=>'Mobile phone'));
        $builder->add('email', 'email', array('label'=>'Your e-mail address'));
    }

    public function getDefaultOptions(array $options)
    {
        $options['validation_constraint'] = new Assert\Collection(array(
            'fields' => array(
                'first_name'      => array(
                    new Assert\NotBlank(),
                    new Assert\Regex(array(
                        'pattern' => "/\d/",
                        'match'   => false,
                    )),
                ),
                'last_name'      => array(
                    new Assert\NotBlank(),
                    new Assert\Regex(array(
                        'pattern' => "/\d/",
                        'match'   => false,
                    )),
                ),
//                'title'     => array(
//                    new Assert\NotBlank(),
//                ),
//                'organization'     => array(
//                    new Assert\NotBlank(),
//                ),
                'country'     => array(
                    new Assert\NotBlank(),
                    new Assert\Country(),
                ),
                'city'     => array(
                    new Assert\NotBlank(),
                ),
                'address_line_1'     => array(
                    new Assert\NotBlank(),
                ),
                'zip_code'     => array(
                    new Assert\NotBlank(),
                ),
                'home_phone'     => array(
                    new Assert\NotBlank(),
                ),
                'mobile_phone'     => array(
                    new Assert\NotBlank(),
                ),
                'email'     => array(
                    new Assert\NotBlank(),
                    new Assert\Email(),
                ),
            ),
            'allowExtraFields'  => false,
        ));

        return $options;
    }
}