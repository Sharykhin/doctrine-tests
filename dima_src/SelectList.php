<?php

namespace Dima;

/**
 * Field
 *
 * @Table(name="select_lists")
 * @Entity
 * @ExclusionPolicy("none")
 */
class SelectList
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
    private $value;

    /**
     * @ManyToOne(targetEntity="Field")
     **/
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
     * Set value
     *
     * @param string $value
     *
     * @return SelectList
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set field
     *
     * @param \Dima\Field $field
     *
     * @return SelectList
     */
    public function setField(\Dima\Field $field = null)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return \Dima\Field
     */
    public function getField()
    {
        return $this->field;
    }
}