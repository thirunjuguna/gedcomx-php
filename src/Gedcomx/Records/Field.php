<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Records;

/**
 * A field of a record.
 */
class Field extends \Gedcomx\Links\HypermediaEnabledData
{

    /**
     * The type of the gender.
     */
    private $type;

    /**
     * The set of values for the field.
     */
    private $values;

    /**
     * Constructs a Field from a (parsed) JSON hash
     */
    public function __construct($o = null)
    {
        if ($o) {
            $this->initFromArray($o);
        }
    }

    /**
     * The type of the gender.
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the gender.
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * The set of values for the field.
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * The set of values for the field.
     */
    public function setValues($values)
    {
        $this->values = $values;
    }
    /**
     * Returns the associative array for this Field
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->type) {
            $a["type"] = $this->type;
        }
        if ($this->values) {
            $ab = array();
            foreach ($this->values as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['values'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this Field from an associative array
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['type'])) {
            $this->type = $o["type"];
        }
        $this->values = array();
        if (isset($o['values'])) {
            foreach ($o['values'] as $i => $x) {
                    $this->values[$i] = new \Gedcomx\Records\FieldValue($x);
            }
        }
    }
}
