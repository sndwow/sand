<?php

namespace Sndwow\Sand\Payment;

use Sndwow\Sand\Contract\AbstractGateway;
use Sndwow\Sand\Exception\BusinessException;
use Sndwow\Sand\Exception\SandException;

/**
 * QQ钱包扫码
 */
class QqPay extends AbstractGateway
{
    /**
     * 用户被扫
     */
    public function orderPay(array $body)
    {
        try {
            $this->method = 'sandpay.trade.barpay';

            $this->relativeUrl = '/qr/api/order/pay';

            $this->errTraceName = 'QqPay--orderPay';

            return $this->request(json_encode(parent::orderPay($body)));
        }catch (\Throwable $e) {
            $newException = $e instanceof SandException ? $e : new BusinessException(
                json_encode(['method' => $this->method, 'relativeUrl' => $this->relativeUrl, 'errMsg' => $e->getMessage(), $e->getLine()]),
                $this,
                $e
            );
            throw $newException;
        }
    }

    /**
     * 用户主扫
     */
    public function orderCreate(array $body)
    {
        try {
            $this->method = 'sandpay.trade.precreate';

            $this->relativeUrl = '/qr/api/order/create';

            $this->errTraceName = 'QqPay--orderCreate';

            return $this->request(json_encode(parent::orderCreate($body)));
        }catch (\Throwable $e) {
            $newException = $e instanceof SandException ? $e : new BusinessException(
                json_encode(['method' => $this->method, 'relativeUrl' => $this->relativeUrl, 'errMsg' => $e->getMessage(), $e->getLine()]),
                $this,
                $e
            );
            throw $newException;
        }
    }

    public function orderRefund(array $body)
    {
        try {
            $this->method = 'sandpay.trade.refund';

            $this->relativeUrl = '/gw/api/order/refund';

            $this->errTraceName = 'QqPay--orderRefund';

            return $this->request(json_encode(parent::orderRefund($body)));
        }catch (\Throwable $e) {
            $newException = $e instanceof SandException ? $e : new BusinessException(
                json_encode(['method' => $this->method, 'relativeUrl' => $this->relativeUrl, 'errMsg' => $e->getMessage(), $e->getLine()]),
                $this,
                $e
            );
            throw $newException;
        }
    }

    public function orderQuery(array $body)
    {
        try {
            $this->method = 'sandpay.trade.query';

            $this->relativeUrl = '/gateway/api/order/query';

            $this->errTraceName = 'QqPay--orderQuery';

            return $this->request(json_encode(parent::orderQuery($body)));
        }catch (\Throwable $e) {
            $newException = $e instanceof SandException ? $e : new BusinessException(
                json_encode(['method' => $this->method, 'relativeUrl' => $this->relativeUrl, 'errMsg' => $e->getMessage(), $e->getLine()]),
                $this,
                $e
            );
            throw $newException;
        }
    }

    public function orderMcAutoNotice(array $body)
    {
        try {
            $this->method = 'sandpay.trade.notify';

            $this->relativeUrl = '/gateway/api/order/mcAutoNotice';

            $this->errTraceName = 'QqPay--orderMcAutoNotice';

            return $this->request(json_encode(parent::orderMcAutoNotice($body)));
        }catch (\Throwable $e) {
            $newException = $e instanceof SandException ? $e : new BusinessException(
                json_encode(['method' => $this->method, 'relativeUrl' => $this->relativeUrl, 'errMsg' => $e->getMessage(), $e->getLine()]),
                $this,
                $e
            );
            throw $newException;
        }
    }

    public function clearfileDownload(array $body)
    {
        try {
            $this->method = 'sandpay.trade.download';

            $this->relativeUrl = '/qr/api/clearfile/download';

            $this->errTraceName = 'QqPay--clearfileDownload';

            return $this->request(json_encode(parent::clearfileDownload($body)));
        }catch (\Throwable $e) {
            $newException = $e instanceof SandException ? $e : new BusinessException(
                json_encode(['method' => $this->method, 'relativeUrl' => $this->relativeUrl, 'errMsg' => $e->getMessage(), $e->getLine()]),
                $this,
                $e
            );
            throw $newException;
        }
    }

}
