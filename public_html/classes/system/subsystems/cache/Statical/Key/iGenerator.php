<?php
 namespace UmiCms\System\Cache\Statical\Key;use UmiCms\System\Request\iFacade as iRequest;interface iGenerator {public function __construct(   iRequest $v10573b873d2fa5a365d558a45e328e47,   \iUmiHierarchy $vf8aea31a0fd948447674cb859137e6e7,   \iConfiguration $v2245023265ae4cf87d02c8b6ba991139,   \iDomainsCollection $v14a0ffee308315f250f040d5b4d48560  );public function getKey();public function getKeyList($vb80bb7740288fda1f201890375a60c8f);}