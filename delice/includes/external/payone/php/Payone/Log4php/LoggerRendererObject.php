<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements. See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License. You may obtain a copy of the License at
 *
 *	   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package log4php
 */

/**
 * Implement this interface in order to render objects as strings using {@link Payone_Log4php_LoggerRendererMap}.
 *
 * Implement this interface in order to render objects as strings using {@link Payone_Log4php_LoggerRendererMap}.
 *
 * Example:
 * {@example ../../examples/php/renderer_map.php 19}<br>
 * {@example ../../examples/resources/renderer_map.properties 18}<br>
 * <pre>
 * DEBUG - Now comes the current MyClass object:
 * DEBUG - Doe, John
 * </pre>
 *
 * @version $Revision$
 * @package log4php
 * @subpackage renderers
 * @since 0.3
 */
interface Payone_Log4php_LoggerRendererObject {
	/**
	 * Render the entity passed as parameter as a String.
	 * @param mixed $o entity to render
	 * @return string
	 */
	public function render($o);
}
