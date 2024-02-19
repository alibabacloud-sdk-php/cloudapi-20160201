<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class VpcAddAppServerRequest extends Model
{
    /**
     * @var string
     */
    public $addressPoolId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'addressPoolId' => 'AddressPoolId',
        'appId'         => 'AppId',
        'securityToken' => 'SecurityToken',
        'serverIp'      => 'ServerIp',
        'token'         => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VpcAddAppServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
