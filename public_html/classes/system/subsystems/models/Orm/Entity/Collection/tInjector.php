<?php
 namespace UmiCms\System\Orm\Entity\Collection;use UmiCms\System\Orm\Entity\iCollection;trait tInjector {private $vdb6d9b451b818ccc9a449383f2f0c450;protected function getCollection() {return $this->collection;}protected function setCollection(iCollection $vdb6d9b451b818ccc9a449383f2f0c450) {$this->collection = $vdb6d9b451b818ccc9a449383f2f0c450;return $this;}}