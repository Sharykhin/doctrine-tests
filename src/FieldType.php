<?php

namespace App;

/**
 * FieldType
 *
 * @Table(name="field_types")
 * @Entity
 */
class FieldType
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
     * @var string
     *
     * @Column(type="string", length=255)
     */
    private $name;


    /**
     * @OneToMany(targetEntity="Field", mappedBy="type")
     */
    private $field;

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
     * @param string $value
     * @return FieldType
     */
    public function setName($value)
    {
        $this->name = $value;

        return $this;
    }

    /**
     * Get field
     *
     * @return \AppBundle\Entity\Field
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set field
     *
     * @param \App\Field $value
     * @return $this
     */
    public function setField(\App\Field $value = null)
    {
        $this->field = $value;

        return $this;
    }

}
