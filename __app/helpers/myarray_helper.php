<?php defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('is_array_assoc')) {
  /**
   * Check whenever array key is numeric or not
   *
   * @param array $arr
   * @return bool
   */
  function is_array_assoc(array $arr)
  {
    if (array() === $arr)
      return false;

    return array_keys($arr) !== range(0, count($arr) - 1);
  }
}

if (!function_exists('remove_empty_array')) {
  /**
   * Remove whenever array value is empty or null
   *
   * @param array $arr
   * @return void
   */
  function remove_empty_array(array $arr)
  {
    return array_filter($arr, function ($value) {
      return !empty($value) || $value === 0;
    });
  }
}

if (!function_exists('object_to_array')) {
  /**
   * Convert Object to Array recursivelly
   *
   * @param array $arr
   * @return void
   */
  function object_to_array($data)
  {
    if (!is_array($data) && !is_object($data))
      return $data;

    $result = array();

    $data = (array) $data;
    foreach ($data as $key => $value) {
      if (is_object($value))
        $value = (array) $value;

      if (is_array($value))
        $result[$key] = object_to_array($value);
      else
        $result[$key] = $value;
    }
    return $result;
  }
}

if (!function_exists('filter_array')) {
  /*
	* filtering an array
  *
  * @param array  $array
  * @param mixed  $key                Search by key
  * @param mixed  $val                Search value
  * @param bool   $filter_null_empty  if TRUE, Allow value null or empty to be filtered
  *
  * @return array
  *
	*/
  function filter_array($array, $key, $val, $filter_null_empty = false)
  {
    if ($filter_null_empty == false && $val == null && empty($val))
      return $array;

    if (is_array($array) && count($array) > 0) {
      foreach (array_keys($array) as $k) {
        $temp = (array) $array[$k];
        if ($temp[$key] == $val) {
          $newarray[] = $temp;
        }
      }
    }
    return $newarray ?? [];
  }
}
