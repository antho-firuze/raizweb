<?php defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('upload_file')) {
    /**
     * Upload File
     *
     * @param string    $user_file      File key name for $_FILES
     * @param string    $filename       Filename without extension
     * @param string    $path           Path public folder
     * @return object
     */
    function upload_file($user_file, $filename, $path = 'assets/')
    {
        $ext = pathinfo($_FILES[$user_file]['name'], PATHINFO_EXTENSION);
        $config['file_name'] = "$filename.$ext";
        $config['upload_path'] = FCPATH . $path;
        $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
        $config['overwrite'] = true;
        $config['max_size'] = 5120;

        $ci = &get_instance();
        $ci->load->library('upload', $config);
        $ci->load->helper('return');
        if ($ci->upload->do_upload($user_file) == false)
            return res_fail($ci->upload->display_errors());

        $url  = base_url($path) . $config['file_name'];
        $mime = mime_content_type($config['upload_path'] . $config['file_name']);

        return res_done([
            'filename'  => $config['file_name'],
            'mime'  => $mime,
            'url'   => $url,
        ]);
    }
}
