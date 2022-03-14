<?php

namespace App\Http\Controllers;

use App\Models\VehicleAssurance;
use App\Models\VehicleMaster;
use App\Models\VehicleTrxPurchased;
use App\Models\VehicleTrxRent;
use App\Models\VehicleTrxSubstitute;
use InfyOm\Generator\Utils\ResponseUtil;
use Response;

/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Laravel Generator APIs",
 *     version="1.0.0",
 *   )
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller
{
    /**
     * Generate response message
     *
     * @param array $result
     * @param string $message
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }
    
    /**
     * Generate error message
     *
     * @param array $error
     * @param integer $code
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $code = 404)
    {
        return Response::json(ResponseUtil::makeError($error), $code);
    }
    
    /**
     * Generate success message
     *
     * @param string $message
     * @return \Illuminate\Http\Response
     */
    public function sendSuccess($message)
    {
        return Response::json([
            'success' => true,
            'message' => $message
        ], 200);
    }
    
    /**
     * revert price format to float format
     * 
     * @param string $value
     * @return float
     */
    public function revertPriceFormat($value)
    {
        $value = floatVal(preg_replace('/,/', "", $value));
        
        return $value;
    }
    
    /**
     * Generate vehicle list
     * 
     * @param array $data
     * @return array
     */
    public function generateVehicleList($data)
    {
        $data = VehicleMaster::
            leftJoin("VehicleModel as a", "a.VehicleModelId", "=", "VehicleMaster.VehicleModelId")
            ->leftJoin("VehicleBrand as b", "b.VehicleBrandId", "=", "a.VehicleBrandId")
            ->leftJoin("VehicleType as c", "c.VehicleTypeId", "=", "a.VehicleTypeId")
            ->select("VehicleMaster.VehicleId", "VehicleMaster.VehiclePlatNo", "a.VehicleModelSupportYear", "a.VehicleModelName", "VehicleMaster.VehicleCC", "VehicleMaster.VehicleTransmissionType")
            ->whereIn("VehicleMaster.VehicleId", $data)
            ->orderBy("VehicleMaster.VehiclePlatNo")
            ->get();
        
        $model[""] = "- - -";
        foreach($data as $items) {
            $cc = $items["VehicleCC"] / 1000;
            $transmission = $items["VehicleTransmissionType"] != "am"
                ? strtoupper($items["VehicleTransmissionType"][0] . "/" . $items["VehicleTransmissionType"][1])
                : "Hybrid";
            
            $model[$items["VehicleId"]] = $items["VehiclePlatNo"] . " - " . $items["VehicleModelName"] . " " . $cc . " " . $transmission . " (" . $items["VehicleModelSupportYear"] . ")";
        }
        
        return $model;
    }
    
    /**
     * Generate available vehicle list
     * 
     * @param integer $IsRented
     * @param integer $IsSubs
     * @param integer $IsSold
     * @return array
     */
    public function getVehicleList($IsRented = 0, $IsSubs = 0, $IsSold = 0)
    {
        $data = VehicleMaster::
            leftJoin("VehicleModel as a", "a.VehicleModelId", "=", "VehicleMaster.VehicleModelId")
            ->leftJoin("VehicleBrand as b", "b.VehicleBrandId", "=", "a.VehicleBrandId")
            ->leftJoin("VehicleType as c", "c.VehicleTypeId", "=", "a.VehicleTypeId")
            ->orderBy("VehicleMaster.VehiclePlatNo")
            ->select("VehicleMaster.VehicleId", "VehicleMaster.VehiclePlatNo", "a.VehicleModelSupportYear", "a.VehicleModelName", "VehicleMaster.VehicleCC", "VehicleMaster.VehicleTransmissionType")
            ->where(function($q) use ($IsRented, $IsSubs, $IsSold) {
                $q
                    ->where("VehicleMaster.IsRented", $IsRented)
                    ->where("VehicleMaster.IsSubstitute", $IsSubs)
                    ->where("VehicleMaster.IsSold", $IsSold);
            });
        
        // if($type == 1) {
        //     $list = $id;
            
        // } else if($type == 2) {
        //     $list = new VehicleTrxRent();
        //     $list = !empty($id)
        //         ? $list->whereIn("VehicleTrxRentId", [$id])
        //         : $list;
        //     $list = $list->pluck("VehicleId");
            
        // } else if($type == 3) {
        //     $list = new VehicleTrxSubstitute();
        //     $list = !empty($id)
        //         ? $list->whereIn("VehicleTrxSubstituteId", [$id])
        //         : $list;
        //     $list = $list->pluck("VehicleId");
            
        // } else if($type == 4) {
        //     $_id = $id["VehicleTrxRentId"] ?? "";
        //     $list_1 = new VehicleTrxRent();
        //     $list_1 = !empty($_id)
        //         ? $list_1->whereIn("VehicleTrxRentId", [$_id])
        //         : $list_1;
        //     $list_1 = $list_1->pluck("VehicleId")->toArray();
            
        //     $_id = $id["VehicleTrxSubstituteId"] ?? "";
        //     $list_2 = new VehicleTrxSubstitute();
        //     $list_2 = !empty($_id)
        //         ? $list_2->whereIn("VehicleTrxSubstituteId", [$_id])
        //         : $list_2;
        //     $list_2 = $list_2->pluck("VehicleId")->toArray();
            
        //     $list = array_merge($list_1, $list_2);
            
        // } else if($type == 5) {
        //     $list = new VehicleAssurance();
        //     $list = !empty($id)
        //         ? $list->whereIn("VehicleAssuranceId", [$id])
        //         : $list;
        //     $list = $list->pluck("VehicleId");
            
        // } else if($type == 6) {
        //     $list = new VehicleTrxPurchased();
        //     $list = !empty($id)
        //         ? $list->whereIn("VehicleTrxPurchaseId", [$id])
        //         : $list;
        //     $list = $list->pluck("VehicleId");
        // }
        
        // if($method) {
        //     $data = $data
        //         ->whereIn("VehicleMaster.VehicleId", $list);
            
        // } else {
        //     $data = $data
        //         ->whereNotIn("VehicleMaster.VehicleId", $list);
        // }
        
        $data = $data
            ->get()
            ->toArray();
        $model[""] = "- - -";
        foreach($data as $items) {
            $cc = $items["VehicleCC"] / 1000;
            $transmission = $items["VehicleTransmissionType"] != "am"
                ? strtoupper($items["VehicleTransmissionType"][0] . "/" . $items["VehicleTransmissionType"][1])
                : "Hybrid";
            
            $model[$items["VehicleId"]] = $items["VehiclePlatNo"] . " - " . $items["VehicleModelName"] . " " . $cc . " " . $transmission . " (" . $items["VehicleModelSupportYear"] . ")";
        }
        
        return $model;
    }
}
