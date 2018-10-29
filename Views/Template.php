<?php
namespace Views;
use http\Url;
class Template
{
  public static function nav()
  {
    require_once("Template/nav.php");
  }
  
  public static function footer()
  {
    require_once("Template/footer.php");
  }
  public static function head()
  {
    require_once("Template/head.php");
  }
}
