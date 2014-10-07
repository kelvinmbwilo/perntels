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

    public function env()
    {
        return View::make('enviroment');
    }
    
      public function team()
    {
        return View::make('team');
    }

    /**
     * planing and optimization starts here
     * @return mixed
     */

    public function planning(){
       return View::make('PlanningAndOptimization.planningMaster');
    }

    public function networkOptimization(){
        return View::make('PlanningAndOptimization.networkdesign');
    }

    public function transmission(){
        return View::make('PlanningAndOptimization.transmissionPlanning');
    }

    public function sitesharing(){
        return View::make('PlanningAndOptimization.sitesharing');
    }

    public function siteaudit(){
        return View::make('PlanningAndOptimization.siteaudit');
    }

    public function drivetest(){
        return View::make('PlanningAndOptimization.drivetest');
    }


    //planning and optimization ends here


    //POWER CONSTRUCTS

    public function power()
    {
        return View::make('power_constructs.power');
    }

    public function generator()
    {
        return View::make('power_constructs.generator');
    }

    public function power_line()
    {
        return View::make('power_constructs.power_line');
    }


    public function power_optimization()
    {
        return View::make('power_constructs.power_optimization');
    }
    public function site_maintainance()
    {
        return View::make('power_constructs.site_maintainance');
    }

    public function solar_power()
    {
        return View::make('power_constructs.solar_power');
    }


    //civil starts
    /**
     * @return mixed
     */
    public function civil(){
        return View::make('civilworks.civilworks');
    }

    public function access(){
        return View::make('civilworks.access');
    }

    public function civilhome(){
        return View::make('civilworks.civilhome');
    }

    public function road(){
        return View::make('civilworks.road');
    }

    public function site(){
        return View::make('civilworks.site');
    }

    public function supply(){
        return View::make('civilworks.supply');
    }

    public function tower(){
        return View::make('civilworks.tower');
    }

    //civil ends here

    //telecom starts

    public function telecoms()
    {
        return View::make('telecommunications.telecomms_intro');
    }

    public function telecoms_links()
    {
        return View::make('telecommunications.links_installations');
    }

    public function telecoms_2g()
    {
        return View::make('telecommunications.2g_3g');
    }

    public function telecoms_fiber()
    {
        return View::make('telecommunications.fiber');
    }
//telecom ends

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
