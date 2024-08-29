<?php

namespace App\Traits;

trait ApiTraits
{
    // return success response with out any data
    public function returnSuccessResponse($msg = "", $status = 200)
    {

        return response()->json([
            'status' => true,
            'message' => $msg,
        ], $status);

    }

    // return success response with data
    public function returnSuccessResponseWithData($data,$msg='successfully',$key='data',$status = 200)
    {
        return response()->json([
            'status' => true,
            'message' =>$msg,
            $key => $data,
        ], $status);
    }
    // return data with token

    public function returnDataWithToken(object $data ,$token,$key = 'data',$status=200)
    {
        $data->access_token = 'bearer '. $token;
        $data->expires_in =auth('api')->factory()->getTTL() * 60;
        return response()->json([
            'status' => true,
            $key => $data,
        ], $status);
    }

    // return error response with out data

    public function returnError($msg='error',$validator = null,$status = 400)
    {
        return response()->json([
            'status' => false,
            'message' => $msg,
            'details'=> $validator ?: (object)[],
        ], $status);
    }

    // return error message validation
    public function returnValidationError($validator,$msg = 'validation error',$status = 403)
    {
        $jsonError = (object)[];
        foreach($validator->errors()->toArray() as $key => $val)
        {
            foreach($val as $v){
                $jsonError->{$key} = $v;
            }
        }
        return $this->returnError($msg,$jsonError,$status);
    }


    public function json_response($code = 200, $message = null)
    {
        // clear the old headers
        header_remove();
        // set the actual code
        http_response_code($code);
        // set the header to make sure cache is forced
        header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
        // treat this as json
        header('Content-Type: application/json');
        $status = array(
            200 => '200 OK',
            400 => '400 Bad Request',
            422 => 'Unprocessable Entity',
            500 => '500 Internal Server Error'
        );
        // ok, validation error, or failure
        header('Status: '.$status[$code]);
        // return the encoded json
        return json_encode(array(
            'status' => $code < 300, // success or not?
            'message' => $message
        ));
    }


}