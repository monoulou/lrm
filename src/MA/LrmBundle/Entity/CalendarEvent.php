<?php

namespace MA\LrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AncaRebeca\FullCalendarBundle\Model\Event as BaseEvent;

/**
 * CalendarEvent
 *
 * @ORM\Table(name="calendar_evenement")
 * @ORM\Entity(repositoryClass="MA\LrmBundle\Repository\CalendarEventRepository")
 */
class CalendarEvent extends BaseEvent
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


}