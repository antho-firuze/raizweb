<?php defined('BASEPATH') or exit('No direct script access allowed');

namespace Cache;

class Redis
{
    protected static $_default_config = array(
        'socket_type' => 'tcp',
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => 6379,
        'timeout' => 0
    );
    protected $_redis;
    protected $_serialized = array();
    protected static $_delete_name;
    private $cache;

    function __construct()
    {
        if (!$this->is_supported()) {
            log_message('error', 'Cache: Failed to create Redis object; extension not loaded?');
            return;
        }

        isset(static::$_delete_name) or static::$_delete_name = version_compare(phpversion('phpredis'), '5', '>=')
        ? 'del'
            : 'delete';

        $CI = &get_instance();

        if ($CI->config->load('redis', TRUE, TRUE)) {
            $config = array_merge(self::$_default_config, $CI->config->item('redis'));
        } else {
            $config = self::$_default_config;
        }

        $this->_redis = new Redis();

        try {
            if ($config['socket_type'] === 'unix') {
                $success = $this->_redis->connect($config['socket']);
            } else // tcp socket
            {
                $success = $this->_redis->connect($config['host'], $config['port'], $config['timeout']);
            }

            if (!$success) {
                log_message('error', 'Cache: Redis connection failed. Check your configuration.');
            }

            if (isset($config['password']) && !$this->_redis->auth($config['password'])) {
                log_message('error', 'Cache: Redis authentication failed.');
            }
        } catch (RedisException $e) {
            log_message('error', 'Cache: Redis connection refused (' . $e->getMessage() . ')');
        }
    }

    function isCacheOK()
    {
        $ci = &get_instance();
        $ci->load->driver('cache', ['adapter' => 'redis']);
        try {
            if (!$this->cache->is_supported()) {
                return false;
            }
            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }

    /**
     * Is Redis available? or service is running?
     *
     * @return bool
     */
    // function is_cache_ok()
    // {
    //     $ci = &get_instance();
    //     $ci->load->driver('cache', ['adapter' => 'redis']);

    //     set_error_handler(function ($errno, $errstr) {
    //         if ($errno == 8)
    //             throw new ErrorException('Redis Server not available');
    //         else
    //             throw new ErrorException($errstr);
    //     });

    //     try {
    //         if (!$ci->cache->redis->is_supported())
    //             throw new ErrorException('Caching not supported');
    //     } catch (ErrorException $e) {
    //         F::$_error['message'] = $e->getMessage();
    //         return FALSE;
    //     }

    //     try {
    //         $ci->cache->redis->cache_info();
    //         restore_error_handler();
    //     } catch (ErrorException $e) {
    //         F::$_error['message'] = $e->getMessage();
    //         return FALSE;
    //     }

    //     return TRUE;
    // }

    public function get($key)
    {
        $value = $this->_redis->get($key);

        if ($value !== FALSE && $this->_redis->sIsMember('_ci_redis_serialized', $key)) {
            return unserialize($value);
        }

        return $value;
    }

    public function save($id, $data, $ttl = 60, $raw = FALSE)
    {
        if (is_array($data) or is_object($data)) {
            if (!$this->_redis->sIsMember('_ci_redis_serialized', $id) && !$this->_redis->sAdd('_ci_redis_serialized', $id)) {
                return FALSE;
            }

            isset($this->_serialized[$id]) or $this->_serialized[$id] = TRUE;
            $data = serialize($data);
        } else {
            $this->_redis->sRemove('_ci_redis_serialized', $id);
        }

        return $this->_redis->set($id, $data, $ttl);
    }

    public function delete($key)
    {
        if ($this->_redis->{static::$_delete_name}($key) !== 1) {
            return FALSE;
        }

        $this->_redis->sRemove('_ci_redis_serialized', $key);

        return TRUE;
    }

    public function increment($id, $offset = 1)
    {
        return $this->_redis->incrBy($id, $offset);
    }

    public function decrement($id, $offset = 1)
    {
        return $this->_redis->decrBy($id, $offset);
    }

    public function clean()
    {
        return $this->_redis->flushDB();
    }

    public function cache_info($type = NULL)
    {
        return $this->_redis->info();
    }

    public function get_metadata($key)
    {
        $value = $this->get($key);

        if ($value !== FALSE) {
            return array(
                'expire' => time() + $this->_redis->ttl($key),
                'data' => $value
            );
        }

        return FALSE;
    }

    public function is_supported()
    {
        return extension_loaded('redis');
    }

    public function __destruct()
    {
        if ($this->_redis) {
            $this->_redis->close();
        }
    }

    public function persist($key)
    {
        return $this->_redis->persist($key);
    }




    // function save_to_cache($id, $data, $ttl = 60, $raw = FALSE)
    // {
    //     if (!CACHE_SERVER_ENABLE)
    //         return FALSE;

    //     $ci = &get_instance();
    //     $ci->load->library('f');
    //     $ci->load->driver('cache');
    //     // return $ci->cache->redis->save($id, $data, $ttl, $raw);
    //     if ($ttl == -1) {
    //         $result = $ci->cache->redis->save($id, $data, 60, $raw);
    //         if ($result)
    //             return $ci->cache->redis->persist($id);
    //         else
    //             return $result;
    //     } else {
    //         return $ci->cache->redis->save($id, $data, $ttl, $raw);
    //     }
    // }

    // function get_from_cache($key)
    // {
    //     if (!CACHE_SERVER_ENABLE)
    //         return FALSE;

    //     $ci = &get_instance();
    //     $ci->load->library('f');
    //     $ci->load->driver('cache');
    //     return $ci->cache->redis->get($key);
    // }
}
