<?php
/**
 * Copyright 2015-2017 Xenofon Spafaridis
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Phramework\ValidateFiller\Injection;

/**
 * A ValueInjection implementation for Object validator properties
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @since  0.4.0
 * @author Xenofon Spafaridis <nohponex@gmail.com>
 */
class ObjectPropertyValueInjection implements ValueInjection
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var string
     */
    protected $property;

    /**
     * @param string $property
     * @param mixed  $value
     */
    public function __construct(string $property, $value = null)
    {
        $this->property = $property;
        $this->value    = $value;
    }

    /**
     * @inheritdoc
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @inheritdoc
     */
    public function getProperty() : string
    {
        return $this->property;
    }
}
