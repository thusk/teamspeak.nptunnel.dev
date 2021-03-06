<?php

namespace NpTS\Http\Controllers\Admin;

use Illuminate\Http\Request;
use NpTS\Http\Requests;
use NpTS\Http\Controllers\Controller;
use NpTS\Domain\Admin\Repositories\Contracts\PlanRepositoryContract;
use NpTS\Domain\Admin\Requests\AdminCreatePlanRequest;

class PlanController extends Controller
{
    private $repository;
    public function __construct(PlanRepositoryContract $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = $this->repository->all();
        return view('Admin.Plan.index' , compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminCreatePlanRequest $request)
    {
        $this->repository
        ->create($request
        ->only('slots','price','name')
        );
        return redirect()->route('plan.index');
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
        $plan = $this->repository->find($id);
        return view('Admin.Plan.edit' , compact('plan'));
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
        $this->validate($request , [
            'name' => ['required','min:3','max:20'],
            'price' => ['required','numeric'],
            'slots' => ['required','int']
        ],
            [
                'slots.int' => 'Slots deve ser um numero!',
                'name.required' => 'Insira um nome!',
                'price.required' => 'Insira um preço!',
                'slots.required' => 'Insira uma quantidade de slots!',
                'price.numeric' =>  'Preço deve ser numerico!',
            ]
        );
        $this->repository->update($id , $request->only(['name','price','slots','active']));
        return redirect()->route('plan.index');
    }

    /**
     * Change status of an plan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function power($id)
    {
        $plan = $this->repository->find($id);

        if($plan && $plan->active)
        {
            $plan->active = 0;
            $plan->save();
        }
        elseif($plan && !($plan->active))
        {
            $plan->active = 1;
            $plan->save();
        }
        return redirect()->route('plan.index');
    }
}
