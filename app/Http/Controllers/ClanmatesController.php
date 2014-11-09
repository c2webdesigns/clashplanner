<?php namespace App\Http\Controllers;

use App\Clanmates\ClanMates;
use App\Http\Controllers\Controller;
use App\Users\Leader;
use App\Users\User;
use Illuminate\Support\Facades\Auth;

class ClanmatesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @param Leader $leader
	 * @return Response
	 */
	public function index(Leader $leader, ClanMates $clanMates)
	{
		$leader = $leader->getLeader(Auth::user()->role);

		$clanmates = $clanMates->getAllClanmates();

		return view('clanmates.index', compact('leader', 'clanmates'));
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
	public function show($ign)
	{
		$clanmate = User::where('ign', '=', $ign)->take(1)->get();
		return view('clanmates.profile', compact('clanmate'));
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
