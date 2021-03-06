<?php

namespace App\Http\Controllers;
use App\Concept;
use App\Contract;
use App\Measuring;
use App\Receipt;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $contracts=Contract::where('status','A')
                            ->where('total','>',0 )
                            ->select(['contrato','nombre','colonia','direccion','tarifa','sector','ruta','folio','medidor','servicio','pagos_ven','total','rfc_u','cve_dren','año','periodo','cons_promedio','direccion_fiscal','colonia_fiscal','cve_ubica','ciudad_fiscal','municipio_fiscal','estado_fiscal','cod_post_fiscal','telefono_fiscal','apellido_pat','apellido_mat','nombres'])
                            ->limit(2)
                            ->get()->toArray();
        $list_contracts=array();

        foreach ($contracts as $contract) {
            
        $receipt=Receipt::where('año',"2016")
                        ->where('periodo',"11")
                        ->where('contrato',$contract['contrato'])
                        ->select(['recibo','tot_apagar','f_vencimiento','m3_facturados'])
                        ->get()->toArray();

        
                        //dd($receipt);
        $concepts=Concept::where('año',"2016")
                         ->where('periodo',"11")
                         ->where('contrato',$contract['contrato'])
                         ->select(['concepto','importe_a','importe_v'])
                         ->get()->toArray();

        $contract['conceptos']=$concepts;

        $measuring=Measuring::where('año',"2016")
                         ->where('periodo',"11")
                         ->where('contrato',$contract['contrato'])
                         ->select(['lec_anterior','lec_actual','consumo'])
                         ->get()->toArray();
                
          
        if (isset($measuring[0])) {
             $contract = array_merge($contract, $measuring[0]);
        }
       


        $contract = array_merge($contract, $receipt[0]);


        $barcodeRN='23'.substr($contract['contrato'], -5).$contract['recibo'].Carbon::createFromFormat('d/m/Y',(string)trim($contract['f_vencimiento']))->format('Ymd').str_pad((int)$contract['tot_apagar'], 10, "0", STR_PAD_LEFT).'001';

        $barcodePA='23'.substr($contract['contrato'], -5).$contract['recibo'].Carbon::createFromFormat('d/m/Y',(string)trim($contract['f_vencimiento']))->format('Ymd').str_pad((int)$contract['tot_apagar'], 10, "0", STR_PAD_LEFT).'012';

        $contract['barcode-rn']=$barcodeRN;

        $contract['barcode-pa']=$barcodePA;

       // dd( $contract);

        array_push($list_contracts,$contract);
                    
            //dd( $contract);
            

        }

        


        return view('admin.receipts.receipt', compact('list_contracts'));
        //return view('admin.contracts.receipt', compact('list_contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
