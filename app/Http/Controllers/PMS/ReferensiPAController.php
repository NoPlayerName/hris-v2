<?php

namespace App\Http\Controllers\PMS;

use App\Data\PMS\ReferensiPAData;
use App\Enums\ManajerialLevel;
use App\Http\Controllers\Controller;
use App\Models\PMS\ReferensiPA;

class ReferensiPAController extends Controller
{
    public function index()
    {
        if (! request()->get('level')) {
            return redirect()->route('pms.referensi-pa.index', ['level' => ManajerialLevel::SeniorLeader]);
        }

        if (request()->ajax()) {
            return $this->getReferensiPA(request()->get('level'));
        }

        return view('pms.referensi-pa');
    }

    protected function getReferensiPA($level)
    {
        return ReferensiPAData::collection(ReferensiPA::with('pertimbangan')->where('manajerial_level', $level)->get())->wrap('data');
    }

    public function store(ReferensiPAData $data)
    {
        $referensiPA = ReferensiPA::create($data->toArray());
        $referensiPA->pertimbangan()->createMany($data->pertimbangan->toArray());

        return redirect()->route('pms.referensi-pa.index')->created()->withAjax();
    }

    public function update(ReferensiPA $referensi_pa, ReferensiPAData $data)
    {
        $referensi_pa->update($data->toArray());
        $referensi_pa->pertimbangan()->delete();
        $referensi_pa->pertimbangan()->createMany($data->pertimbangan->toArray());

        return redirect()->route('pms.referensi-pa.index')->ok()->withAjax();
    }

    public function destroy(ReferensiPA $referensi_pa)
    {
        $referensi_pa->delete();
        $referensi_pa->pertimbangan()->delete();

        return redirect()->route('pms.referensi-pa.index')->ok()->withAjax();
    }
}
