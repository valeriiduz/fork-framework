<?php

namespace Fork\Config\__NAME__;

use \Fork\Config\ErrorConfig;

class Error extends ErrorConfig{

    public static $ErrorReporting = 'E_ALL & ~E_DEPRECATED & ~E_STRICT';

    public static $DisplayErrors = 'On';

    public static $DisplayStartupErrors = 'Off';

    public static $LogErrors = 'On';

    public static $LogErrorsMaxLen = '1024';

    public static $IgnoreRepeatedErrors = 'Off';
    
    public static $IgnoreRepeatedSource = 'Off';

    public static $ReportMemleaks = 'On';

    public static $ReportZendDebug = '0';

    public static $TrackErrors = 'Off';

    public static $XMLrpcErrors = '0';

    public static $XMLrpcErrorNumber = '0';

    public static $HtmlErrors = 'On';

    public static $ErrorPrependString = "<span style='color: ff0000'>";

    public static $ErrorAppendString = "</span>";

    public static $ErrorLog = 'syslog';
    
    
}
