<?php
namespace Strategy;

include 'bootstrap.php';

$markers = array(
    new Marker\Regexp("/f.ve/"),
    new Marker\Match("five"),
    new Marker\Logic('$input equals "five"') // disable, see app example
);

foreach ($markers as $marker) {
    print get_class($marker) . PHP_EOL;
    $question = new Question\Text('how many beans make five', $marker);
    foreach (array('five', 'four') as $response) {
        print "   response: $response: ";
        if ($question->mark($response)) {
            print 'well done' . PHP_EOL;
        } else {
            print 'never mind' . PHP_EOL;
        }
    }
}
/* OUTPUT
Strategy\Marker\Regexp
   response: five: well done
   response: four: never mind
Strategy\Marker\Match
   response: five: well done
   response: four: never mind
Strategy\Marker\Logic
   response: five: well done
   response: four: well done
*/