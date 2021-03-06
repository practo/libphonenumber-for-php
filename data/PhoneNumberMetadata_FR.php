<?php
return array (
  'generalDesc' =>
  array (
    'NationalNumberPattern' => '[1-9]\\d{8}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '',
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '[1-5]\\d{8}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '123456789',
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '
          6\\d{8}|
          7[5-9]\\d{7}
        ',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '612345678',
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => '80\\d{7}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '801234567',
  ),
  'premiumRate' =>
  array (
    'NationalNumberPattern' => '89[1-37-9]\\d{6}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '891123456',
  ),
  'sharedCost' =>
  array (
    'NationalNumberPattern' => '
          8(?:
            1[019]|
            2[0156]|
            84|
            90
          )\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '810123456',
  ),
  'noInternationalDialling' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'id' => 'FR',
  'countryCode' => 33,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '([1-79])(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4 $5',
      'leadingDigitsPatterns' =>
      array (
        0 => '[1-79]',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 =>
    array (
      'pattern' => '(1\\d{2})(\\d{3})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '11',
      ),
      'nationalPrefixFormattingRule' => '$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    2 =>
    array (
      'pattern' => '(8\\d{2})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      array (
        0 => '8',
      ),
      'nationalPrefixFormattingRule' => '0 $1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '([1-79])(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4 $5',
      'leadingDigitsPatterns' =>
      array (
        0 => '[1-79]',
      ),
    ),
    1 =>
    array (
      'pattern' => '(8\\d{2})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      array (
        0 => '8',
      ),
    ),
  ),
  'mainCountryForCode' => NULL,
  'leadingZeroPossible' => NULL,
);