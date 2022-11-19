<?php
namespace Jvital\Idml\Stories\Table;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\Trait\AppliedTableStyleAttribute;
use Jvital\Idml\Trait\BodyRowCountAttribute;
use Jvital\Idml\Trait\ColumnCountAttribute;
use Jvital\Idml\Trait\FooterRowCountAttribute;
use Jvital\Idml\Trait\HeaderRowCountAttribute;
use Jvital\Idml\Trait\SelfAttribute;
use Jvital\Idml\Trait\TextTableInsetAttribute;
use Jvital\Idml\Trait\TableDirectionAttribute;

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
     * @Type("array<Jvital\Idml\Stories\Table\Row>")
     * @XmlList(inline = true, entry = "Row")
     */
    private array $rows;

    /**
     * @Type("array<Jvital\Idml\Stories\Table\Column>")
     * @XmlList(inline = true, entry = "Column")
     */
    private array $columns;

    /**
     * @Type("array<Jvital\Idml\Stories\Table\Cell>")
     * @XmlList(inline = true, entry = "Cell")
     */
    private array $cells;
}
