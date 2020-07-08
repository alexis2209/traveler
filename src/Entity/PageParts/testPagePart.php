<?php

namespace App\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * testPagePart
 *
 * @ORM\Table(name="app_test_page_parts")
 * @ORM\Entity
 */
class testPagePart extends \App\Entity\PageParts\AbstractPagePart
{


    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return 'PageParts/testPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return string
     */
    public function getDefaultAdminType()
    {
        return \App\Form\PageParts\testPagePartAdminType::class;
    }

}
