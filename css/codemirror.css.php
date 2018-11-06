<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Styles for CodeMirror editor
 * for the pmahomme theme
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMAHomme
 */

// unplanned execution path
if (! defined('PHPMYADMIN') && ! defined('TESTSUITE')) {
	exit();
}
?>

.CodeMirror {
	height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 1.2); ?>em;
	direction: ltr;
}
#inline_editor_outer .CodeMirror {
	height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 0.4); ?>em;
}
.insertRowTable .CodeMirror {
	height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 0.6); ?>em;
	width: <?php echo ceil($GLOBALS['cfg']['TextareaCols'] * 0.6); ?>em;
	border: 1px solid #a9a9a9;
}
#pma_console .CodeMirror-gutters {
	background-color: initial;
	border: none;
}
span.cm-keyword, span.cm-statement-verb {
	color: #909;
}
span.cm-variable {
	color: black;
}
span.cm-comment {
	color: #808000;
}
span.cm-mysql-string {
	color: #008000;
}
span.cm-operator {
	color: fuchsia;
}
span.cm-mysql-word {
	color: black;
}
span.cm-builtin {
	color: #f00;
}
span.cm-variable-2 {
	color: #f90;
}
span.cm-variable-3 {
	color: #00f;
}
span.cm-separator {
	color: fuchsia;
}
span.cm-number {
	color: teal;
}
.autocomplete-column-name {
	display: inline-block;
}
.autocomplete-column-hint {
	display: inline-block;
	float: right;
	color: #666;
	margin-left: 1em;
}
.CodeMirror-hints {
	z-index: 999;
}
.CodeMirror-lint-tooltip {
	z-index: 200;
	font-family: inherit;
}
.CodeMirror-lint-tooltip code {
  font-family: monospace;
  font-weight: bold;
}


.cm-s-default.CodeMirror, .cm-s-default .CodeMirror-gutters,
.cm-s-pma.CodeMirror{
  background-color: #282a36 !important;
  color: #f8f8f2 !important;
  border: none;
}
.cm-s-default .CodeMirror-gutters { color: #282a36; }
.cm-s-default .CodeMirror-cursor { border-left: solid thin #f8f8f0; }
.cm-s-default .CodeMirror-linenumber { color: #6D8A88; }
.cm-s-default .CodeMirror-selected { background: rgba(255, 255, 255, 0.10); }
.cm-s-default .CodeMirror-line::selection, .cm-s-default .CodeMirror-line > span::selection, .cm-s-default .CodeMirror-line > span > span::selection { background: rgba(255, 255, 255, 0.10); }
.cm-s-default .CodeMirror-line::-moz-selection, .cm-s-default .CodeMirror-line > span::-moz-selection, .cm-s-default .CodeMirror-line > span > span::-moz-selection { background: rgba(255, 255, 255, 0.10); }
.cm-s-default span.cm-comment { color: #6272a4; }
.cm-s-default span.cm-string, .cm-s-default span.cm-string-2 { color: #f1fa8c; }
.cm-s-default span.cm-number { color: #bd93f9; }
.cm-s-default span.cm-variable { color: #50fa7b; }
.cm-s-default span.cm-variable-2 { color: white; }
.cm-s-default span.cm-def { color: #50fa7b; }
.cm-s-default span.cm-operator { color: #ff79c6; }
.cm-s-default span.cm-keyword { color: #ff79c6; }
.cm-s-default span.cm-atom { color: #bd93f9; }
.cm-s-default span.cm-meta { color: #f8f8f2; }
.cm-s-default span.cm-tag { color: #ff79c6; }
.cm-s-default span.cm-attribute { color: #50fa7b; }
.cm-s-default span.cm-qualifier { color: #50fa7b; }
.cm-s-default span.cm-property { color: #66d9ef; }
.cm-s-default span.cm-builtin { color: #50fa7b; }
.cm-s-default span.cm-variable-3, .cm-s-default span.cm-type { color: #ffb86c; }

.cm-s-default .CodeMirror-activeline-background { background: rgba(255,255,255,0.1); }
.cm-s-default .CodeMirror-matchingbracket { text-decoration: underline; color: white !important; }
