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
 * The GEDCOM X bulk record data formats are used to exchange bulk genealogical data sets, grouped into records.
 */
class RecordSet extends \Gedcomx\Links\HypermediaEnabledData
{

    /**
     * The language of the genealogical data.
     */
    private $lang;

    /**
     * Metadata about this record set; shared among all records in the set.
     */
    private $metadata;

    /**
     * The records included in this genealogical data set.
     */
    private $records;

    /**
     * Constructs a RecordSet from a (parsed) JSON hash
     */
    public function __construct($o = null)
    {
        if ($o) {
            $this->initFromArray($o);
        }
    }

    /**
     * The language of the genealogical data.
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * The language of the genealogical data.
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }
    /**
     * Metadata about this record set; shared among all records in the set.
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Metadata about this record set; shared among all records in the set.
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }
    /**
     * The records included in this genealogical data set.
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * The records included in this genealogical data set.
     */
    public function setRecords($records)
    {
        $this->records = $records;
    }
    /**
     * Returns the associative array for this RecordSet
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->lang) {
            $a["lang"] = $this->lang;
        }
        if ($this->metadata) {
            $a["metadata"] = $this->metadata->toArray();
        }
        if ($this->records) {
            $ab = array();
            foreach ($this->records as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['records'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this RecordSet from an associative array
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['lang'])) {
            $this->lang = $o["lang"];
        }
        if (isset($o['metadata'])) {
                $this->metadata = new \Gedcomx\Gedcomx($o["metadata"]);
        }
        $this->records = array();
        if (isset($o['records'])) {
            foreach ($o['records'] as $i => $x) {
                    $this->records[$i] = new \Gedcomx\Gedcomx($x);
            }
        }
    }
}
