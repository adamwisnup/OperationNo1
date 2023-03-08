<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DataCaas;
use App\Models\Stages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaasController extends Controller
{
    protected $redirectTo = '/login';

    public function login(Request $request){
        $this->validate($request, [
            'nim'      => 'required|min:10|string',
			'password'  => 'required|min:8|string'
        ]);

        if(Auth::guard('datacaas')->attempt([
            'nim' => $request->nim, 
            'password' => $request->password
            ], true)){
                return redirect('home'); // disesuaikan sama nama bladenya
            }
            return redirect()->back()->with(['error' => 'NIM / Password Salah']); // disesuaikan sama nama routenye
    }

    public function logout(){
        Auth::guard('datacaas')->logout();
        return redirect('login'); // disesuaikan sama nama routnya
    }

    public function home(){
        $id = Auth::id();
        $plotactive = DataCaas::where('datacaas.id',$id)
					->leftjoin('plotactives','datacaas.id','=','plotactives.datacaas_id')
					->first();
		$caas = DataCaas::where('datacaas.id',$id)
					->leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
					->leftjoin('stages','stages.id','=','statuses.stages_id')
					->first();
		return view('home',compact('caas','plotactive')); // disesuaikan sama nama bladenya
    }

    public function caasAccount() {
        $caas = Datacaas::leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
					->leftjoin('stages','stages.id','=','statuses.stages_id')
					->orderBy('datacaas.nim', 'asc')->paginate(20);
		$stagesname = Stages::select('stagesname')->first();
		$countcaas = Datacaas::count();
		$countcaaslolos = Datacaas::leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
					->leftjoin('stages','stages.id','=','statuses.stages_id')
					->where('statuses.isPass',1)->count();
		$countcaasnotlolos = $countcaas-$countcaaslolos;
		return view('CaasAccount',compact('caas','stagesname','countcaas','countcaaslolos','countcaasnotlolos')); // disesuaikan sama nama bladenya
    }

    
}
