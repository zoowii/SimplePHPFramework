<?php

class TestController extends Controller
{
    public function actionDb1()
    {
        var_dump(getenv('VCAP_SERVICES'));
        var_dump(BP::db());
    }
}
