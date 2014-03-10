<?php
$contents = file_get_contents('xml_content.log');
$parser = xml_parser_create('');
xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, 'UTF-8');
xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
xml_parse_into_struct($parser, trim($contents), $xml_values);
xml_parser_free($parser);
var_dump($xml_values);
