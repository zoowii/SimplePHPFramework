<?php

class BP
{

    private static $instance = null;

    private $conn = null;
    private $cache = null;

    private $user = null;

    private $modules = null;

    private $template = null;

    /**
     * @return BP
     */
    private static function instance()
    {
        if (self::$instance == null) {
            self::init();
        }
        return self::$instance;
    }

    public static function init()
    {
        self::$instance = new self();
    }

    public static function tmpl()
    {
		$_this = self::instance();
		if(is_null($_this->template)) {
			$_this->template = new Template();
		}
        return $_this->template;
    }

    /**
     * @return PDO
     */
    public static function db()
    {
		$_this = self::instance();
		if(is_null($_this->conn)) {
			// init db conn
			$dsn = DB_ADAPTER . ':host=' . DB_HOST . ':' . DB_PORT . ';dbname=' . DB_NAME;
			$_this->conn = new PDO($dsn, DB_USER, DB_PASS, array(PDO::ATTR_PERSISTENT => true));
			$_this->conn->exec('set names ' . DB_CHARSET);
		}
        return $_this->conn;
    }

    /**
     * @return BPCache
     */
    public static function cache()
    {
		$_this = self::instance();
		if(is_null($_this->cache)) {
			// init cache
			$_this->cache = new BPCache();
		}
        return $_this->cache;
    }

    public static function modules($modules = null)
    {
        $obj = self::instance();
        if (!is_null($modules)) {
            $obj->modules = $modules;
        } else if (is_null(self::$instance->modules)) {
            $obj->modules = load_modules();
        }
        return $obj->modules;
    }

    /**
     * @return WebUser
     */
    public static function user()
    {
        $obj = self::instance();
        if(is_null($obj->user)) {
            $cls = WEB_USER_CLASS;
            session_start();
            $obj->user = new $cls();
        }
        return $obj->user;
    }


}
