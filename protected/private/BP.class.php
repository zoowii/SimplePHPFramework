<?php

class BP
{

    private static $instance = null;

    private $conn;
    private $cache = null;

    private $modules = null;

    private $template = null;

    public function __construct()
    {
        // init db conn
        $dsn = DB_ADAPTER . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
        $this->conn = new PDO($dsn, DB_USER, DB_PASS, array(PDO::ATTR_PERSISTENT => true));
        $this->conn->exec('set names ' . DB_CHARSET);

        // init cache
        $this->cache = new BPCache();

        // init Template
        $this->template = new Template();
    }

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
        return self::instance()->template;
    }

    /**
     * @return PDO
     */
    public static function db()
    {
        return self::instance()->conn;
    }

    /**
     * @return BPCache
     */
    public static function cache()
    {
        return self::instance()->cache;
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

}
