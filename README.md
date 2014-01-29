# Image with Text

This class makes it super easy to render images with multiple, independently styled
text blocks. You can control each text block's alignment, color, font, line height, and size.
You may also position each text block with specific X and Y coordinates relative to the
source image.

## Installation

Install this library with [Composer](http://getcomposer.org). Add this to your `composer.json` file:

    {
        "require": {
            "nmcteam/image-with-text": "~2.0"
        }
    }

Then run `composer install`.

## Usage

Here's a quick demonstration. You can find this full working demo in the `example/`
directory.

    <?php
    require '../vendor/autoload.php';

    // Create image
    $image = new \NMC\ImageWithText\Image(dirname(__FILE__) . '/source.jpg');

    // Add styled text to image
    $text1 = new \NMC\ImageWithText\Text('Thanks for using our image text PHP library!', 3, 25);
    $text1->align = 'center-out';
    $text1->color = 'FFFFFF';
    $text1->font = dirname(__FILE__) . '/Ubuntu-Medium.ttf';
    $text1->lineHeight = 36;
    $text1->size = 24;
    $text1->startX = 40;
    $text1->startY = 40; **SET THIS TO THE CENTER ANCHOR POINT FROM WHICH TO CENTER OUT FROM**
    $image->addText($text1);

    // Render image
    $image->render(dirname(__FILE__) . '/destination.jpg');


## How to Contribute

* Fork the repo on GitHub and send a pull request
* Find a list of TODOs on the GitHub issue tracker

We have not written any unit tests just yet, but we hope to do that soon.

## Author

[Josh Lockhart](http://www.newmediacampaigns.com/about/team/josh-lockhart)

Modified by [Billy] (http://nextbigleap.com)

## Copyright

(c) 2013 New Media Campaigns

## License

MIT
