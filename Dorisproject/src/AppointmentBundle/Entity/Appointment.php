<?php

namespace AppointmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appointment
 *
 * @ORM\Table(name="appointment")
 * @ORM\Entity(repositoryClass="AppointmentBundle\Repository\AppointmentRepository")
 */
class Appointment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="hairDescription", type="string", length=255)
     */
    private $hairDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="appointment", type="datetime")
     */
    private $appointment;


    /**
     * @var int
     *
     * @ORM\Column(name="Customerid", type="integer")
     */
    private $customerid;

    /**
     * @ORM\ManyToOne(targetEntity="AppointmentBundle\Entity\Customer")
     * @ORM\JoinColumn(name="Customerid", referencedColumnName="id")
     */
    private $customer;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set hairDescription
     *
     * @param string $hairDescription
     *
     * @return Appointment
     */
    public function setHairDescription($hairDescription)
    {
        $this->hairDescription = $hairDescription;

        return $this;
    }

    /**
     * Get hairDescription
     *
     * @return string
     */
    public function getHairDescription()
    {
        return $this->hairDescription;
    }

    /**
     * Set appointment
     *
     * @param \DateTime $appointment
     *
     * @return Appointment
     */
    public function setAppointment($appointment)
    {
        $this->appointment = $appointment;

        return $this;
    }

    /**
     * Get appointment
     *
     * @return \DateTime
     */
    public function getAppointment()
    {
        return $this->appointment;
    }

    /**
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return Appointment
     */
    public function setCustomerid($customerid)
    {
        $this->customerid = $customerid;

        return $this;
    }

    /**
     * Get customerid
     *
     * @return integer
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * Set customer
     *
     * @param \AppointmentBundle\Entity\Customer $customer
     *
     * @return Appointment
     */
    public function setCustomer(\AppointmentBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppointmentBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    public function __toString(){

        return $this->getCustomer();
    }
}
