<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Conclusion;

/**
 * A historical event.
 */
class Event extends \Gedcomx\Conclusion\Subject
{

    /**
     * The type of the event.
     */
    private $type;

    /**
     * The date of this event.
     */
    private $date;

    /**
     * The place of this event.
     */
    private $place;

    /**
     * The roles played in this event.
     */
    private $roles;

    /**
     * Constructs a Event from a (parsed) JSON hash
     */
    public function __construct($o = null)
    {
        if ($o) {
            $this->initFromArray($o);
        }
    }

    /**
     * The type of the event.
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the event.
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * The date of this event.
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date of this event.
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    /**
     * The place of this event.
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * The place of this event.
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }
    /**
     * The roles played in this event.
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * The roles played in this event.
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
    /**
     * Returns the associative array for this Event
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->type) {
            $a["type"] = $this->type;
        }
        if ($this->date) {
            $a["date"] = $this->date->toArray();
        }
        if ($this->place) {
            $a["place"] = $this->place->toArray();
        }
        if ($this->roles) {
            $ab = array();
            foreach ($this->roles as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['roles'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this Event from an associative array
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['type'])) {
            $this->type = $o["type"];
        }
        if (isset($o['date'])) {
                $this->date = new \Gedcomx\Conclusion\DateInfo($o["date"]);
        }
        if (isset($o['place'])) {
                $this->place = new \Gedcomx\Conclusion\PlaceReference($o["place"]);
        }
        $this->roles = array();
        if (isset($o['roles'])) {
            foreach ($o['roles'] as $i => $x) {
                    $this->roles[$i] = new \Gedcomx\Conclusion\EventRole($x);
            }
        }
    }
}
