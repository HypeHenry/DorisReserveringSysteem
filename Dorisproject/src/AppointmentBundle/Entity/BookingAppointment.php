<?php
/**
 * Created by PhpStorm.
 * User: henrymacbook1
 * Date: 17-01-18
 * Time: 01:11
 */

namespace AppointmentBundle\Entity;

use Kami\BookingBundle\Entity\Booking as BaseClass;

/**
 * Booking
 *
 * @ORM\Entity()
 * @ORM\Table(name="booking")
 */
class Booking extends BaseClass
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Vendor\AppointmentBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="bookings")
     * @ORM\JoinColumn(name="property_id", referencedColumnName="id")
     */
    protected $customer;

    // Don't forget about getters and setters
}