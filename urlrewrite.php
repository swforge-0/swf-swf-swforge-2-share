<?
$arUrlRewrite = array(
	1 => 
        array (
            'CONDITION' => '#^/agreements/([a-zA-Z0-9-_]+)/.*#',
            'RULE' => 'PAGE_CODE=$1',
            'ID' => '',
            'PATH' => '/agreements/index.php',
            'SORT' => 100,
        ),
);
?>