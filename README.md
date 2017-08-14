Edi Parser Bundle
================

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/89292c47711045f88c2399f4499be3b6)](https://www.codacy.com/app/david.bonachera/EdiParser?utm_source=github.com&utm_medium=referral&utm_content=davidbonachera/EdiParser&utm_campaign=badger) [![Code Climate](https://codeclimate.com/github/codeclimate/codeclimate/badges/gpa.svg)](https://codeclimate.com/github/davidbonachera/EdiParser)

A simple positional edi parser to transform a string to a key-value array based on a template

## Installation

Installation using composer is really easy: this command will add `"boda/edi-parser"` to your composer.json
and will download the bundle:

	composer require boda/edi-parser

Enable the bundle in your kernel:
```php
<?php
// app/AppKernel.php
public function registerBundles()
{
	$bundles = array(
		// ...
		new Boda\EdiParserBundle\BodaEdiParserBundle(),
	);
}
```

### How to use
Use it inside a controller

```php
@Todo : Rewrite example
```

### Result
```php
array:3 [▼
  "header" => array:5 [▼ // Header
    "IDENTIFIER" => "00"
    "DOT" => "."
    "NUMBER" => "00"
    "TEST" => " "
    "HEADER" => "HEADER"
  ]
  "body" => array:2 [▼ // Body
    1 => array:2 [▼ // Group 1
      0 => array:5 [▼ // Group 1 header
        "IDENTIFIER" => "41"
        "DOT" => "."
        "NUMBER" => "00"
        "TEST" => " "
        "CONTENT" => "CONTENT1"
      ]
      1 => array:7 [▼ // Group 1 line
        "IDENTIFIER" => "41"
        "DOT" => "."
        "NUMBER" => "20"
        "TEST" => " "
        "CONTENT" => "CONTENT2"
        "SPACE" => " "
        "SUBLINE" => "subline"
      ]
    ]
    2 => array:1 [▼ // Group 2
      0 => array:5 [...] // Group 2 header
    ]
  ]
  "footer" => array:5 [▼ // Footer
    "IDENTIFIER" => "99"
    "DOT" => "."
    "NUMBER" => "00"
    "TEST" => " "
    "CONTENT" => "FOOTER"
  ]
]
```

## To-Do
Well, a lot of stuff to improve I guess, let's do a list

- [ ] Customize with configuration (with or without header/footer, nested level)
- [ ] Do some proper error handling for missing arguments
- [ ] Define different model for differents EDI.
