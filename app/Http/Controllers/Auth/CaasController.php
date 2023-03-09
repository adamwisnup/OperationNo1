<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DataCaas;
use App\Models\Stages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaasController extends Controller
{
    protected $redirectTo = '/loginCaas';

    public function login(Request $request){
        $this->validate($request, [
            'nim'      => 'required|min:10|string',
			'password'  => 'required|min:8|string'
        ]);

        if(Auth::guard('datacaas')->attempt([
            'nim' => $request->nim,
            'password' => $request->password
            ], true)){
                return redirect('dashboard'); // disesuaikan sama nama route
            }
            return redirect()->back()->with(['error' => 'NIM / Password Salah']); // disesuaikan sama nama routenye
    }

    public function logout(){
        Auth::guard('datacaas')->logout();
        return redirect('loginCaas'); // disesuaikan sama nama routnya
    }

    public function home(){
        $id = Auth::id();
        // $plotactive = DataCaas::where('datacaas.id',$id)
		// 			->leftjoin('plotactives','datacaas.id','=','plotactives.datacaas_id')
		// 			->first();
        $title = 'Dashboard';
		// $caas = DataCaas::where('datacaas.id',$id)
		// 			->leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
		// 			->leftjoin('stages','stages.id','=','statuses.stages_id')
		// 			->first();
        $datacaas = DataCaas::where('id', $id)->first();
        return view('dashboard', ['datacaas' => $datacaas, 'title' => $title]); // disesuaikan sama nama bladenya
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
    public function changepass(Request $request)
    {
        $this->validate($request, [
            'password'  => 'required|min:8|string|regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',
        ]);
        $datacaas = Admins::find(Auth::id());
        $title = 'Change Password';
        $datacaas->update([
            'name' => $datacaas->name,
            'ascod' => $datacaas->ascod,
            'password' => Hash::make($request->password),
        ]);
        Auth::guard('datacaas')->logout();
        return redirect('loginCaas', ['title' => $title]);
    }
    // biar bisa di commit

}
