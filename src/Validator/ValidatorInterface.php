<?php
/*
 * Copyright 2008 Sven Sanzenbacher
 *
 * This file is part of the naucon package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Naucon\Form\Validator;

/**
 * Validator Interface
 *
 * @package     Form
 * @subpackage  Validator
 * @author      Sven Sanzenbacher
 */
interface ValidatorInterface
{
    /**
     * validate a given entity
     *
     * a entity is validated. Violations are wrapped in a instance of ViolationInterface
     *
     * @param   object      $entity     entity
     * @return  array       array of violations, wrapped in a instance of ViolationInterface
     */
    public function validate($entity);
}