<?php
namespace Jvital\Idml\Builder;

use DOMDocument;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\ObjectEvent;
use JMS\Serializer\XmlSerializationVisitor;
use Jvital\Idml\SerializationClass\Designmap\Designmap;

class CustomSerializationSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            [
                'event' => 'serializer.post_serialize',
                'method' => 'onPostSerialize',
                'class' => Designmap::class,
                'format'  =>  'xml' 
            ],
        ];
    }

    public function onPostSerialize(ObjectEvent $event)
    {
        new XmlSerializationVisitor();
        $visitor = $event->getVisitor();
        $doc = $visitor->getDocument();

        $pi = $doc->createProcessingInstruction('aid', 'style="50" type="document" readerVersion="6.0" featureSet="257" product="17.2(105)"');
        $doc->insertBefore($pi, $doc->firstChild);

    }
}
