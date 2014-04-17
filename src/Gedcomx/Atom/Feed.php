<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Atom;

/**
 * <p>The Atom data formats provide a format for web content and metadata syndication. The XML media type is defined by
     * <a href="http://tools.ietf.org/html/rfc4287#section-4">RFC 4287</a>. The JSON data format is specific to GEDCOM X and is a
     * translation to JSON from the XML.</p>
 */
class Feed extends \Gedcomx\Atom\ExtensibleElement
{

    /**
     * The author of the feed.
     */
    private $authors;

    /**
     * information about a category associated with the feed
     */
    private $contributors;

    /**
     * identifies the agent used to generate the feed
     */
    private $generator;

    /**
     * identifies an image that provides iconic visual identification for the feed.
     */
    private $icon;

    /**
     * a permanent, universally unique identifier for the feed.
     */
    private $id;

    /**
     * The total number of results available, if this feed is supplying a subset of results, such as for a query.
     */
    private $results;

    /**
     * The index of the first entry in this page of data, if this feed is supplying a page of data.
     */
    private $index;

    /**
     * a reference from a feed to a Web resource.
     */
    private $links;

    /**
     * identifies an image that provides visual identification for the feed.
     */
    private $logo;

    /**
     * information about rights held in and over the feed.
     */
    private $rights;

    /**
     * a human-readable description or subtitle for the feed.
     */
    private $subtitle;

    /**
     * a human-readable title for the feed
     */
    private $title;

    /**
     * the most recent instant in time when the feed was modified in a way the publisher considers significant.
     */
    private $updated;

    /**
     * The entries in the feed.
     */
    private $entries;

    /**
     * The list of facets for the feed, used for convenience in browsing and filtering.
     */
    private $facets;

    /**
     * Constructs a Feed from a (parsed) JSON hash
     */
    public function __construct($o = null)
    {
        if ($o) {
            $this->initFromArray($o);
        }
    }

    /**
     * The author of the feed.
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * The author of the feed.
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;
    }
    /**
     * information about a category associated with the feed
     */
    public function getContributors()
    {
        return $this->contributors;
    }

    /**
     * information about a category associated with the feed
     */
    public function setContributors($contributors)
    {
        $this->contributors = $contributors;
    }
    /**
     * identifies the agent used to generate the feed
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * identifies the agent used to generate the feed
     */
    public function setGenerator($generator)
    {
        $this->generator = $generator;
    }
    /**
     * identifies an image that provides iconic visual identification for the feed.
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * identifies an image that provides iconic visual identification for the feed.
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }
    /**
     * a permanent, universally unique identifier for the feed.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * a permanent, universally unique identifier for the feed.
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * The total number of results available, if this feed is supplying a subset of results, such as for a query.
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * The total number of results available, if this feed is supplying a subset of results, such as for a query.
     */
    public function setResults($results)
    {
        $this->results = $results;
    }
    /**
     * The index of the first entry in this page of data, if this feed is supplying a page of data.
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * The index of the first entry in this page of data, if this feed is supplying a page of data.
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }
    /**
     * a reference from a feed to a Web resource.
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * a reference from a feed to a Web resource.
     */
    public function setLinks($links)
    {
        $this->links = $links;
    }
    /**
     * identifies an image that provides visual identification for the feed.
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * identifies an image that provides visual identification for the feed.
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }
    /**
     * information about rights held in and over the feed.
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * information about rights held in and over the feed.
     */
    public function setRights($rights)
    {
        $this->rights = $rights;
    }
    /**
     * a human-readable description or subtitle for the feed.
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * a human-readable description or subtitle for the feed.
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }
    /**
     * a human-readable title for the feed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * a human-readable title for the feed
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * the most recent instant in time when the feed was modified in a way the publisher considers significant.
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * the most recent instant in time when the feed was modified in a way the publisher considers significant.
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
    /**
     * The entries in the feed.
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * The entries in the feed.
     */
    public function setEntries($entries)
    {
        $this->entries = $entries;
    }
    /**
     * The list of facets for the feed, used for convenience in browsing and filtering.
     */
    public function getFacets()
    {
        return $this->facets;
    }

    /**
     * The list of facets for the feed, used for convenience in browsing and filtering.
     */
    public function setFacets($facets)
    {
        $this->facets = $facets;
    }
    /**
     * Returns the associative array for this Feed
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->authors) {
            $ab = array();
            foreach ($this->authors as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['authors'] = $ab;
        }
        if ($this->contributors) {
            $ab = array();
            foreach ($this->contributors as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['contributors'] = $ab;
        }
        if ($this->generator) {
            $a["generator"] = $this->generator->toArray();
        }
        if ($this->icon) {
            $a["icon"] = $this->icon;
        }
        if ($this->id) {
            $a["id"] = $this->id;
        }
        if ($this->results) {
            $a["results"] = $this->results;
        }
        if ($this->index) {
            $a["index"] = $this->index;
        }
        if ($this->links) {
            $ab = array();
            foreach ($this->links as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['links'] = $ab;
        }
        if ($this->logo) {
            $a["logo"] = $this->logo;
        }
        if ($this->rights) {
            $a["rights"] = $this->rights;
        }
        if ($this->subtitle) {
            $a["subtitle"] = $this->subtitle;
        }
        if ($this->title) {
            $a["title"] = $this->title;
        }
        if ($this->updated) {
            $a["updated"] = $this->updated;
        }
        if ($this->entries) {
            $ab = array();
            foreach ($this->entries as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['entries'] = $ab;
        }
        if ($this->facets) {
            $ab = array();
            foreach ($this->facets as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['facets'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this Feed from an associative array
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        $this->authors = array();
        if (isset($o['authors'])) {
            foreach ($o['authors'] as $i => $x) {
                    $this->authors[$i] = new \Gedcomx\Atom\Person($x);
            }
        }
        $this->contributors = array();
        if (isset($o['contributors'])) {
            foreach ($o['contributors'] as $i => $x) {
                    $this->contributors[$i] = new \Gedcomx\Atom\Person($x);
            }
        }
        if (isset($o['generator'])) {
                $this->generator = new \Gedcomx\Atom\Generator($o["generator"]);
        }
        if (isset($o['icon'])) {
                $this->icon = $o["icon"];
        }
        if (isset($o['id'])) {
                $this->id = $o["id"];
        }
        if (isset($o['results'])) {
                $this->results = $o["results"];
        }
        if (isset($o['index'])) {
                $this->index = $o["index"];
        }
        $this->links = array();
        if (isset($o['links'])) {
            foreach ($o['links'] as $i => $x) {
                    $this->links[$i] = new \Gedcomx\Links\Link($x);
            }
        }
        if (isset($o['logo'])) {
                $this->logo = $o["logo"];
        }
        if (isset($o['rights'])) {
                $this->rights = $o["rights"];
        }
        if (isset($o['subtitle'])) {
                $this->subtitle = $o["subtitle"];
        }
        if (isset($o['title'])) {
                $this->title = $o["title"];
        }
        if (isset($o['updated'])) {
                $this->updated = $o["updated"];
        }
        $this->entries = array();
        if (isset($o['entries'])) {
            foreach ($o['entries'] as $i => $x) {
                    $this->entries[$i] = new \Gedcomx\Atom\Entry($x);
            }
        }
        $this->facets = array();
        if (isset($o['facets'])) {
            foreach ($o['facets'] as $i => $x) {
                    $this->facets[$i] = new \Gedcomx\Records\Field($x);
            }
        }
    }
}
