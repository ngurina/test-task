<?php
 class redirects implements iRedirects {private $urlSuffix = '/';public static function getInstance() {static $v7123a699d77db6479a1d8ece2c4f1c16;if (is_null($v7123a699d77db6479a1d8ece2c4f1c16)) {$v7123a699d77db6479a1d8ece2c4f1c16 = new redirects;}return $v7123a699d77db6479a1d8ece2c4f1c16;}private function __construct() {$v2245023265ae4cf87d02c8b6ba991139 = mainConfiguration::getInstance();if ((bool) $v2245023265ae4cf87d02c8b6ba991139->get('seo', 'url-suffix.add')) {$this->urlSuffix = (string) $v2245023265ae4cf87d02c8b6ba991139->get('seo', 'url-suffix');}}public function add($v36cd38f49b9afa08222c0dc9ebfe35eb, $v42aefbae01d2dfd981f7da7d823d689e, $v9acb44549b41563697bb490144ec6258 = 301, $v6a1ceb246b9ea27f5ab29fbd0a01ca06 = false) {if ($v36cd38f49b9afa08222c0dc9ebfe35eb == $v42aefbae01d2dfd981f7da7d823d689e) {return;}$v4717d53ebfdfea8477f780ec66151dcb = ConnectionPool::getInstance()->getConnection();$v36cd38f49b9afa08222c0dc9ebfe35eb = $v4717d53ebfdfea8477f780ec66151dcb->escape($this->parseUri($v36cd38f49b9afa08222c0dc9ebfe35eb));$v42aefbae01d2dfd981f7da7d823d689e = $v4717d53ebfdfea8477f780ec66151dcb->escape($this->parseUri($v42aefbae01d2dfd981f7da7d823d689e));$v9acb44549b41563697bb490144ec6258 = (int) $v9acb44549b41563697bb490144ec6258;$v6a1ceb246b9ea27f5ab29fbd0a01ca06 = (int) $v6a1ceb246b9ea27f5ab29fbd0a01ca06;$v4717d53ebfdfea8477f780ec66151dcb->startTransaction('Adding new redirect records');try {$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
INSERT INTO `cms3_redirects`
	(`source`, `target`, `status`, `made_by_user`)
	SELECT `source`, '{$v42aefbae01d2dfd981f7da7d823d689e}', '{$v9acb44549b41563697bb490144ec6258}', $v6a1ceb246b9ea27f5ab29fbd0a01ca06 FROM `cms3_redirects`
		WHERE `target` = '{$v36cd38f49b9afa08222c0dc9ebfe35eb}'
SQL;
DELETE FROM `cms3_redirects` WHERE `target` = '{$v36cd38f49b9afa08222c0dc9ebfe35eb}'
SQL;
INSERT INTO `cms3_redirects`
	(`source`, `target`, `status`, `made_by_user`)
	VALUES
	('{$v36cd38f49b9afa08222c0dc9ebfe35eb}', '{$v42aefbae01d2dfd981f7da7d823d689e}', '{$v9acb44549b41563697bb490144ec6258}', $v6a1ceb246b9ea27f5ab29fbd0a01ca06)
SQL;
DELETE FROM `cms3_redirects` WHERE `id` = '{$vb80bb7740288fda1f201890375a60c8f}'
SQL;
SELECT `target`, `status` FROM `cms3_redirects`
	WHERE `source` = '{$vf0183130c6c478a364b95e4325786eb9}' AND `made_by_user` = $v6a1ceb246b9ea27f5ab29fbd0a01ca06
	ORDER BY `id` DESC LIMIT 1
SQL;
SELECT `source`, `target`, `status` FROM `cms3_redirects`
	WHERE `source` = '{$v059db73d368bc8964f075448480bb487}' AND `made_by_user` = $v6a1ceb246b9ea27f5ab29fbd0a01ca06
	ORDER BY `id` DESC LIMIT 1
SQL;