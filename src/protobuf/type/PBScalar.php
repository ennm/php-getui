<?php
namespace Getui\Protobuf\Type;

use Getui\Protobuf\PBMessage;

/**
 * @author Nikolai Kordulla
 */
class PBScalar extends PBMessage
{
    /**
     * Set scalar value
     */
    public function set_value($value)
    {
        $this->value = $value;
    }

    /**
     * Get the scalar value
     */
    public function get_value()
    {
        return $this->value;
    }
}

?>
