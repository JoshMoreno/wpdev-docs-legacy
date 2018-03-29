<?php

function backticksToCodeTags($string)
{
	return preg_replace('/`([^`]+)`/', '<code>$1</code>', $string);
}