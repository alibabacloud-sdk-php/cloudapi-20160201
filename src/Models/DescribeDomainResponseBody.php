<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $certificateBody;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainNameResolution;

    /**
     * @var string
     */
    public $domainStatus;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $subDomain;
    protected $_name = [
        'certificateBody'      => 'CertificateBody',
        'certificateId'        => 'CertificateId',
        'certificateName'      => 'CertificateName',
        'domainName'           => 'DomainName',
        'domainNameResolution' => 'DomainNameResolution',
        'domainStatus'         => 'DomainStatus',
        'groupId'              => 'GroupId',
        'privateKey'           => 'PrivateKey',
        'requestId'            => 'RequestId',
        'subDomain'            => 'SubDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateBody) {
            $res['CertificateBody'] = $this->certificateBody;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameResolution) {
            $res['DomainNameResolution'] = $this->domainNameResolution;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateBody'])) {
            $model->certificateBody = $map['CertificateBody'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainNameResolution'])) {
            $model->domainNameResolution = $map['DomainNameResolution'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }

        return $model;
    }
}
