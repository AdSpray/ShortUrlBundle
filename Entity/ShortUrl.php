<?php
/**
 * This file is part of the Bumz\ShortUrlBundle.
 *
 * (c) Artem Lopata <biozshock@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Bumz\ShortUrlBundle\Entity;

use Doctrine\ORM\Mapping as ORM,
    Doctrine\Common\Collections\Collection,
    Doctrine\Common\Collections\ArrayCollection;

/**
 * Entity for short urls storage
 *
 * @author Artem Lopata <biozshock@gmail.com>
 *
 * @ORM\Entity
 * @ORM\Table(name="url_shortener")
 */
class ShortUrl
{
    /**
     * @var integer
     * @ORM\Column(name="id_short_url", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="long_url", type="string", nullable=false)
     */
    protected $long;

    /**
     * @var string
     * @ORM\Column(name="short_url", type="string", length=200, nullable=false)
     */
    protected $short;

    /**
     * @var int
     * @ORM\Column(name="clicks", type="integer", nullable=false)
     */
    protected $clicks = 0;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set long
     *
     * @param string $long
     */
    public function setLong($long)
    {
        $this->long = $long;
    }

    /**
     * Get long
     *
     * @return string 
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * Set short
     *
     * @param string $short
     */
    public function setShort($short)
    {
        $this->short = $short;
    }

    /**
     * Get short
     *
     * @return string 
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * Set clicks
     *
     * @param integer $clicks
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;
    }

    /**
     * Get clicks
     *
     * @return integer 
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Increase count of clicks by given amount
     *
     * @param int $by amount of clicks to add
     *
     * @return int
     */
    public function increaseClicks($by = 1)
    {
        $this->clicks += $by;

        return $this->clicks;
    }
}
