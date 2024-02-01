<?php
namespace Jvital\Idml\SerializationClass\Idml\Stories\Table;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\SerializationClass\Idml\Trait\AppliedTableStyleAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\BodyRowCountAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ColumnCountAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\FooterRowCountAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\HeaderRowCountAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\TextTableInsetAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\TableDirectionAttribute;

/** 
 * @XmlRoot("Table") 
 */
class Table
{

    use SelfAttribute;
    use HeaderRowCountAttribute;
    use FooterRowCountAttribute;
    use TextTableInsetAttribute;
    use BodyRowCountAttribute;
    use ColumnCountAttribute;
    use AppliedTableStyleAttribute;
    use TableDirectionAttribute;

    /**
     * @Type("array<Jvital\Idml\SerializationClass\Idml\Stories\Table\Row>")
     * @XmlList(inline                                                       = true, entry = "Row")
     */
    private array $rows;

    /**
     * @Type("array<Jvital\Idml\SerializationClass\Idml\Stories\Table\Column>")
     * @XmlList(inline                                                          = true, entry = "Column")
     */
    private array $columns;

    /**
     * @Type("array<Jvital\Idml\SerializationClass\Idml\Stories\Table\Cell>")
     * @XmlList(inline                                                        = true, entry = "Cell")
     */
    private array $cells;
}
