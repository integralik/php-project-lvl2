<?php

namespace Gen\Diff;

function gendiff()
{
//	\cli\line('!!!');

	$doc = <<<DOC

Generate diff

Usage:
  gendiff (-h|--help)
  gendiff (-v|--version)
  gendiff [--format <fmt>] <firstFile> <secondFile>

Options:
  -h --help                     Show this screen
  -v --version                  Show version
  --format <fmt>                Report format [default: stylish]
DOC;

	$args = \Docopt::handle($doc, array('version'=>'0.0.1'));
}
