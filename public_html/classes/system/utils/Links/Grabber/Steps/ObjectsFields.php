<?php
 namespace UmiCms\Classes\System\Utils\Links\Grabber\Steps;class ObjectsFields extends ObjectsNames {const STEP_NAME = 'ObjectsFields';public function getName() {return self::STEP_NAME;}public function grab() {if ($this->isComplete()) {return $this;}$vaa9f73eea60a006820d0f8768bc8a3fc = (int) $this->getLimit();$v7a86c157ee9713c34fbd7a1ee40f0c5a = (int) $this->getOffset();$v4717d53ebfdfea8477f780ec66151dcb = $this->getConnection();$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
SELECT
	`obj_id`,
	`varchar_val`,
	`text_val`
FROM
	`cms3_object_content`
WHERE
	`varchar_val` IS NOT NULL
OR
	`text_val` IS NOT NULL
LIMIT
	$v7a86c157ee9713c34fbd7a1ee40f0c5a, $vaa9f73eea60a006820d0f8768bc8a3fc;
SQL;