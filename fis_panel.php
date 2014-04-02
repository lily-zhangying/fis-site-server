<?php
/*
 ==============================================
    勿删此文件，这是为用户界面插入钩子使用的
 ==============================================
*/

//文件以js形式返回
header('Content-Type: text/javascript');

$framework = $_POST['framework'];
$version = $_POST['version'];

function checkFramework($fw){
    $framework = array('pc', 'pc2', 'mobile', 'webapp');
    return in_array($fw, $framework);
}

function getByCURL($url, $postfields = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    if($postfields){
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_FAILONERROR, 1);
    $result = curl_exec($curl);
    if(curl_errno($curl)){
        return curl_error($curl);
    }
    curl_close($curl);
    return $result;
}
?>

<?php
    if(!$framework){
        echo '';
        exit;
    }
?>
var F = F || {};
<?php
    $fis_version = getByCURL('http://10.48.30.87:8088/svn/fis/frameworks.json');
    echo "F.fis_version = " . $fis_version .";";
?>
if(F.fw && F.fis_version[F.fw]){
    var newVersion = F.fis_version[F.fw][0];
    if(newVersion > F.versionNu){
        F.notice(F.fw + '业务模型最新版本为:' + newVersion + ', <a href="http://fe.baidu.com/doc/fis/changelog/' + F.fw +  '.text" target="_about:blank">点击查看ChangeLog');
    }
}
