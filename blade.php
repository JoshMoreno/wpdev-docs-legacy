<?php
/** @var \Illuminate\View\Compilers\BladeCompiler $bladeCompiler */

$bladeCompiler->component('_components.docs.section', 'docsSection');
$bladeCompiler->component('_components.snippets.php', 'snippetPhp');

$bladeCompiler->directive('openPhp', function(){
	return '&lt;?php';
});

$bladeCompiler->directive('convertBackTicksToCodeTags', function($string){
	return "<?php echo preg_replace('/`([^`]+)`/', '<code>$1</code>', $string); ?>";
});