<?php
/**
 * Created by PhpStorm.
 * User: Calvin
 * Date: 2017/7/2
 * Time: 19:15
 */

namespace Cncal\Getui\Sdk\IGetui\Req;

use Cncal\Getui\Sdk\Protobuf\PBMessage;

class ServerNotifyResult extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = NULL) {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }

    function seqId() {
        return $this->_get_value("1");
    }

    function set_seqId($value) {
        return $this->_set_value("1", $value);
    }

    function info() {
        return $this->_get_value("2");
    }

    function set_info($value) {
        return $this->_set_value("2", $value);
    }
}