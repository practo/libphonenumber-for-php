<?php
return array (
  'generalDesc' =>
  array (
    'NationalNumberPattern' => '[246-9]\\d{7}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '',
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '
          (?:
            2(?:
              0(?:
                2[0-589]|
                7\\d
              )|
              1(?:
                2[5-7]|
                [3-689]\\d|
                7[2-4689]
              )
            )|
            44[239]\\d
          )\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '20212345',
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '
          [67]\\d{7}|
          9[0-25-9]\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '65012345',
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => '800\\d{5}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '80012345',
  ),
  'premiumRate' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'sharedCost' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'noInternationalDialling' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'id' => 'ML',
  'countryCode' => 223,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      array (
        0 => '[246-9]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 =>
    array (
      'pattern' => '(\\d{4})',
      'format' => '$1',
      'leadingDigitsPatterns' =>
      array (
        0 => '
            67|
            74
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      array (
        0 => '[246-9]',
      ),
    ),
  ),
  'mainCountryForCode' => NULL,
  'leadingZeroPossible' => NULL,
);