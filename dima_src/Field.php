<?php

namespace Dima;

/**
 * Field
 *
 * @Table(name="fields")
 * @Entity
 * @ExclusionPolicy("none")
 */
class Field
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
     * @Column(type="string", length=255, unique=true)
     *
     * @var string $name
     */
    private $name;

    /**
     * @Column(type="string", length=255, nullable=true)
     *
     * @var string $title
     */
    private $title;

    /**
     * @Column(type="string", length=255, nullable=true)
     *
     * @var string $teg
     */
    private $teg;

    /**
     * @Column(type="boolean")
     *
     * @var boolean $hideField
     */
    private $hideField;

    /**
     * @Column(type="boolean")
     *
     * @var boolean $deleteField
     */
    private $deleteField;

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
     * Set name
     *
     * @param string $name
     *
     * @return Field
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Field
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
     * Set teg
     *
     * @param string $teg
     *
     * @return Field
     */
    public function setTeg($teg)
    {
        $this->teg = $teg;

        return $this;
    }

    /**
     * Get teg
     *
     * @return string
     */
    public function getTeg()
    {
        return $this->teg;
    }

    /**
     * Set hideField
     *
     * @param boolean $hideField
     *
     * @return Field
     */
    public function setHideField($hideField)
    {
        $this->hideField = $hideField;

        return $this;
    }

    /**
     * Get hideField
     *
     * @return boolean
     */
    public function getHideField()
    {
        return $this->hideField;
    }

    /**
     * Set deleteField
     *
     * @param boolean $deleteField
     *
     * @return Field
     */
    public function setDeleteField($deleteField)
    {
        $this->deleteField = $deleteField;

        return $this;
    }

    /**
     * Get deleteField
     *
     * @return boolean
     */
    public function getDeleteField()
    {
        return $this->deleteField;
    }
}
