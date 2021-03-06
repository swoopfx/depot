<?php
/**
 * @link https://github.com/WasabilibOrg/wasabilib
 * Copyright 2015 www.wasabilib.org
 * @license Apache License, Version 2.0
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace WasabiLib\Modal;
use Laminas\View\Model\ViewModel;
use WasabiLib\Modal\WasabiModalConfigurator;

/**
 * Class WasabiModalBaseConfigurator
 * @package WasabiLib\Modal
 *
 *
 */
class Info extends WasabiModalViewConfigurator {

    /**
     * @var Button
     */
    protected $confirmButton = null;

    public function __construct($id, $title = "", $content = "") {
        parent::__construct($id, $title, $content);
        $this->classes = array("wasabi_modal_info");

        $this->backdrop = "static";
        $this->keyboardDrop = false;

        $this->closeButton = false;

        $this->confirmButton = new Button("OK");
        $this->confirmButton->isDismissButton();
        $this->confirmButton->setType(Button::CLASS_BUTTON_PRIMARY);
    }

    /**
     * @param \WasabiLib\Modal\Button $confirmButton
     */
    public function setConfirmButton($confirmButton) {
        $this->confirmButton = $confirmButton;
    }

    /**
     * @return \WasabiLib\Modal\Button
     */
    public function getConfirmButton() {
        return $this->confirmButton;
    }

    public function getConfig() {
        $this->confirmButton ? $this->addButton($this->confirmButton) : false;

        return parent::getConfig();
    }
}