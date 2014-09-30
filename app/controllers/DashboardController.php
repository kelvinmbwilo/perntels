<?php

class DashboardController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('home');
	}

    public function dashboard()
    {
        return View::make('dashboard');
    }

    public function about()
    {
        return View::make('aboutUs');
    }

    public function contact()
    {
        return View::make('contact');
    }

    public function planning(){
       return View::make('PlanningAndOptimization.planning');
    }

    public function civil(){
        return View::make('civilworks.civilworks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function project($id)
    {
        $projectName="the project name";
        $projectContent="the projcet content";

        return View::make('project',compact('projectName','projectContent'));
    }

    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
