<?php
 class umiObjectPropertyNull extends umiObjectProperty {private $storage = [];public function __construct($vb80bb7740288fda1f201890375a60c8f, $vf1965a857bc285d26fe22023aa5ab50d = false) {$this->setId($vb80bb7740288fda1f201890375a60c8f);$this->value = $this->loadValue();}public function getStorage() {return $this->storage;}public function getName() {return __CLASS__;}public function getDataType() {return 'nullType';}public function setValue($v2063c1608d6e0baf80249c42e2be5804) {if ($this->value !== $v2063c1608d6e0baf80249c42e2be5804) {$this->value = $v2063c1608d6e0baf80249c42e2be5804;$this->setIsUpdated();}return true;}public function getValue(array $v21ffce5b8a6cc8cc6a41448dd69623c9 = null) {return $this->value;}protected function loadValue() {return $this->storage;}protected function saveValue() {$this->storage = (array) $this->value;}protected function isNeedToSave(array $v7f7cfde5ec586119b48911a2c75851e5) {return true;}}