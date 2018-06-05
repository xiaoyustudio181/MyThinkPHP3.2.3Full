<?php
/*
 * @describe 公共CURL函数封装
 * */
function curl($url, $postdata = [])
{
    $curl = curl_init();
    $url = 'http://' . DOMAIN . $url;
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    if ($postdata) {
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postdata));
        #http_build_query可封装多维数组
    }
    if (!$result = curl_exec($curl)) {
        dump(curl_error($curl));
    }
    curl_close($curl);
    return $result;
}

/*
 * @describe 允许所有跨域访问
 * */
function OPEN_CORS()
{
    header("Access-Control-Allow-Origin:*");
    header("Access-Control-Allow-Methods:GET,POST");
}
/*
 * @describe 包装并输出json响应数据
 * */
function json($isOk, $messsge, $data)
{
    $arr = [
        'result' => $isOk ? 'success' : 'error',
        'message' => $messsge,
        'data' => $data
    ];
    echo json_encode($arr);
}