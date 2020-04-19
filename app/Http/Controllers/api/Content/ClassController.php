<?php

namespace App\Http\Controllers\api\Content;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ClassController extends Controller
{
    public function getSchools(){
        $school_owner_id = $_SESSION['user_id'];
        $schools = DB::table('school')
            ->where('school_owner_id',$school_owner_id)
            ->where('status',1)
            ->get();
        return view('addClass',['schools'=>$schools]);
    }
    public function storeClass(Request $request){
        $className   = strip_tags($request['className']);
        $schoolId    = strip_tags($request['school_id']);
        $numSubjects = strip_tags($request['subjects']);
        $dept_id     = strip_tags($request['department']);
        $query = '';
        try{
            $query = DB::table('class')
                ->insertGetId([
                    'value'         => $className,
                    'class_teacher' => -1,
                    'school_id'     => $schoolId,
                    'num_subjects'  => $numSubjects,
                    'dept_id'       => $dept_id,
                ]);
            $subjects = [];
            for($i=1; $i <= $numSubjects; $i++) {
                $subjects[] = $request['subject'.$i];
            }
            $subs = implode(",",$subjects);
            $res = DB::table('subjects')
                ->insert([
                    'class_id'      =>$query,
                    'subjects_list' =>'{'.$subs.'}'
                ]);
            $staff = DB::table('teacher')
                ->select(['username'])
                ->where('school_id',$schoolId)
                ->get();
            $periods = DB::table('school')->where('id',$schoolId)->first();
            $viewData['subjects']  = $subjects;
            $viewData['staff']     = $staff;
            $viewData['periods']   = $periods;
            $viewData['className'] = $className;
            $viewData['class_id']  = $query;
            return view('addTimeTable',['viewData'=>$viewData]);
        }catch(\Exception $e){
            return response()->json($e->getMessage(),500);
        }
    }
    public function manageClass(){
      try{
          $school_owner_id = $_SESSION['user_id'];
          $ids =  DB::table('school')
              ->join('class','school.id','=','class.school_id')
              ->distinct()
              ->where('school.school_owner_id',$school_owner_id)
              ->where('school.status',1)
              ->select(['class.school_id'])
              ->get();
          foreach($ids as $id){
              $classes[] = DB::table('school')
                  ->join('class','school.id','=','class.school_id')
                  ->where('school_id',$id->school_id)
                  ->get();
          }
          return view('manageClasses',['classes'=>$classes]);
      }catch(\Exception $e){
          return response()->json($e->getMessage(),500);
      }
    }
    public function storeTimetable(Request $request){
        $periods = $request['periods'];
        $class_id = $request['cid'];
        $weeks = ['monday','tuesday','wednesday','thursday','friday','saturday'];
        $str = [];
        foreach($weeks as $week){
            for($i = 1;$i <= $periods;$i++){
                $str[$i] = $i.",".$request[$week.'_'.$i.'_subject'].",".$request[$week.'_'.$i.'_staff'];
            }
            $res[$week] = $str;
        }
        $st = [];
        foreach($res as $week){
            $string = "";
            for($i = 1;$i <= $periods;$i++){
                $string .= "{".$week[$i]."},";
            }
            $st[] = substr_replace($string,"",-1);
        }
        try{
            $query = DB::table('timetable')->insert([
                'class_id'  => $class_id,
                'monday'    => '{'.$st[0].'}',
                'tuesday'   => '{'.$st[1].'}',
                'wednesday' => '{'.$st[2].'}',
                'thursday'  => '{'.$st[3].'}',
                'friday'    => '{'.$st[4].'}',
                'saturday'  => '{'.$st[5].'}',
            ]);
            return redirect('/manage/class');
        }catch(\Exception $e){
            return response()->json($e->getMessage(),500);
        }
    }
    function getClasess(Request $request){

    }
}
