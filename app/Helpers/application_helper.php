<?php

use App\Model\Page as PageModel;
use Illuminate\Http\File;
use Kodeine\Acl\Models\Eloquent\Role as RoleModel;
use Kodeine\Acl\Models\Eloquent\Permission as PermissionModel;
use App\Models\User as UserModel;


/**
 * Generate 5 digits random otp
 */
function fn_generate_random_str() {
    return mt_rand(1000, 9999);
}

function fn_user(){
    return UserModel::where('id',auth()->user()->id)->with('fn_user_meta','fn_profile')->first();
}

function fn_company_id(){
    $userObj = UserModel::where('id',auth()->user()->id)->with('fn_user_meta','fn_profile')->first();
    if(isset($userObj->fn_user_meta->company_id) && $userObj->fn_user_meta->company_id !=null)
        return $userObj->fn_user_meta->company_id;
    else
        return $userObj->id;
}


/**
 * Generate 5 digits random otp
 */
function fn_validate_mobile($mobile) {
    $valid_mobile     = preg_replace('/[^0-9]/','', $mobile);
    if (strlen($valid_mobile) > 10 )
        $valid_mobile = substr($valid_mobile,-10);        
    return $valid_mobile;
}

/**
 * Function to store the file in temporary
 *
 * @param $str_path : storage path
 *
 * @param $file : input file
 */
function store_file($str_path, $file, $str_host = null)
{

    $int_size       = get_max_upload_file_size(bytes_to_mb($file->getSize()));
    $str_file_name  = generate_safe_filename($file->getClientOriginalName());
    ## store file 
    $str_file_path  = Storage::putFileAs('public/'.$str_path, new File($file),$str_file_name);
    return $str_file_name;
}

/**
 * Function to resize the image
 *
 * @param $str_type     :   image module name
 * @param $str_image    :   Actual Image 
 */
function resize_images($str_type, $str_image) {
    //$strbasepath        = storage_path().'/app/public/'.$str_type.'/';
    $strbasepath        = public_path($str_type);
    $stroriginalpath    = $strbasepath.$str_image;
    $arrSizes           = Config::get('constants.arr_resize');
    if( count($arrSizes) > 0 ) {
        foreach ($arrSizes as $key => $arrResize) {
            $strresizestorepath = $strbasepath.$key.'/'.$str_image;
            // Image::make($stroriginalpath)->resize($arrResize['width'], $arrResize['height'])->save($strresizestorepath);
            $img = Image::make($stroriginalpath);
            $img->fit($arrResize['width'],$arrResize['height']);
            $img->save($strresizestorepath); 
        }
    }
}

/**

 * Get maximum file upload size allowed on server in MegaBytes(MB)
 *
 * @link http://www.kavoir.com/2010/02/php-get-the-file-uploading-limit-max-file-size-allowed-to-upload.html
 *
 * @param integer $int_user_sepcific_max_size User specific size to consider while calculation max size.
 * @return int $max_upload_size Maximum file upload size on server
 */
function get_max_upload_file_size( $int_user_sepcific_max_size = 0 ) {
    $arr_all_sizes   = array();
    $arr_all_sizes[] = (int)(ini_get('upload_max_filesize'));
    $arr_all_sizes[] = (int)(ini_get('post_max_size'));
    $arr_all_sizes[] = (int)(ini_get('memory_limit'));
    if($int_user_sepcific_max_size > 0)
        $arr_all_sizes[] = $int_user_sepcific_max_size;
    $max_upload_size = min($arr_all_sizes);
    return $max_upload_size;
}

/**
 *Function to generate the unique filename
 */ 
 function generate_safe_filename($str_file_name)
 {
    // Clean the file name to make it safe to save by removing any special characters & whitespaces
    $str_filename = preg_replace('/[^A-Za-z0-9\-._]/', '', $str_file_name);
    // Append timestamp to each file name to make it unique
    $path_parts = pathinfo($str_filename);
    // Shorten file name to 200 character length max
    $path_parts['filename'] = (strlen($path_parts['filename']) > 200) ? substr($path_parts['filename'], 0,200): $path_parts['filename'];
    //$str_filename = $path_parts['filename'].'_'.time().'.'.$path_parts['extension'];
    $micro_time     = time();
    $micro_time     =   str_replace(".", "", $micro_time);
    $str_filename = $path_parts['filename'].'_'.$micro_time.'.'.$path_parts['extension'];
    
    return $str_filename;
}
/**
 * Convert bytes to MB
 *
 * @param integer bytes Size in bytes to convert
 * @return int|float
 */
function bytes_to_mb($bytes, $precision = 2)
{
    $kilobyte = 1024;
    $megabyte = $kilobyte * 1024;
    return round($bytes / $megabyte, $precision);
}

/**
* Function fn_fetch_site_logo
* Fetch site logo by giving logotype
* @param string $logotype
*/
function fn_fetch_site_logo($logotype =null){
    $image_name = fn_get_single_setting($logotype);
        if(isset($image_name)){
            $strPath = storage_path().'/app/public/logo_images/'.$image_name;
            if (file_exists($strPath))
                return $image = $image_name;
            else
                return $image = '';
        }
}

/**
* Function is_url_exist
* check that given url is exist on server
* @param string $url
*/
function is_url_exist($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if($code == 200){
       $status = true;
    }else{
      $status = false;
    }
    curl_close($ch);
    return $status;
}

/**
* Function upload_file
* Fetch site logo by giving logotype
*/
function file_upload($requestData){
    $target_dir  = public_path().'/assets/attachment';
    $tmpFilePath = $_FILES['attachment']['tmp_name'];                    
    $name = basename($_FILES["attachment"]["name"]);
    move_uploaded_file($tmpFilePath, $target_dir . "/" . $name);
    return $name;
}

/* For Cc avnue*/
function fn_old_encrypt($plainText,$key)
{
    $secretKey = hextobin(md5($key));
    $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
    $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
    $blockSize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
    $plainPad = pkcs5_pad($plainText, $blockSize);
    if (mcrypt_generic_init($openMode, $secretKey, $initVector) != -1) 
    {
          $encryptedText = mcrypt_generic($openMode, $plainPad);
              mcrypt_generic_deinit($openMode);
                    
    } 
    return bin2hex($encryptedText);
}

/*old added ccevenue encryption function start */

function fn_old_decrypt($encryptedText,$key)
{
    $secretKey = hextobin(md5($key));
    $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
    $encryptedText=hextobin($encryptedText);
    $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
    mcrypt_generic_init($openMode, $secretKey, $initVector);
    $decryptedText = mdecrypt_generic($openMode, $encryptedText);
    $decryptedText = rtrim($decryptedText, "\0");
    mcrypt_generic_deinit($openMode);
    return $decryptedText;
    
}
//*********** Padding Function *********************

 function pkcs5_pad ($plainText, $blockSize)
{
    $pad = $blockSize - (strlen($plainText) % $blockSize);
    return $plainText . str_repeat(chr($pad), $pad);
}


/*old added ccevenue encryption function end */

/* For Cc avnue 2021 updated functionality
* @param1 : Plain String
* @param2 : Working key provided by CCAvenue
* @return : Decrypted String
*/

function fn_encrypt($plainText,$key)
{
    $key = hextobin(md5($key));
    $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
    $openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
    $encryptedText = bin2hex($openMode);
    return $encryptedText;
}

/*
* @param1 : Encrypted String
* @param2 : Working key provided by CCAvenue
* @return : Plain String
*/
function fn_decrypt($encryptedText,$key)
{
    $key = hextobin(md5($key));
    $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
    $encryptedText = hextobin($encryptedText);
    $decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
    return $decryptedText;
}

//********** Hexadecimal to Binary function for php 4.0 version ********

function hextobin($hexString) 
 { 
    $length = strlen($hexString); 
    $binString="";   
    $count=0; 
    while($count<$length) 
    {       
        $subString =substr($hexString,$count,2);           
        $packedString = pack("H*",$subString); 
        if ($count==0)
        {
            $binString=$packedString;
        } 
        
        else 
        {
            $binString.=$packedString;
        } 
        
        $count+=2; 
    } 
        return $binString; 
  }

?>