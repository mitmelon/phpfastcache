<?php

/**
 * Copyright 2015-2016 DataStax, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Cassandra;

/**
 * A PHP representation of the CQL `float` datatype
 */
final class Float implements Value, Numeric
{
    /**
     * Minimum possible Float value
     *
     * @return Float minimum value
     */
    public static function min() {}

    /**
     * Maximum possible Float value
     *
     * @return Float maximum value
     */
    public static function max() {}

    /**
     * Creates a new float.
     *
     * @param mixed $value float value as a string, number or Cassandra\Float
     */
    public function __construct($value) {}

    /**
     * The type of this float.
     *
     * @return Type
     */
    public function type() {}

    /**
     * Returns the float value.
     *
     * @return float float value
     */
    public function value() {}

    /**
     * Returns string representation of the float value.
     *
     * @return string float value
     */
    public function __toString() {}

    /**
     * @param Numeric $addend a number to add to this one
     *
     * @return Numeric sum
     */
    public function add(Numeric $addend) {}

    /**
     * @param Numeric $subtrahend a number to subtract from this one
     *
     * @return Numeric difference
     */
    public function sub(Numeric $subtrahend) {}

    /**
     * @param Numeric $multiplier a number to multiply this one by
     *
     * @return Numeric product
     */
    public function mul(Numeric $multiplier) {}

    /**
     * @param Numeric $divisor a number to divide this one by
     *
     * @return Numeric quotient
     */
    public function div(Numeric $divisor) {}

    /**
     * @param Numeric $divisor a number to divide this one by
     *
     * @return Numeric remainder
     */
    public function mod(Numeric $divisor) {}

    /**
     * @return Numeric absolute value
     */
    public function abs() {}

    /**
     * @return Numeric negative value
     */
    public function neg() {}

    /**
     * @return Numeric square root
     */
    public function sqrt() {}

    /**
     * @return int this number as int
     */
    public function toInt() {}

    /**
     * @return float this number as float
     */
    public function toDouble() {}
}
