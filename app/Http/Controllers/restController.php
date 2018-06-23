<?php namespace calchours\Http\Controllers;

use Illuminate\Support\Facades\DB;

use calchours\Rest;

use Request;


class RestController extends Controller {

    public function index(){
         return $this->seeLocations();
    }

    public function seeLocations(){
        $url = 'https://shiftstestapi.firebaseio.com/locations.json';
        $reports = json_decode($this->restClient($url));
        //print_r($reports);
        return view('restclients.listlocations')->with('reports', $reports);
    }

    public function seeUsers($id,$dailyOvertimeMultiplier,$dailyOvertimeThreshold,$overtime,$weeklyOvertimeMultiplier,$weeklyOvertimeThreshold){
        $url = 'https://shiftstestapi.firebaseio.com/users.json';
        $reports = array();
        $reports =  (array) json_decode($this->restClient($url));

        $reports = (array) $reports[$id];
        //print_r($reports);
        //echo $id;
        return view('restclients.listusers')->with('reports', $reports);


        return view('restclients.listusers', [
            'firstName' => $dailyOvertimeMultiplier,
            'lastName' => $dailyOvertimeThreshold,
            'location' => $overtime,
            'location' => $weeklyOvertimeMultiplier,
            'location' => $weeklyOvertimeThreshold,                        
            'user' => $user, 
            'reports' => $reports
        ]);
    }    
    
    public function seeTimepunches($location,$user,$firstName,$lastName){
        $url = 'https://shiftstestapi.firebaseio.com/timePunches.json';
        $reports = json_decode($this->restClient($url));
    
        return view('restclients.listtimepunches', [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'location' => $location,
            'user' => $user, 
            'reports' => $reports
        ]);
  }    
    
    public function calculateSal($id){
        $resposta = DB::select('select * from produtos where id = ?', [$id]);    
        if(empty($resposta)) {
          return "Esse produto não existe";
        }
        return view('products.detalhes')->with('p', $resposta[0]);
    }


    public function restClient($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }      
}