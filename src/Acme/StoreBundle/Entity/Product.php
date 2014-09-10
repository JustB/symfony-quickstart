<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 *
 * @ORM\Entity
 * @ORM\Table(name="product")
 *
 * @package Acme\StoreBundle\Entity
 */
class Product {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="Auto")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $price;
    /**
     * @ORM\Column(type="text")
     */
    protected $description;
}