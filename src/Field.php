<?php

namespace App;

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
     * @ManyToOne(targetEntity="FieldType", inversedBy="field")
     */
    private $type;

//    /**
//     * @OneToMany(targetEntity="FieldList", mappedBy="field")
//     */
//    private $list;

//    /**
//     * @ManyToOne(targetEntity="FieldCategories", inversedBy="field")
//     */
//    private $categories;

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
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     *
     * @param $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;

        return $this;
    }

    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set Title
     *
     * @param $value
     * @return $this
     */
    public function setTitle($value)
    {
        $this->title = $value;

        return $this;
    }

    /**
     * Get Teg
     *
     * @return string
     */
    public function getTeg()
    {
        return $this->teg;
    }

    /**
     * Set Teg
     *
     * @param $value
     * @return $this
     */
    public function setTeg($value)
    {
        $this->teg = $value;

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
     * Set hideField
     *
     * @param $value
     * @return $this
     */
    public function setHideField($value)
    {
        $this->hideField = $value;

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

    /**
     * Set deleteField
     *
     * @param $value
     * @return $this
     */
    public function setDeleteField($value)
    {
        $this->deleteField = $value;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\FieldType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param \App\FieldType $value
     * @return $this
     */
    public function setType(\App\FieldType $value = null)
    {
        $this->type = $value;

        return $this;
    }

//    /**
//     * Get list
//     *
//     * @return \AppBundle\Entity\FieldList
//     */
//    public function getList()
//    {
//        return $this->list;
//    }
//
//    /**
//     * Set list
//     *
//     * @param \AppBundle\Entity\FieldList $value
//     * @return $this
//     */
//    public function setList(\AppBundle\Entity\FieldList $value= null)
//    {
//        $this->list = $value;
//
//        return $this;
//    }

//    /**
//     * Get categories
//     *
//     * @return \AppBundle\Entity\FieldCategories
//     */
//    public function getCategories()
//    {
//        return $this->categories;
//    }
//
//    /**
//     * Set categories
//     *
//     * @param \AppBundle\Entity\FieldCategories $value
//     * @return $this
//     */
//    public function setCategories(\AppBundle\Entity\FieldCategories $value = null)
//    {
//        $this->categories = $value;
//
//        return $this;
//    }
}
