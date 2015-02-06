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

class AirfareType extends AbstractType
{
    public function getName()
    {
        return 'airfare';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('first_name', 'text', array('label'=>'First name'));
        $builder->add('last_name', 'text', array('label'=>'Last name'));
        $builder->add('phone', 'text', array('label'=>'Phone number'));
        $builder->add('email', 'email', array('label'=>'E-mail address'));
        $builder->add('city', 'text', array('label'=>'City you would like to depart from?'));
        $builder->add('tour', 'choice', array('choices' => $options['tours'], 'label' => 'Name of tour'));
        $builder->add('comment', 'textarea', array('label'=>'Comment'));
        $builder->add('arrival_date', 'text', array('label'=>'Arrival date'));
        $builder->add('departure_date', 'text', array('label'=>'Departure date'));
    }

    public function getDefaultOptions(array $options)
    {
        $options = array_merge(array(
            'tours' => array('none' => 'No tour'),
        ), $options);

        $options = array_merge(array(
            'guides' => array('none' => 'No guide'),
        ), $options);

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
                'city'     => array(
                    new Assert\NotBlank(),
                ),
                'phone'     => array(
                    new Assert\NotBlank(),
                ),
                'email'     => array(
                    new Assert\NotBlank(),
                    new Assert\Email(),
                ),
                'tour'    => new Assert\Choice(array(
                        'choices' => array_keys($options['tours'])
                    )),
                'comment'   => new Assert\NotBlank(),
                'arrival_date'   => new Assert\NotBlank(),
                'departure_date'   => new Assert\NotBlank(),
            ),
            'allowExtraFields'  => true,
        ));

        return $options;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'guides' => null,
            'tours' => null,
        ));
    }
}