<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: fingerprint.proto

namespace Fingerprint;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>fingerprint.VerificationRequest</code>
 */
class VerificationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.fingerprint.PreEnrolledFMD targetFMD = 1;</code>
     */
    protected $targetFMD = null;
    /**
     * Generated from protobuf field <code>repeated .fingerprint.EnrolledFMD fmdCandidates = 2;</code>
     */
    private $fmdCandidates;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Fingerprint\PreEnrolledFMD $targetFMD
     *     @type \Fingerprint\EnrolledFMD[]|\Google\Protobuf\Internal\RepeatedField $fmdCandidates
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Fingerprint::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.fingerprint.PreEnrolledFMD targetFMD = 1;</code>
     * @return \Fingerprint\PreEnrolledFMD
     */
    public function getTargetFMD()
    {
        return isset($this->targetFMD) ? $this->targetFMD : null;
    }

    public function hasTargetFMD()
    {
        return isset($this->targetFMD);
    }

    public function clearTargetFMD()
    {
        unset($this->targetFMD);
    }

    /**
     * Generated from protobuf field <code>.fingerprint.PreEnrolledFMD targetFMD = 1;</code>
     * @param \Fingerprint\PreEnrolledFMD $var
     * @return $this
     */
    public function setTargetFMD($var)
    {
        GPBUtil::checkMessage($var, \Fingerprint\PreEnrolledFMD::class);
        $this->targetFMD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .fingerprint.EnrolledFMD fmdCandidates = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFmdCandidates()
    {
        return $this->fmdCandidates;
    }

    /**
     * Generated from protobuf field <code>repeated .fingerprint.EnrolledFMD fmdCandidates = 2;</code>
     * @param \Fingerprint\EnrolledFMD[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFmdCandidates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Fingerprint\EnrolledFMD::class);
        $this->fmdCandidates = $arr;

        return $this;
    }

}

