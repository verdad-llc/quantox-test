<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 10.01.2020
 * Time: 1:59
 */
namespace App\Traits;
use App\Traits\FormatTrait;

trait CalculateTrait{

    use FormatTrait;
    public function calculate($data)
    {
       //
        $response = [];
        $response['id'] = $data['student']->id;
        $response['name'] = $data['student']->name;
        $gradeList = [];
        foreach ($data['grades'] as $grade){
            $gradeList[] = (float)$grade->rating;
        }
        $response['grades'] = $gradeList;
        if ($data['board_name'] == 'CSM'){
            $response['average'] = $this->countAvg($gradeList);
            $response['passed'] = $response['average'] >= 7 ? 'Pass' : 'Fail';

        }else{
            if (count($gradeList) > 2){
                    $min_grade = min($gradeList);
                    $gradeList = array_flip($gradeList);
                    unset($gradeList[$min_grade]);
                    $gradeList = array_flip($gradeList);
                }
            $response['average'] = $this->countAvg($gradeList);
            $response['passed'] = max($gradeList) > 8 ? 'Pass' : 'Fail';
        }
        return $data['format'] == 'json' ? $this->json($response) : $this->xml($response);
    }

    public function countAvg($array)
    {
        $total = 0;
        foreach ($array as $grade){
            $total += $grade;
        }
        $average = $total/count($array);
        return number_format($average,2, '.', '');
    }
}