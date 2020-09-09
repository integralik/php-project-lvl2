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

Options:
  -h --help                     Show this screen
  -v --version                  Show version
DOC;

	$args = \Docopt::handle($doc, array('version'=>'0.0.1'));
}
