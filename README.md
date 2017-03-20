Edi Parser Bundle
================

A simple positional edi parser to transform a string to a key-value array based on a template

## Installation

Installation using composer is really easy: this command will add `"boda/edi-parser-bundle"` to your composer.json
and will download the bundle:

	php composer.phar require boda/edi-parser-bundle

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
<?php
class ParserController extends Controller
{
    /**
     * @Route("/edi", name="edi")
     */
    public function indexAction(Request $request) {

        $parser = $this->get('boda_edi_parser.positional');

        $header = [
            "IDENTIFIER"=>2,
            "DOT"=>1,
            "NUMBER"=>2,
            "TEST"=>1,
            "HEADER"=>6,
        ];
        $lengths = [
            "IDENTIFIER"=>2,
            "DOT"=>1,
            "NUMBER"=>2,
            "TEST"=>1,
            "CONTENT"=>8,
        ];
        $footer = [
            "IDENTIFIER"=>2,
            "DOT"=>1,
            "NUMBER"=>2,
            "TEST"=>1,
            "CONTENT"=>6,
        ];
        $rows = [
            "00.00 HEADER",
            "41.00 CONTENT1",
            "41.00 CONTENT2",
            "41.00 CONTENT3",
            "99.00 FOOTER"
        ];
        $resultEdi = $parser->parse($header, $lengths, $footer, $rows);
    }
}
```