<?php

namespace Kaweb\Phixfly\Models;

class AdditionalDetailModel extends BaseModel
{
    /**
     * The question/prompt offered to the reporting user
     *
     * @var string
     */
    protected $label;

    /**
     * The answer
     *
     *
     * @var string
     */
    protected $value;

    /**
     * AdditionalDetailModel constructor.
     * http://api-docs.fixflo.com/?php#resources-additionaldetail
     *
     * @param string $label
     * @param string $value
     */
    public function __construct($label, $value)
    {
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}