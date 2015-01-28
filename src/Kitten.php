<?php

class Kitten {

	private static $cats = [
		'=^.^=',
		',,,^..^,,,~',
		'>\'o\'<',
		'>\'.\'<',
		'=^_^=',
		':3',
		':3 purr',
		':3 meow',
		'>^..^<',
		'<^..^>',
		'^-.-^ Zzzzz',
		'(,,,)=(^.^)=(,,,)',
		'(=^･ｪ･^=)',
		'(^･o･^)ﾉ”',
		'~(=^‥^)/',
		'(=^･^=)',
		'~(=^┬ ┬^)',
		'~(=^･ω･^)ﾉ',
		'=^∇^*=',
		'(ㅇㅅㅇ)',
	];

	public static function get()
	{
		return self::$cats[array_rand(self::$cats)];
	}
}