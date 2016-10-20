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

use Symfony\Component\Validator\Constraints as Assert;

class CallbackType extends AbstractType
{
    public function getName()
    {
        return 'callback';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array('label'=>'Your name'));
        $builder->add('email', 'email', array('label'=>'Your e-mail address'));
        $builder->add('phone', 'text', array('label'=>'Phone number with country code'));
        $builder->add('time_to_call', 'text', array('label'=>'Best time to call'));
    }

    public function getDefaultOptions(array $options)
    {
        $options['validation_constraint'] = new Assert\Collection(array(
            'fields' => array(
                'name'      => array(
                    new Assert\NotBlank(),
                    new Assert\Regex(array(
                        'pattern' => "/\d/",
                        'match'   => false,
                    )),
                ),
                'email'     => array(
                    new Assert\NotBlank(),
                    new Assert\Email(),
                ),
                'phone'     => array(
                    new Assert\NotBlank(),
                ),
                'time_to_call'   => new Assert\NotBlank(),
            ),
            'allowExtraFields'  => true,
        ));

        return $options;
    }
}