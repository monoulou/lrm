<?php

namespace AppBundle\Listener;

use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;
use MA\LrmBundle\Entity\Evenement as MyCustomEvent;

class LoadDataListener
{
    /**
     * @param CalendarEvent $calendarEvent
     *
     * @return FullCalendarEvent[]
     */
    public function loadData(Evenement $evenement)
    {
        $startDate = $evenement->getStart();
        $endDate = $evenement->getEnd();
        $filters = $evenement->getFilters();

        //You may want do a custom query to populate the events

        $evenement->addEvent(new MyCustomEvent('Event Title 1', new \DateTime()));
        $evenement->addEvent(new MyCustomEvent('Event Title 2', new \DateTime()));
    }
}