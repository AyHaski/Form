<?php
/*
 * Copyright 2008 Sven Sanzenbacher
 *
 * This file is part of the naucon package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Naucon\Form\Helper;

use Naucon\Form\Mapper\Property;
use Naucon\Utility\ArrayPath;

/**
 * Abstract Form Helper Field
 *
 * @abstract
 * @package     Form
 * @subpackage  Helper
 * @author      Sven Sanzenbacher
 */
abstract class AbstractFormHelperField implements FormHelperFieldInterface
{
    /**
     * @var    Property
     */
    protected $property;

    /**
     * @var    ArrayPath        helper options
     */
    protected $options;


    /**
     * @return     Property
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param     Property      $property       from property instance
     */
    public function setProperty(Property $property)
    {
        $this->property = $property;
    }

    /**
     * @return    \Naucon\Utility\ArrayPath
     */
    public function getOptions()
    {
        if (is_null($this->options)) {
            $this->options = new ArrayPath();
        }
        return $this->options;
    }

    /**
     * @param     array     $options        helper options
     */
    public function setOptions(array $options=array())
    {
        $this->getOptions()->setAll($options);
    }
}