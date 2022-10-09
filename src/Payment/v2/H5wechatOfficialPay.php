<?php

namespace Sndwow\Sand\Payment\v2;

use Sndwow\Sand\Contract\AbstractGateway;
use Sndwow\Sand\Exception\BusinessException;
use Sndwow\Sand\Exception\SandException;

class H5wechatOfficialPay extends AbstractGateway
{
    
    public function orderCreate(array $params)
    {
        try {
            
            return 'https://sandcash.mixienet.com.cn/pay/h5/wechatpay?'.http_build_query($this->h5struct($params)); // 返回支付url
            
        } catch (\Throwable $e) {
            $newException = $e instanceof SandException ? $e : new BusinessException(
                json_encode(['H5包装微信公众号', 'message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]),
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
        
            $this->relativeUrl = '/gateway/api/order/refund';
        
            $this->errTraceName = 'H5wechatOfficialPay--orderRefund';
        
            return $this->request(json_encode(parent::orderRefund($body)));
        } catch (\Throwable $e) {
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
        
            $this->errTraceName = 'H5wechatOfficialPay--orderQuery';
        
            return $this->request(json_encode(parent::orderQuery($body)));
        } catch (\Throwable $e) {
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
        
            $this->errTraceName = 'H5wechatOfficialPay--orderMcAutoNotice';
        
            return $this->request(json_encode(parent::orderMcAutoNotice($body)));
        } catch (\Throwable $e) {
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
        
            $this->relativeUrl = '/gateway/api/clearfile/download';
        
            $this->errTraceName = 'H5wechatOfficialPay--clearfileDownload';
        
            return $this->request(json_encode(parent::clearfileDownload($body)));
        } catch (\Throwable $e) {
            $newException = $e instanceof SandException ? $e : new BusinessException(
                json_encode(['method' => $this->method, 'relativeUrl' => $this->relativeUrl, 'errMsg' => $e->getMessage(), $e->getLine()]),
                $this,
                $e
            );
            throw $newException;
        }
    }
}
