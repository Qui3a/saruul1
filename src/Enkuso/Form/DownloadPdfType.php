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

class DownloadPdfType extends AbstractType
{
    public function getName()
    {
        return 'download_pdf';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array('label'=>'Your name'));
        $builder->add('country', 'text', array('label'=>'Country'));
        $builder->add('email', 'text', array('label'=>'Your e-mail address'));
        $builder->add('tour', 'hidden');
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
                'country'     => array(
                    new Assert\NotBlank(),
                ),
                'email'     => array(
                    new Assert\NotBlank(),
                    new Assert\Email(),
                ),
                'tour'    => new Assert\NotBlank(),
            ),
            'allowExtraFields'  => false,
        ));

        return $options;
    }
}