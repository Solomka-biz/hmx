<?php
/**
 *
 */

class YandexDirectClient extends CApplicationComponent
{


    const API_URL = 'https://api.direct.yandex.ru/json-api/v4/';

    private $certPath;
    private $login;

    public function init()
    {
        parent::init();

        $certPath       = "cert_dkushnikov_20140501201007/solid-cert.crt";
        $this->certPath = \Yii::getPathOfAlias('data') . "/yandex-direct-api/{$certPath}";

        $this->login = 'dkushnikov';
    }

    /**
     * @param string      $method метод API
     * @param array|mixed $param
     *
     * @throws YandexDirectClientException
     * @return array
     */
    public function run($method, $param = array())
    {

        // входные данные
        // формирование запроса
        $request = array(
            'locale' => 'ru',
            'method' => $method,
            'param'  => $param,
        );

        // преобразование в JSON-формат
        $request = json_encode($request, JSON_UNESCAPED_UNICODE);

        // параметры запроса
        $opts = array(
            'http' => array(
                'method'  => "POST",
                'header'  => ""
                . "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . strlen($request) . "\r\n",
                'content' => $request,
            )
        );

        // создание контекста потока
        $context = stream_context_create($opts);

        // подключаем объединенный с приватным ключом сертификат
        stream_context_set_option($context, 'ssl', 'local_cert', $this->certPath);

        // отправляем запрос и получаем ответ от сервера
        $response = file_get_contents(self::API_URL, 0, $context);


        $result = json_decode($response, true);
        if (array_key_exists('error_code', $result)) {
            throw new YandexDirectClientException(
                $result['error_str'],
                $result['error_code'],
                $result['error_detail']
            );
        }

        return $result['data'];
    }

    public function getAPI()
    {
        return new YandexDirectAPI($this);
    }

}

class YandexDirectClientException extends CException
{

    protected $detail;

    public function __construct($message = "", $code = 0, $detail = "")
    {
        parent::__construct($message, $code);
        $this->detail = $detail;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }


}
