<?php

class Controller extends CController {

    public $layout = '//layouts/column1';
    public $menu = array();
    public $breadcrumbs = array();
    public $enableCorss = false;

    /**
     * 成功返回信息
     * @param type $data
     * @param type $code
     * @param type $msg
     */
    public function success($data, $code = 1, $msg = '') {
        $this->response($data, $code, $msg);
    }

    /**
     * 错误返回信息
     * @param type $data
     * @param type $code
     * @param type $msg
     */
    public function fail($data = null, $code = 0, $msg = '') {
        $this->response($data, $code, $msg);
    }

    /**
     * 获得Post参数
     * @return type
     */
    public function getPostParams() {
        return file_get_contents("php://input");
    }

    /**
     * 获取一个请求参数的值
     * @param type $key
     * @param type $default
     * @return type
     */
    public function getParam($key, $default = null) {
        return Yii::app()->request->getParam($key, $default);
    }

    protected function response($data, $code, $msg = '') {
        header('Content-type:application/json; charset=utf-8');
        if ($this->enableCorss) {
            $this->allowCors();
        }
        echo CJSON::encode(
                array(
                    'code' => $code,
                    'msg' => $msg,
                    'data' => $data,
                )
        );
    }

    /**
     * 充许跨域
     */
    protected function allowCors() {
        header("Access-Control-Allow-Origin:*");
        // header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        // header('Access-Control-Max-Age:86400');    // cache for 1 day
        header('Access-Control-Allow-Methods:GET,POST');
    }

}
