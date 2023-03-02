<?php

return (function(){
	$intGT0 = '[1-9]+\d*';
	$normUrl = '[0-9aA-zZ_-]+';

	return [
		[
			'test' => '/^$/',
			'controller' => 'articles/all'
		],
		[
			'test' => '/^add$/',
			'controller' => 'articles/add'
		],
		[
			'test' => "/^article\/($intGT0)\/?$/",
			'controller' => 'articles/one_article',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^article\/($intGT0)\/delete\/?$/",
			'controller' => 'articles/delete',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^category\/($intGT0)\/?$/",
			'controller' => 'articles/articles_category',
			'params' => ['id' => 1]
		],
		[
			'test' => '/^login$/',
			'controller' => 'users/login'
		],
		[
			'test' => '/^register$/',
			'controller' => 'users/register'
		],
		[
			'test' => '/^logout$/',
			'controller' => 'users/logout'
		],
	];
})();


// return (function(){
// 	$intGT0 = '[1-9]+\d*';
// 	$normUrl = '[0-9aA-zZ_-]+';

// 	return [
// 		[
// 			'test' => '/^$/',
// 			'controller' => 'messages/all'
// 		],
// 		[
// 			'test' => '/^add\/?$/',
// 			'controller' => 'messages/add'
// 		],
// 		[
// 			'test' => '/^contacts\/?$/',
// 			'controller' => 'contacts'
// 		],
// 		[
// 			'test' => "/^message\/($intGT0)\/?$/",
// 			'controller' => 'messages/one',
// 			'params' => ['id' => 1]
// 		],
// 		[
// 			'test' => "/^catalog\/($normUrl)\/($normUrl)\/?$/",
// 			'controller' => 'catalog/product',
// 			'params' => ['cid' => 1, 'pid' => 2]
// 		],
// 		[
// 			'test' => "/^auth\/login\/?$/",
// 			'controller' => 'auth/login'
// 		]
// 	];
// })();