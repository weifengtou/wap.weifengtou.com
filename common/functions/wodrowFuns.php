<?php

namespace app\common\functions;
use Yii;

class wodrowFuns {
    
    static public function test1(){
        echo Yii::$app->runtimePath;
        exit;
    }
    
    static public function wodrowShow($show_data='null',$ctrl=0){
        switch ($ctrl){
            case 0:
                echo '<pre>';
                var_dump($show_data);
                echo "</pre>";
            break;
            case 1:
                echo '<pre>';
                var_dump($show_data);
                echo "</pre>";
                exit();
            break;
            case 2:
                echo "<pre>";
                var_dump($show_data);
                echo "</pre>";
                exit("<hr>");
                break;

            case 3:
                file_put_contents(Yii::$app->runtimePath.'\testfile.php', "<? \r".var_export($show_data, true));
                break;

            case 4:
                file_put_contents(Yii::$app->runtimePath.'\testfile.php', "<? \r".var_export($show_data, true));
                exit("<hr>");
                break;

            case 5:
                file_put_contents(Yii::$app->runtimePath.'\testfile.php', "\r\r".var_export($show_data, true),FILE_APPEND);
                break;

            case 6:
                file_put_contents(Yii::$app->runtimePath.'\testfile.php', "\r\r".var_export($show_data, true),FILE_APPEND);
                exit("<hr>");
                break;   

            default:
                echo '<pre>';
                var_dump("use this fun without param");
                echo "</pre>";
                exit();
                break;
        }
    }
}

