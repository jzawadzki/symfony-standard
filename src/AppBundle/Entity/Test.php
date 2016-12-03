<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


class Test {

    private $url;

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Test
     */
    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * @Assert\IsTrue()
     */
    public function isUrl() {
        return true;
    }

}
