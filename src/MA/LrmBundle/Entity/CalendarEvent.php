<?php

namespace MA\LrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AncaRebeca\FullCalendarBundle\Model\Event;

/**
 * CalendarEvent
 *
 * @ORM\Table(name="calendar_event")
 * @ORM\Entity(repositoryClass="MA\LrmBundle\Repository\CalendarEventRepository")
 */
class CalendarEvent extends Event
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


}