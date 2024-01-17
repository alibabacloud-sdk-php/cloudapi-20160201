<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeRegionsResponseBody\regions;
use AlibabaCloud\Tea\Model;

class DescribeRegionsResponseBody extends Model
{
    /**
     * @var regions
     */
    public $regions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regions'   => 'Regions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regions) {
            $res['Regions'] = null !== $this->regions ? $this->regions->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Regions'])) {
            $model->regions = regions::fromMap($map['Regions']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
