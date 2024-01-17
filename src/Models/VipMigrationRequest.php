<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class VipMigrationRequest extends Model
{
    /**
     * @var string
     */
    public $newVip;

    /**
     * @var string
     */
    public $originalVip;
    protected $_name = [
        'newVip'      => 'NewVip',
        'originalVip' => 'OriginalVip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newVip) {
            $res['NewVip'] = $this->newVip;
        }
        if (null !== $this->originalVip) {
            $res['OriginalVip'] = $this->originalVip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VipMigrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewVip'])) {
            $model->newVip = $map['NewVip'];
        }
        if (isset($map['OriginalVip'])) {
            $model->originalVip = $map['OriginalVip'];
        }

        return $model;
    }
}
