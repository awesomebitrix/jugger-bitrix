# jugger-bitrix

1. Установка
	1. Скачать dist
	1. Распаковать в /local/modules/
	1. Добавить в php_interface/init.php `\CModule::IncludeModule('jugger')`;
	1. Включить в адмике
	1. создать символьные ссылки в /local/components/ на /local/module/jugger/components/ `ln -s local/modules/jugger/components/* local/components/*` (только по другому... дебил!)
	