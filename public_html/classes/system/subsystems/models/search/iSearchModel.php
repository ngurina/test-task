<?php
 interface iSearchModel {const DEFAULT_ENTRY_PATTERN = '<b>%s</b>';const DEFAULT_LINE_PATTERN = '<p>%s</p>';public static function splitString($v341be97d9aff90c9978347f66f945b77);public static function getWordId($vc47d187067c6cf953245f128b5fde62a);public function getSearchWordId($vc47d187067c6cf953245f128b5fde62a);public function runSearch($v597a51f04d341eba4ca965899acc10b3, $v14236557f2d0162089c57597074399ac = null, $v06eba0c81e2c853a3850d7d920570edb = null, $vae1d6a6518a73b480c52bcf30553f9f8 = false);public function buildQueries($v89759e1284e2479b991d2669de104942, $vb934cdf74d9a078a5654bd8b129741d9 = null, $v06eba0c81e2c853a3850d7d920570edb = null, $vae1d6a6518a73b480c52bcf30553f9f8 = false);public function prepareContext($v7057e8409c7c531a1a6e9ac3df4ed549, $vcc475582f6f7e3f30f5a46236d75b6c5 = false);public function getContext($v7552cd149af7495ee7d8225974e50f80, $v597a51f04d341eba4ca965899acc10b3, $v110b4ab4ba90424b53bd74efb97a2f62 = self::DEFAULT_ENTRY_PATTERN, $va72dcf8c71f71519e740f6e851d54eb8 = self::DEFAULT_LINE_PATTERN);public function getIndexPages();public function getAllIndexablePages();public function getIndexWords();public function getIndexWordsUniq();public function getIndexLast();public function truncate_index();public function index_all($vaa9f73eea60a006820d0f8768bc8a3fc = false, $ve4f9a63df3b81b4ed1a414f12da04a6e = 0);public function index_item($v7552cd149af7495ee7d8225974e50f80, $v9cec682aae64c77617c76d61e147a452 = false);public function index_items($v7552cd149af7495ee7d8225974e50f80);public function calculateIDF($vd1f5ee0092ec47708f200415f2a89717);public function unindex_items($v7552cd149af7495ee7d8225974e50f80);public function suggestions($vb45cffe084dd3d20d928bee85e7b0f21, $vaa9f73eea60a006820d0f8768bc8a3fc = 10);public function processPage(iUmiHierarchyElement $v8e2dcfd7e7e24b1ca76c1193f645902b);public function processPageList(array $v8bde57434adb7a78cc31875b6e82f43e);public function parseItem($v7057e8409c7c531a1a6e9ac3df4ed549);public function buildIndexImage($v5308cca1be08c0bdbdfd06290ce5bed2);public function updateSearchIndex($v7057e8409c7c531a1a6e9ac3df4ed549, $v9f1c8757350ffe06fffc7cc4b03150af);public function getIndexWordList();public function getIndexList();}