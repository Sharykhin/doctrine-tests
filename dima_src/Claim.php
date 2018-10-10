<?php

namespace Dima;

/**
 * Field
 *
 * @Table(name="claims")
 * @Entity
 * @ExclusionPolicy("none")
 */
class Claim
{
    /**
     * @var integer
     *
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Column(type="string", length=255)
     *
     * @var string $name
     */
    private $title;

    /**
     * @ManyToMany(targetEntity="Field")
     **/
    protected $fields;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fields = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Claim
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add field
     *
     * @param \Dima\Field $field
     *
     * @return Claim
     */
    public function addField(\Dima\Field $field)
    {
        $this->fields[] = $field;

        return $this;
    }

    /**
     * Remove field
     *
     * @param \Dima\Field $field
     */
    public function removeField(\Dima\Field $field)
    {
        $this->fields->removeElement($field);
    }

    /**
     * Get fields
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFields()
    {
        return $this->fields;
    }
}
