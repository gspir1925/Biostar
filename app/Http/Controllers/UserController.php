<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeInterface;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Stmt\Foreach_;
use PHPUnit\Framework\Constraint\Count;
use Symfony\Component\VarDumper\Caster\DateCaster;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin(){
        //On récupère tous les objets utilisateurs
       $allusers=DB::table('users')->get();
       $jour=date('D', strtotime(now()));
        $heure=date_create_from_format('2022-10-10 18:10:23', 'H:m:s');
        
        
        return view('admin', ['user' => $allusers, 'jour'=>$jour,'heure'=>$heure ]);
    }

    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function display(Request $request){
        //On récupère tous les objets utilisateurs
       $users=DB::table('users')->get();
       //$dates_choice=date_format($request->date_choice, 'MM/dd/YYYY HH:mm:ss');
       $table_date='t_lg'.(date_format(now(), 'Ym'));
       $table_device='t_dev';
       $date_start=$request->post('date');
       $user=$request->post('user_selected');
       $device_requested=$request->post('device_selected');
       $device_trouve=DB::table($table_device)->get();
    
       if(Schema::hasTable($table_date))
       {
        if(!empty($date_start))
        {
             if(!empty($device_requested))
             {
                 $device=DB::table($table_device)
                 ->where('NM', '=', $device_requested)
                 ->get();
 
                 $dates_trouve=DB::table($table_date)
                 ->join('users', 'users.id', '=', $table_date.'.usrgruid')
                 ->where('users.name','=', $user)
                 ->where($table_date.'.'.'SRVDT', '>=', $date_start)
                 ->where($table_date.'.'.'DEVUID', '>=', $device.''.'DEVID')
                 ->get();
                 $count=Count($dates_trouve);
                 $j=0;
                 $m=0;
                 $w=0;
                 $tu=0;
                 $th=0;
                 $f=0;
                 $s=0;
                 $su=0;
                 $today=date('D', strtotime(now()));
                 $tabentree_monday=array();
                 $tabentree_tuesday=array();
                 $tabentree_wednesday=array();
                 $tabentree_thursday=array();
                 $tabentree_friday=array();
                 $tabentree_saturday=array();
                 $tabentree_sunday=array();
                 switch ($today) {
                     case 'Mon':
                         $tod='Lundi';
                         $tuesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+1, date('Y')));
                         $wednesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+2, date('Y')));
                         $thursday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+3, date('Y')));
                         $friday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+4, date('Y')));
                         $saturday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+5, date('Y')));
                         $sunday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+6, date('Y')));
                         foreach($dates_trouve as $date){
                             $dates_formated=date_format(date_create($date->SRVDT) , 'dd/mm/yyyy');
                             if($dates_formated= date_format(now(), 'dd/mm/YYYY')){
                                 $tabentree_monday[$m]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $m++;
                             }
                             elseif ($dates_formated=$tuesday) {
                                 $tabentree_tuesday[$tu]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $tu++;
                             }
                             elseif ($dates_formated=$wednesday) {
                                 $tabentree_wednesday[$w]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $w++;
                             }
                             elseif ($dates_formated=$thursday) {
                                 $tabentree_thursday[$th]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $th++;
                             }
                             elseif ($dates_formated=$friday) {
                                 $tabentree_friday[$f]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $f++;
                             }
                             elseif ($dates_formated=$saturday) {
                                 $tabentree_saturday[$s]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $s++;
                             }
                             elseif ($dates_formated=$sunday) {
                                 $tabentree_sunday[$su]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $su++;
                             }
                         }
                         break;
                     case 'Tue':
                         $tod='Mardi';
                         $wednesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+1, date('Y')));
                         $monday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-1, date('Y')));
                         $thursday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+2, date('Y')));
                         $friday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+3, date('Y')));
                         $saturday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+4, date('Y')));
                         $sunday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+5, date('Y')));
                         foreach($dates_trouve as $date){
                             $dates_formated=date_format(date_create($date->SRVDT) , 'dd/mm/yyyy');
                             if($dates_formated= date_format(now(), 'dd/mm/YYYY')){
                                 $tabentree_tuesday[$tu]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $tu++;
                             }
                             elseif ($dates_formated=$monday) {
                                 $tabentree_monday[$m]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $m++;
                             }
                             elseif ($dates_formated=$wednesday) {
                                 $tabentree_wednesday[$w]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $w++;
                             }
                             elseif ($dates_formated=$thursday) {
                                 $tabentree_thursday[$th]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $th++;
                             }
                             elseif ($dates_formated=$friday) {
                                 $tabentree_friday[$f]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $f++;
                             }
                             elseif ($dates_formated=$saturday) {
                                 $tabentree_saturday[$s]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $s++;
                             }
                             elseif ($dates_formated=$sunday) {
                                 $tabentree_sunday[$su]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $su++;
                             }
                         }
                         break;
                     case 'Wed':
                         $tod='Mercredi';
                         $monday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-2, date('Y')));
                         $tuesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-1, date('Y')));
                         $thursday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+1, date('Y')));
                         $friday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+2, date('Y')));
                         $saturday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+3, date('Y')));
                         $sunday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+4, date('Y')));
                         foreach($dates_trouve as $date){
                             $dates_formated=date_format(date_create($date->SRVDT) , 'dd/mm/yyyy');
                             if($dates_formated= date_format(now(), 'dd/mm/YYYY')){
                                 $tabentree_wednesday[$w]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $w++;
                             }
                             elseif ($dates_formated=$monday) {
                                 $tabentree_monday[$m]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $m++;
                             }
                             elseif ($dates_formated=$tuesday) {
                                 $tabentree_tuesday[$tu]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $tu++;
                             }
                             elseif ($dates_formated=$thursday) {
                                 $tabentree_thursday[$th]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $th++;
                             }
                             elseif ($dates_formated=$friday) {
                                 $tabentree_friday[$f]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $f++;
                             }
                             elseif ($dates_formated=$saturday) {
                                 $tabentree_saturday[$s]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $s++;
                             }
                             elseif ($dates_formated=$sunday) {
                                 $tabentree_sunday[$su]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $su++;
                             }
                         }
                         break;
                     case 'Thu':
                         $tod='Jeudi';
                         $thursday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+1, date('Y')));
                         $wednesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-1, date('Y')));
                         $monday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-3, date('Y')));
                         $tuesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-2, date('Y')));
                         $friday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+1, date('Y')));
                         $saturday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+3, date('Y')));
                         $sunday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+4, date('Y')));
                         foreach($dates_trouve as $date){
                             $dates_formated=date_format(date_create($date->SRVDT) , 'dd/mm/yyyy');
                             if($dates_formated= date_format(now(), 'dd/mm/YYYY')){
                                 $tabentree_thursday[$th]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $th++;
                             }
                             elseif ($dates_formated=$monday) {
                                 $tabentree_monday[$m]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $m++;
                             }
                             elseif ($dates_formated=$tuesday) {
                                 $tabentree_tuesday[$tu]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $tu++;
                             }
                             elseif ($dates_formated=$wednesday) {
                                 $tabentree_wednesday[$w]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $w++;
                             }
                             elseif ($dates_formated=$friday) {
                                 $tabentree_friday[$f]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $f++;
                             }
                             elseif ($dates_formated=$saturday) {
                                 $tabentree_saturday[$s]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $s++;
                             }
                             elseif ($dates_formated=$sunday) {
                                 $tabentree_sunday[$su]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $su++;
                             }
                         }
                         break;
                     case 'Fri':
                         $tod='Vendredi';
                         $saturday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+1, date('Y')));
                         $wednesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-2, date('Y')));
                         $monday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-4, date('Y')));
                         $tuesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-3, date('Y')));
                         $thursday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-1, date('Y')));
                         $sunday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+2, date('Y')));
                         foreach($dates_trouve as $date){
                             $dates_formated=date_format(date_create($date->SRVDT) , 'dd/mm/YYYY');
                             if($dates_formated= date_format(now(), 'dd/mm/YYYY')){
                                 $tabentree_friday[$f]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $f++;
                             }
                             elseif ($dates_formated=$monday) {
                                 $tabentree_monday[$m]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $m++;
                             }
                             elseif ($dates_formated=$tuesday) {
                                 $tabentree_tuesday[$tu]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $tu++;
                             }
                             elseif ($dates_formated=$wednesday) {
                                 $tabentree_wednesday[$w]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $w++;
                             }
                             elseif ($dates_formated=$thursday) {
                                 $tabentree_thursday[$th]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $th++;
                             }
                             elseif ($dates_formated=$saturday) {
                                 $tabentree_saturday[$s]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $s++;
                             }
                             elseif ($dates_formated=$sunday) {
                                 $tabentree_sunday[$su]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $su++;
                             }
                         }
                         break;
                     case 'Sat':
                         $tod='Samedi';
                         $sunday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')+1, date('Y')));
                         $wednesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-3, date('Y')));
                         $monday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-5, date('Y')));
                         $tuesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-4, date('Y')));
                         $thursday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-2, date('Y')));
                         $friday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-1, date('Y')));
                         foreach($dates_trouve as $date){
                             $dates_formated=date_format(date_create($date->SRVDT) , 'dd/mm/yyyy');
                             if($dates_formated= date_format(now(), 'dd/mm/yyyy')){
                                 $tabentree_saturday[$s]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $s++;
                             }
                             elseif ($dates_formated=$sunday) {
                                 $tabentree_sunday[$su]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $su++;
                             }
                             elseif ($dates_formated=$monday) {
                                 $tabentree_monday[$m]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $m++;
                             }
                             elseif ($dates_formated=$tuesday) {
                                 $tabentree_tuesday[$tu]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $tu++;
                             }
                             elseif ($dates_formated=$wednesday) {
                                 $tabentree_wednesday[$w]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $w++;
                             }
                             elseif ($dates_formated=$thursday) {
                                 $tabentree_thursday[$th]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $th++;
                             }
                             elseif ($dates_formated=$friday) {
                                 $tabentree_friday[$f]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $f++;
                             }
                         }
                         break;
                     case 'Sun':
                         $tod='Dimanche';
                         $wednesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-4, date('Y')));
                         $monday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-6, date('Y')));
                         $tuesday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-5, date('Y')));
                         $thursday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-3, date('Y')));
                         $friday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-2, date('Y')));
                         $saturday=date("dd/mm/yyyy", mktime(0,0,0,date('m'), date('d')-1, date('Y')));
                         foreach($dates_trouve as $date){
                             $dates_formated=date_format(date_create($date->SRVDT) , 'dd/mm/YYYY');
                             if($dates_formated= date_format(now(), 'dd/mm/YYYY')){
                                 $tabentree_sunday[$su]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $su++;
                             }
                             elseif ($dates_formated=$monday) {
                                 $tabentree_monday[$m]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $m++;
                             }
                             elseif ($dates_formated=$tuesday) {
                                 $tabentree_tuesday[$tu]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $tu++;
                             }
                             elseif ($dates_formated=$wednesday) {
                                 $tabentree_wednesday[$w]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $wednesday++;
                             }
                             elseif ($dates_formated=$thursday) {
                                 $tabentree_thursday[$th]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $th++;
                             }
                             elseif ($dates_formated=$friday) {
                                 $tabentree_friday[$f]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $f++;
                             }
                             elseif ($dates_formated=$saturday) {
                                 $tabentree_saturday[$s]=date_format(date_create($date->SRVDT) , 'H:i:s');
                                 $s++;
                             }
                         }
                         break;
                     default:
                         $tod="Aucune entrée trouvée";
                         break;
                 }
                 return view('affichage', ['users' => $users, 'dates'=>$dates_trouve, 'today'=>$tod,
                     'date_bigin'=>$date_start,
                     'user_choice'=>$user,
                     'device_trouve'=>$device_trouve,
                     'device' =>$device,
                     'tabentree_monday'=> $tabentree_monday,
                     'tabentree_tuesday'=> $tabentree_tuesday,
                     'tabentree_wednesday'=>$tabentree_wednesday,
                     'tabentree_thursday'=>$tabentree_thursday,
                     'tabentree_friday'=>$tabentree_friday,
                     'tabentree_saturday'=>$tabentree_saturday,
                     'tabentree_sunday'=>$tabentree_sunday
                 ]); 
 
             }
        }  
       }
       else{
        $table_existe="Il n'existe pas encore d'entrée pour cette période";
        return view('affichage', ['users' => $users, 'device_trouve'=>$device_trouve, 'table_existe'=>$table_existe]);
       }
            
       return view('affichage', ['users' => $users, 'device_trouve'=>$device_trouve]);
    }
}
