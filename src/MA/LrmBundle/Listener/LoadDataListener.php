<?php

namespace MA\LrmBundle\Listener;


use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;
use MA\LrmBundle\Entity\CalendarEvent as MyCustomEvent;


class LoadDataListener
{
    /**
     * @param MyCustomEvent $calendarEvent
     *
     * @return FullCalendarEvent[]
     */

    public function loadData(MyCustomEvent $calendarEvent)
    {

//        $title = $calendarEvent->getTitle();
//        $startDate = $calendarEvent->getStartDate();
//        $endDate = $calendarEvent->getEndDate();
//        $filters = $calendarEvent->getFilters();

        //You may want do a custom query to populate the events

//        $calendarEvent->addEvent(new MyCustomEvent('Event Title 1', new \DateTime()));
//        $calendarEvent->addEvent(new MyCustomEvent('Event Title 2', new \DateTime()));
        
          return $calendarEvent->toArray();
    }
}